<div class="row">
    <div class="col-md-8">
        {{ Form::checkbox('storefront_two_column_product_carousel_section_enabled', trans('storefront::attributes.section_status'), trans('storefront::storefront.form.enable_two_column_product_carousel_section'), $errors, $settings) }}

        <div class="clearfix"></div>
        <div class="box-content clearfix">
            <h4 class="section-title">{{ trans('storefront::storefront.form.column_1') }}</h4>

            {{ Form::text('translatable[storefront_two_column_product_carousel_section_column_1_title]', trans('storefront::attributes.column_title'), $errors, $settings) }}

            @hasAccess('admin.products.index')
                {{ Form::select('storefront_two_column_product_carousel_section_column_1_products', trans('storefront::attributes.column_products'), $errors, $columnOneProducts, $settings, ['class' => 'selectize prevent-creation', 'data-url' => route('admin.products.index'), 'multiple' => true]) }}
            @endHasAccess
        </div>

        <div class="box-content clearfix">
            <h4 class="section-title">{{ trans('storefront::storefront.form.column_2') }}</h4>

            {{ Form::text('translatable[storefront_two_column_product_carousel_section_column_2_title]', trans('storefront::attributes.column_title'), $errors, $settings) }}

            @hasAccess('admin.products.index')
                {{ Form::select('storefront_two_column_product_carousel_section_column_2_products', trans('storefront::attributes.column_products'), $errors, $columnTwoProducts, $settings, ['class' => 'selectize prevent-creation', 'data-url' => route('admin.products.index'), 'multiple' => true]) }}
            @endHasAccess
        </div>
    </div>
</div>
