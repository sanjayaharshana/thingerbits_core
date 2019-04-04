<div class="product-variants-select form-group row {{ $errors->has("options.{$option->id}") ? 'has-error' : '' }}">
    <label class="col-sm-4" for="option-{{ $option->id }}">
        {{ option_name($option) }}
    </label>

    <div class="col-sm-8">
        <select name="options[{{ $option->id }}]{{ $option->type === 'multiple_select' ? '[]' : '' }}"
                class="custom-select-black {{ $option->type === 'multiple_select' ? 'selectize' : '' }}"
                id="option-{{ $option->id }}"
                {{ $option->type === 'multiple_select' ? 'multiple' : '' }}
            >
            @if ($option->type === 'dropdown' )
                <option value="">{{ trans('storefront::product.options.choose_an_option') }}</option>
            @endif

            @foreach ($option->values as $value)
                <option value="{{ $value->id }}" {{ old("options.{$option->id}") == $value->id ? 'selected' : '' }}>
                    {{ option_value($value) }}
                </option>
            @endforeach
        </select>

        {!! $errors->first("options.{$option->id}", '<span class="help-block">:message</span>') !!}
    </div>
</div>
