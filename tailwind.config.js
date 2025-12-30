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
            },

            /* ===== ANIMATION ===== */
            keyframes: {
                fadeDown: {
                    '0%': {
                        opacity: '0',
                        transform: 'translateY(-30px)',
                    },
                    '100%': {
                        opacity: '1',
                        transform: 'translateY(0)',
                    },
                },
                fadeUp: {
                    '0%': {
                        opacity: '0',
                        transform: 'translateY(30px)',
                    },
                    '100%': {
                        opacity: '1',
                        transform: 'translateY(0)',
                    },
                },
            },

            animation: {
                'fade-down': 'fadeDown 0.8s ease-out forwards',
                'fade-down-delay-1': 'fadeDown 0.8s ease-out 0.2s forwards',
                'fade-down-delay-2': 'fadeDown 0.8s ease-out 0.4s forwards',
                'fade-up': 'fadeUp 0.8s ease-out forwards',
            },
        },
    },

    plugins: [forms],
};
