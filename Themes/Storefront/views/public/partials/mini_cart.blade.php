<div class="user-cart pull-right">
    <div class="dropdown">
        <div class="user-cart-inner dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-shopping-bag pull-left" aria-hidden="true"></i>

            <span class="cart-count">{{ $cart->quantity() }}</span>

            <div class="cart-amount hidden-sm hidden-xs pull-left">
                <span class="cart-label">{{ trans('storefront::layout.mini_cart.my_cart') }}</span>
                <br>
                <span class="cart-price">{{ $cart->subTotal()->convertToCurrentCurrency()->format() }}</span>
            </div>
        </div>

        <div class="dropdown-menu">
            <h5 class="mini-cart-title">{{ trans('storefront::layout.mini_cart.my_cart') }}</h5>

            <div class="mini-cart">
                @if ($cart->isEmpty())
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <h3 class="empty-cart">{{ trans('storefront::layout.mini_cart.your_cart_is_empty') }}</h3>
                @else
                    @foreach ($cart->items() as $cartItem)
                        <div class="mini-cart-item clearfix">
                            <div class="mini-cart-image">
                                @if (! $cartItem->product->base_image->exists)
                                    <div class="image-placeholder">
                                        <i class="fa fa-picture-o"></i>
                                    </div>
                                @else
                                    <img src="{{ $cartItem->product->base_image->path }}">
                                @endif
                            </div>

                            <div class="mini-cart-details clearfix">
                                <a class="product-name" href="{{ route('products.show', $cartItem->product->slug) }}">
                                    {{ $cartItem->product->name }}
                                </a>

                                @if ($cartItem->options->isNotEmpty())
                                    <div class="mini-cart-variants dropdown pull-left">
                                        <div class="dropdown-toggle" data-toggle="dropdown">
                                            {{ $cartItem->options->first()->name }}: <span>{{ $cartItem->options->first()->values->implode('label', ', ') }}</span>

                                            @if ($cartItem->options->slice(1)->isNotEmpty())
                                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                            @endif
                                        </div>

                                        @if ($cartItem->options->count() > 1)
                                            <ul class="dropdown-menu">
                                                @foreach ($cartItem->options->slice(1) as $option)
                                                    <li>
                                                        {{ $option->name }}: <span>{{ $option->values->implode('label', ', ') }}</span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </div>
                                @endif

                                <span class="product-price pull-right">
                                    {{ $cartItem->unitPrice()->convertToCurrentCurrency()->format() }}
                                </span>

                                <span class="product-quantity pull-right">
                                    {{ $cartItem->qty }} *
                                </span>

                                <form method="POST" action="{{ route('cart.items.destroy', encrypt($cartItem->id)) }}" onsubmit="return confirm('{{ trans('cart::messages.confirm') }}');">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}

                                    <button type="submit" class="cross-button" data-toggle="tooltip" data-placement="{{ is_rtl() ? 'right' : 'left' }}" title="{{ trans('storefront::layout.mini_cart.remove') }}">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

            @unless ($cart->isEmpty())
                <span class="subtotal">
                    {{ trans('storefront::layout.mini_cart.subtotal') }} <span>{{ $cart->subTotal()->convertToCurrentCurrency()->format() }}</span>
                </span>

                <div class="mini-cart-buttons text-center">
                    <a href="{{ route('cart.index') }}" class="btn btn-primary btn-view-cart">
                        {{ trans('storefront::layout.mini_cart.view_cart') }}
                    </a>

                    <a href="{{ route('checkout.create') }}" class="btn btn-default btn-checkout">
                        {{ trans('storefront::layout.mini_cart.checkout') }}
                    </a>
                </div>
            @endunless
        </div>
    </div>
</div>
