/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                "white": "#F5F7F8"
            }
        },
    },
    plugins: [],
};
