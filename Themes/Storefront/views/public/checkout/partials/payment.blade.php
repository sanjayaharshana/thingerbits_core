<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<div id="payment" class="tab-pane" role="tabpanel">
    <div class="box-wrapper payment clearfix">
        <div class="box-header">
            <h4>{{ trans('storefront::checkout.tabs.payment.payment_method') }}</h4>
        </div>

        <ul class="list-inline payment-method clearfix">
            @forelse ($gateways as $name => $gateway)
                <li>
                    <div class="form-group radio">
                        <input type="radio" name="payment_method" onclick="ShowHideDiv(this)" value="{{ $name }}" id="{{ $name }}" {{ $loop->first ? 'checked' : '' }} {{ old('payment_method') === $name ? 'checked' : '' }}>
                        <label for="{{ $name }}">{{ $gateway->label }}</label>
                    </div>

                    <p>{{ $gateway->description }}</p>
                </li>
            @empty
                <p class="error-message">{{ trans('storefront::checkout.tabs.payment.no_payment_method') }}</p>
            @endforelse

            {!! $errors->first('payment_method','<span class="error-message">:message</span>') !!}
        </ul>

        <button type="button" class="btn btn-primary next-step pull-right" {{ $gateways->isEmpty() ? 'disabled' : '' }}>
            {{ trans('storefront::checkout.continue') }}
        </button>

        <button type="button" class="btn btn-default prev-step pull-right">
            {{ trans('storefront::checkout.back') }}
        </button>
    </div>
</div>

<script type="text/javascript">
   $( "#boondi_transfer" ).click(function() {
    DirectPayCheckout.openPaymentModel()
    });
</script>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script src="https://cdn.directpay.lk/dev/v1/directpayCheckout.js?v=1"></script> 






    <script>      

        DirectPayCheckout.init({
            mode: 'development', //development //production
            merchantId: 'TS00960', //your merchant_id
            amount: {{ Cart::total()->round()->amount() }},
            refCode: {{ $number }}, //unique reference code
            description: 'Ordered goods',
            responseCallback: responseCallback,
            currency: 'LKR',
            logo: 'https://s3.us-east-2.amazonaws.com/directpay-ipg/directpay_logo.png',    
            apiKey: 'lbVbbRSds18afljTIWkKT4wZPDPoB7qY6r2ByNEf' //your merchant_id
        });

        //Invoked when payment has been completed.
        function responseCallback(result) {
            var user_respond = result.data.description;
            console.log("responseCallback-Client", user_respond);
            if (user_respond == "User Cancel"){
                console.log("fdasdasd");
            } else {
                console.log("fuckfuckfuck");
            }
        }

    </script>


