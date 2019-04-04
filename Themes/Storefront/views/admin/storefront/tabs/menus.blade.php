<div class="row">
    <div class="col-md-8">
        {{ Form::select('storefront_primary_menu', trans('storefront::attributes.storefront_primary_menu'), $errors, $menus, $settings) }}
        {{ Form::text('translatable[storefront_category_menu_title]', trans('storefront::attributes.storefront_category_menu_title'), $errors, $settings) }}
        {{ Form::select('storefront_category_menu', trans('storefront::attributes.storefront_category_menu'), $errors, $menus, $settings) }}
        {{ Form::text('translatable[storefront_footer_menu_title]', trans('storefront::attributes.storefront_footer_menu_title'), $errors, $settings) }}
        {{ Form::select('storefront_footer_menu', trans('storefront::attributes.storefront_footer_menu'), $errors, $menus, $settings) }}
    </div>
</div>
