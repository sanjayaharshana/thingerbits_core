<div class="row">
    <div class="col-md-8">
        {{ Form::text('name', trans('option::attributes.name'), $errors, $option, ['required' => true]) }}

        <div class="form-group required {{ $errors->has('type') ? 'has-error': '' }}">
            <label for="type" class="col-md-3 control-label text-left">
                {{ trans('option::attributes.type') }}<span class="m-l-5 text-red">*</span>
            </label>

            <div class="col-md-9">
                <select name="type" class="form-control custom-select-black" id="type">
                    <option value="dropdown" {{ old('type', $option->type) === 'dropdown' ? 'selected' : '' }}>
                        {{ trans('option::options.form.option_types.dropdown') }}
                    </option>

                    <option value="checkbox" {{ old('type', $option->type) === 'checkbox' ? 'selected' : '' }}>
                        {{ trans('option::options.form.option_types.checkbox') }}
                    </option>

                    <option value="radio" {{ old('type', $option->type) === 'radio' ? 'selected' : '' }}>
                        {{ trans('option::options.form.option_types.radio') }}
                    </option>

                    <option value="multiple_select" {{ old('type', $option->type) === 'multiple_select' ? 'selected' : '' }}>
                        {{ trans('option::options.form.option_types.multiple_select') }}
                    </option>
                </select>

                {!! $errors->first('type', '<span class="help-block">:message</span>') !!}
            </div>
        </div>

        {{ Form::checkbox('is_required', trans('option::attributes.is_required'), trans('option::options.form.this_option_is_required'), $errors, $option) }}
    </div>
</div>
