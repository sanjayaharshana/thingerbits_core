<div class="row">
    <div class="col-md-8">
        {{ Form::text('name', trans('slider::attributes.name'), $errors, $slider, ['required' => true]) }}
        {{ Form::checkbox('autoplay', trans('slider::attributes.autoplay'), trans('slider::sliders.form.enable_autoplay'), $errors, $slider, ['checked' => true]) }}

        <div class="autoplay-speed-field {{ ($slider->autoplay ?? true) ? '' : 'hide' }}">
            {{ Form::number('autoplay_speed', trans('slider::attributes.autoplay_speed'), $errors, $slider, ['placeholder' => trans('slider::sliders.form.3000ms'), 'checked' => true]) }}
        </div>

        {{ Form::checkbox('arrows', trans('slider::attributes.arrows'), trans('slider::sliders.form.show_arrows'), $errors, $slider, ['checked' => true]) }}
    </div>
</div>
