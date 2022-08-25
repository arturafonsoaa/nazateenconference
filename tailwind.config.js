/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'neon-blue': '#3cd3f0',
                'neon-pink': '#da43ff',
                'neon-purple': '#7831b6',
                'neutral-black': '#101010'
            },
            fontFamily: {
                'base': ['Poppins'],
            }
        },
    },
    plugins: [],
}
