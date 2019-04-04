<div class="row">
    <div class="col-md-8">
        {{ Form::checkbox('storefront_banner_section_1_enabled', trans('storefront::attributes.section_status'), trans('storefront::storefront.form.enable_banner_section_1'), $errors, $settings) }}
    </div>
</div>

<div class="accordion-box-content">
    <div class="tab-content clearfix">
        <div class="banner-image-wrapper">
            @include('admin.storefront.tabs.partials.single_banner', [
                'label' => trans("storefront::storefront.form.banner_1"),
                'name' => 'storefront_banner_section_1_banner_1',
                'banner' => $banners[1],
            ])

            @include('admin.storefront.tabs.partials.single_banner', [
                'label' => trans("storefront::storefront.form.banner_2"),
                'name' => 'storefront_banner_section_1_banner_2',
                'banner' => $banners[2],
            ])

            @include('admin.storefront.tabs.partials.single_banner', [
                'label' => trans("storefront::storefront.form.banner_3"),
                'name' => 'storefront_banner_section_1_banner_3',
                'banner' => $banners[3],
            ])
        </div>
    </div>
</div>
