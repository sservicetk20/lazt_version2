<div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0;background-color:#00acc1">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="Auth::logout()"><i class="fa fa-bars"></i> </a>
        </div>
       <ul class="nav navbar-nav navbar-right">
                 <ul class="nav navbar-top-links navbar-right">
            <li>
                <span class="m-r-sm text-muted welcome-message">Bienvenidos a Lazt Actualmente Tienes el plan <strong>{{ Auth::user()->plan }}</strong> </span> 
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                    <i class="fa fa-envelope"></i>  <span class="label label-success">16</span>
                </a>
               
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell"></i>  <span class="label ">8</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/carrito') }}" class="dropdown-toggle count-info">
                    <i class="fa fa-shopping-bag"><span class="label label-danger"></span></i>
                </a>
                            </span>
                        </li>
        
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                       
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
    </nav>
</div>

 <!-- Right Side Of Navbar -->