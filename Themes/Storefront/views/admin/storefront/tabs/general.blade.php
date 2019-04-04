<div class="row">
    <div class="col-md-8">
        {{ Form::select('storefront_theme', trans('storefront::attributes.storefront_theme'), $errors, trans('storefront::themes'), $settings) }}
        {{ Form::select('storefront_layout', trans('storefront::attributes.storefront_layout'), $errors, trans('storefront::layouts'), $settings) }}
        {{ Form::select('storefront_slider', trans('storefront::attributes.storefront_slider'), $errors, $sliders, $settings) }}
        {{ Form::select('storefront_terms_page', trans('storefront::attributes.storefront_terms_page'), $errors, $pages, $settings) }}
        {{ Form::select('storefront_privacy_page', trans('storefront::attributes.storefront_privacy_page'), $errors, $pages, $settings) }}
        {{ Form::text('storefront_footer_address', trans('storefront::attributes.storefront_footer_address'), $errors, $settings) }}
        {{ Form::text('storefront_copyright_text', trans('storefront::attributes.storefront_copyright_text'), $errors, $settings) }}
    </div>
</div>
