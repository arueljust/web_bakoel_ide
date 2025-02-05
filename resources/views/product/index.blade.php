@extends('main')
@section('title', 'products')

@section('hero')
    <section class="product-hero">
        <div class="product-hero-content">
            <h1>
                {{ $translator->translate('Designed Solutions for Your Business') }}
            </h1>
            <br>
            <p>{{ $translator->translate('Explore products and services tailored to enhance your business.') }}</p>
            <div class="product-hero-btn">
                <a href="{{ route('blank-page') }}">{{ $translator->translate('View All Packages') }}</a>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <section class="product-section">
        <div class="product-container">
            <div class="sortby-container">
                <select name="" id="">
                    <option value="">{{ $translator->translate('Sort By') }}</option>
                    <option value="">{{ $translator->translate('Latest') }}</option>
                    <option value="">{{ $translator->translate('Earliest') }}</option>
                </select>
            </div>
            <div class="product-content-container">
                <div class="filter-container">
                    <div class="filter1">
                        <h1 class="product-filter-title">{{ $translator->translate('Category') }}</h1>
                        <hr>
                        <ul>
                            <li class="active">{{ $translator->translate('Templates') }}</li>
                            <li>{{ $translator->translate('Service') }}</li>
                            <li>{{ $translator->translate('Bundle') }}</li>
                        </ul>
                    </div>
                    <div class="filter2">
                        <h1 class="product-filter-title">{{ $translator->translate('Price') }}</h1>
                        <hr>
                        <input type="range" id="price-range" class="slider" min="0" max="100000" value="50000">
                        <div class="slider-value">Rp<span id="price-value">50,000</span></div>
                    </div>
                </div>
                <div class="product-content">
                    <div class="product-grid">
                        <div class="content-item">
                            <img src="{{ asset('assets/images/webinar.jpg') }}" alt="">
                            <div class="webinar-desc">
                                <div class="webinar-desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p class="webinar-date-time">Rp 99.999</p>
                                </div>
                            </div>
                            <div class="product-btn">
                                <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Add') }}</a>
                                <a href="{{ route('blank-page') }}">{{ $translator->translate('Read More') }}</a>
                            </div>
                        </div>
                        <div class="content-item">
                            <img src="{{ asset('assets/images/webinar.jpg') }}" alt="">
                            <div class="webinar-desc">
                                <div class="webinar-desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p class="webinar-date-time">Rp 99.999</p>
                                </div>
                            </div>
                            <div class="product-btn">
                                <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Add') }}</a>
                                <a href="{{ route('blank-page') }}">{{ $translator->translate('Read More') }}</a>
                            </div>
                        </div>
                        <div class="content-item">
                            <img src="{{ asset('assets/images/webinar.jpg') }}" alt="">
                            <div class="webinar-desc">
                                <div class="webinar-desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p class="webinar-date-time">Rp 99.999</p>
                                </div>
                            </div>
                            <div class="product-btn">
                                <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Add') }}</a>
                                <a href="{{ route('blank-page') }}">{{ $translator->translate('Read More') }}</a>
                            </div>
                        </div>
                        <div class="content-item">
                            <img src="{{ asset('assets/images/webinar.jpg') }}" alt="">
                            <div class="webinar-desc">
                                <div class="webinar-desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p class="webinar-date-time">Rp 99.999</p>
                                </div>
                            </div>
                            <div class="product-btn">
                                <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Add') }}</a>
                                <a href="{{ route('blank-page') }}">{{ $translator->translate('Read More') }}</a>
                            </div>
                        </div>
                        <div class="content-item">
                            <img src="{{ asset('assets/images/webinar.jpg') }}" alt="">
                            <div class="webinar-desc">
                                <div class="webinar-desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p class="webinar-date-time">Rp 99.999</p>
                                </div>
                            </div>
                            <div class="product-btn">
                                <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Add') }}</a>
                                <a href="{{ route('blank-page') }}">{{ $translator->translate('Read More') }}</a>
                            </div>
                        </div>
                        <div class="content-item">
                            <img src="{{ asset('assets/images/webinar.jpg') }}" alt="">
                            <div class="webinar-desc">
                                <div class="webinar-desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p class="webinar-date-time">Rp 99.999</p>
                                </div>
                            </div>
                            <div class="product-btn">
                                <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Add') }}</a>
                                <a href="{{ route('blank-page') }}">{{ $translator->translate('Read More') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="suggest">
            <h1>You might like : Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
        </div>
        <div class="suggest-cont">
            <div class="icon-cont">
                <img src="{{ asset('assets/icon/icon1.png') }}" alt="">
            </div>
            <div class="item-cont">
                <div class="content-item">
                    <img src="{{ asset('assets/images/webinar.jpg') }}" alt="">
                    <div class="webinar-desc">
                        <div class="webinar-desc-content">
                            <h3>
                                Lorem ipsum dolor sit amet
                            </h3>
                            <p class="webinar-date-time">Rp 99.999</p>
                        </div>
                    </div>
                    <div class="product-btn">
                        <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Add') }}</a>
                        <a href="{{ route('blank-page') }}">{{ $translator->translate('Read More') }}</a>
                    </div>
                </div>
                <div class="content-item">
                    <img src="{{ asset('assets/images/webinar.jpg') }}" alt="">
                    <div class="webinar-desc">
                        <div class="webinar-desc-content">
                            <h3>
                                Lorem ipsum dolor sit amet
                            </h3>
                            <p class="webinar-date-time">Rp 99.999</p>
                        </div>
                    </div>
                    <div class="product-btn">
                        <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Add') }}</a>
                        <a href="{{ route('blank-page') }}">{{ $translator->translate('Read More') }}</a>
                    </div>
                </div>
                <div class="content-item">
                    <img src="{{ asset('assets/images/webinar.jpg') }}" alt="">
                    <div class="webinar-desc">
                        <div class="webinar-desc-content">
                            <h3>
                                Lorem ipsum dolor sit amet
                            </h3>
                            <p class="webinar-date-time">Rp 99.999</p>
                        </div>
                    </div>
                    <div class="product-btn">
                        <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Add') }}</a>
                        <a href="{{ route('blank-page') }}">{{ $translator->translate('Read More') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        const slider = document.getElementById('price-range');
        const priceValue = document.getElementById('price-value');

        slider.addEventListener('input', () => {
            const value = parseInt(slider.value).toLocaleString('id-ID'); // Format angka
            priceValue.textContent = value;
        });
    </script>
@endpush
