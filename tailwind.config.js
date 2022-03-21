module.exports = {
  content: ["./*.{html,js}"],
  theme: {
    extend: {
      colors: {
          'primary': '#1A1E68',
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}