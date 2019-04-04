<div class="m-b-15">
    @include('media::admin.image_picker.multiple', [
        'title' => trans('storefront::storefront.form.brands'),
        'inputName' => 'storefront_brands[]',
        'files' => $brands,
    ])
</div>
