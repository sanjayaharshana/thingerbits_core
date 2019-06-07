<aside class="main-sidebar">
    <header class="main-header clearfix">
        <a class="logo" href="{{ route('admin.dashboard.index') }}">
            <span class="logo-lg">ThingerBits Core</span>
        </a>

        <a href="javascript:void(0);" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <i aria-hidden="true" class="fa fa-bars"></i>
        </a>
    </header>

    <section class="sidebar">
        {!! $sidebar !!}

       
        <li class="" style="font-size: small;padding-top: 10px;padding-bottom: 10px;padding-right: 17px;">
            <a href="admin/packgenerator" class="">
                <i class="fa fa-cogs"></i>
                <span style="padding-left: 09px;">Package Creator</span>
            </a>
        </li>
      
    </section> 
</aside>
