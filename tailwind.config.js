module.exports = {
    darkMode: "class",
    content: [
        "./resources/views/**/*.blade.php",
        "./resources/views/*.blade.php",
        "./resources/css/**/*.css",
    ],
    // theme: {
    //     extend: {},
    // },
    theme: {
        extend: {
            keyframes: {
                wave: {
                    to: {
                        "margin-left": "-51%",
                    },
                },
            },
        },
        animation: {
            wave: "wave 1.5s ease-in-out infinite",
        },
    },
    variants: {},
    // plugins: [
    //     require('@tailwindcss/ui'),
    // ],
    content: [
        "./node_modules/flowbite/**/*.js",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
};
