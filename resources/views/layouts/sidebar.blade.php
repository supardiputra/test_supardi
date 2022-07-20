<div class="navbar-custom">
    <div class="container-fluid">
        <div id="navigation">
            <ul class="navigation-menu text-center">
                <li class="has-submenu ">
                    <a href="{{ route('dashboard') }}" {{ Request::segment(1) == 'dashboard' ? 'active' : '' }}">
                        <i class="typcn typcn-home"></i>
                        <span> Dashboard</span>
                    </a>
                </li>
                <li class="has-submenu ">
                    <a href="{{ route('user.index') }}" {{ Request::segment(1) == 'user' ? 'active' : '' }}">
                        <i class="typcn typcn-group"></i>
                        <span> User</span>
                    </a>
                </li>
                
                

            </ul>
        </div>
    </div>
</div>
