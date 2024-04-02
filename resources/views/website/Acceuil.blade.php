@extends("layouts.template")
@section("contenu")
{{-- c'est le slider --}}"
<div class="slider-area">
    <div class="container">
        <div class="slider-active-3 owl-carousel slider-hm8 owl-dot-style">
            <div class="slider-height-6 d-flex align-items-center justify-content-center bg-img" style="background-image:url({{asset('assets/img/slider/slider-6.jpg')}});">
                <div class="slider-content-5 slider-animated-1 text-center">
                    <h3 class="animated">New Arrival</h3>
                    <h1 class="animated">Final Sale</h1>
                    <p class="animated">30% off Summer Vacation</p>
                </div>
            </div>
            <div class="slider-height-6 d-flex align-items-center justify-content-center bg-img" style="background-image:url({{asset('assets/img/slider/slider-6-1.jpg')}});">
                <div class="slider-content-5 slider-animated-1 text-center">
                    <h3 class="animated">New Arrival</h3>
                    <h1 class="animated">Final Sale</h1>
                    <p class="animated">30% off Summer Vacation</p>
                </div>
            </div>
            <div class="slider-height-6 d-flex align-items-center justify-content-center bg-img" style="background-image:url({{asset('assets/img/slider/slider-6-2.jpg')}});">
                <div class="slider-content-5 slider-animated-1 text-center">
                    <h3 class="animated">New Arrival</h3>
                    <h1 class="animated">Final Sale</h1>
                    <p class="animated">30% off Summer Vacation</p>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- c'est la collection --}}"
<div class="collections-area pt-100 pb-95">
    <div class="container">
        <div class="section-title-3 mb-40">
            <h4>Collections</h4>
        </div>
        <div class="collection-wrap">
            <div class="collection-active owl-carousel owl-dot-none">
                <div class="collection-product">
                    <div class="collection-img">
                        <a href="product-details.html"><img src="{{asset('assets/img/product/hm8-pro-1.jpg') }}"></a>
                    </div>
                    <div class="collection-content text-center">
                        <span>4 Products</span>
                        <h4><a href="product-details.html">Living Room</a></h4>
                    </div>
                </div>
                <div class="collection-product">
                    <div class="collection-img">
                        <a href="product-details.html"><img src="{{asset('assets/img/product/hm8-pro-2.jpg') }}"></a>
                    </div>
                    <div class="collection-content text-center">
                        <span>4 Products</span>
                        <h4><a href="product-details.html">Living Room</a></h4>
                    </div>
                </div>
                <div class="collection-product">
                    <div class="collection-img">
                        <a href="product-details.html"><img src="{{asset('assets/img/product/hm8-pro-3.jpg') }}"></a>
                    </div>
                    <div class="collection-content text-center">
                        <span>4 Products</span>
                        <h4><a href="product-details.html">Living Room</a></h4>
                    </div>
                </div>
                <div class="collection-product">
                    <div class="collection-img">
                        <a href="product-details.html"><img src="{{asset('assets/img/product/hm8-pro-4.jpg') }}"></a>
                    </div>
                    <div class="collection-content text-center">
                        <span>4 Products</span>
                        <h4><a href="product-details.html">Living Room</a></h4>
                    </div>
                </div>
                <div class="collection-product">
                    <div class="collection-img">
                        <a href="product-details.html"><img src="{{asset('assets/img/product/hm8-pro-2.jpg') }}"></a>
                    </div>
                    <div class="collection-content text-center">
                        <span>4 Products</span>
                        <h4><a href="product-details.html">Living Room</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
