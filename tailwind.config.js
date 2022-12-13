const colors = require('tailwindcss/colors')
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'c-primary': '#06283D',
        'c-secondary': '#47B5FF',
        'c-gray': '#D9D9D9'
      }
    }
  },
  plugins: [],
}
