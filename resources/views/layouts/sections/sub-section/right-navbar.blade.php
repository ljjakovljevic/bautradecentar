<!-- Authentication Links -->
@guest
    <li>
        <a href="{{ route('login') }}">
            <i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp; Login
        </a>
    </li>
    <li>
        <a href="{{ route('register') }}">
            <i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp; Register
        </a>
    </li>
@else
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">
            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();"
                >
                    <i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp; Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </li>
@endguest
