<div class="col-lg-4 col-md-5 col-sm-5 col-xs-7">
    <div class="product-image">
        <div class="base-image">
            @if (! $product->base_image->exists)
                <div class="image-placeholder">
                    <i class="fa fa-picture-o"></i>
                </div>
            @else
                <a class="base-image-inner" href="{{ $product->base_image->path }}">
                    <img src="{{ $product->base_image->path }}">
                    <span><i class="fa fa-search-plus" aria-hidden="true"></i></span>
                </a>
            @endif

            @foreach ($product->additional_images as $additionalImage)
                @if (! $additionalImage->exists)
                    <div class="image-placeholder">
                        <i class="fa fa-picture-o"></i>
                    </div>
                @else
                    <a class="base-image-inner" href="{{ $additionalImage->path }}">
                        <img src="{{ $additionalImage->path }}">
                        <span><i class="fa fa-search-plus" aria-hidden="true"></i></span>
                    </a>
                @endif
            @endforeach
        </div>

        <div class="additional-image">
            @if (! $product->base_image->exists)
                <div class="image-placeholder">
                    <i class="fa fa-picture-o"></i>
                </div>
            @else
                <div class="thumb-image">
                    <img src="{{ $product->base_image->path }}">
                </div>
            @endif

            @foreach ($product->additional_images as $additionalImage)
                @if (! $additionalImage->exists)
                    <div class="image-placeholder">
                        <i class="fa fa-picture-o"></i>
                    </div>
                @else
                    <div class="thumb-image">
                        <img src="{{ $additionalImage->path }}">
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
