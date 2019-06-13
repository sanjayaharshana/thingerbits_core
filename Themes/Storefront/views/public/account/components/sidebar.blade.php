

<body class="">
    <div class="wrapper ">
      <div class="sidebar" data-color="white" data-active-color="danger">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
        <div class="logo">
          <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-small">
              <img src="../assets/img/logo-small.png">
            </div>
          </a>
          <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Creative Tim
            <!-- <div class="logo-image-big">
              <img src="../assets/img/logo-big.png">
            </div> -->
          </a>
        </div>
        <div class="sidebar-wrapper">
          <ul class="nav">
            <li class="active ">
              <a href="{{ route('account.dashboard.index') }}">
                <i class="nc-icon nc-bank"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li>
              <a href="{{ route('skillpane') }}">
                <i class="nc-icon nc-diamond"></i>
                <p>Hows your Skill</p>
              </a>
            </li>
            <li>
              <a href="{{ route('coursexp') }}">
                <i class="nc-icon nc-pin-3"></i>
                <p>Course Explorer</p>
              </a>
            </li>
            <li>
              <a href="{{ route('account.orders.index') }}">
                <i class="nc-icon nc-bell-55"></i>
                <p>{{ trans('storefront::account.links.my_orders') }}</p>
              </a>
            </li>
            <li>
              <a href="./user.html">
                <i class="nc-icon nc-single-02"></i>
                <p>User Profile</p>
              </a>
            </li>
            <li>
              <a href="./tables.html">
                <i class="nc-icon nc-tile-56"></i>
                <p>Table List</p>
              </a>
            </li>
            <li>
              <a href="./typography.html">
                <i class="nc-icon nc-caps-small"></i>
                <p>Typography</p>
              </a>
            </li>
            <li class="active-pro">
              <a href="./upgrade.html">
                <i class="nc-icon nc-spaceship"></i>
                <p>Upgrade to PRO</p>
              </a>
            </li>
          </ul>
        </div>
      </div>

      
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%"><br><br><br>                                                 
  <a href="" li class="w3-bar-item w3-button" > </a>                                             
  <a href="" li class="w3-bar-item w3-button" > </a>                                             
  <a href="" li class="w3-bar-item w3-button" > Course Explorer</a>                                      
  <a href="" li class="w3-bar-item w3-button" ></a>
  <a href="{{ route('account.wishlist.index') }}" li class="w3-bar-item w3-button" >Product Wishlist</a>
  <a href="{{ route('account.reviews.index') }}" li class="w3-bar-item w3-button" > {{ trans('storefront::account.links.my_reviews') }}</a>
  <a href="{{ route('account.profile.edit') }}" li class="w3-bar-item w3-button" >Profile</a>
</div>