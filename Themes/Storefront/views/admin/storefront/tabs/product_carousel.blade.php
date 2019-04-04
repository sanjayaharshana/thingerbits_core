<div class="row">
    <div class="col-md-8">
        {{ Form::checkbox('storefront_product_carousel_section_enabled', trans('storefront::attributes.section_status'), trans('storefront::storefront.form.enable_product_carousel_section'), $errors, $settings) }}
        {{ Form::text('translatable[storefront_product_carousel_section_title]', trans('storefront::attributes.section_title'), $errors, $settings) }}

        @hasAccess('admin.products.index')
            {{ Form::select('storefront_product_carousel_section_products', trans('storefront::attributes.products'), $errors, $products, $settings, ['class' => 'selectize prevent-creation', 'data-url' => route('admin.products.index'), 'multiple' => true]) }}
        @endHasAccess
    </div>
</div>

@include('admin::partials.selectize_remote')
