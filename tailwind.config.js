const daisyui = require("daisyui");

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.php",           // scans all PHP files in your project
    "./src/**/*.{js,ts,jsx,tsx}" // optional, if you have JS/React
  ],
  theme: {
    extend: {
      fontFamily: {
        "lexend-exa": ["Lexend Exa", "sans-serif"],
        "lexend-giga": ["Lexend Giga", "sans-serif"],
      },
      colors: {
        red: "#E50914",
        gray: "#B3B3B3",
        dark: "#141414",
        highlight: "#221F1F",
        bodyBackground: "#C3DDFD",
      },
    },
  },
  plugins: [daisyui],
};
