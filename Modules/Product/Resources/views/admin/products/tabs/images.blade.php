@include('media::admin.image_picker.single', [
    'title' => trans('product::products.form.base_image'),
    'inputName' => 'files[base_image]',
    'file' => $product->baseImage,
])

<div class="media-picker-divider"></div>

@include('media::admin.image_picker.multiple', [
    'title' => trans('product::products.form.additional_images'),
    'inputName' => 'files[additional_images][]',
    'files' => $product->additionalImages,
])
