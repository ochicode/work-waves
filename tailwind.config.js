/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            colors: {
                white: "#F5F7F8",
                "dodger-blue": {
                    50: "#eff9ff",
                    100: "#dcf1fd",
                    200: "#c0e8fd",
                    300: "#95dbfb",
                    400: "#63c5f7",
                    500: "#3faaf2",
                    600: "#3393e8",
                    700: "#2177d4",
                    800: "#2160ac",
                    900: "#205288",
                    950: "#183353",
                },
            },
            fontFamily: {
                "hanken-grotesk": ["Hanken Grotesk", "sans-serif"],
            },
            fontSize: {
                "2xs": ".625rem", //10px
            },
        },
    },
    plugins: [],
};
