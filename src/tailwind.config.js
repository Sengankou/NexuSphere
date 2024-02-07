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
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                zenKurenaido: ['Zen Kurenaido', 'sans-serif'],
                ralewayItalic: ['Raleway', 'sans-serif'],
                cormorant: ['CormorantGaramond', 'serif'],
                eczar: ['Eczar', 'serif'],
            },
        },
    },

    plugins: [forms],
};
