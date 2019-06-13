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
.megamenu-wrapper hidden-xs {
    display: none;
}
</style>


<link rel="stylesheet" type="text/css" href="{{ (Theme::url('public/paper_dash/css/bootstrap.min.css')) }}">

@include('public.account.components.head')

@include('public.account.components.sidebar')

    
    



@section('breadcrumb')
    @if (request()->routeIs('account.dashboard.index'))
        <li class="active">{{ trans('storefront::account.links.my_account') }}</li>
    @else
        <li><a href="{{ route('account.dashboard.index') }}">{{ trans('storefront::account.links.my_account') }}</a></li>
    @endif

    @yield('account_breadcrumb')
@endsection


<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%"><br><br><br>                                                 
    <a href="{{ route('account.dashboard.index') }}" li class="w3-bar-item w3-button" > Dashboard</a>                                             
    <a href="{{ route('skillpane') }}" li class="w3-bar-item w3-button" > Hows your Skill</a>                                             
    <a href="{{ route('coursexp') }}" li class="w3-bar-item w3-button" > Course Explorer</a>                                      
    <a href="{{ route('account.orders.index') }}" li class="w3-bar-item w3-button" >{{ trans('storefront::account.links.my_orders') }}</a>
    <a href="{{ route('account.wishlist.index') }}" li class="w3-bar-item w3-button" >Product Wishlist</a>
    <a href="{{ route('account.reviews.index') }}" li class="w3-bar-item w3-button" > {{ trans('storefront::account.links.my_reviews') }}</a>
    <a href="{{ route('account.profile.edit') }}" li class="w3-bar-item w3-button" >Profile</a>
</div>

<div style="margin-left:25%">           
    <div class="w3-container"><br><br><br>         
          
          @yield('content_right')
    </div>
        
</div>
  
@section('content')
    <div class="row">
        <div class="my-account clearfix">
            <div class="col-md-3" style=" position: -webkit-sticky;position: sticky;top: 0;">
                <div class="sidebar-menu">
                   
                </div>
            </div>

            <div class="col-md-9">
                <div class="clearfix"></div>

                <div class="content-right clearfix">
                  
                </div>
            </div>
        </div>
    </div>
@endsection
