/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {

    fontFamily: {
      'logo': ['Righteous', "cursive"],
      'titulo': ['Montserrat Alternates', "sans-serif"],
      'titulo_2': ['Paytone One', 'sans-serif'],
      'cuerpo': ['DM+Sans', "sans-serif"],
    },

    extend: {
      colors: {
        'morado': '#4C3F91',
        'active_1': '#FD6F96'
      },

      backgroundImage: {
        'blur-back': "url('../images/fondo_1.jpg')",
        'blur-back_2': "url('/img/fon_blu_2_o.jpg')",
        'blur-back_3': "url('public/assets/img/fondo_3.jpg')",
        'rosa_back': "url('public/assets/img/rosa.png')",
        'planetas': "url('../images/espacio.png')",
        'austro': "url('../images/austronauta.png')",
      },
      width: {
        '100': '28rem',
        '102': '29rem',
        '4/5': '80%',
        '9/10': '90%',
      }
    },
  },
  plugins: [],
}
