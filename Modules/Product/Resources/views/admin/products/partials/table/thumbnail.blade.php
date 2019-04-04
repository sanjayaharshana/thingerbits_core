<div class="thumbnail-holder">
    @if (is_null($path))
        <i class="fa fa-picture-o"></i>
    @else
        <img src="{{ $path }}">
    @endif
</div>
