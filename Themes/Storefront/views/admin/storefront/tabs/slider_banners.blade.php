<div class="accordion-box-content">
    <div class="tab-content clearfix">
        <div class="banner-image-wrapper">
            @include('admin.storefront.tabs.partials.single_banner', [
                'label' => trans("storefront::storefront.form.banner_1"),
                'name' => 'storefront_slider_banner_1',
                'banner' => $banners[1],
            ])

            @include('admin.storefront.tabs.partials.single_banner', [
                'label' => trans("storefront::storefront.form.banner_2"),
                'name' => 'storefront_slider_banner_2',
                'banner' => $banners[2],
            ])
        </div>
    </div>
</div>
