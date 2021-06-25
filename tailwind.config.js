const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                'yellow-dark': '#c0972e',
                'yellow-light': '#e5c997',
                'cian-dark': '#60909c',
                'cian-light': '#87bbc8',
                'turquoise-dark': '#122e31',
                'turquoise-light': '#365558',
                'verde-limon': '#26A70C',
            },
            boxShadow: {
                '3xl': '0 35px 60px -15px rgba(0, 0, 0, 0.3)',
                '4xl': '0 45px 70px -25px rgba(0, 0, 0, 0.4)',
                '5xl': '0 55px 80px -35px rgba(0, 0, 0, 0.5)',
                '6xl': '0 55px 80px -35px rgba(0, 0, 0, 0.8)',
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
