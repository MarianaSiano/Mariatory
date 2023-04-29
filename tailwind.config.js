/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')

module.exports = {
  content: ['./app/**/*.html'],
  theme: {
    colors:{
      'roxo-claro-1':'#E0AAFF',
      'roxo-claro-2':'#C77DFF',
      'roxo-medio-1':'#9D4EDD',
      'roxo-medio-2': '#7B2CBF',
      'roxo-escuro-1':'#5A189A',
      'roxo-escuro-2':'#3C096C',
      'azul-escuro-1':'#240046',
      'azul-escuro-2':'#10002B',
      transparent: 'transparent',
      current: 'currentColor',
      black: colors.black,
      white: colors.white,
      gray: colors.gray,
      emerald: colors.emerald,
      indigo: colors.indigo,
      yellow: colors.yellow,
    },
    screens:{
      'smartphone': {'max': '100px'},
      'tablet': {'min': '100px', 'max' : '500px'},
      'desktop': {'min':'200px'},
    },
    extend: {
      backgroundImage: {
        'lupa':"url('/public/assets/lupa.png')"
      },
    },
  },
  plugins: [],
}

