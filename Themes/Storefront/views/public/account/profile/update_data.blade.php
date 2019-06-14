<div class="account-details">
        <div class="account clearfix">
            <h4>{{ trans('storefront::account.profile.account') }}</h4>

            <div class="row">
                <div class="col-sm-8">
                    <div class="form-group {{ $errors->has('first_name') ? 'has-error': '' }}">
                        <label for="first-name">
                            {{ trans('storefront::account.profile.first_name') }}<span>*</span>
                        </label>

                        <input type="text" name="first_name" id="first-name" class="form-control" value="{{ old('first_name', $my->first_name) }}">

                        {!! $errors->first('first_name', '<span class="error-message">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('last_name') ? 'has-error': '' }}">
                        <label for="last-name">
                            {{ trans('storefront::account.profile.last_name') }}<span>*</span>
                        </label>

                        <input type="text" name="last_name" id="last-name" class="form-control" value="{{ old('last_name', $my->last_name) }}">

                        {!! $errors->first('last_name', '<span class="error-message">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('email') ? 'has-error': '' }}">
                        <label for="">
                            {{ trans('storefront::account.profile.email') }}<span>*</span>
                        </label>

                        <input type="text" name="email" id="email" class="form-control" value="{{ old('email', $my->email) }}">

                        {!! $errors->first('email', '<span class="error-message">:message</span>') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>