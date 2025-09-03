module.exports = {
  content: [
    "./**/*.html", // or your Blade/PHP files
    "./resources/**/*.blade.php",
  ],
  safelist: [
    'animate-bubble-1',
    'animate-bubble-2',
    'animate-bubble-3'
  ],
  theme: {
    extend: {
      // optional: you can also register custom animations here
    }
  },
  plugins: [],
}
