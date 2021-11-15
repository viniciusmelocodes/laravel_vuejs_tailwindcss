module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        'bg-semi-75': 'rgba(0, 0, 0, 0.75)'
      }
    }
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
