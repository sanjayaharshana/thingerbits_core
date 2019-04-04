let mix = require('laravel-mix');
let execSync = require('child_process').execSync;

mix.js('Modules/Tax/Resources/assets/admin/js/main.js', 'Modules/Tax/Assets/admin/js/tax.js')
    .sass('Modules/Tax/Resources/assets/admin/sass/main.scss', 'Modules/Tax/Assets/admin/css/tax.css')
    .then(() => {
        execSync('npm run rtlcss Modules/Tax/Assets/admin/css/tax.css Modules/Tax/Assets/admin/css/tax.rtl.css');
    });
