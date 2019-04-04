<div class="sidebar">
    <ul class="sidebar-content clearfix">
        @foreach ($categoryMenu->menus() as $menu)
            <li>
                <a href="{{ $menu->url() }}">{{ $menu->name() }}</a>

                @if ($menu->hasSubMenus())
                    @include('public.partials.nested_sidebar', ['subMenus' => $menu->subMenus()])
                @endif
            </li>
        @endforeach
    </ul>
</div>
