/** @type {import('tailwindcss').Config} */
export default {
  enabled: process.env.WEBPACK_DEV_SERVER === 'true' && process.argv.join(" ").indexOf("build") !== -1,
  content: [
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./resources/views/admin/**/*.blade.php",
    "./resources/views/layouts/**/*.blade.php",
    "./resources/views/public/**/*.blade.php"
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

