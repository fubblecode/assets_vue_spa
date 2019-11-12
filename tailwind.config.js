// tailwind.config.js
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    theme: {
        colors:{
            blue: '#1747b0',
        
        extend: {
            fontFamily: {
                sans: [
                    'Open Sans',
                    ...defaultTheme.fontFamily.sans
                ]
            }
        }
    }
    },
    variants: {},
    plugins: []
};
