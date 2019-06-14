

@extends('public.account.layout')

@section('title', trans('storefront::account.links.my_profile'))

@section('account_breadcrumb')
    <li class="active">{{ trans('storefront::account.links.my_profile') }}</li>
@endsection

@section('content_right')
    <form method="POST" action="{{ route('account.profile.update') }}">
        {{ csrf_field() }}
        {{ method_field('put') }}
        <div class="content">
            @include('public.account.profile.profile_data')
        </div>
            @include('public.account.profile.update_data')

        
         
@endsection
