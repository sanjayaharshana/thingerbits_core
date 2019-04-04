<div id="address" class="tab-pane active" role="tabpanel">
    <div class="box-wrapper address clearfix">
        <div class="box-header">
            <h4>{{ trans('storefront::checkout.tabs.address') }}</h4>
        </div>

        <div class="personal-information clearfix">
            <h5>{{ trans('storefront::checkout.tabs.personal_information') }}</h5>

            <div class="col-md-6">
                <div class="form-group {{ $errors->has('customer_email') ? 'has-error': '' }}">
                    <label for="customer-email">
                        {{ trans('storefront::checkout.tabs.attributes.customer_email') }}<span>*</span>
                    </label>

                    <input type="text" name="customer_email" class="form-control" id="customer-email" value="{{ old('customer_email') }}">

                    {!! $errors->first('customer_email','<span class="error-message">:message</span>') !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group {{ $errors->has('customer_phone') ? 'has-error': '' }}">
                    <label for="customer-phone">
                        {{ trans('storefront::checkout.tabs.attributes.customer_phone') }}
                    </label>

                    <input type="text" name="customer_phone" class="form-control" id="customer-phone" value="{{ old('customer_phone') }}">

                    {!! $errors->first('customer_phone','<span class="error-message">:message</span>') !!}
                </div>
            </div>

            @guest
                <div class="clearfix"></div>

                <div class="col-md-6">
                    <div class="create-account clearfix">
                        <div class="checkbox">
                            <input type="hidden" name="create_an_account" value="0">
                            <input type="checkbox" name="create_an_account" id="create-an-account" value="1" {{ old('create_an_account') ? 'checked' : '' }}>

                            <label for="create-an-account">
                                {{ trans('storefront::checkout.tabs.attributes.create_an_account') }}
                            </label>
                        </div>

                        <div class="form-group {{ old('create_an_account') ? '' : 'hide' }}">
                            <label for="password">
                                {{ trans('storefront::checkout.tabs.attributes.password') }}<span>*</span>
                            </label>

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" id="password">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endguest
        </div>

        @include('public.checkout.partials.billing_address')

        <div class="checkbox ship-to-a-different-address">
            <input type="hidden" name="ship_to_a_different_address" value="0">
            <input type="checkbox" name="ship_to_a_different_address" id="ship-to-a-different-address" value="1" {{ old('ship_to_a_different_address') ? 'checked' : '' }}>

            <label for="ship-to-a-different-address">
                {{ trans('storefront::checkout.tabs.attributes.ship_to_a_different_address') }}
            </label>
        </div>

        @include('public.checkout.partials.shipping_address')

        <button type="button" class="btn btn-primary next-step continue-button pull-right">
            {{ trans('storefront::checkout.continue') }}
        </button>
    </div>
</div>
