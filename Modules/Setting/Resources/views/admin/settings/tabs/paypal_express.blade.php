<div class="row">
    <div class="col-md-8">
        {{ Form::checkbox('paypal_express_enabled', trans('setting::attributes.paypal_express_enabled'), trans('setting::settings.form.enable_paypal_express'), $errors, $settings) }}
        {{ Form::text('translatable[paypal_express_label]', trans('setting::attributes.translatable.paypal_express_label'), $errors, $settings, ['required' => true]) }}
        {{ Form::textarea('translatable[paypal_express_description]', trans('setting::attributes.translatable.paypal_express_description'), $errors, $settings, ['rows' => 3, 'required' => true]) }}
        {{ Form::checkbox('paypal_express_test_mode', trans('setting::attributes.paypal_express_test_mode'), trans('setting::settings.form.use_paypal_sandbox_for_test_payments'), $errors, $settings) }}

        <div class="{{ old('paypal_express_enabled', array_get($settings, 'paypal_express_enabled')) ? '' : 'hide' }}" id="paypal-express-fields">
            {{ Form::text('paypal_express_username', trans('setting::attributes.paypal_express_username'), $errors, $settings, ['required' => true]) }}
            {{ Form::password('paypal_express_password', trans('setting::attributes.paypal_express_password'), $errors, $settings, ['required' => true]) }}
            {{ Form::password('paypal_express_signature', trans('setting::attributes.paypal_express_signature'), $errors, $settings, ['required' => true]) }}
        </div>
    </div>
</div>
