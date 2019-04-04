let mix = require('laravel-mix');
let execSync = require('child_process').execSync;

mix.js('Modules/Option/Resources/assets/admin/js/main.js', 'Modules/Option/Assets/admin/js/option.js')
    .sass('Modules/Option/Resources/assets/admin/sass/main.scss', 'Modules/Option/Assets/admin/css/option.css')
    .then(() => {
        execSync('npm run rtlcss Modules/Option/Assets/admin/css/option.css Modules/Option/Assets/admin/css/option.rtl.css');
    });
