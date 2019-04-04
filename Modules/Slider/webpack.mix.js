let mix = require('laravel-mix');
let execSync = require('child_process').execSync;

mix.js('Modules/Slider/Resources/assets/admin/js/main.js', 'Modules/Slider/Assets/admin/js/slider.js')
    .sass('Modules/Slider/Resources/assets/admin/sass/main.scss', 'Modules/Slider/Assets/admin/css/slider.css')
    .then(() => {
        execSync('npm run rtlcss Modules/Slider/Assets/admin/css/slider.css Modules/Slider/Assets/admin/css/slider.rtl.css');
    });
