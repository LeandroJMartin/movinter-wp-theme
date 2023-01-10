/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./**/*.php'],
  theme: {
    extend: {
      colors: {
        'blue': '#4518ae',
        'violet': '#ac3de2',
        'gray': '#8c8c8c'
      }
    },
    fontFamily: {
      'sans': ['Open Sans']
    },
    container: {
      center: true,
    }
  },
  plugins: [],
}
