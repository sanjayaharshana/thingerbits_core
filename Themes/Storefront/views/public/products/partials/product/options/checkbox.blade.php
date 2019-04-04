<div class="form-group row {{ $errors->has("options.{$option->id}") ? 'has-error' : '' }}">
    <label class="col-sm-4">
        {{ option_name($option) }}
    </label>

    <div class="col-sm-8">
        @foreach ($option->values as $value)
            <div class="checkbox">
                <input type="checkbox"
                    name="options[{{ $option->id }}][]"
                    value="{{ $value->id }}"
                    id="option-{{ $option->id }}-value-{{ $value->id }}"
                    {{ in_array($value->id, old("options.{$option->id}", [])) ? 'checked' : '' }}
                >

                <label for="option-{{ $option->id }}-value-{{ $value->id }}">
                    {{ option_value($value) }}
                </label>
            </div>
        @endforeach

        {!! $errors->first("options.{$option->id}", '<span class="help-block">:message</span>') !!}
    </div>
</div>
