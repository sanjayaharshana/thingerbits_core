@include('media::admin.image_picker.single', [
    'title' => trans('storefront::storefront.form.favicon'),
    'inputName' => 'storefront_favicon',
    'file' => $favicon,
])

<div class="media-picker-divider"></div>

@include('media::admin.image_picker.single', [
    'title' => trans('storefront::storefront.form.header_logo'),
    'inputName' => 'storefront_header_logo',
    'file' => $headerLogo,
])

<div class="media-picker-divider"></div>

@include('media::admin.image_picker.single', [
    'title' => trans('storefront::storefront.form.footer_logo'),
    'inputName' => 'storefront_footer_logo',
    'file' => $footerLogo,
])
