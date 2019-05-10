<div class="row">
    <div class="col-md-8">
        {{ Form::checkbox('boondipayment_enabled', trans('setting::attributes.bank_transfer_enabled'), 'DirectPay Tranfer Enable', $errors, $settings) }}
        {{ Form::text('translatable[mode]', 'Mode', $errors, $settings, ['required' => true]) }}
        {{ Form::text('translatable[merchantId]', 'Merchand ID', $errors, $settings, ['required' => true]) }}
        {{ Form::textarea('translatable[apiKey]', 'API Key', $errors, $settings, ['rows' => 3, 'required' => true]) }}
        {{ Form::text('translatable[currency]', 'Currency', $errors, $settings, ['required' => true]) }}

        <div class="{{ old('boondipayment_enabled', array_get($settings, 'boondipayment_enabled')) ? '' : 'hide' }}" id="boondi-transfer-fields">
            {{ Form::textarea('translatable[boondi_transfer_instructions]', 'Intro', $errors, $settings, ['required' => false]) }}
        </div>
    </div>
</div>
