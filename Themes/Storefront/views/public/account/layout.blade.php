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
@include('public.account.components.navbar')

    
    



<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card demo-icons">
          <div class="card-header">
           
          </div>
          <div class="card-body all-icons">
            <div id="icons-wrapper">
    <section>
              
@section('breadcrumb')
@if (request()->routeIs('account.dashboard.index'))
    <li class="active">{{ trans('storefront::account.links.my_account') }}</li>
@else
    <li><a href="{{ route('account.dashboard.index') }}">{{ trans('storefront::account.links.my_account') }}</a></li>
@endif

@yield('account_breadcrumb')
@endsection         
@yield('content_right') 

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


              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>