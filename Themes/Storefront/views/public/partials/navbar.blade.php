@if ($categoryMenu->menus()->isNotEmpty() || $primaryMenu->menus()->isNotEmpty())
    <div class="megamenu-wrapper hidden-xs">
        <div class="container">
            <nav class="navbar navbar-default">
                @include('public.partials.category_menu')
                @include('public.partials.primary_menu')
            </nav>
        </div>
    </div>
@endif
