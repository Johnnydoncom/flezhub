const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js"
    ],
    darkMode: 'class',
    theme: {
        extend: {
            fontFamily: {
                sans: ['Muli', 'sans-serif'],
                serif: ['Montserrat', 'serif']
            },
            colors: {
                "primary": {
                    DEFAULT: "#034AA6",
                    "50": "#DCEBFE",
                    "100": "#BEDAFE",
                    "200": "#78B1FD",
                    "300": "#378CFB",
                    "400": "#0466E6",
                    "500": "#034AA6",
                    "600": "#023A82",
                    "700": "#022C64",
                    "800": "#011D41",
                    "900": "#011023"
                },
                "secondary": {
                    DEFAULT: "#024873",
                    "50": "#D7EFFE",
                    "100": "#B4E1FE",
                    "200": "#64C2FC",
                    "300": "#18A4FB",
                    "400": "#0377BF",
                    "500": "#024873",
                    "600": "#02385A",
                    "700": "#012C46",
                    "800": "#011C2D",
                    "900": "#001019"
                },
                "accent": {
                    DEFAULT: "#035AA6",
                    "50": "#DCEEFE",
                    "100": "#BEE0FE",
                    "200": "#78BFFD",
                    "300": "#37A0FB",
                    "400": "#047DE6",
                    "500": "#035AA6",
                    "600": "#024782",
                    "700": "#023664",
                    "800": "#012341",
                    "900": "#011323"
                },
                "neutral": {
                    DEFAULT: "#040404",
                    "50": "#E6E6E6",
                    "100": "#CCCCCC",
                    "200": "#9C9C9C",
                    "300": "#696969",
                    "400": "#363636",
                    "500": "#040404",
                    "600": "#030303",
                    "700": "#030303",
                    "800": "#030303",
                    "900": "#000000"
                },
                "info": {
                    DEFAULT: "#3ABFF8",
                    "50": "#EBF9FE",
                    "100": "#D8F2FE",
                    "200": "#B0E5FC",
                    "300": "#89D9FB",
                    "400": "#61CCF9",
                    "500": "#3ABFF8",
                    "600": "#08A8EC",
                    "700": "#067EB1",
                    "800": "#045476",
                    "900": "#022A3B"
                },
                "success": {
                    DEFAULT: "#36D399",
                    "50": "#EAFAF4",
                    "100": "#D5F6EA",
                    "200": "#AFEED7",
                    "300": "#86E4C2",
                    "400": "#60DCAF",
                    "500": "#36D399",
                    "600": "#26B07D",
                    "700": "#1C825D",
                    "800": "#13583F",
                    "900": "#092A1E"
                },
                "warning": {
                    DEFAULT: "#FBBD23",
                    "50": "#FFF9EB",
                    "100": "#FEF2D2",
                    "200": "#FDE4A5",
                    "300": "#FDD87D",
                    "400": "#FCCB50",
                    "500": "#FBBD23",
                    "600": "#E1A304",
                    "700": "#AA7B03",
                    "800": "#6E5002",
                    "900": "#372801"
                },
                "error": {
                    DEFAULT: "#F87272",
                    "50": "#FEF0F0",
                    "100": "#FEE2E2",
                    "200": "#FCC5C5",
                    "300": "#FBACAC",
                    "400": "#F98F8F",
                    "500": "#F87272",
                    "600": "#F52E2E",
                    "700": "#D10A0A",
                    "800": "#880707",
                    "900": "#440303"
                }
            },
            backgroundImage: {
                // 'hr': "url('/storage/hr.png')"
            }
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/line-clamp'),
        require('flowbite/plugin'),
    ],
};
