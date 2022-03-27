@extends('master')
@section('title', 'JEA :: About')

@section('content')
<br><br><br><br><br>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>JEA - | My Profile |</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('frontend/user/img/favicon.png')}}')}}" rel="icon">
    <link href="{{asset('frontend/user/img/apple-touch-icon.png')}}')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('frontend/user/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/user/vendor/owl.carousel/frontend/user/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/user/vendor/venobox/venobox.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('frontend/user/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Personal - v2.5.1
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


    <!-- ======= About Sectionn ======= -->
    <sectionn id="about" style="margin-top:30px;">


        <!-- ======= About Me ======= -->
        <div class="about-me container">

            <div class="sectionn-title">
                <h2>Hello!!! I'm</h2>
                <p style="color:#007B98;font-size:25px;">{{Auth::user()->name}}</p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="{{asset('images/user/'. Auth::user()->image)}}" class="img-fluid" alt=""
                        style="height:380px;width:330px;">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3 style="color:#DE3163;font-size:18px;">{{Auth::user()->job_digination}}</h3>
                    <br>
                    <p class="font-italic" style="color:#CCCCFF;font-size:12px;text-align:justify;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore
                        magna aliqua.
                    </p>
                    <br>

                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong
                                        style="color:#174044;font-size:13px;">Qualification : </strong> <b
                                        style="color:#174044;font-size:13px;">{{Auth::user()->course_name}} <small
                                            style="font-size:7px;color:#581845;">{{Auth::user()->course_quali}}</small>
                                    </b></li>
                                <li><i class="icofont-rounded-right"></i> <strong
                                        style="color:#174044;font-size:13px;">Subject : </strong> <b
                                        style="color:#174044;font-size:13px;">{{Auth::user()->course_subject}}</b></li>
                                <li><i class="icofont-rounded-right"></i> <strong
                                        style="color:#174044;font-size:13px;">Job : </strong> <b
                                        style="color:#174044;font-size:13px;"> {{Auth::user()->job_type}} </b></li>
                                <li><i class="icofont-rounded-right"></i> <strong
                                        style="color:#174044;font-size:13px;">Workplace : </strong> <b
                                        style="color:#174044;font-size:13px;">{{Auth::user()->job_work}} </b></li>
                            </ul>
                        </div>

                        <div class="col-lg-6">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong
                                        style="color:#174044;font-size:13px;">Email : </strong> <b
                                        style="color:#174044;font-size:13px;">{{Auth::user()->email}}</b></li>
                                <li><i class="icofont-rounded-right"></i> <strong
                                        style="color:#174044;font-size:13px;">Phone : </strong> <b
                                        style="color:#174044;font-size:13px;"> {{Auth::user()->cell}} </b></li>
                                <li><i class="icofont-rounded-right"></i> <strong
                                        style="color:#174044;font-size:13px;">Religion : </strong> <b
                                        style="color:#174044;font-size:13px;"> {{Auth::user()->religion}} </b></li>
                                <li><i class="icofont-rounded-right"></i> <strong
                                        style="color:#174044;font-size:13px;">Blood Group : </strong> <b
                                        style="color:#174044;font-size:13px;"> {{Auth::user()->blood}} </b></li>
                            </ul>
                        </div>

                    </div>
                    <br>
                    <p style="color:gray;font-size:12px;text-align:justify;">
                        Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci
                        omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                        Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque
                        neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni
                        laudantium dolores.
                    </p>

                    <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                        <li><a target="_blank" href="{{Auth::user()->facelink}}" class="facebook">
                                <div class="front"><i class="fa fa-facebook" aria-hidden="true"
                                        style="color:white;margin-top:5px;"></i></div>
                                <div class="back"><i class="fa fa-facebook" aria-hidden="true" style="color:black;"></i>
                                </div>
                            </a></li>
                        <li><a target="_blank" href="{{Auth::user()->linlink}}" class="linkedin">
                                <div class="front"><i class="fa fa-linkedin" aria-hidden="true"
                                        style="color:white;margin-top:5px;"></i></div>
                                <div class="back"><i class="fa fa-linkedin" aria-hidden="true" style="color:black;"></i>
                                </div>
                            </a></li>

                            <li><a target="_blank" href="mailto:{{Auth::user()->email}}" class="email">
                                <div class="front"><i class="fa fa-envelope-o" aria-hidden="true"
                                        style="color:white;margin-top:5px;"></i></div>
                                <div class="back"><i class="fa fa-envelope-o" aria-hidden="true" style="color:black;"></i>
                                </div>
                        </a></li>

                        <li><a target="_blank" href="tel:+88{{Auth::user()->phone}}" class="phone">
                                <div class="front"><i class="fa fa-phone" aria-hidden="true"
                                        style="color:white;margin-top:5px;"></i></div>
                                <div class="back"><i class="fa fa-phone" aria-hidden="true" style="color:black;"></i>
                                </div>
                        </a></li>
                    </ul>
                </div>
            </div>

        </div><!-- End About Me -->

        <!-- ======= Counts ======= -->
        <div class="counts container">

            <div class="row">
                <div class="sectionn-title" style="margin-bottom:20px;">
                    <h2>Education</h2>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                    <div class="count-box">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        <b style="color:white;font-size:12px;">HSC</b>
                        <span data-toggle="counter-up" style="font-size:12px;">{{Auth::user()->intsub}}</span>
                        <p style="color:orange;fon-weight:400;font-size:11px;">{{Auth::user()->intname}}</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        <b style="color:white;font-size:12px;">Diploma in Engineering</b>
                        <span data-toggle="counter-up" style="font-size:12px;">{{Auth::user()->dipsub}}</span>
                        <p style="color:orange;fon-weight:400;font-size:11px;">{{Auth::user()->dipname}}</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        <b style="color:white;font-size:12px;">BSc in Engineering (Dip.)</b>
                        <span data-toggle="counter-up" style="font-size:12px;">{{Auth::user()->bscdipsub}}</span>
                        <p style="color:orange;fon-weight:400;font-size:11px;">{{Auth::user()->bscdipname}}</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        <b style="color:white;font-size:12px;">BSc in Engineering</b>
                        <span data-toggle="counter-up" style="font-size:12px;">{{Auth::user()->bscsub}}</span>
                        <p style="color:orange;fon-weight:400;font-size:11px;">{{Auth::user()->bscname}}</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 md-lg-0">
                    <div class="count-box">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        <b style="color:white;font-size:12px;">MSc in Engineering</b>
                        <span data-toggle="counter-up" style="font-size:12px;">{{Auth::user()->mscsub}}</span>
                        <p style="color:orange;fon-weight:400;font-size:11px;">{{Auth::user()->mscname}}</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 md-lg-0">
                    <div class="count-box">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        <b style="color:white;font-size:12px;">EMBA / MBA</b>
                        <span data-toggle="counter-up" style="font-size:12px;">{{Auth::user()->mbasub}}</span>
                        <p style="color:orange;fon-weight:400;font-size:11px;">{{Auth::user()->mbaname}}</p>
                    </div>
                </div>

            </div>

        </div><!-- End Counts -->




        <!-- ======= Interests ======= -->
        <div class="interests container">

            <div class="sectionn-title" style="margin-bottom:20px;">
                <h2>Parents Name</h2>
            </div>

            <div class="col-md-4 mb-3" style="font-size:14px;font-weight:600;">
                <label style="font-size:14px;font-weight:400;" for="validationServer01">Father Name</label> :
                {{Auth::user()->fathername}}
            </div>

            <div class="col-md-4 mb-3" style="font-size:14px;font-weight:600;">
                <label style="font-size:14px;font-weight:400;" for="validationServer02">Mother Name</label> :
                {{Auth::user()->mothername}}
            </div>

        </div>
        <!-- End Interests -->


        <!-- ======= Interests ======= -->
        <div class="interests container">

            <div class="sectionn-title" style="margin-bottom:20px;">
                <h2>Address</h2>
            </div>

            <div class="col-md-4 mb-3" style="font-size:14px;font-weight:600;">
                <label style="font-size:14px;font-weight:400;" for="validationServer01">Present Address</label> :
                {{Auth::user()->preadd}}
            </div>

            <div class="col-md-4 mb-3" style="font-size:14px;font-weight:600;">
                <label style="font-size:14px;font-weight:400;" for="validationServer02">Permanent Address</label> :
                {{Auth::user()->peradd}}
            </div>

        </div>
        <!-- End Interests -->

        <!-- ======= Interests ======= -->
        <div class="interests container">

            <div class="sectionn-title" style="margin-bottom:20px;">
                <h2>Others</h2>
            </div>

            <div class="col-md-3 mb-3" style="font-size:14px;font-weight:600;">
                <label style="font-size:14px;font-weight:400;" for="validationServer01">Alternate Phone</label> :
                {{Auth::user()->telephone}}
            </div>

            <div class="col-md-3 mb-3" style="font-size:14px;font-weight:600;">
                <label style="font-size:14px;font-weight:400;" for="validationServer01">NID</label> :
                {{Auth::user()->nid}}
            </div>

            <div class="col-md-3 mb-3" style="font-size:14px;font-weight:600;">
                <label style="font-size:14px;font-weight:400;" for="validationServer02">Religion</label> :
                {{Auth::user()->religion}}
            </div>

            <div class="col-md-3 mb-3" style="font-size:14px;font-weight:600;">
                <label style="font-size:14px;font-weight:400;" for="validationServer02">Blood Group</label> :
                {{Auth::user()->blood}}
            </div>

        </div>
        <!-- End Interests -->
        </div>

        <br> <br>
    </sectionn><!-- End About Sectionn -->


</body>

</html>

@endsection