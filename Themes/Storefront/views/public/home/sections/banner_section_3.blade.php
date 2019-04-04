<section class="banners-wrapper">
    <div class="row">
        <div class="col-md-5">
            @include('public.home.sections.partials.single_banner', [
                'banner' => $bannerSectionThreeBanners[1],
                'class' => 'banner-sm',
            ])
        </div>

        <div class="col-md-7">
            @include('public.home.sections.partials.single_banner', [
                'banner' => $bannerSectionThreeBanners[2],
                'class' => 'banner-md',
            ])
        </div>
    </div>
</section>
