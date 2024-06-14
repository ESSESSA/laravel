@extends("layouts.template")
@section("contenu")

<div class="breadcrumb-area pt-35 pb-35 bg-gray-3">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li class="active">About us </li>
            </ul>
        </div>
    </div>
</div>
<div class="welcome-area pt-100 pb-95">
    <div class="container">
        <div class="welcome-content text-center">
            <h1>Bienvenu dans le site flone</h1>
            <p>Notre site e-commerce spécialisé dans la vente de portraits est l'endroit idéal pour trouver des œuvres uniques et personnalisées.Sur notre site, vous pouvez parcourir une large sélection de styles artistiques, des portraits réalistes aux illustrations plus stylisées.  La qualité de nos portraits est notre priorité absolue, c'est pourquoi nous utilisons des matériaux de haute qualité et des techniques d'art traditionnelles pour garantir des résultats exceptionnels. Alors, si vous cherchez à immortaliser un moment spécial ou à offrir un cadeau unique, notre site e-commerce sur la vente de portraits est l'endroit parfait pour vous !</p>
        </div>
    </div>
</div>
<div class="banner-area pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="single-banner mb-30">
                    <a href="product-details.html"><img src="{{asset('assets/img/banner/banner-1.jpg')}}" alt=""></a>
                    <div class="banner-content">
                        <h3>Watches</h3>
                        <h4>Starting at <span>$99.00</span></h4>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="single-banner mb-30">
                    <a href="product-details.html"><img src="{{asset('assets/img/banner/banner-2.jpg')}}" alt=""></a>
                    <div class="banner-content">
                        <h3>Plo Bag</h3>
                        <h4>Starting at <span>$79.00</span></h4>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="single-banner mb-30">
                    <a href="product-details.html"><img src="{{asset('assets/img/banner/banner-3.jpg')}}" alt=""></a>
                    <div class="banner-content">
                        <h3>Sunglass</h3>
                        <h4>Starting at <span>$79.00</span></h4>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about-mission-area pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="single-mission mb-30">
                    <h3>Notre vision</h3>
                    <p>Notre vision est de rendre l'art accessible à tous, en offrant une variété de styles artistiques et de techniques pour répondre aux goûts et aux préférences de chacun</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="single-mission mb-30">
                    <h3>Notre mission </h3>
                    <p>Notre mission est de connecter les artistes talentueux du monde entier avec les personnes qui cherchent à capturer des moments spéciaux à travers des portraits. Nous voulons offrir une expérience simple et agréable, où les clients peuvent facilement commander leur portrait et collaborer avec les artistes pour obtenir un résultat qui dépasse leurs attentes.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="single-mission mb-30">
                    <h3>notre but</h3>
                    <p>Notre but ultime est de créer des souvenirs durables et de donner vie aux moments précieux à travers l'art. Nous croyons que chaque portrait est une œuvre d'art unique qui raconte une histoire et reflète l'individualité de chaque personne. En offrant des portraits de haute qualité et en mettant l'accent sur la satisfaction du client, nous espérons créer des expériences significatives et des œuvres d'art qui seront chéries pendant des années.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="funfact-area bg-gray-3 pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-count text-center mb-30">
                    <div class="count-icon">
                        <i class="pe-7s-portfolio"></i>
                    </div>
                    <h2 class="count">360</h2>
                    <span>project done</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-count text-center mb-30">
                    <div class="count-icon">
                        <i class="pe-7s-cup"></i>
                    </div>
                    <h2 class="count">690</h2>
                    <span>cups of coffee</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-count text-center mb-30">
                    <div class="count-icon">
                        <i class="pe-7s-light"></i>
                    </div>
                    <h2 class="count">420</h2>
                    <span>branding</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-count text-center mb-30 mrgn-none">
                    <div class="count-icon">
                        <i class="pe-7s-smile"></i>
                    </div>
                    <h2 class="count">100</h2>
                    <span>happy clients</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="team-area pt-95 pb-70">
    <div class="container">
        <div class="section-title-2 text-center mb-60">
            <h2>Team Members</h2>
            <p>Lorem ipsum dolor sit amet conse ctetu.</p>
        </div>
        <div class="row">
            
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-wrapper mb-30">
                    <div class="team-img">
                        <a href="#">
                            <img src="{{asset('assets/img/team/team-5.jpg')}}" alt="">
                        </a>
                        <div class="team-action">
                            <a class="facebook" href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a class="twitter" title="Wishlist" href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a class="instagram" href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4>Mr.ESSESSA AKUE FRANCK</h4>
                        <span>Developer </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-wrapper mb-30">
                    <div class="team-img">
                        <a href="#">
                            <img src="{{asset('assets/img/team/team-6.jpg')}}" alt="">
                        </a>
                        <div class="team-action">
                            <a class="facebook" href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a class="twitter" title="Wishlist" href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a class="instagram" href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4>Ms.AXELLE</h4>
                        <span>Designer </span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="brand-logo-area pb-100 about-brand-logo">
    <div class="container">
        <div class="brand-logo-active owl-carousel owl-dot-none">
            <div class="single-brand-logo">
                <img src="{{asset('assets/img/brand-logo/barnd-logo-1.png')}}" alt="">
            </div>
            <div class="single-brand-logo">
                <img src="{{asset('assets/img/brand-logo/barnd-logo-2.png')}}" alt="">
            </div>
            <div class="single-brand-logo">
                <img src="{{asset('assets/img/brand-logo/barnd-logo-3.png')}}" alt="">
            </div>
            <div class="single-brand-logo">
                <img src="{{asset('assets/img/brand-logo/barnd-logo-4.png')}}" alt="">
            </div>
            <div class="single-brand-logo">
                <img src="{{asset('assets/img/brand-logo/barnd-logo-5.png')}}" alt="">
            </div>
        </div>
    </div>
</div>



@endsection

