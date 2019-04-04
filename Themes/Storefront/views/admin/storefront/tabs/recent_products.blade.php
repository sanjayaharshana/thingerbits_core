<div class="row">
    <div class="col-md-8">
        {{ Form::checkbox('storefront_recent_products_section_enabled', trans('storefront::attributes.section_status'), trans('storefront::storefront.form.enable_recent_products_section'), $errors, $settings) }}
        {{ Form::text('translatable[storefront_recent_products_section_title]', trans('storefront::attributes.section_title'), $errors, $settings) }}
        {{ Form::number('storefront_recent_products_section_total_products', trans('storefront::attributes.total_products'), $errors, $settings, ['min' => 0]) }}
    </div>
</div>
