/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}", "./index.php"],
  theme: {
    extend: {

      fontFamily: {
        "dm-sans": "font-family: 'DM Sans', sans-serif", 
      },

      colors:{
        "green-color": "#27ae60",
        "gray-color": "#828282",
        "card-color": "#212121",
        "color-background": "#171717",
        "menu-color": "#172554"
      },

      backgroundImage: {
        "open-menu": "url('../../img/menu.svg')",
        "close-menu": "url('../../img/close.svg')"
      }

    },
  },
  plugins: [],
}
