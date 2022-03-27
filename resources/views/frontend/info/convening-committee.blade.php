@extends('master')
@section('content')
<br> <br> <br>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{asset('frontend/president/c.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/president/v.css')}}">
    <title>JEA - | Convening Member |</title>
</head>

<body style="width:100%;height:650px;background-color:#DFEFED;">
    <div id="supervisor">

        @foreach($Presidents as $president)
        <div class="supervisor cons">

            <div class="col-left">
                <div class="supervisor-img">
                    <img src="{{asset($president->image)}}" alt="img" style="margin-bottom:10px">
                </div>
            </div>
            <div class="col-right">
                <h1 class="sup-title">Presid<span>ent</span></h1>
                <h2 style="font-weight:1000;font-size:20px">
                    {{$president->name}}
                </h2>
                <div>
                    <b class="pro-type">{{$president->digination}}</b><br>
                    <b class="pro-type">{{$president->company}}</b><br>
                    <b class="pro-type">{{$president->location}}</b><br>
                </div>
                <br>
                <!-- header-bot -->
                <div class="col-md-6 agileits-social top_content">
                    <ul class="social-nav model-3d-0 footer-social w3_agile_social">
                        <li>
                            <a href="#" class="facebook">
                                <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                            </a>
                        </li>

                        <li>
                            <a href="{{$president->linkedin}}" class="linkedin">
                                <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                            </a>
                        </li>

                        <li>
                            <a href="mailto:{{$president->email}}" class="email">
                                <div class="front"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                            </a>
                        </li>

                        <li>
                            <a href="tel:+88{{$president->phone}}" class="cell">
                                <div class="front"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-phone" aria-hidden="true"></i></div>
                            </a>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
        @endforeach

    </div>

    <div class="container" >
        <!---About Detailes--->
        <div id="top">
            <ul class="rslides" id="slider3">
                @foreach($VicePresidents as $president)
                <li>
                    <div class="agile_ab_w3ls_info">

                        <div class="col-md-6 ab_pic_w3ls_text_info">
                       
                            <img src="{{asset($president->image)}}" alt=" " class="img-responsive"
                                style="width:300px;height:200px;" />
                                <br>
                           
                        </div>
                        
                        <div class="col-md-6 ab_pic_w3ls">
                        <h4><span style="color: blue;font-size:25px;">Vice-</span>President</h4>
                            <br>
                            <h6 style="font-weight:1000;font-size:17px">
                                Md. Sabab Zulfiker
                            </h6>
                            <br>
                            <div>
                                <b class="pro-type" style="font-weight:500;font-size:15px">{{$president->digination}}</b><br>
                                <b class="pro-type" style="font-weight:500;font-size:15px">{{$president->company}}</b><br>
                                <b class="pro-type" style="font-weight:500;font-size:15px">{{$president->location}}</b><br>
                               
                                <ul class="social-nav model-3d-0 footer-social w3_agile_social" style="display:flex;float:left;">
                                    <li>
                                        <a href="#" class="facebook">
                                            <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                            <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{$president->linkedin}}" class="linkedin">
                                            <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                            <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="mailto:{{$president->email}}" class="email">
                                            <div class="front"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                                            <div class="back"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="tel:+88{{$president->phone}}" class="cell">
                                            <div class="front"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                            <div class="back"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                        </a>
                                    </li>

                                </ul>
                                
                            </div>
                        </div>
                        

                        <div class="clearfix"></div>
                    </div>
                </li>
                
                @endforeach
            </ul>
        </div>
        <!---About Detailes End--->
    </div>

    <section id="">
        <div class="inner-width">
            <div class="co-supervisor-content">
                <div class="col-right">
                    <h4><span style="color: red;">GENERAL </span>SECRETARY</h4>
                    <br>
                    <h6>
                        Md. Sabab Zulfiker
                    </h6>
                    <br>
                    <div>
                        <p class="pro-type">ESc in EEE</p>
                        <p class="pro-type">Email : sabab.cse@diu.edu.bd</p>
                        <p class="pro-type">Daffodil International University</p>
                    </div>
                    <div class="col-md-6 agileits-social top_content">
                        <ul class="social-nav model-3d-0 footer-social w3_agile_social">
                        <li>
                                        <a href="#" class="facebook">
                                            <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                            <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{$president->linkedin}}" class="linkedin">
                                            <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                            <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="mailto:{{$president->email}}" class="email">
                                            <div class="front"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                                            <div class="back"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="tel:+88{{$president->phone}}" class="cell">
                                            <div class="front"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                            <div class="back"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                        </a>
                                    </li>
                        </ul>
                    </div>
                </div>

                <img src="{{asset('images/developer/images(1).jpg')}}" alt="" class="co-supervisor-pic">
            </div>

    </section>

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

</body>

@endsection