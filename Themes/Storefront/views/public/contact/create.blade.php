@extends('public.layout')

@section('title', trans('storefront::contact.contact'))

@section('content')
    <section class="contact-wrapper">
        <div class="row">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8">
                        <div class="box-wrapper contact-left clearfix">
                            <div class="box-header">
                                <h4>{{ trans('storefront::contact.send_us_a_message') }}</h4>
                            </div>

                            <div class="col-md-12">
                                <form method="POST" action="{{ route('contact.store') }}" class="clearfix">
                                    @csrf

                                    <div class="form-group {{ $errors->has('email') ? 'has-error': '' }}">
                                        <label for="email">{{ trans('storefront::contact.your_email') }}<span>*</span></label>
                                        <input type="text" name="email" class="form-control" id="email" value="{{ old('email') }}">

                                        {!! $errors->first('email', '<span class="error-message">:message</span>') !!}
                                    </div>

                                    <div class="form-group {{ $errors->has('subject') ? 'has-error': '' }}">
                                        <label for="subject">{{ trans('storefront::contact.subject') }}<span>*</span></label>
                                        <input type="text" name="subject" class="form-control" id="subject" value="{{ old('subject') }}">

                                        {!! $errors->first('subject', '<span class="error-message">:message</span>') !!}
                                    </div>

                                    <div class="form-group {{ $errors->has('message') ? 'has-error': '' }}">
                                        <label for="message">{{ trans('storefront::contact.message') }}<span>*</span></label>
                                        <textarea name="message" cols="30" rows="10" id="message">{{ old('message') }}</textarea>

                                        {!! $errors->first('message', '<span class="error-message">:message</span>') !!}
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-submit pull-right" data-loading>
                                        {{ trans('storefront::contact.submit') }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-right clearfix">
                            <div class="contact-info">
                                <i class="fa fa-phone-square pull-left" aria-hidden="true"></i>

                                <div class="contact-text">
                                    <h4>{{ trans('storefront::contact.phone') }}</h4>
                                    <span>{{ setting('store_phone') }}</span>
                                </div>
                            </div>

                            <div class="contact-info">
                                <i class="fa fa-envelope-o pull-left" aria-hidden="true"></i>

                                <div class="contact-text">
                                    <h4>{{ trans('storefront::contact.email') }}</h4>
                                    <span>{{ setting('store_email') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
