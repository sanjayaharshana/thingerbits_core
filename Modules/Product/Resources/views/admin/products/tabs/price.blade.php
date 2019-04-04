<div class="row">
    <div class="col-md-8">
        {{ Form::number('price', trans('product::attributes.price'), $errors, $product, ['min' => 0, 'required' => true]) }}
        {{ Form::number('special_price', trans('product::attributes.special_price'), $errors, $product, ['min' => 0]) }}
        {{ Form::text('special_price_start', trans('product::attributes.special_price_start'), $errors, $product, ['class' => 'datetime-picker']) }}
        {{ Form::text('special_price_end', trans('product::attributes.special_price_end'), $errors, $product, ['class' => 'datetime-picker']) }}
    </div>
</div>
