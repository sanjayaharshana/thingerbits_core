<ul>
    @foreach ($subCategories as $subCategory)
        <li class="{{ request('category') === $subCategory->slug ? 'active' : '' }}">
            <a href="{{ request()->fullUrlWithQuery(['category' => $subCategory->slug]) }}">
                {{ $subCategory->name }}
            </a>

            @if ($subCategory->items->isNotEmpty())
                @include('public.products.partials.sub_category_filter', ['subCategories' => $subCategory->items])
            @endif
        </li>
    @endforeach
</ul>
