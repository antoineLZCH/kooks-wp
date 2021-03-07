<?php
/**
 * Timber starter-theme
 * https://github.com/timber/starter-theme
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */

/**
 * If you are installing Timber as a Composer dependency in your theme, you'll need this block
 * to load your dependencies and initialize Timber. If you are using Timber via the WordPress.org
 * plug-in, you can safely delete this block.
 */
$composer_autoload = dirname(__DIR__) . '/vendor/autoload.php';
if (file_exists($composer_autoload)) {
    require_once $composer_autoload;
    $timber = new Timber\Timber();
}

require template_path('includes/functions/utils.php');
require template_path('includes/functions/add_theme_options.php');
require template_path('includes/functions/register_acf_blocks.php');


/**
 * This ensures that Timber is loaded and available as a PHP class.
 * If not, it gives an error message to help direct developers on where to activate
 */
if (!class_exists('Timber')) {

    add_action(
        'admin_notices',
        function () {
            echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' . esc_url(admin_url('plugins.php#timber')) . '">' . esc_url(admin_url('plugins.php')) . '</a></p></div>';
        }
    );

    add_filter(
        'template_include',
        function ($template) {
            return dirname(get_stylesheet_directory()) . '/static/no-timber.html';
        }
    );

    return;
}

/**
 * Sets the directories (inside your theme) to find .twig files
 */
Timber::$dirname = ['../views'];

/**
 * By default, Timber does NOT autoescape values. Want to enable Twig's autoescape?
 * No prob! Just set this value to true
 */
Timber::$autoescape = false;


/**
 * We're going to configure our theme inside of a subclass of Timber\Site
 * You can move this to its own file and include here via php's include("MySite.php")
 */
class StarterSite extends Timber\Site
{
    /** Add timber support. */
    public function __construct()
    {
        add_action('after_setup_theme', [$this, 'theme_supports']);
        add_filter('timber/context', [$this, 'add_to_context']);
        add_filter('timber/twig', [$this, 'add_to_twig']);
        add_action('init', [$this, 'register_post_types']);
        add_action('init', [$this, 'register_taxonomies']);
        parent::__construct();
    }

    /** This is where you can register custom post types. */
    public function register_post_types()
    {

    }

    /** This is where you can register custom taxonomies. */
    public function register_taxonomies()
    {

    }

    /** This is where you add some context
     *
     * @param string $context context['this'] Being the Twig's {{ this }}.
     */
    public function add_to_context(array $context)
    {
        $context['main_menu'] = new Timber\Menu('primary-navigation');
        $context['footer_menu'] = new Timber\Menu('footer-menu');
        $context['site'] = $this;
        if (function_exists('get_fields')) {
            $context['options'] = get_fields('options');
        }

        return $context;
    }

    public function theme_supports()
    {
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            [
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            ]
        );

        /*
         * Enable support for Post Formats.
         *
         * See: https://codex.wordpress.org/Post_Formats
         */
        add_theme_support(
            'post-formats',
            [
                'aside',
                'image',
                'video',
                'quote',
                'link',
                'gallery',
                'audio',
            ]
        );

        add_theme_support('menus');

        add_action('wp_enqueue_scripts', function () {
            wp_enqueue_style('theme-asset', get_template_directory_uri() . '/assets/styles/app.css');
            wp_register_script('theme-asset', get_template_directory_uri() . '/assets/scripts/app.js', ['jquery'], '', true);
            wp_enqueue_script('theme-asset');
            wp_deregister_style('wp-pagenavi');

            wp_enqueue_style('poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;500;600;900&display=swap');
        }, 20);

        register_nav_menus([
            'primary-navigation' => __('Menu Principal', 'kooks'),
            'footer-navigation' => __('Footer', 'kooks'),
        ]);

        add_filter('jpeg_quality', function () {
            return 100;
        }, 10, 2);
    }

    /** This is where you can add your own functions to twig.
     *
     * @param string $twig get extension.
     */
    public function add_to_twig(\Twig\Environment $twig)
    {
        $twig->addExtension(new Twig\Extension\StringLoaderExtension());
        $twig->addFunction(new Timber\Twig_Function('trim_words', 'wp_trim_words'));
        $twig->addFunction(new Timber\Twig_Function('dd', 'dd'));
        $twig->addFunction(new Timber\Twig_Function('asset', 'asset'));
        $twig->addFunction(new Timber\Twig_Function('dump', 'dump'));
        $twig->addFunction(new Timber\Twig_Function('is_admin', 'is_admin'));
        $twig->addFunction(new Timber\Twig_Function('jsonToProp', 'jsonToProp'));
        $twig->addFunction(new Timber\Twig_Function('do_shortcode', 'do_shortcode'));
        $twig->addFunction(new Timber\Twig_Function('slug', 'slug'));
        $twig->addFunction(new Timber\Twig_Function('body_scripts', 'body_scripts'));

        return $twig;
    }
}

add_action('admin_head', 'editor_full_width_gutenberg');

function editor_full_width_gutenberg()
{
    echo '<style>
    body.gutenberg-editor-page .editor-post-title__block, body.gutenberg-editor-page .editor-default-block-appender, body.gutenberg-editor-page .editor-block-list__block {
		max-width: none !important;
	}
    .block-editor__container .wp-block {
        max-width: none !important;
    }
    /*code editor*/
    .edit-post-text-editor__body {
    	max-width: none !important;
    	margin-left: 2%;
    	margin-right: 2%;
    }
    .editor-styles-wrapper h1, .editor-styles-wrapper h2, .editor-styles-wrapper h3, .editor-styles-wrapper h4, .editor-styles-wrapper h5, .editor-styles-wrapper h6 {
        font-size: inherit !important;
    }

    .block-editor__container .wp-block img {
        border: none !important;
    }
  </style>';
}

function site_hide_updates_allowed_users()
{
    $allowed_users = ['antoinelzch'];

    return $allowed_users;
}

add_filter('hide_updates_allowed_users', 'site_hide_updates_allowed_users');

new StarterSite();
