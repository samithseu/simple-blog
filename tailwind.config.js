import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            keyframes: {
                "show-message": {
                    "0%,100%": {
                        translate: "-50% -150%",
                    },
                    "15%": {
                        translate: "-50% 0",
                    },
                    "85%": {
                        translate: "-50% 0",
                    },
                },
            },
            animation: {
                message: "show-message 3.5s ease-out",
            },
        },
    },
    plugins: [],
};
