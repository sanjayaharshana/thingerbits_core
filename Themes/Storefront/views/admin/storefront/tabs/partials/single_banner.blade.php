<div class="single-banner">
    <div class="banner-header">
        <h5>{{ $label }}</h5>
    </div>

    <div class="banner-body">
        <div class="banner-image">
            @if (is_null($banner->image->path))
                <i class="fa fa-picture-o" aria-hidden="true"></i>
                <img class="hide">
            @else
                <img src="{{ $banner->image->path }}">
            @endif

            <input type="hidden" name="translatable[{{ $name }}_file_id]" value="{{ $banner->image->id }}" class="banner-file-id">
        </div>

        <div class="banner-content clearfix">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-6">
                    <div class="form-group">
                        <label for="{{ $name }}-caption-1">{{ trans("storefront::attributes.caption_1") }}</label>
                        <input type="text" name="translatable[{{ $name }}_caption_1]" value="{{ $banner->caption_1 }}" class="form-control" id="{{ $name }}-caption-1">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-6">
                    <div class="form-group">
                        <label for="{{ $name }}-caption-2">{{ trans("storefront::attributes.caption_2") }}</label>
                        <input type="text" name="translatable[{{ $name }}_caption_2]" value="{{ $banner->caption_2 }}" class="form-control" id="{{ $name }}-caption-2">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-6 clearfix">
                    <div class="form-group">
                        <label for="{{ $name }}-call-to-action-text">{{ trans("storefront::attributes.call_to_action_text") }}</label>
                        <input type="text" name="translatable[{{ $name }}_call_to_action_text]" value="{{ $banner->call_to_action_text }}" class="form-control" id="{{ $name }}-call-to-action-text">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-6 clearfix">
                    <div class="form-group">
                        <label for="{{ $name }}-call-to-action-url">{{ trans("storefront::attributes.call_to_action_url") }}</label>
                        <input type="text" name="{{ $name }}_call_to_action_url" value="{{ $banner->call_to_action_url }}" class="form-control" id="{{ $name }}-call-to-action-url">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-6">
                    <div class="checkbox">
                        <input type="hidden" name="{{ $name }}_open_in_new_window" value="0">
                        <input type="checkbox" name="{{ $name }}_open_in_new_window" value="1" id="{{ $name }}-open-in-new-window" {{ $banner->open_in_new_window ? 'checked' : '' }}>
                        <label for="{{ $name }}-open-in-new-window">
                            {{ trans("storefront::attributes.open_in_new_window") }}
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
