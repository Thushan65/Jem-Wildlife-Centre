/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["**/*.{html,js,php}"],
  theme: {
    fontSize: {
      xs: ['12px', '16px'],
      sm: ['14px', '20px'],
      base: ['16px', '19.5px'],
      lg: ['18px', '21.94px'],
      xl: ['20px', '24.38px'],
      '2xl': ['24px', '29.26px'],
      '3xl': ['28px', '50px'],
      '4xl': ['48px', '58px'],
      '8xl': ['96px', '106px']
    },
    extend: {
      fontFamily: {
        palanquin: ['Times New Roman'],
        montserrat: ['Montserrat', 'sans-serif'],
      },
      colors: {
        'primary': "#ECEEFF",
        "coral-red": "#FF6452",
        "slate-gray": "#6D6D6D",
        "pale-blue": "#F5F6FF",
        "white-400": "rgba(255, 255, 255, 0.80)",
        "green-lime":"#73c25b",
        "blue-lime":"#72d0e8",
        "yellow-bright":"#cedb12",
        "blue-bright":"#3361de"
      },
      boxShadow: {
        '3xl': '0 10px 40px rgba(0, 0, 0, 0.1)'
      },
      backgroundImage: {
        'Back1': "url('images/homebg1.webp')",
        'Back2': "url('images/homebg2.jpg')",
        'Back3': "url('images/homebg3.png')",
        'Back4': "url('images/homebg4.png')",
      },
      screens: {
        "wide": "1440px"
      }
    },
  },
  plugins: [],
}

