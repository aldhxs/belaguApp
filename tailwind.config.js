/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/Views/*.php",
    "./app/Views/**/*.php",
    "./app/Views/**/**/*.php",
    "./app/Views/**/**/**/*.php"
  ],
  theme: {
    extend: {
      colors: {
        secondColor: '#25467B',
        firstColor: '#142A4E',
        thirdColor: '#56BAE3',
        comColor: '#264173',
        bgColor: '#1d345d',
        bgColor2: '#122548',
      },
      height: {
        '128': '33rem',
      }
    },
    backgroundImage: {
      'gambarLogin': "url('/img/bg.JPG')",
    },
  },
  plugins: [
    require('daisyui'),
  ],
}
