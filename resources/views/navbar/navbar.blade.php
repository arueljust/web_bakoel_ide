<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <!-- <img src="/img/bakoelide text warna Logo.png" alt="Logo" style="max-width: 100%; height: auto;"> -->


        <h1 id="lg" class="text-primary" style="color: #f26522 !important;">bakoel <Span id="lg2"
                style="color: #f89920;">Ide</Span></h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('home') }}" class="nav-item nav-link me-5 {{ Request::is('/') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}"
                class="nav-item nav-link me-5 {{ Request::is('about') ? 'active' : '' }}">About</a>
            <a href="{{route('blog')}}" class="nav-item nav-link me-5 {{ Request::is('blog') ? 'active' : '' }}">Blog</a>
            <a href="{{route('services')}}"
                class="nav-item nav-link me-5 {{ Request::is('services') ? 'active' : '' }}">Services</a>
            <!-- <a href="blog.html" class="nav-item nav-link">Blogs</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link" data-bs-toggle="dropdown">
                        <span class="dropdown-toggle">Pages</span>
                    </a>
                    <div class="dropdown-menu m-0">
                        <a href="feature.html" class="dropdown-item">Our Features</a>
                        <a href="team.html" class="dropdown-item">Our team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="offer.html" class="dropdown-item">Our offer</a>
                        <a href="FAQ.html" class="dropdown-item">FAQs</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div> -->
            <a href="{{route('webinar')}}"
                class="nav-item nav-link me-5 {{ Request::is('webinar') ? 'active' : '' }}">Webinar</a>
            <a href="{{route('contact')}}" class="nav-item nav-link me-5 {{ Request::is('contact') ? 'active' : '' }}">Contact
                Us</a>


        </div>
        <!-- <a href="#" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Get Started</a> -->
    </div>
</nav>
