@extends('public.layout')

@section('title', trans('user::auth.reset_password'))

@section('content')
    <div class="form-wrapper">
        @include('public.partials.notification')

        <div class="form-page">
            <div class="form reset-password clearfix">
                <div class="bg-blue">
                    <div class="reflection"></div>
                </div>

                <div class="form-inner">
                    <h3>{{ trans('user::auth.reset_password') }}</h3>

                    <form method="POST" action="{{ route('reset.complete.post', [$user->email, $code]) }}">
                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('new_password') ? 'has-error': '' }}">
                            <input type="password" name="new_password" class="form-control" placeholder="{{ trans('user::attributes.users.new_password') }}" autofocus>

                            <div class="input-icon">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </div>

                            {!! $errors->first('new_password','<span class="error-message">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('new_password_confirmation') ? 'has-error': '' }}">
                            <input type="password" name="new_password_confirmation" class="form-control" placeholder="{{ trans('user::attributes.users.new_password_confirmation') }}">

                            <div class="input-icon">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </div>

                            {!! $errors->first('new_password_confirmation','<span class="error-message">:message</span>') !!}
                        </div>

                        <button type="submit" class="btn btn-primary btn-center btn-reset" data-loading>
                            {{ trans('user::auth.reset_password') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
