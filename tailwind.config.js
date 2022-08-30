/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/tw-elements/dist/js/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                "neon-blue": "#3cd3f0",
                "neon-pink": "#da43ff",
                "neon-orange": "#fb7728",
                "neon-purple": "#7831b6",
                "neutral-black": "#101010",
                "neutral-gray": "#202020",
            },
            fontFamily: {
                base: ["Poppins"],
            },
            fontSize: {
                small: ["10px", "10px"],
                "10xl": ["256px", "256px"],
            },
            screens: {
                sm: { min: "320px", max: "767px" },
            },
        },
    },
    plugins: [
        require("@tailwindcss/forms"),
        require("tw-elements/dist/plugin"),
    ],
};
