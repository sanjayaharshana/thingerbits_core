<div class="row">
    <div class="col-md-8">
        {{ Form::checkbox('boondipayment_enabled', trans('setting::attributes.bank_transfer_enabled'), 'Boondi Tranfer Enable', $errors, $settings) }}
        {{ Form::text('translatable[boondi_transfer_label]', trans('setting::attributes.translatable.bank_transfer_label'), $errors, $settings, ['required' => true]) }}
        {{ Form::textarea('translatable[boondi_transfer_description]', trans('setting::attributes.translatable.bank_transfer_description'), $errors, $settings, ['rows' => 3, 'required' => true]) }}

        <div class="{{ old('bank_transfer_enabled', array_get($settings, 'bank_transfer_enabled')) ? '' : 'hide' }}" id="bank-transfer-fields">
            {{ Form::textarea('translatable[boondi_transfer_instructions]', trans('setting::attributes.translatable.bank_transfer_instructions'), $errors, $settings, ['rows' => 3, 'required' => true]) }}
        </div>
    </div>
</div>
