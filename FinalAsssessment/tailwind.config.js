const colors = require('tailwindcss/colors')
module.exports = {
  content: [],
  theme: {
    extend: {
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        black: colors.black,
        white: colors.white,
        gray: colors.gray,
        emerald: colors.emerald,
        indigo: colors.indigo,
        yellow: colors.yellow,
        purple:'#717FE0',
        lblack:'#222222',
        faded: '#B2B2B2',
        pink:'#F6F0EB',
      },
    },
  },
  plugins: [],
  purge: [
    './resources/views/**/*.blade.php',
  ],
}
