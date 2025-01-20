@extends('main')
@section('title', 'home')
@section('hero')
    {{-- hero --}}
    <section class="hero">
        <div class="hero-content">
            <h1>Empower Your Business <br>
                With creative <br>
                solution
            </h1>
            <p>Explore personalized templates, tutorials, and <br>
                solutions tailored to small businesses.</p>
            <div class="btn-group">
                <a href="#" class="btn-primary">Start Personalizing</a>
                <a href="#" class="btn-secondary">Explore Templates</a>
            </div>
        </div>
    </section>
@endsection
@section('content')
    {{-- scores --}}
    <section>
        <div class="score-section">
            <div class="chat-img">
                <img src="{{ asset('assets/images/chat.png') }}" alt="">
            </div>
            <div class="score-container">
                <h1><span>Measure your brand's </span>potential with <span>our scoring tool</span></h1>
                <p>get real-time insights and recomendations tailored to your business.</p>
                <div class="score-btn">
                    <a href="">start scoring now !</a>
                </div>
            </div>
            <div class="plan-container">
                <h1>who are<span> you</span>? let's <span>customize your experience </span></h1>
                <div class="plan-container-grid">
                    <div class="container-one">
                        <i class="fa-solid fa-bag-shopping"></i>
                        <p class="text-with-border">small business owner</p>
                    </div>
                    <div class="container-two">
                        <i class="fa-solid fa-headset"></i>
                        <p class="text-with-border">digital marketer</p>
                    </div>
                    <div class="container-three">
                        <i class="fa-solid fa-comments"></i>
                        <p class="text-with-border">creative consultant</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- templates --}}
    <section>
        <div class="templates-section">
            <div class="templates-container">
                <h1>creative <span class="colored">templates</span> <br>
                    <em>
                        for <span class="colored">every</span> need
                    </em>
                </h1>
                <div class="templates-view">
                    <img src="{{ asset('assets/images/webinar.jpg') }}" alt="">
                    <img src="{{ asset('assets/images/webinar.jpg') }}" alt="">
                    <img src="{{ asset('assets/images/webinar.jpg') }}" alt="">
                    <img src="{{ asset('assets/images/webinar.jpg') }}" alt="">
                    <img src="{{ asset('assets/images/webinar.jpg') }}" alt="">
                    <img src="{{ asset('assets/images/webinar.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    {{-- price --}}
    <section>
        <div class="price-section">
            <div class="price-container">
                <div class="price-img">
                    <img src="{{ asset('assets/images/webinar.jpg') }}" alt="">
                </div>
                <div class="price-desc">
                    <h1>Lorem ipsum dolor</h1>
                    <hr>
                    <h1>Description</h1><br>
                    <h1>Price</h1>
                    <hr>
                    Rp. 99.999

                </div>
            </div>
        </div>
    </section>

    {{-- testimonial --}}
    <section>
        <div class="testimonial-section">
            <div class="title">
                <h2>
                    Testimonials
                </h2>
                <br>
                <p>
                    What Our Clients Say About Us
                </p>
            </div>
            <div class="testimonial-container">
                <div class="left-arrow"><img src="{{ asset('assets/icon/arrow-left.png') }}" alt=""></div>
                <div class="testimonial-img">
                    <img src="{{ asset('img/Dwi Nauli.jpg') }}" alt="">
                </div>
                <div class="testimonial-desc">
                    <div class="container">
                        <div class="name"> <b> Mawar Indah</b> ▪️ Founder Bunga Indonesia</div><br>
                        <p>
                            "Terima kasih banyak atas jasa pembuatan websitenya! Prosesnya cepat, hasilnya sesuai
                            ekspektasi, dan desainnya sangat profesional. Timnya juga ramah dan sabar menghadapi revisi dari
                            saya. Sekarang website bisnis saya terlihat lebih menarik dan mudah diakses pelanggan.
                            Recommended banget! 🌟"
                        </p><br>
                        <a href="" class="testimonial-btn">View Case Study</a>
                    </div>
                </div>
                <div class="right-arrow"><img src="{{ asset('assets/icon/arrow-right.png') }}" alt=""></div>
            </div>
        </div>
    </section>

@endsection
