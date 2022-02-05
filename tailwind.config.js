const defaultTheme = require('tailwindcss/defaultTheme');
//const colors = require('tailwindcss/colors');

module.exports = {
    content: [
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

            // colors: {
            //     transparent: 'transparent',
            //     current: 'currentColor',
            //     //amber: colors.amber,
            //     black: colors.black,
            //     blue: colors.blue,
            //     cyan: colors.cyan,
            //     emerald: colors.emerald,
            //     fuchsia: colors.fuchsia,
            //     gray: colors.gray,
            //     green: colors.green,
            //     indigo: colors.indigo,
            //     lime: colors.lime,
            //     orange: colors.orange,
            //     pink: colors.pink,
            //     purple: colors.purple,
            //     red: colors.red,
            //     rose: colors.rose,
            //     sky: colors.sky,//warn - As of Tailwind CSS v2.2, `lightBlue` has been renamed to `sky`.
            //     teal: colors.teal,
            //     violet: colors.violet,
            //     yellow: colors.amber,
            //     white: colors.white,
            // },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],

    // Mode jit (Just-in-Time engine) esta presente siempre en tailwind V3, asi se carga todas las clases css
    // safelist: [
    //     {
    //       pattern: /.*/,
    //       variants: [
    //         "first",
    //         "last",
    //         "odd",
    //         "even",
    //         "visited",
    //         "checked",
    //         "empty",
    //         "read-only",
    //         "group-hover",
    //         "group-focus",
    //         "focus-within",
    //         "hover",
    //         "focus",
    //         "focus-visible",
    //         "active",
    //         "disabled",
    //       ],
    //     },
    //   ],
};
