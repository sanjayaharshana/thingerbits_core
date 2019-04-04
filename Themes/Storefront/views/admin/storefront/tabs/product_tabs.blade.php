<div class="row">
    <div class="col-md-8">
        {{ Form::checkbox('storefront_product_tabs_section_enabled', trans('storefront::attributes.section_status'), trans('storefront::storefront.form.enable_product_tabs_section'), $errors, $settings) }}
        {{ Form::text('translatable[storefront_product_tabs_section_title]', trans('storefront::attributes.section_title'), $errors, $settings) }}

        <div class="clearfix"></div>
        <div class="box-content clearfix">
            <h4 class="section-title">{{ trans('storefront::storefront.form.tab_3') }}</h4>

            {{ Form::text('translatable[storefront_product_tabs_section_tab_1_title]', trans('storefront::attributes.tab_title'), $errors, $settings) }}

            @hasAccess('admin.products.index')
                {{ Form::select('storefront_product_tabs_section_tab_1_products', trans('storefront::attributes.tab_products'), $errors, $tabOneProducts, $settings, ['class' => 'selectize prevent-creation', 'data-url' => route('admin.products.index'), 'multiple' => true]) }}
            @endHasAccess
        </div>

        <div class="box-content clearfix">
            <h4 class="section-title">{{ trans('storefront::storefront.form.tab_2') }}</h4>

            {{ Form::text('translatable[storefront_product_tabs_section_tab_2_title]', trans('storefront::attributes.tab_title'), $errors, $settings) }}

            @hasAccess('admin.products.index')
                {{ Form::select('storefront_product_tabs_section_tab_2_products', trans('storefront::attributes.tab_products'), $errors, $tabTwoProducts, $settings, ['class' => 'selectize prevent-creation', 'data-url' => route('admin.products.index'), 'multiple' => true]) }}
            @endHasAccess
        </div>

        <div class="box-content clearfix">
            <h4 class="section-title">{{ trans('storefront::storefront.form.tab_3') }}</h4>

            {{ Form::text('translatable[storefront_product_tabs_section_tab_3_title]', trans('storefront::attributes.tab_title'), $errors, $settings) }}

            @hasAccess('admin.products.index')
                {{ Form::select('storefront_product_tabs_section_tab_3_products', trans('storefront::attributes.tab_products'), $errors, $tabThreeProducts, $settings, ['class' => 'selectize prevent-creation', 'data-url' => route('admin.products.index'), 'multiple' => true]) }}
            @endHasAccess
        </div>

        <div class="box-content clearfix">
            <h4 class="section-title">{{ trans('storefront::storefront.form.tab_4') }}</h4>

            {{ Form::text('translatable[storefront_product_tabs_section_tab_4_title]', trans('storefront::attributes.tab_title'), $errors, $settings) }}

            @hasAccess('admin.products.index')
                {{ Form::select('storefront_product_tabs_section_tab_4_products', trans('storefront::attributes.tab_products'), $errors, $tabFourProducts, $settings, ['class' => 'selectize prevent-creation', 'data-url' => route('admin.products.index'), 'multiple' => true]) }}
            @endHasAccess
        </div>
    </div>
</div>
