

@extends('public.account.layout')

@section('title', trans('storefront::account.links.my_profile'))

@section('account_breadcrumb')
    <li class="active">{{ trans('storefront::account.links.my_profile') }}</li>
@endsection

@section('content_right')
   
            @include('public.account.profile.profile_data')        
            @include('public.account.profile.update_data')        
         
@endsection
