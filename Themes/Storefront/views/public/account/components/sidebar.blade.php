

<body class="">
    <div class="wrapper ">
      <div class="sidebar" data-color="white" data-active-color="danger">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
        <div class="logo">
          <a href="" class="simple-text logo-mini">
            <div class="logo-image-small">
             
            </div>
          </a>
          <a href="" class="simple-text logo-normal">
           Thingerbits
            <!-- <div class="logo-image-big">
              <img src="../assets/img/logo-big.png">
            </div> -->
          </a>
        </div>
        <div class="sidebar-wrapper">
          <ul class="nav">
            <li class="{{ Request::is('account') ? 'active' : '' }}">
              <a href="{{ route('account.dashboard.index') }}">
                <i class="nc-icon nc-bank"></i>
                <p>Dashboard</p>
              </a>
            </li>

            <li class="">
              <a href="">
                <i class="nc-icon nc-pin-3"></i>
                <p>My Courses</p>
              </a>
            </li>
            <li class="{{ Request::is('account/orders') ? 'active' : '' }}">
              <a href="{{ route('account.orders.index') }}">
                <i class="nc-icon nc-bell-55"></i>
                <p>{{ trans('storefront::account.links.my_orders') }}</p>
              </a>
            </li>
            <li class="{{ Request::is('account/wishlist') ? 'active' : '' }}">
              <a href="{{ route('account.wishlist.index') }}">
                <i class="nc-icon nc-single-02"></i>
                <p>Product Wishlist</p>
              </a>
            </li>
            <li class="{{ Request::is('account/profile') ? 'active' : '' }}">
              <a href="{{ route('account.profile.edit') }}">
                <i class="nc-icon nc-tile-56"></i>
                <p>Profile</p>
              </a>
            </li>
            <li class="{{ Request::is('account/reviews') ? 'active' : '' }}">
              <a href="{{ route('account.reviews.index') }}">
                <i class="nc-icon nc-caps-small"></i>
                <p>{{ trans('storefront::account.links.my_reviews') }}</p>
              </a>
            </li>
            <li class="active-pro">
              <a href="/shop">
                <i class="fa fa-shopping-cart"></i>
                <p>Shop</p>
              </a>
            </li>
            <li class="active-pro" style="bottom: 60px;">
                <a href="{{ route('home') }}">
                  <i class="fa fa-home"></i>
                  <p>Go Home</p>
                </a>
              </li>
          </ul>
        </div>
      </div>

      
