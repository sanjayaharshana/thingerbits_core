@extends('public.layout')

@section('title', trans('storefront::404.not_found'))

<style>
    .header-wrapper{
    display: none;
}
.footer{
    display: none;
}
.breadcrumb{
    display: none;
}
.list-inline{
    font-family: sans-serif;
}
.top-nav{
    display: none;
}

.a:focus, a:hover{
    text-decoration: none;
}
</style>

@section('content')
    <div class="row">
        <div class="page-error clearfix">
           <h1>Thingerbits Private Limited</h1>
           <p>404 Not responding some objects</p><br>
           <a href="/" class="btn btn-primary">Lets take a break</a>
           <a href="shopcenter" class="btn btn-primary">Thingerbits Shop</a>
           <a href="" class="btn btn-primary">Visit LMS</a>
        </div>
    </div>
@endsection
