let mix = require('laravel-mix');
let execSync = require('child_process').execSync;

mix.js('Modules/Product/Resources/assets/admin/js/main.js', 'Modules/Product/Assets/admin/js/product.js')
    .sass('Modules/Product/Resources/assets/admin/sass/main.scss', 'Modules/Product/Assets/admin/css/product.css')
    .then(() => {
        execSync('npm run rtlcss Modules/Product/Assets/admin/css/product.css Modules/Product/Assets/admin/css/product.rtl.css');
    });
