/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
  ],
  theme: {

    fontFamily: {
      'logo': ['Righteous', "cursive"],
      'titulo': ['Montserrat Alternates', "sans-serif"],
      'titulo_2': ['Paytone One', 'sans-serif'],
      'cuerpo': ['Urbanist', "sans-serif"],
    },

    screens: {
      'tablet_3': { 'max': '921px' },
      // => @media (min-width: 640px) { ... }
      'tablet_5': { 'max': '1082px' },
      // => @media (min-width: 640px) { ... }

      'laptop': { 'max': '1280px' },
      'laptop_2': { 'max': '1380px' },
      // => @media (min-width: 1024px) { ... }

      'desktop': { 'max': '1600px' },
      // => @media (min-width: 1280px) { ... }
      'desktop_2': { 'max': '1500px' },

      'sm': '640px',
      // => @media (min-width: 640px) { ... }

      'md': '768px',
      // => @media (min-width: 768px) { ... }

      'lg': '1024px',
      // => @media (min-width: 1024px) { ... }

      'xl': '1280px',
      // => @media (min-width: 1280px) { ... }

      '2xl': '1536px',
      // => @media (min-width: 1536px) { ... }
    },

    extend: {
      colors: {
        'morado': '#4C3F91',
        'active_1': '#FF5677',
        'morado_1': '#695ECC'
      },

      backgroundImage: {
        'blur-back': "url('../images/fondo_1.jpg')",
        'blur-back_2': "url('/img/fondo_b2.jpg')",
        'blur-back_3': "url('public/assets/img/fondo_3.jpg')",
        'rosa_back': "url('public/assets/img/rosa.png')",
        'planetas': "url('../images/espacio.png')",
        'austro': "url('../images/austronauta.png')",
      },
      width: {
        '100': '28rem',
        '102': '29rem',
        '6/7': '85%',
        '9/10': '90%',

      },
      height: {
        '84': '21rem',
        '9/10': '91.5%',
      }
    },
  },
  plugins: [],
}
