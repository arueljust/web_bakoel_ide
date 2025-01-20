<nav class="navbar">
    <div class="logo">
        {{-- <a href=""> --}}
        <img src="{{ asset('assets/icon/logo.png') }}" class="logo">
        {{-- </a> --}}
    </div>
    <ul class="nav-links">
        <li><a href="{{ route('home') }}" class="{{ Request::is('/*') ? 'active' : '' }}">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Product</a></li>
        <li><a href="#">Templates</a></li>
        <li><a href="{{ route('blog') }}" class="{{ Request::is('blog*') ? 'active' : '' }}">Blogs</a></li>
        <li><a href="{{ route('webinar') }}"class="{{ Request::is('webinar*') ? 'active' : '' }}">Webinar</a></li>
        <li><a href="#">Partnerships</a></li>
        <li><a href="#">Contact Us</a></li>
    </ul>
    <div class="icon-navbar">
        <div class="search-bar">
            <input type="text" placeholder="Search...">
        </div>
        <div class="icon">
            <a href="">
                <i class="fa-solid fa-bag-shopping"></i>
            </a>
        </div>
        <div class="icon user-icon">
            <a href="javascript:void(0);" id="userIcon">
                <i class="fa-solid fa-circle-user"></i>
            </a>
            <!-- Dropdown Menu -->
            <div class="dropdown-menu">
                <ul>
                    @auth
                        <li>
                            <p>Mawar Indah</p>
                        </li>
                        <li><a href="#"><i class="fa-solid fa-box"></i> Dashboard</a></li>
                        <li><a href="#"><i class="fa-solid fa-pen"></i> Profile</a></li>
                        <li><a href="#"><i class="fa-solid fa-earth-asia"></i> Language</a></li>
                        <li><a href="#"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
                    @endauth
                    @guest
                        <li><a href="#"><i class="fa-solid fa-earth-asia"></i> Language</a></li>
                        <li><a href="#"><i class="fa-solid fa-right-to-bracket"></i>Login</a></li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
    <div class="hamburger">
        <i class="fa-solid fa-ellipsis"></i>
    </div>
</nav>
