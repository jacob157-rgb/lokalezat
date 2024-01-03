/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        fontFamily: {
            sans: ["Poppins", "sans-serif"],
        },
        extend: {
            colors: {
                primary: "#aa0225",
                secondary: "#c8c8c8",
                tertiary: "#eaeef6",
                edit: "#5b9dff",
            },
            backgroundImage: {
                'peach' : 
                'radial-gradient(at right bottom, rgb(254, 202, 202, 0.8), rgb(252, 165, 165, 0.6), rgb(254, 240, 138, 0.4))'
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
