import { stopButtonLoading } from './functions';

if (FleetCart.stripePublishableKey) {
    let stripe = Stripe(FleetCart.stripePublishableKey);
    let elements = stripe.elements();

    let style = {
        base: {
            color: '#32325d',
            lineHeight: '18px',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4',
            },
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a',
        },
    };

    let card = elements.create('card', {
        style,
        hidePostalCode: true,
    });

    card.mount('#stripe-payment');

    let form = document.getElementById('checkout-form');

    form.addEventListener('submit', (e) => {
        if ($('[name="payment_method"]:checked').val() !== 'stripe') {
            return;
        }

        e.preventDefault();

        let tokenData = {
            name: document.getElementById('billing-first-name').value + ' ' + document.getElementById('billing-last-name').value,
            address_line1: document.getElementById('billing-address-1').value,
            address_line2: document.getElementById('billing-address-2').value,
            address_city: document.getElementById('billing-city').value,
            address_state: document.getElementById('billing-state').value,
            address_zip: document.getElementById('billing-zip').value,
            address_country: document.getElementById('billing-country').value,
        };

        stripe.createToken(card, tokenData)
            .then((result) => {
                if (result.error) {
                    stopButtonLoading('.btn-checkout');
                } else {
                    let hiddenInput = document.createElement('input');

                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', 'stripe_token');
                    hiddenInput.setAttribute('value', result.token.id);

                    form.appendChild(hiddenInput);

                    form.submit();
                }
            });
    });
}
