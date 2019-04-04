@extends('public.account.layout')

@section('title', trans('storefront::account.links.my_profile'))

@section('account_breadcrumb')
    <li class="active">{{ trans('storefront::account.links.my_profile') }}</li>
@endsection

@section('content_right')
    <form method="POST" action="{{ route('account.profile.update') }}">
        {{ csrf_field() }}
        {{ method_field('put') }}

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

            <div class="password">
                <h4>{{ trans('storefront::account.profile.password') }}</h4>

                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group {{ $errors->has('password') ? 'has-error': '' }}">
                            <label for="new-password">
                                {{ trans('storefront::account.profile.new_password') }}
                            </label>

                            <input type="password" name="password" id="new-password" class="form-control">

                            {!! $errors->first('password', '<span class="error-message">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error': '' }}">
                            <label for="confirm-password">
                                {{ trans('storefront::account.profile.confirm_password') }}
                            </label>

                            <input type="password" name="password_confirmation" id="confirm-password" class="form-control">

                            {!! $errors->first('password_confirmation', '<span class="error-message">:message</span>') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary" data-loading>
            {{ trans('storefront::account.profile.save_changes') }}
        </button>
    </form>
@endsection
