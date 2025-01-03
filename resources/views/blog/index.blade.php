@extends('main')
@section('title', 'blog')
@section('carousel')
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item">
            <!-- <img src="img/carousel-1.jpg" class="img-fluid w-100" alt="Image"> -->
            <!-- <iframe src="img/carousel-1.jpg" frameborder="0" allowfullscreen></iframe> -->
            <video id="myVideo" class="w-100" style="width: 100vw; height: auto;" controls autoplay loop>
                <source src="{{ asset('img/compress/blog.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="carousel-caption">
                <div class="container">
                    <div class="row gy-0 gx-5">
                        <div class="text-sm-center text-md-end"></div>
                        <div class="col-lg-0 col-xl-5"></div>
                        <div class="col-xl-7 animated fadeInLeft">
                            <div class="container text-center py-5" style="max-width: 900px;">
                                <!-- <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h4>
                                                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                                        <li class="breadcrumb-item"><a href="about.html">About</a></li>
                                                        <li class="breadcrumb-item active text-primary">Service</li>
                                                        <li class="breadcrumb-item"><a href="contact.html">Contact</a></li>
                                                    </ol>     -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <section class="meetings-page" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="filters">
                                <ul>
                                    <li data-filter="*" class="active">All Blogs</li>
                                    <li data-filter=".soon">Soon</li>
                                    <li data-filter=".imp">Important</li>
                                    <li data-filter=".att">Attractive</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="row grid">
                                <div class="col-lg-4 templatemo-item-col all soon">
                                    <div class="meeting-item">
                                        <div class="thumb">
                                            <a href="meeting-details.html"><img src="assets2/images/meeting-01.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="down-content" style="background-color: #f7f3f3;">
                                            <div class="date">
                                                <h6>Nov <span>12</span></h6>
                                            </div>
                                            <a href="meeting-details.html">
                                                <h4>New Lecturers Meeting</h4>
                                            </a>
                                            <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 templatemo-item-col all imp">
                                    <div class="meeting-item">
                                        <div class="thumb">
                                            <a href="meeting-details.html"><img src="assets2/images/meeting-02.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="down-content" style="background-color: #f7f3f3;">
                                            <div class="date">
                                                <h6>Nov <span>14</span></h6>
                                            </div>
                                            <a href="meeting-details.html">
                                                <h4>Online Teaching Techniques</h4>
                                            </a>
                                            <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 templatemo-item-col all soon">
                                    <div class="meeting-item">
                                        <div class="thumb">
                                            <a href="meeting-details.html"><img src="assets2/images/meeting-03.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="down-content" style="background-color: #f7f3f3;">
                                            <div class="date">
                                                <h6>Nov <span>16</span></h6>
                                            </div>
                                            <a href="meeting-details.html">
                                                <h4>Network Teaching Concept</h4>
                                            </a>
                                            <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 templatemo-item-col all att">
                                    <div class="meeting-item">
                                        <div class="thumb">
                                            <a href="meeting-details.html"><img src="assets2/images/meeting-04.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="down-content" style="background-color: #f7f3f3;">
                                            <div class="date">
                                                <h6>Nov <span>18</span></h6>
                                            </div>
                                            <a href="meeting-details.html">
                                                <h4>Online Teaching Tools</h4>
                                            </a>
                                            <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 templatemo-item-col all att">
                                    <div class="meeting-item">
                                        <div class="thumb">
                                            <a href="meeting-details.html"><img src="assets2/images/meeting-02.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="down-content" style="background-color: #f7f3f3;">
                                            <div class="date">
                                                <h6>Nov <span>22</span></h6>
                                            </div>
                                            <a href="meeting-details.html">
                                                <h4>New Teaching Techniques</h4>
                                            </a>
                                            <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 templatemo-item-col all imp">
                                    <div class="meeting-item">
                                        <div class="thumb">
                                            <a href="meeting-details.html"><img src="assets2/images/meeting-03.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="down-content" style="background-color: #f7f3f3;">
                                            <div class="date">
                                                <h6>Nov <span>24</span></h6>
                                            </div>
                                            <a href="meeting-details.html">
                                                <h4>Technology Conference</h4>
                                            </a>
                                            <p>TemplateMo is the best website<br>when it comes to Free CSS.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 templatemo-item-col all imp att">
                                    <div class="meeting-item">
                                        <div class="thumb">
                                            <a href="meeting-details.html"><img src="assets2/images/meeting-01.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="down-content" style="background-color: #f7f3f3;">
                                            <div class="date">
                                                <h6>Nov <span>27</span></h6>
                                            </div>
                                            <a href="meeting-details.html">
                                                <h4>Online Teaching Techniques</h4>
                                            </a>
                                            <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 templatemo-item-col all soon imp">
                                    <div class="meeting-item">
                                        <div class="thumb">
                                            <a href="meeting-details.html"><img src="assets2/images/meeting-02.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="down-content" style="background-color: #f7f3f3;">
                                            <div class="date">
                                                <h6>Nov <span>28</span></h6>
                                            </div>
                                            <a href="meeting-details.html">
                                                <h4>Instant Lecture Design</h4>
                                            </a>
                                            <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 templatemo-item-col all att soon">
                                    <div class="meeting-item">
                                        <div class="thumb">
                                            <a href="meeting-details.html"><img src="assets2/images/meeting-03.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="down-content" style="background-color: #f7f3f3;">
                                            <div class="date">
                                                <h6>Nov <span>30</span></h6>
                                            </div>
                                            <a href="meeting-details.html">
                                                <h4>Online Social Networking</h4>
                                            </a>
                                            <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="pagination">
                                <ul>
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
    <h6>footer</h6>
@endsection
@push('script')
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
            var
                direction = section.replace(/#/, ''),
                reqSection = $('.section').filter('[data-section="' + direction + '"]'),
                reqSectionPos = reqSection.offset().top - 0;

            if (isAnimate) {
                $('body, html').animate({
                        scrollTop: reqSectionPos
                    },
                    800);
            } else {
                $('body, html').scrollTop(reqSectionPos);
            }

        };

        var checkSection = function checkSection() {
            $('.section').each(function() {
                var
                    $this = $(this),
                    topEdge = $this.offset().top - 80,
                    bottomEdge = topEdge + $this.height(),
                    wScroll = $(window).scrollTop();
                if (topEdge < wScroll && bottomEdge > wScroll) {
                    var
                        currentId = $this.data('section'),
                        reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                    reqLink.closest('li').addClass('active').
                    siblings().removeClass('active');
                }
            });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
            e.preventDefault();
            showSection($(this).attr('href'), true);
        });

        $(window).scroll(function() {
            checkSection();
        });
    </script>
@endpush
