/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'selector',
  presets: [
    require('./vendor/yungifez/artisan-ui/tailwind.config.js'),
  ],
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.blade.md",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './vendor/yungifez/artisan-ui/resources/**/*.php'
  ],
  safelist: [
    'shiki',
    'highlight',
    'focus'
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

