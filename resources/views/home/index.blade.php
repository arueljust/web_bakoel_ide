@extends('main')
@section('title', 'home')
@section('carousel')
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item">
            <video autoplay muted loop id="bg-video" width="640" height="360">
                <source src="{{asset('img/compress/mtg.mp4')}}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="carousel-caption">
                <div class="container">
                    <div class="row gy-0 gx-5">
                        <div class="col-lg-0 col-xl-5"></div>
                        <div class="col-xl-7 animated fadeInLeft">
                            <div class="text-sm-center text-md-end">
                                <h4 class="text-light text-uppercase fw-bold mb-4">Welcome To <span
                                        style="color: #f26522 !important;">Bakoel </span><Span
                                        style="color: #f89920;">Ide</Span></span></h4>
                                <h4 class="display-33 text-uppercase text-white mb-4" id="bkl"> Here to
                                    bring your brand to life with smart, personalized digital marketing that
                                    elevates your business and boosts growth..</h4>
                                <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i
                                            class="fas fa-play-circle me-2"></i> Watch Video</a>
                                    <!-- <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a> -->
                                </div>
                                <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                    <h2 class="text-white me-2">Follow Us:</h2>
                                    <div class="d-flex justify-content-end ms-2">
                                        <a class="btn btn-md-square btn-light rounded-circle me-2" target="_blank"
                                            href="https://www.facebook.com/bakoelide.id"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle mx-2" target="_blank"
                                            href="https://www.tiktok.com/@bakoelide?_t=8quixMN5XgG&_r=1"><i
                                                class="fab fa-tiktok"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle mx-2" target="_blank"
                                            href="https://www.instagram.com/bakoelide.id?igsh=MTF5Y3E4NDYwMG53OQ=="><i
                                                class="fab fa-instagram"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle ms-2" target="_blank"
                                            href="https://www.linkedin.com/company/bakoel-ide/ "><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-carousel-item">
            <video autoplay muted loop id="bg-video2" style="width: 50%;">
                <source src="{{asset('img/compress/hdev.mp4')}}" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <div class="carousel-caption">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-12 animated fadeInUp">
                            <div class="text-center">
                                <h4 class="text-light text-uppercase fw-bold mb-4">Welcome To <span
                                        style="color: #f26522 !important;">Bakoel </span><Span
                                        style="color: #f89920;">Ide</Span></span></h4>
                                <h4 class="display-33 text-uppercase text-white mb-4" id="bkl2">We help
                                    businesses boost their revenue with smart, tailored digital marketing
                                    strategies.</h4>
                                <div class="d-flex justify-content-center flex-shrink-0 mb-4">
                                    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i
                                            class="fas fa-play-circle me-2"></i> Watch Video</a>
                                    <!-- <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a> -->
                                </div>
                                <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                    <h2 class="text-white me-2">Follow Us:</h2>
                                    <div class="d-flex justify-content-end ms-2">
                                        <a class="btn btn-md-square btn-light rounded-circle me-2" target="_blank"
                                            href="https://www.facebook.com/bakoelide.id"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle mx-2" target="_blank"
                                            href="https://www.tiktok.com/@bakoelide?_t=8quixMN5XgG&_r=1"><i
                                                class="fab fa-tiktok"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle mx-2" target="_blank"
                                            href="https://www.instagram.com/bakoelide.id?igsh=MTF5Y3E4NDYwMG53OQ=="><i
                                                class="fab fa-instagram"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle ms-2" target="_blank"
                                            href="https://www.linkedin.com/company/bakoel-ide/ "><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div style="margin-top: 200px !important">
        <div class="container-fluid about justify-content-end " style="min-height: 100vh;">
            <div class="justify-content-end">
                <div class="row align-items-center justify-content-end ">
                    <div class="d-flex wow fadeInLeft justify-content-evenly flex-column flex-md-row "
                        data-wow-delay="0.2s">
                        <div></div>
                        <div>
                            <h1 class="display-3 display-sm-3 display-md-2 mb-4 text-center">
                                Building <span class="d-inline d-md-block">Brands to</span>
                                <span class="d-inline d-md-block">Not Just</span>
                                <span class="d-inline d-md-block">Survive but</span>
                                <span class="d-inline d-md-block">Thrive</span>
                            </h1>
                        </div>
                        <div>
                            <p class="text-start mt-4"
                                style="font-size: 20px; color: #000; font-family: 'Garet'; font-weight:600;">
                                At Bakoel Ide, we turn creative ideas into real <br>
                                impact. We believe every great idea can transform <br>
                                brands and help them grow.
                            </p>
                            <p class="text-start mt-4"
                                style="font-size: 20px; color: #000; font-family: 'Garet'; font-weight:600;">
                                From branding to marketing campaigns, we bring<br>
                                strategies that connect emotionally and deliver <br>
                                results. With us, your brand won’t just survive—it <br>
                                will thrive.
                            </p>
                            <p class="text-start mt-4"
                                style="font-size: 20px; color: #000; font-family: 'Garet'; font-weight:600;">
                                Let’s create something extraordinary together!
                            </p>
                            <!-- <button style="padding: 3% 0; background-color: #FF914D;" class="btn btn-primary btn-lg col-lg-6 rounded-pill"><span style="    font-weight: lighter; color: #000; font-family: 'Garet';">Watch videos</span> </button>  -->
                            <div class="d-grid gap-2 col-9 mt-5">
                                <button style="padding: 6% 0; background-color: #FF914D;"
                                    class="rounded-pill btn btn-primary" type="button"><span
                                        style="font-size: 20px; color: #000; font-family: 'Garet'; font-weight:600;">Watch
                                        videos</span></button>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xl-3 wow fadeInLeft " data-wow-delay="0.2s">
                                                <div>
                                                    <h1 class="display-4 mb-4">
                                                        Building
                                                        Brands to<br>
                                                         Not Just <br>
                                                        Survive but <br>
                                                         Thrive</h1>

                                                </div>
                                            </div>


                                            <div class="col-xl-6 wow fadeInRight  justify-content-end" data-wow-delay="0.2s">
                                                <p style="font-size:21px; color: #000; font-family: 'Garet';">At Bakoel Ide, we turn creative ideas into real
                                                    <br> impact. We believe every great idea can transform <br> brands and help them grow.</p>
                                                <p style="font-size:21px; color: #000; font-family: 'Garet';">From branding to marketing campaigns, we bring strategies <br>
                                                     that connect emotionally and deliver <br> results. With us, your brand won’t just survive—it <br> will thrive.</p>
                                                <p style="font-size:21px; color: #000; font-family: 'Garet';">Let’s create something extraordinary together!</p>

                                                <div class="d-grid gap-2 col-6 ">
                                                    <button style="padding: 7% 0; background-color: #FF914D;" class="rounded-pill btn btn-primary" type="button"><span style=" font-size: large;   font-weight: lighter; color: #000; font-family: 'Garet';">Watch videos</span></button>

                                                  </div>
                                            </div> -->
                </div>
            </div>
        </div>

        <div class="header-carousel owl-carousel">
            <div class="header-carousel-item2">
                <video autoplay muted loop id="bg-video" width="640" height="360">
                    <source src="/img/compress/design.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="overlay"></div>
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row gy-0 gx-5">
                            <div class="col-lg-0 col-xl-5"></div>
                            <div class="col-xl-12 animated fadeInLeft">
                                <div class="text-sm-end text-md-start">
                                    <div>
                                        <h1 class="display-3 display-sm-3 display-md-2 text-light ">
                                            WHEN IDEAS MOVE, <span class="d-inline d-md-block">BRANDS THRIVE</span>
                                        </h1>
                                    </div>
                                    <h4 style="font-family: 'Garet-Bold';" class="display-6 text-white mb-4"
                                        id="bkl">
                                        When we connect, collaborate, and bring ideas to life,
                                        <span class="d-inline d-md-block text-light"> your brand thrives and grows
                                            naturally. </span>
                                    </h4>
                                    <!-- <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                                                            <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a>
                                                                       </div> -->
                                    <!-- <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                                                            <h2 class="text-white me-2">Follow Us:</h2>
                                                                            <div class="d-flex justify-content-end ms-2">
                                                                                <a class="btn btn-md-square btn-light rounded-circle me-2" target="_blank" href="https://www.facebook.com/bakoelide.id"><i class="fab fa-facebook-f"></i></a>
                                                                                <a class="btn btn-md-square btn-light rounded-circle mx-2" target="_blank" href="https://www.tiktok.com/@bakoelide?_t=8quixMN5XgG&_r=1"><i class="fab fa-tiktok"></i></a>
                                                                                <a class="btn btn-md-square btn-light rounded-circle mx-2" target="_blank" href="https://www.instagram.com/bakoelide.id?igsh=MTF5Y3E4NDYwMG53OQ=="><i class="fab fa-instagram"></i></a>
                                                                                <a class="btn btn-md-square btn-light rounded-circle ms-2" target="_blank" href="https://www.linkedin.com/company/bakoel-ide/ "><i class="fab fa-linkedin-in"></i></a>
                                                                            </div>
                                                                        </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid about justify-content-end " style=" background-color: #ffffff; min-height: 100vh;">
            <div class="justify-content-end">
                <div class="row align-items-center justify-content-center ">
                    <div style="margin-top:200px !important;"
                        class="d-flex wow fadeInLeft justify-content-evenly flex-column flex-md-row "
                        data-wow-delay="0.2s">
                        <div>
                            <h6 class="display-5 display-sm-5 display-md-5 mb-4 " style="font-family: 'Garet-Bold';">
                                When <span style="color: #FF914D;">we connect,</span> <span style="color: #FF914D;"
                                    class="d-inline d-md-block">and bring ideas <span style="color: black;">to
                                        life,</span></span>
                                <span style="color: #FF914D;" class="d-inline d-md-block">your brand thrives</span>
                                <span style="color: #FF914D;" class="d-inline d-md-block">and grows <span
                                        style="color: black;">naturally.</span></span>
                            </h6>
                            <div class="d-grid gap-2 col-12 ">
                                <hr style="border: none; border-top: 3px solid #000000; margin: 20px 0;">
                            </div>
                        </div>
                        <div>
                            <p class="text-start" style="font-size: 23px; color: #000; font-family: 'Garet';">
                                This reflects Bakoel Ide’s approach in <br>
                                building strong partnerships with clients <br>
                                like Digihealth, Lesaffre, Kawasaki Motor, <br>
                                Meg Cheese, and ATM Bersama.
                            </p>

                            <p class="text-start" style="font-size: 23px; color: #000; font-family: 'Garet';">
                                By listening to their needs and crafting <br>
                                fresh, creative solutions, we help elevate <br>
                                their brands through impactful social <br>
                                media campaigns, boosting engagement <br>
                                and driving business success effortlessly.
                            </p>
                        </div>
                    </div>
                    <!-- <div class="col-xl-3 wow fadeInLeft " data-wow-delay="0.2s">
                                                <div>
                                                    <h1 class="display-4 mb-4">
                                                        Building
                                                        Brands to<br>
                                                         Not Just <br>
                                                        Survive but <br>
                                                         Thrive</h1>

                                                </div>
                                            </div>


                                            <div class="col-xl-6 wow fadeInRight  justify-content-end" data-wow-delay="0.2s">
                                                <p style="font-size:21px; color: #000; font-family: 'Garet';">At Bakoel Ide, we turn creative ideas into real
                                                    <br> impact. We believe every great idea can transform <br> brands and help them grow.</p>
                                                <p style="font-size:21px; color: #000; font-family: 'Garet';">From branding to marketing campaigns, we bring strategies <br>
                                                     that connect emotionally and deliver <br> results. With us, your brand won’t just survive—it <br> will thrive.</p>
                                                <p style="font-size:21px; color: #000; font-family: 'Garet';">Let’s create something extraordinary together!</p>

                                                <div class="d-grid gap-2 col-6 ">
                                                    <button style="padding: 7% 0; background-color: #FF914D;" class="rounded-pill btn btn-primary" type="button"><span style=" font-size: large;   font-weight: lighter; color: #000; font-family: 'Garet';">Watch videos</span></button>

                                                  </div>
                                            </div> -->
                </div>
            </div>
        </div>
        <div class="container-fluid offer-section"
            style="min-height: 140vh; text-align: start; background-position: center center; width: 100%; background:  url(../img/customer-satisfaction-service-care-problem-solving.jpg); background-repeat: no-repeat; background-size: cover; display: flex; flex-direction: column;">

            <div class="container pb-5 mt-auto">
                <div class="row gy-0 gx-5">
                    <div class="col-lg-0 col-xl-5"></div>
                    <div class="col-xl-12 animated fadeInLeft">
                        <div class="text-sm-end text-md-start">
                            <div>
                                <h1 class="display-6 display-sm-3 display-md-2 mb-5 text-light">
                                    <a href="{{ route('services') }}" class="text-light">Our Service</a>

                                </h1>
                                <h1 class="display-3 display-sm-3 display-md-2 text-light">
                                    Moving ideas,
                                    <span class="d-inline d-md-block">tailoring strategies,</span>
                                    <span class="d-inline d-md-block">thriving brands.</span>
                                </h1>
                            </div>
                            <h4 style="font-family: 'Garet-Bold';" class="display-6 text-white mb-4" id="bkl">
                                We craft impactful solutions that drive innovation,
                                <span class="d-inline d-md-block text-light">deliver precision, and elevate your brand to
                                    new heights.</span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-carousel owl-carousel">
            <div class="header-carousel-item2">
                <img src="./img/06.jpg" id="bg-video" width="10" height="360">
                </img>
                <div class="overlay"></div>
                <div class="carousel-caption">
                    <div class="container ">
                        <div class="row gy-0 gx-5">
                            <div class="col-lg-0 col-xl-5"></div>
                            <div class="col-xl-12 animated fadeInLeft">
                                <div class="text-sm-end text-md-start">
                                    <div>
                                        <h1 class="display-3 display-sm-3 display-md-2 text-light">
                                            Crafted by budget,
                                            <span class="d-inline d-md-block">customized your needs.</span>
                                        </h1>
                                    </div>
                                    <h4 style="font-family: 'Garet-Bold';" class="display-6 text-white mb-4"
                                        id="bkl">
                                        This highlights our ability to deliver tailored solutions that match
                                        <span class="d-inline d-md-block text-light">your goals and budget, without
                                            compromising quality.</span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <h6>footer</h6>
@endsection
