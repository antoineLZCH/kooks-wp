# Wordplate OZ& Boilerplate

Boilerplate made with Wordplate for OZ& Web Agency.

## Updates 

### 03/03/2020
- add_menu_list_items_class : Add classes on list items on wp_nav_menu() list items.
- Updated NPM dependencies
- Updated Composer dependencies

### 10/02/2020
- Remove FontAwesome (added as CDN)
- Remove Montserrat (added as CDN)
- Remove Themify (never used)
- Remove purgecss (never used)
- Added WPML Plugin
- Added TailwindCSS (with tailwind.config.js)
- Updated NPM dependencies
- Updated Composer dependencies

## Basic Install

```sh
$ composer install
$ npm install
```

Don't forget to rename ___ RENAMETHISONE ___ with the name of your theme.

## .env configuration

- WP_THEME = Fill with the name of the theme (usefull with Browsersync aswell)
- WP_PREFIX = Don't forget to use the same prefix in dev env and in production :)
- BROWSERSYNC_DOMAIN = Fill with your Valet/Laragon domain (ex : mysite.test)

## Install WP Migrate DB PRO

To install WP Migrate DB Pro, you need to add an ```auth.json``` file near composer.json with these credentials :

```sh
{
    "http-basic": {
        "composer.deliciousbrains.com": {
            "username": "{COMPOSER_API_USERNAME}",
            "password": "{COMPOSER_API_PASSWORD}"
        }
    }
}
```

## Wordplate Documentation

Visit the [official documentation](https://wordplate.github.io/docs/introduction) page if you want to dive right in and start building WordPress applications with WordPlate. The documentation is thorough, complete, and makes it a breeze to get started learning WordPlate.

## License

Thanks to [Vincent Klaiber](https://vinkla.com) for his work on Wordplate project.

[MIT](LICENSE) © [Vincent Klaiber](https://vinkla.com)
