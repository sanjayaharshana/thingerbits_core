<section class="banners-wrapper banners-group">
    <div class="row">
        <div class="col-md-8">
            @include('public.home.sections.partials.single_banner', [
                'banner' => $bannerSectionOneBanners[1],
                'class' => 'banner-md',
            ])

            @include('public.home.sections.partials.single_banner', [
                'banner' => $bannerSectionOneBanners[2],
                'class' => 'banner-md',
            ])
        </div>

        <div class="col-md-4">
            @include('public.home.sections.partials.single_banner', [
                'banner' => $bannerSectionOneBanners[3],
                'class' => 'banner-vr',
            ])
        </div>
    </div>
</section>
