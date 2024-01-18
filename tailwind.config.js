/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        screens: {
            sm: '480px',
            md: '768px',
            lg: '976px',
            xl: '1440px'
        },

        extend: {
            colors: {
                bodyBg: '#e6dfcf',
                lightBrown: '#d3c2b0',
                yellowish: '#cfa456',
                brownish: '#966c42',
                darkGrayish: '#625e55',
                darkBrownish: '#46352d',
                darkerBrownish: '#3c2225',
                limeButton: '#f7fee7',
            },
        },
    },
    plugins: [
        require(
            '@tailwindcss/forms',
            'tailwind-hamburgers',
            'flowbite/plugin'
        ),
    ],
}
