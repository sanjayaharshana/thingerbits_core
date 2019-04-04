let mix = require('laravel-mix');
let execSync = require('child_process').execSync;

mix.js('Modules/Admin/Resources/assets/js/main.js', 'Modules/Admin/Assets/js/admin.js')
    .js('Modules/Admin/Resources/assets/js/dashboard.js', 'Modules/Admin/Assets/js/dashboard.js')
    .sass('Modules/Admin/Resources/assets/sass/app.scss', 'Modules/Admin/Assets/css/app.css')
    .sass('Modules/Admin/Resources/assets/sass/main.scss', 'Modules/Admin/Assets/css/admin.css')
    .sass('Modules/Admin/Resources/assets/sass/dashboard.scss', 'Modules/Admin/Assets/css/dashboard.css')
    .copy('Modules/Admin/Resources/assets/images', 'Modules/Admin/Assets/images')
    .copy('Modules/Admin/node_modules/font-awesome/fonts', 'Modules/Admin/Assets/fonts')
    .copy('Modules/Admin/node_modules/bootstrap/dist/fonts', 'Modules/Admin/Assets/fonts')
    .copy('Modules/Admin/node_modules/tinymce/themes', 'Modules/Admin/Assets/js/wysiwyg/themes')
    .copy('Modules/Admin/node_modules/tinymce/skins', 'Modules/Admin/Assets/js/wysiwyg/skins');

let tinymcePlugins = [
    'lists',
    'link',
    'table',
    'paste',
    'autosave',
    'autolink',
    'wordcount',
    'code',
];

tinymcePlugins.forEach(plugin => {
    mix.copy(`Modules/Admin/node_modules/tinymce/plugins/${plugin}/plugin.js`, `Modules/Admin/Assets/js/wysiwyg/plugins/${plugin}`);
});

mix.then(() => {
    execSync('npm run rtlcss Modules/Admin/Assets/css/app.css Modules/Admin/Assets/css/app.rtl.css');
    execSync('npm run rtlcss Modules/Admin/Assets/css/admin.css Modules/Admin/Assets/css/admin.rtl.css');
    execSync('npm run rtlcss Modules/Admin/Assets/css/dashboard.css Modules/Admin/Assets/css/dashboard.rtl.css');
});
