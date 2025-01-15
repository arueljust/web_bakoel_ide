<nav class="navbar">
    <div class="logo">
        <img src="{{ asset('assets/icon/logo.png') }}" class="logo">
    </div>
    <ul class="nav-links">
        <li><a href="#" class="active">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Product & Services</a></li>
        <li><a href="#">Templates</a></li>
        <li><a href="#">Blog & Tutorials</a></li>
        <li><a href="#">Partnerships</a></li>
        <li><a href="#">About Us</a></li>
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
                    <li><p>Mawar Indah</p></li>
                    <li><a href="#"><i class="fa-solid fa-box"></i> Dashboard</a></li>
                    <li><a href="#"><i class="fa-solid fa-pen"></i> Profile</a></li>
                    <li><a href="#"><i class="fa-solid fa-earth-asia"></i> Language</a></li>
                    <li><a href="#"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="hamburger">
        <i class="fa-solid fa-ellipsis"></i>
    </div>
</nav>
