/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/views/components/app.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {

    fontFamily: {
      'logo': ['Righteous', "cursive"],
      'titulo': ['Montserrat Alternates', "sans-serif"],
      'cuerpo': ['DM+Sans', "sans-serif"],
    },

    extend: {
      colors: {
        'morado': '#4C3F91',
        'active_1': '#FD6F96'
      },

      backgroundImage: {
        'blur-back': "url('/assets/img/fondo_1.jpg')",
        'blur-back_2': "url('/assets/img/fon_blu_2_o.jpg')",
        'blur-back_3': "url('/assets/img/fondo_3.jpg')",
        'planetas': "url('/assets/img/espacio.png')",
        'austro': "url('/assets/img/austronauta.png')",
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
