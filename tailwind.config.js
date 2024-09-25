/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        bgpink:'#E01D95',
        textpink: '#F2B9EC',
        white:'#ffffff',
      }
    },
  },
  plugins: [],
}
