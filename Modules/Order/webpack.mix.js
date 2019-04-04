let mix = require('laravel-mix');
let execSync = require('child_process').execSync;

mix.js('Modules/Order/Resources/assets/admin/js/main.js', 'Modules/Order/Assets/admin/js/order.js')
    .sass('Modules/Order/Resources/assets/admin/sass/main.scss', 'Modules/Order/Assets/admin/css/order.css')
    .sass('Modules/Order/Resources/assets/admin/sass/print.scss', 'Modules/Order/Assets/admin/css/print.css')
    .then(() => {
        execSync('npm run rtlcss Modules/Order/Assets/admin/css/order.css Modules/Order/Assets/admin/css/order.rtl.css');
        execSync('npm run rtlcss Modules/Order/Assets/admin/css/print.css Modules/Order/Assets/admin/css/print.rtl.css');
    });
