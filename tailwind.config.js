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
                transparent: "transparent",
                kyoo: {
                    primary: {
                        100: "#D39C9C",
                        200: "#BB6363",
                        300: "#AA4B4B",
                        400: "#8E3E3E",
                        500: "#713232",
                        600: "#552525",
                    },
                    secondary: {
                        100: "#DAD2D8",
                        200: "#C6BFC4",
                        300: "#2A2729",
                        400: "#151415",
                    },
                },
            },
        },
    },
    plugins: [require("@tailwindcss/typography"), require("flowbite/plugin")],
};
