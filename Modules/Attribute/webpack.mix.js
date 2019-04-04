let mix = require('laravel-mix');
let execSync = require('child_process').execSync;

mix.js('Modules/Attribute/Resources/assets/admin/js/main.js', 'Modules/Attribute/Assets/admin/js/attribute.js')
    .sass('Modules/Attribute/Resources/assets/admin/sass/main.scss', 'Modules/Attribute/Assets/admin/css/attribute.css')
    .then(() => {
        execSync('npm run rtlcss Modules/Attribute/Assets/admin/css/attribute.css Modules/Attribute/Assets/admin/css/attribute.rtl.css');
    });
