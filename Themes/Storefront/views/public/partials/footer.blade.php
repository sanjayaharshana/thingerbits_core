<footer class="footer">
    <div class="container">
        <div class="footer-top p-tb-50 clearfix">
            <div class="row">
                <div class="col-md-4">
                    <a href="{{ route('home') }}" class="footer-logo">
                        @if (is_null($footerLogo))
                            <h2>{{ setting('store_name') }}</h2>
                        @else
                            <img src="{{ $footerLogo }}" class="img-responsive" alt="footer-logo">
                        @endif
                    </a>

                    <div class="clearfix"></div>

                    <p class="footer-brief">{{ setting('store_tagline') }}</p>

                    @if (setting('store_phone') || setting('store_email') || setting('storefront_footer_address'))
                        <div class="contact">
                            <ul class="list-inline">
                                @if (setting('store_phone'))
                                    <li>
                                        <i class="fa fa-phone-square" aria-hidden="true"></i>
                                        <span class="contact-info">{{ setting('store_phone') }}</span>
                                    </li>
                                @endif

                                @if (setting('store_email'))
                                    <li>
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        <span class="contact-info">{{ setting('store_email') }}</span>
                                    </li>
                                @endif

                                @if (setting('storefront_footer_address'))
                                    <li>
                                        <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                        <span class="contact-info">{{ setting('storefront_footer_address') }}</span>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    @endif
                </div>

                <div class="col-md-8">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="links">
                                <div class="mobile-collapse">
                                    <h4>{{ trans('storefront::account.links.my_account') }}</h4>
                                </div>

                                <ul class="list-inline">
                                    <li><a href="{{ route('account.dashboard.index') }}">{{ trans('storefront::account.links.dashboard') }}</a></li>
                                    <li><a href="{{ route('account.orders.index') }}">{{ trans('storefront::account.links.my_orders') }}</a></li>
                                    <li><a href="{{ route('account.reviews.index') }}">{{ trans('storefront::account.links.my_reviews') }}</a></li>
                                    <li><a href="{{ route('account.profile.edit') }}">{{ trans('storefront::account.links.my_profile') }}</a></li>

                                    @auth
                                        <li><a href="{{ route('logout') }}">{{ trans('storefront::account.links.logout') }}</a></li>
                                    @endauth
                                </ul>
                            </div>
                        </div>
                    </div>

                    @if ($footerMenu->isNotEmpty())
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="links">
                                    <div class="mobile-collapse">
                                        <h4>{{ setting('storefront_footer_menu_title') }}</h4>
                                    </div>

                                    <ul class="list-inline">
                                        @foreach ($footerMenu as $menuItem)
                                            <li><a href="{{ $menuItem->url() }}">{{ $menuItem->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        @if ($socialLinks->isNotEmpty())
            <div class="footer-middle p-tb-30 clearfix">
                <ul class="social-links list-inline">
                    @foreach ($socialLinks as $icon => $link)
                        @if (! is_null($link))
                            <li><a href="{{ $link }}"><i class="fa fa-{{ $icon }}" aria-hidden="true"></i></a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="footer-bottom p-tb-20 clearfix">
        <div class="container">
            <div class="copyright text-center">
                {!! $copyrightText !!}
            </div>
        </div>
    </div>
</footer>
