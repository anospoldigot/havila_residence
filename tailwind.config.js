module.exports = {
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}",
    "./node_modules/flowbite/**/*.js"
  ],
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