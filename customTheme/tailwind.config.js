import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{php,html,js}", "./template-parts/*.{php,html,js}", "./includes/*.{php,html,js}"],
  theme: {
    extend: {
      fontFamily: {
        orbitron: ['"Orbitron"', ...defaultTheme.fontFamily.sans]
      }
    },
  },
  plugins: [],
}

