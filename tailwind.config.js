require('dotenv').config();
const theme = process.env.WP_THEME;

module.exports = {
  purge: {
    content: [
      `./public/themes/${theme}/views/**/*.twig`,
      `./public/themes/${theme}/theme/**/*.twig`,
      `./public/themes/${theme}/theme/**/*.html`,
      `./public/themes/${theme}/theme/**/*.php`,
      `./public/themes/${theme}/theme/**/*.js`,
      `./public/themes/${theme}/theme/**/*.json`,
      './resources/scripts/**/*.js'
    ],
    options: {
      whitelistPatterns: [/pt-+/, /py-+/, /px-+/, /pb-+/, /pl-+/, /pr-+/]
    }
  },
  theme: {
    screens: {
      sm: '640px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
      xxl: '1440px',
      'wide': '1920px'
    },
    inset: {
      '-px': "-1px",
      '-05': '-0.25rem',
      '-1': '-0.5rem',
      '-1-2': '-0.625rem',
      '-2': '-0.75rem',
      '-3': '-0.875rem',
      '-4': '-1rem',
      '-4-5': '-1.25rem',
      '-5': '-1.5rem',
      '-6': '-2rem',
      '-7': '-2.5rem',
      '-8': '-3rem',
      '-9': '-3.5rem',
      '-10': '-4rem',
      '-11': '-4.5rem',
      '-12': '-5rem',
      '-13': '-5.5rem',
      '-14': '-6rem',
      '-15': '-6.5rem',
      '-16': '-7rem',
      '-17': '-7.5rem',
      '-18': '-8rem',
      '-19': '-8.5rem',
      '-20': '-9rem',
      '-21': '-9.5rem',
      '-22': '-10rem',
      '-23': '-10.5rem',
      '-24': '-11rem',
      '-25': '-11.5rem',
      '-26': '-12rem',
      '-27': '-12.5rem',
      '-400': '-25rem',
      'px': "1px",
      '0': '0',
      '05': '0.25rem',
      '1': '0.5rem',
      '1-2': '0.625rem',
      '2': '0.75rem',
      '3': '0.875rem',
      '4': '1rem',
      '4-5': '1.25rem',
      '5': '1.5rem',
      '6': '2rem',
      '7': '2.5rem',
      '8': '3rem',
      '9': '3.5rem',
      '10': '4rem',
      '11': '4.5rem',
      '12': '5rem',
      '13': '5.5rem',
      '14': '6rem',
      '15': '6.5rem',
      '16': '7rem',
      '17': '7.5rem',
      '18': '8rem',
      '19': '8.5rem',
      '20': '9rem',
      '21': '9.5rem',
      '22': '10rem',
      '23': '10.5rem',
      '24': '11rem',
      '25': '11.5rem',
      '26': '12rem',
      '27': '12.5rem',
      '50': '50%',
      '-50': '-50%'
    },
    fontSize: {
      'xs': '.75rem',
      'sm': '.875rem',
      'base': '1rem',
      'lg': '1.125rem',
      'xl': '1.25rem',
      '2xl': '1.5rem',
      '3xl': '2rem',
      '4xl': '2.5rem',
      '5xl': '3rem',
      '6xl': '3.5rem',
      '7xl': '4rem',
      '8xl': '4.5rem',
      '9xl': '5rem',
      '10xl': '5.5rem'
    },
    colors: {
      // default means there's no modifier, so .bg-purple-default is .bg-purple
      transparent: "transparent",
      white: '#FFFFFF',
      black: '#000000',
      'dark-blue': '#071126',
      'orange': '#FF6900',
      'yellow': '#F6BE00',
      'green': '#979B0B',
      'green-alt': '#999D0E',
      'pink': '#DA2C81',
      'brown': '#5B3217',
      'brown-alt': '#795133',
      'grey': '#4D4D4D',
      'beige': '#E6B883',
      'orange-light': 'rgba(255, 105, 0, 0.1)',
      'accent-blue': 'rgb(27, 53, 107)'
    },
    letterSpacing: {
      tightest: '-0.075em',
      tighter: '-0.05em',
      tight: '-0.025em',
      wide: '0.025em',
      wider: '0.05em',
      widest: '.1em',
      px: '1px'
    },
    boxShadow: {
      default: '0 2px 24px 0 rgba(0, 0, 0, 0.15)'
    },
    spacing: {
      'px': "1px",
      '0': '0',
      '05': '0.25rem',
      '1': '0.5rem',
      '1-2': '0.625rem',
      '2': '0.75rem',
      '3': '0.875rem',
      '4': '1rem',
      '4-5': '1.25rem',
      '5': '1.5rem',
      '6': '2rem',
      '7': '2.5rem',
      '8': '3rem',
      '9': '3.5rem',
      '10': '4rem',
      '11': '4.5rem',
      '12': '5rem',
      '13': '5.5rem',
      '14': '6rem',
      '15': '6.5rem',
      '16': '7rem',
      '17': '7.5rem',
      '18': '8rem',
      '19': '8.5rem',
      '20': '9rem',
      '21': '9.5rem',
      '22': '10rem',
      '23': '10.5rem',
      '24': '11rem',
      '25': '11.5rem',
      '26': '12rem',
      '27': '12.5rem',
    },
    extend: {
      translate: {
        '-75': '-75%',
        '-66': '-66%',
      },
      scale: {
        '-1': '-1'
      },
      container: {
        center: true,
        padding: {
          default: '1rem'
        }
      }
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/custom-forms')
  ]
};
