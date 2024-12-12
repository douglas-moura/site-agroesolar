/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./src/**/*.{html,js,ts,tsx,php}"],
    theme: {
        extend: {
            fontFamily: {
                nunito: ['Nunito', 'sans-serif']
            },
            backgroundImage: {
                'img-banner': "url('../img/agro-e-solar-banner-paineis-solares-3.jpg')"
            },
            animation: {
                'fade-in-right': 'fadeInRight 2s ease-in-out',
            },
            keyframes: {
                fadeInRight: {
                    '0%': {
                        transform: 'translateX(100%)',
                        opacity: '0'
                    },
                    '50%': {
                        opacity: '0'
                    },
                    '100%': {
                        transform: 'translateX(0%)',
                        opacity: '1'
                    },
                }
            }
        },
        colors: {
            branco: '#fff',
            preto: '#252525',
            cinza: '#6e6e6e',
            'cinza-claro': '#a5a5a5',
            'cinza-claro-2': '#f9f9f9',
            'azul': '#0045A0',
            'verde': '#B3DE00',
            'verde-claro': '#faffe3'
        }
    },
    plugins: [],
};
