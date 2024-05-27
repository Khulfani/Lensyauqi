import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './node_modules/flowbite/**/*.js'
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                roboto: ['Roboto', 'sans-serif'],
                inknutAntiqua: ['Inknut Antiqua', 'serif'],
                imFellDWPica: ['IM Fell DW Pica', 'serif'],
                nunito: ['Nunito', 'sans-serif'],
                poppins: ['Poppins', 'sans-serif'],
                inter: ['Inter', 'sans-serif']
            },
            colors: {
                aliceBlue: '#EBEFFF',
                violetBlue: '#656ED3',
                vividCerulean: '#0199EF',
                deepKoamaru: '#383866'
            },
        },
    },

    plugins: [
        forms,
        require('flowbite/plugin'),
        require('tw-bootstrap-grid-optimizer')
    ],
};
