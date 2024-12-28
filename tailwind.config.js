import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                PBlue: '#606c84',
                POrange: '#7a3b35',
                PLOrange: '#fa9b7b',
                PCream: '#F9EEE2',
                PDBlue: '#182F53',

                // Campero
                COrange: '#f79122' ,
                CGreen: '#cdca4e' ,
                CNude: '#fff3dc' ,
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
