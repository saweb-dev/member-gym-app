/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./app/Livewire/**/*.php",
  ],
  darkMode: "class",
  theme: { extend: {
    colors: {
      primary : "#C3EA57",
      primary_ligth : "#5a6e00",
      dark_color: "#0f0f0f",
      gris_color: "#b8bbb9",
    }
  } },
  plugins: [],
}

