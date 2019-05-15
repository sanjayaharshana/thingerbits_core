<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<h3></h3>
<div id="payment" class="tab-pane" role="tabpanel">
    <div class="box-wrapper payment clearfix">
        <div class="box-header">
            <h4>{{ trans('storefront::checkout.tabs.payment.payment_method') }}</h4>
            <h2>{{ setting('cod_label') }}</h2>
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

        <button type="button" id="paymentonty" class="btn btn-primary next-step pull-right" {{ $gateways->isEmpty() ? 'disabled' : '' }}>
            {{ trans('storefront::checkout.continue') }}
        </button>

        <button type="button" class="btn btn-default prev-step pull-right">
            {{ trans('storefront::checkout.back') }}
        </button>
    </div>
</div>




<script type="text/javascript">
   $( "#boondi_transfer" ).click(function() {
    
    });
</script>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script src="https://cdn.directpay.lk/dev/v1/directpayCheckout.js?v=1"></script> 






<script>     
        DirectPayCheckout.init({
            mode: '{{ setting('boondi_mode')  }}', //development //production
            merchantId: '{{ setting('boondi_merchantId') }}', //your merchant_id
            amount: {{ Cart::total()->round()->amount() }},
            refCode: {{ $number }}, //unique reference code
            description: 'Ordered goods',
            responseCallback: responseCallback,
            currency: '{{ setting('boondi_currency') }}',
            logo: 'https://s3.us-east-2.amazonaws.com/directpay-ipg/directpay_logo.png',    
            apiKey: '{{ setting('boondi_apiKey') }}'
        });

        //Invoked when payment has been completed.
        function responseCallback(result) {
            var user_respond = result.data.description;
            console.log("responseCallback-Client", user_respond);
            if (user_respond == "User Cancel"){                
                console.log("User Canceled");
                location.reload();
            } else if (user_respond == "APPROVED:Approved") {
                console.log("Transection Sucess");
                document.getElementById("p1").style.color = "red"; 
                document.getElementById("p1").innerHTML = "Payment Success, Do not refresh the website.until you complete the order";
            } else {
                $("#myModal").modal();
                console.log(user_respond);
                //alert("Something Wrong with Payment getways.Please Refresh your payment");
                alert(user_respond);
                //location.reload();

            }
        }
</script>


