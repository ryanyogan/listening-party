import forms from "@tailwindcss/forms";
import colors from "tailwindcss/colors";
import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    presets: [require("./vendor/wireui/wireui/tailwind.config.js")],
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./vendor/wireui/wireui/src/*.php",
        "./vendor/wireui/wireui/ts/**/*.ts",
        "./vendor/wireui/wireui/src/WireUi/**/*.php",
        "./vendor/wireui/wireui/src/Components/**/*.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                serif: ["Aleo", "serif"],
                cursive: ["Annie Use Your Telescope", "cursive"],
            },
            colors: {
                primary: colors.emerald,
                secondary: colors.gray,
                positive: colors.green,
                negative: colors.red,
                warning: colors.amber,
                info: colors.blue,
            },
        },
    },

    plugins: [forms],
};
