/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./public/**/*.blade.php",
    "./public/**/*.js",
    "./public/**/*.vue",
  ],
  theme: {
    container: {
      center: true,
    },
    extend: {
      colors: {
        tt: "#1791C8",
        ttBg: "#FDFDFD"
      },
      fontFamily: {
        sans: ["Poppins", "Arial", "sans-serif"],
      },
      container: {
        screens: {
          cds: "1400px"
        }
      },
    },
  },
  plugins: [],
}
