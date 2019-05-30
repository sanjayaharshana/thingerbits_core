<div class="user-area dropdown float-right">
        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="user-avatar rounded-circle" src="{{ (Theme::url('public/HousePan/images/admin.jpg')) }}" alt="User Avatar">
        </a>

        <div class="user-menu dropdown-menu">
            <a class="nav-link" href="{{ route('account.profile.edit') }}"><i class="fa fa- user"></i>My Profile</a>

            <a class="nav-link" href="{{ route('account.dashboard.index') }}"><i class="fa fa -cog"></i>Dashboard</a>

            <a class="nav-link" href="{{ route('logout') }}"><i class="fa fa-power -off"></i>Logout</a>
        </div>
    </div>