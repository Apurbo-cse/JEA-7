@extends('master')
@section('title', 'JEA :: About')

@section('content')
<br><br>
<title>JEA - | About |</title>

@foreach($abouts as $about)
<div class="hero">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6">
                <div class="hero-text">

                    <h1>
                        {{$about->title}}
                    </h1>

                    <p>
                        {{$about->description}}
                    </p>

                    <div class="hero-btn">
                        <a class="btn" href="">Join Now</a>
                        <a class="btn" href="">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 d-none d-md-block">
                <div class="hero-image">
                    <img src="{{asset($about->image)}}" alt="Hero Image">
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach


<!-- About Section start -->
<div class="container">
    @foreach($abouths as $abouth)
    <div class="row">
        <div class="col-lg-6 col-md-12 col-xs-12 info">
            <div class="about-wrapper wow fadeInLeft" data-wow-delay="0.3s">
                <div>
                    <div class="site-heading">
                        <p class="mb-3">{{$abouth->title}}</p>

                        <h2 class="sectionn-title">Learn Something {{$abouth->title}}</h2>
                        <br>
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
<br><br>


<!-- /banner_bottom_agile_info end -->

<div class="container">


    <!---About Detailes--->
    <div id="top">
        <ul class="rslides" id="slider3">
            @foreach($aboutms as $aboutm)
            <li>
                <div class="agile_ab_w3ls_info">


                    <div class="col-md-6 ab_pic_w3ls">
                        <img src="{{asset($aboutm->image)}}" alt=" " class="img-responsive" />
                    </div>

                    <div class="col-md-6 ab_pic_w3ls_text_info">
                        <h5>{{$aboutm->title}}</h5>
                        <p style="text-align: justify;text-justify: inter-word;">{{$aboutm->description}}</p>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    <!---About Detailes End--->

    <!---728x90--->
</div>
</div>
<!-- team -->
<div class="banner_bottom_agile_info team">
    <div class="container">
        <h3 class="wthree_text_info">Our coneving <span>Members</span></h3>
        <div class="inner_w3l_agile_grids">
            <div class="col-md-3 team-grids">
                <div class="thumbnail team-w3agile">
                    <img src="{{asset('frontend/images/t1.jpg')}}" class="img-responsive" alt="">
                    <div class="social-icons team-icons right-w3l fotw33">
                        <div class="caption">
                            <h4>Joanna Vilken</h4>
                            <p style="text-align: justify;text-justify: inter-word;">Add Short Description</p>
                        </div>
                        <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                            <li><a href="#" class="facebook">
                                    <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                </a></li>
                            <li><a href="#" class="twitter">
                                    <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                </a></li>
                            <li><a href="#" class="instagram">
                                    <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                </a></li>
                            <li><a href="#" class="pinterest">
                                    <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 team-grids">
                <div class="thumbnail team-w3agile">
                    <img src="{{asset('frontend/images/t2.jpg')}}" class="img-responsive" alt="">
                    <div class="social-icons team-icons right-w3l fotw33">
                        <div class="caption">
                            <h4>Anika Mollik</h4>
                            <p style="text-align: justify;text-justify: inter-word;">Add Short Description</p>
                        </div>
                        <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                            <li><a href="#" class="facebook">
                                    <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                </a></li>
                            <li><a href="#" class="twitter">
                                    <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                </a></li>
                            <li><a href="#" class="instagram">
                                    <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                </a></li>
                            <li><a href="#" class="pinterest">
                                    <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 team-grids">
                <div class="thumbnail team-w3agile">
                    <img src="{{asset('frontend/images/t3.jpg')}}" class="img-responsive" alt="">
                    <div class="social-icons team-icons right-w3l fotw33">
                        <div class="caption">
                            <h4>Megali Deo</h4>
                            <p style="text-align: justify;text-justify: inter-word;">Add Short Description</p>
                        </div>
                        <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                            <li><a href="#" class="facebook">
                                    <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                </a></li>
                            <li><a href="#" class="twitter">
                                    <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                </a></li>
                            <li><a href="#" class="instagram">
                                    <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                </a></li>
                            <li><a href="#" class="pinterest">
                                    <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 team-grids">
                <div class="thumbnail team-w3agile">
                    <img src="{{asset('frontend/images/t4.jpg')}}" class="img-responsive" alt="">
                    <div class="social-icons team-icons right-w3l fotw33">
                        <div class="caption">
                            <h4>Retas Word</h4>
                            <p style="text-align: justify;text-justify: inter-word;">Add Short Description</p>
                        </div>
                        <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                            <li><a href="#" class="facebook">
                                    <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                </a></li>
                            <li><a href="#" class="twitter">
                                    <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                </a></li>
                            <li><a href="#" class="instagram">
                                    <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                </a></li>
                            <li><a href="#" class="pinterest">
                                    <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //team -->



<!-- /we-offer -->
<div class="sale-w3ls">
    <div class="container">
        <h6>We Offer Flat <span>40%</span> Discount</h6>

        <a class="hvr-outline-out button2" href="single.html"> </a>
    </div>
</div>
<!-- //we-offer -->
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