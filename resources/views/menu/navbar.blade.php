<div class="logo">
    <img src="{{ asset('Gunjek/static/image/LOGO.png') }}" alt="logo">
</div>
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