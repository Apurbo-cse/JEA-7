@extends('master')
@section('title', 'Joypurhat Engineers Association')
@section('content')
<br><br><br>
<title>JEA - | Joypurhat Engineer's Association |</title>

<div class="header-bot">
    <div class="header-bot_inner_wthreeinfo_header_mid">

        <div class="col-md-4 header-middle">
            <form action="#" method="post">
                <input type="search" name="search" placeholder="Search here..." required="">
                <input type="submit" value=" ">

                <div class="clearfix"></div>
            </form>
        </div>

        <!-- header-bot -->
        <div class="col-md-5" style="text-align:center;">
            @foreach($contacts as $contact)
            <div>
                <h1 class="ml11">
                    <img src="{{asset('frontend/images/logo.png')}}" alt="" style="width:70px;height:70px;">
                    <span class="text-wrapper">
                        <span class="line line1"></span>
                        <span class="letters">{{$contact->name}}</span>
                    </span>
                </h1>
            </div>

        </div>

        <!-- header-bot -->
        <div class="col-md-3 agileits-social top_content">
            <ul class="social-nav model-3d-0 footer-social w3_agile_social">
                <li><a href="{{$contact->facebook}}" class="facebook">
                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                    </a></li>
                <li><a href="{{$contact->instagram}}" class="instagram">
                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                    </a></li>
                <li><a href="{{$contact->twitter}}" class="twitter">
                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                    </a></li>
                <li><a href="{{$contact->linkedin}}" class="linkedin">
                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                    </a></li>
                <li><a href="mailto:{{$contact->email}}" class="email">
                        <div class="front"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                    </a></li>
                <li><a href="tel:+88{{$contact->phone}}" class="cell">
                        <div class="front"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    </a></li>
            </ul>
        </div>

        @endforeach
        <div class="clearfix"></div>
    </div>
</div>
</div>

<section class="slider-area">
    <div class="sliders owl-carousel">
        @foreach($sliders as $slider)
        <div class="single-slide bg" style="background-image: url('{{asset($slider->image)}}');">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="slide-content">
                            <h4 style="color:white;">We are <span
                                    style="color:#11414B; font-weight:600;font-size:20px;text-shadow:5px slid white;">JEA</span>
                            </h4>
                            <h1 style="padding:15px;">{{$slider->title}}</h1>
                            <p style="padding:20px;">{{$slider->description}}</p>
                            <a href="about.html" class="box-btn">ccontact us <i
                                    class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
<br><br><br>
<!-- About Section start -->
<div class="container">
    @foreach($abouths as $abouth)
    <div class="row">
        <div class="col-lg-6 col-md-12 col-xs-12 info">
            <div class="about-wrapper wow fadeInLeft" data-wow-delay="0.3s">
                <div>
                    <div class="site-heading">
                        <p class="mb-3">{{$abouth->title}}</p>
                        <h4 class="sectionn-title">Learn Something {{$abouth->title}}</h4>
                    </div>
                    <div class="content">
                        <p>{{$abouth->description}}</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInRight" data-wow-delay="0.3s">
            <img class="img-fluid" src="{{asset($abouth->image)}}" alt="">
        </div>
    </div>
</div>
@endforeach
</div>
<!-- About Section End -->
<br>

<!--NOSSOS SERVICOS-->
<div id="servicos" class="block">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="sectionn-title wow fadeInDown" data-wow-delay="0.3s">Our Service</h2>
            <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                <a href="#" class="destaque">
                    <div class="img-container mb-3">
                        <img src="{{asset('frontend/service/destaque1.svg')}}" class="img-fluid" />
                    </div>
                    <h5 class="text-uppercase">Et sumi kapo</h5>
                    <p class="mb-0">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium
                    </p>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                <a href="#" class="destaque">
                    <div class="img-container mb-3">
                        <img src="{{asset('frontend/service/destaque2.svg')}}" class="img-fluid" />
                    </div>
                    <h5 class="text-uppercase">Lorem Ipsun</h5>
                    <p class="mb-0">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium
                    </p>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                <a href="#" class="destaque">
                    <div class="img-container mb-3">
                        <img src="{{asset('frontend/service/destaque3.svg')}}" class="img-fluid" />
                    </div>
                    <h5 class="text-uppercase">Malarum Tor</h5>
                    <p class="mb-0">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium
                    </p>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                <a href="#" class="destaque">
                    <div class="img-container mb-3">
                        <img src="{{asset('frontend/service/destaque4.svg')}}" class="img-fluid" />
                    </div>
                    <h5 class="text-uppercase">Aondeai Pocus</h5>
                    <p class="mb-0">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium
                    </p>
                </a>
            </div>
        </div>
    </div>
</div>
<!--//NOSSOS SERVICOS-->

<br><br><br>

<!-- Team Section Start -->
<section id="team" class="section-padding bg-gray">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="sectionn-title wow fadeInDown" data-wow-delay="0.3s">Our Service</h2>
            <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
            @foreach($services as $service)
            <div class="col-lg-6 col-md-12 col-xs-12">
                <!-- Team Item Starts -->
                <div class="team-item wow fadeInRight" data-wow-delay="0.2s">

                    <div class="contetn">
                        <div class="info-text">
                            <h3><a href="#">{{$service->title}}</a></h3>
                            <p>{{$service->sub_title}}</p>
                        </div>
                        <p>{{$service->description}}</p>
                    </div>
                </div>
                <!-- Team Item Ends -->
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Team Section End -->

<br><br>


<!--/grids-->
<div class="coupons">
    <div class="coupons-grids text-center">
        <div class="w3layouts_mail_grid">
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-truck" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>FREE SHIPPING</h3>
                    <p style="text-align: justify;text-justify: inter-word;">Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </div>
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-headphones" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>24/7 SUPPORT</h3>
                    <p style="text-align: justify;text-justify: inter-word;">Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </div>
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>MONEY BACK GUARANTEE</h3>
                    <p style="text-align: justify;text-justify: inter-word;">Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </div>
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-gift" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>FREE GIFT COUPONS</h3>
                    <p style="text-align: justify;text-justify: inter-word;">Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>

    </div>
</div>
<!--grids-->

@endsection