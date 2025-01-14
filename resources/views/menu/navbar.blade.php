{{-- <div class="Navbar">  --}}
    <div class="logo">
        <img src="{{ asset('Gunjek/static/image/LOGO.png') }}" alt="logo">
    </div>
    <div class="navlinks">
        <ul class="listoflinks">
            <li><a href="{{ url('/') }}">Beranda</a></li>
            @if (Auth::check() && Auth::user()->role =='user')
            <li><a href="{{ url('order') }}">Order</a></li>
            @elseif(Auth::check() && Auth::user()->role =='driver')
            <li><a href="{{ url('driver') }}">Driver</a></li>
            @endif
            <li><a href="{{ url('lokasi') }}">Lokasi</a></li>
            <li><a href="{{ url('helpuser') }}">Bantuan</a></li>
        </ul>
    </div>
    @auth
    <div class="profile-info" id="profile-info">
        <div class="profile-user" name="profile-user">
            <img src="{{asset('Gunjek/static/image/user_male.png')}}" alt="driverlogo" class="userlogo">
        </div>
        <div class="profile-name">
            <p name="profile-name">{{Auth::user()->name}}</p>
            <p name="profile-npm">{{Auth::user()->npm}}</p>
        </div>
        <div>
            <form action="{{ url('/logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="dropdown-item" id="logout-button">
                    <i class="align-middle me-1" data-feather="power"></i> Log out
                </button>
            </form>   
        </div>
    </div>
    @endauth
{{-- </div> --}}
