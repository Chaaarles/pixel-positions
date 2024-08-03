/** @type {import('tailwindcss').Config} */
export default {
  content: [
      './resources/views/**/*.blade.php',
  ],
  theme: {
    extend: {
        colors: {
            'black': '#060606'
        }
    },
  },
  plugins: [],
}

