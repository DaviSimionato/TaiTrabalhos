/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./public/**/*.blade.php",
    "./public/**/*.js",
    "./public/**/*.vue",
    "./public/**/*.css",
  ],
  theme: {
    container: {
      center: true,
    },
    extend: {
      colors: {
        tt: "#1791C8",
        ttBg: "#FDFDFD",
        // ds: "#E8772E",
        // dsLight: "#EB8442",
        // dsBlue: "#0079E9",
        // dsText: "#42464D",
        // dsTextLight: "#7F858D",
      },
      fontFamily: {
        sans: ["Poppins", "Arial", "sans-serif"],
      },
      container: {
        screens: {
          cds: "1400px",
       }
      },
    },
  },
  plugins: [],
}
