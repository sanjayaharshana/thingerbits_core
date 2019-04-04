let mix = require('laravel-mix');
let execSync = require('child_process').execSync;

mix.js('Modules/Report/Resources/assets/admin/js/main.js', 'Modules/Report/Assets/admin/js/report.js')
    .sass('Modules/Report/Resources/assets/admin/scss/main.scss', 'Modules/Report/Assets/admin/css/report.css')
    .then(() => {
        execSync('npm run rtlcss Modules/Report/Assets/admin/css/report.css Modules/Report/Assets/admin/css/report.rtl.css');
    });
