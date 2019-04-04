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
                    <p>{{ trans('user::auth.enter_email') }}</p>

                    <form method="POST" action="{{ route('reset.post') }}">
                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('email') ? 'has-error': '' }}">
                            <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="{{ trans('user::attributes.users.email') }}" autofocus>

                            <div class="input-icon">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            </div>

                            {!! $errors->first('email','<span class="error-message">:message</span>') !!}
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
