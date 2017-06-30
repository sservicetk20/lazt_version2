<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <div class="text-center letra-p">
                        <span class="clear">
                            <i class="material-icons">account_box</i>
                        </span>
                    </div>
                <span class="block m-t-xs letra-p text-center">
                    <p>{{ Auth::user()['email'] }}</p>
                 </span> 
                </div>
                <div class="logo-element">
                    <i class="material-icons">account_box</i>
                </div>
            </li>
            <li>
                <a href="{{ url('admin/profiles/show') }}"><i class="fa fa-user"></i> <span class="nav-label">{{ __('Profile') }}</span></a>
            </li>
             <li>
                <a href="{{ url('admin/angels') }}"><i class="fa fa-envelope-open-o"></i> <span class="nav-label">{{ __('Angels') }}</span> </a>
            </li>
            <li>
                <a href="{{ url('admin/wishs') }}"><i class="fa fa-th-large"></i> <span class="nav-label">{{ __('Wish') }}</span> </a>
            </li>
             <li>
                <a href="{{ url('admin/planes') }}"><i class="fa fa-cc-paypal"></i> <span class="nav-label">{{ __('Plans') }}</span> </a>
            </li>
            <li>
                <a href="{{ url('admin/yoangel') }}"><i class="fa fa-users"></i> <span class="nav-label">Yo Como Angel</span></a>
            </li>
            <li>
                <a href="{{ url('admin/users') }}"><i class="fa fa-id-card"></i> <span class="nav-label">Miembros</span></a>
            </li>
            <li>
                <a href="{{ url('admin/ordens') }}"><i class="fa fa-money"></i> <span class="nav-label">Ordenes</span></a>
            </li>
            <li>
                <a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> <span class="nav-label">Salir</span> </a>
            </li>
        </ul>

    </div>
</nav>


