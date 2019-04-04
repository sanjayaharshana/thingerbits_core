<section class="header-wrapper">
    <div class="header-inner">
        <div class="container">
            <button class="navbar-toggle visible-sm visible-xs pull-left" type="button">
                <span class="top-bar icon-bar"></span>
                <span class="middle-bar icon-bar"></span>
                <span class="bottom-bar icon-bar"></span>
            </button>

            <a href="{{ route('home') }}" class="website-logo pull-left">
                @if (is_null($headerLogo))
                    <h2>{{ setting('store_name') }}</h2>
                @else
                    <img src="{{ $headerLogo }}">
                @endif
            </a>

            @include('public.partials.mini_cart')
            @include('public.partials.search_box')
        </div>
    </div>
</section>
