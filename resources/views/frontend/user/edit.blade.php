@extends('master')
@section('title', 'JEA :: About')

@section('content')
<br><br><br><br><br>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>JEA - | My Profile Update |</title>
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

        <form action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- ======= About Me ======= -->
            <div class="about-me container">

                <div class="sectionn-title">
                    <h2>Hello!!! JEA</h2>
                    <p>Update Profile</p>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="{{asset('images/user/'. Auth::user()->image)}}" class="img-fluid" alt="">
                        <input name="image" type="file" id="image" class="form-control">
                                @error('image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>{{Auth::user()->name}}</h3>
                        <p class="font-italic" style="color:orange;text-align:justify;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>
                        <br>

                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li>
                                        <i class="icofont-rounded-right"></i> <b style="color:black;">Email : </b> <b
                                            style="color:black;"> {{Auth::user()->email}} </b>
                                    </li>

                                    <li>
                                        <input id="cell" type="cell"
                                            class="form-control @error('cell') is-invalid @enderror" name="cell"  autocomplete="preadd"
                                            placeholder="Phone Number" value="{{Auth::user()->cell}}">
                                    </li>
                                    <li>
                                        <input id="telephone" type="telephone"
                                            class="form-control @error('telephone') is-invalid @enderror" name="telephone"
                                            value="{{Auth::user()->telephone}}"  autocomplete="telephone"
                                            placeholder="Alternative phone no">
                                    </li>
                                </ul>
                            </div>

                            <div class="col-lg-6">
                                <ul>
                                    <li>
                                        <i class="icofont-rounded-right"></i> <b style="color:black;">Password : </b> <b
                                            style="color:black;"> ********</b>
                                    </li>
                                    <li>
                                        <input id="facelink" type="facelink"
                                            class="form-control @error('facelink') is-invalid @enderror" name="facelink" autocomplete="preadd"
                                            placeholder="Enter Facebook Link" value="{{Auth::user()->facelink}}">
                                    </li>
                                    <li>
                                        <input id="linlink" type="linlink"
                                            class="form-control @error('linlink') is-invalid @enderror" name="linlink"
                                            value="{{Auth::user()->linlink}}"  autocomplete="linlink"
                                            placeholder="Enter Linkedin Link">
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <br>
                        <p style="color: #141414;text-align:justify;">
                            <textarea name="description" class="form-control" rows="5" id="comment" placeholder="Description">{{Auth::user()->description}}</textarea>
                        </p>
                    </div>
                </div>

            </div><!-- End About Me -->
            <!-- ======= Interests ======= -->
            <div class="interests container">

                <div class="sectionn-title" style="margin-bottom:20px;">
                    <h2>Qualification</h2>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationServer01">Engineer <span style="color: red;">*</span></label>
                    <select name="course_name" id="" class="form-control">
                        <option >{{Auth::user()->course_name}}</option>
                        <option >MSc in Engineering</option>
                        <option >EMBA\MBA</option>
                        <option >BSc in Engineering</option>
                        <option >BSc in Engineering (Diploma)</option>
                        <option >Diploma in Engineering</option>
                    </select>
                    @error('course_name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4 mb-3">
                    <label for="validationServer02">Subject <span style="color: red;">*</span></label>
                    <input  name="course_subject" type="text" class="form-control" placeholder="enter subject" value="{{Auth::user()->course_subject}}" >
                    @error('course_subject')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4 mb-3">
                    <label for="validationServer02">Course <span style="color: red;">*</span></label>
                    <select name="course_quali" id="" class="form-control">
                        <option >{{Auth::user()->course_quali}}</option>
                        <option >Running</option>
                        <option >Diploma Complete</option>
                        <option >Graduate</option>
                        <option > Post Graduate</option>
                    </select>
                    @error('course_quali')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            <!-- End Interests -->

            <!-- ======= Interests ======= -->
            <div class="interests container">

                <div class="sectionn-title" style="margin-bottom:20px;">
                    <h2>What job do you do?</h2>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationServer01">Job Type</label>
                    <select name="job_type" id="" class="form-control">
                        <option >{{Auth::user()->job_type}}</option>
                        <option >Govt</option>
                        <option >Company</option>
                        <option >Project Base</option>
                        <option >Entrepreneur</option>
                        <option >Freelancer</option>
                        <option >Student</option>
                    </select>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="validationServer02">Digination</label>
                    <input name="job_digination" type="text" class="form-control" placeholder="digination" value="{{Auth::user()->job_digination}}" >
                </div>

                <div class="col-md-4 mb-3">
                    <label for="validationServer02">Workplace</label>
                    <input name="job_work" type="text" class="form-control" placeholder="work place" value="{{Auth::user()->job_work}}" >
                </div>

            </div>
            <!-- End Interests -->

            <!-- ======= Counts ======= -->
            <div class="counts container">

                <div class="row">
                    <div class="sectionn-title" style="margin-bottom:20px;">
                        <h2>Education</h2>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <b style="color:white;">HSC</b>
                            <span data-toggle="counter-up"><input id="intsub" type="text"
                                    class="form-control @error('intsub') is-invalid @enderror" name="intsub"
                                    value="{{Auth::user()->intsub}}"  autocomplete="intsub"
                                    placeholder="Subject Name"></span>
                            <p style="color:pink;"><input id="intname" type="intname"
                                    class="form-control @error('intname') is-invalid @enderror" name="intname"
                                    value="{{Auth::user()->intname}}"  autocomplete="intname"
                                    placeholder="Institiute Name"></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            <b style="color:white;">Diploma in Engineering</b>
                            <span data-toggle="counter-up"><input id="dipsub" type="text"
                                    class="form-control @error('dipsub') is-invalid @enderror" name="dipsub"
                                    value="{{Auth::user()->dipsub}}"  autocomplete="dipsub"
                                    placeholder="Subject Name"></span>
                            <p style="color:pink;"><input id="dipname" type="dipname"
                                    class="form-control @error('dipname') is-invalid @enderror" name="dipname"
                                    value="{{Auth::user()->dipname}}"  autocomplete="dipname"
                                    placeholder="Institiute Name"></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            <b style="color:white;">BSc in Engineering (Dip.)</b>
                            <span data-toggle="counter-up"><input id="bscdipsub" type="text"
                                    class="form-control @error('bscdipsub') is-invalid @enderror" name="bscdipsub"
                                    value="{{Auth::user()->bscdipsub}}"  autocomplete="bscdipsub"
                                    placeholder="Subject Name"></span>
                            <p style="color:pink;"><input id="bscdipname" type="bscdipname"
                                    class="form-control @error('bscdipname') is-invalid @enderror" name="bscdipname"
                                    value="{{Auth::user()->bscdipname}}"  autocomplete="bscdipname"
                                    placeholder="Institiute Name"></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            <b style="color:white;">BSc in Engineering</b>
                            <span data-toggle="counter-up"><input id="bscsub" type="text"
                                    class="form-control @error('bscsub') is-invalid @enderror" name="bscsub"
                                    value="{{Auth::user()->bscsub}}"  autocomplete="bscsub"
                                    placeholder="Subject Name"></span>
                            <p style="color:pink;"><input id="bscname" type="bscname"
                                    class="form-control @error('bscname') is-invalid @enderror" name="bscname"
                                    value="{{Auth::user()->bscname}}"  autocomplete="bscname"
                                    placeholder="Institiute Name"></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 md-lg-0">
                        <div class="count-box">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            <b style="color:white;">MSc in Engineering</b>
                            <span data-toggle="counter-up"><input id="mscsub" type="text"
                                    class="form-control @error('mscsub') is-invalid @enderror" name="mscsub"
                                    value="{{Auth::user()->mscsub}}"  autocomplete="mscsub"
                                    placeholder="Subject Name"></span>
                            <p style="color:pink;"><input id="mscname" type="mscname"
                                    class="form-control @error('mscname') is-invalid @enderror" name="mscname"
                                    value="{{Auth::user()->mscname}}"  autocomplete="mscname"
                                    placeholder="Institiute Name"></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 md-lg-0">
                        <div class="count-box">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            <b style="color:white;">EMBA / MBA</b>
                            <span data-toggle="counter-up"><input id="mbasub" type="text"
                                    class="form-control @error('mbasub') is-invalid @enderror" name="mbasub"
                                    value="{{Auth::user()->mbasub}}"  autocomplete="mbasub"
                                    placeholder="Subject Name"></span>
                            <p style="color:pink;"><input id="mbaname" type="mbaname"
                                    class="form-control @error('mbaname') is-invalid @enderror" name="mbaname"
                                    value="{{Auth::user()->mbaname}}"  autocomplete="mbaname"
                                    placeholder="Institiute Name"></p>
                        </div>
                    </div>

                </div>

            </div><!-- End Counts -->




            <!-- ======= Interests ======= -->
            <div class="interests container">

                <div class="sectionn-title" style="margin-bottom:20px;">
                    <h2>Parents Name</h2>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="validationServer01">Father Name</label>
                    <input name="fathername" type="text" class="form-control" placeholder="Father Name" value="{{Auth::user()->fathername}}" >
                </div>

                <div class="col-md-4 mb-3">
                    <label for="validationServer02">Mother Name</label>
                    <input name="mothername" type="text" class="form-control" placeholder="Mother Name" value="{{Auth::user()->mothername}}" >
                </div>

            </div>
            <!-- End Interests -->


            <!-- ======= Interests ======= -->
            <div class="interests container">

                <div class="sectionn-title" style="margin-bottom:20px;">
                    <h2>Address</h2>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="validationServer01">Present Address</label>
                    <input name="preadd" type="text" class="form-control" placeholder="Present Address" value="{{Auth::user()->preadd}}" >
                </div>

                <div class="col-md-4 mb-3">
                    <label for="validationServer02">Permanent Address</label>
                    <input name="peradd" type="text" class="form-control" placeholder="Permanent Address" value="{{Auth::user()->peradd}}" >
                </div>

            </div>
            <!-- End Interests -->

            <!-- ======= Interests ======= -->
            <div class="interests container">

                <div class="sectionn-title" style="margin-bottom:20px;">
                    <h2>Others</h2>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="validationServer01">NID</label>
                    <input type="text" name="nid"class="form-control" placeholder="nid no" value="{{Auth::user()->nid}}" >
                </div>

                <div class="col-md-4 mb-3">
                    <label for="validationServer02">Religion</label>
                    <select class="form-control" name="religion" type="text" placeholder="Religion" >
                            <option >{{Auth::user()->religion}}</option>
                            <option >Islam</option>
                            <option >Hidusim</option>
                            <option >Christian</option>
                            <option >Buddhism</option>
                            <option >Other</option>
                        </select>

                </div>

                <div class="col-md-4 mb-3">
                    <label for="validationServer02">Blood Group</label>
                    <select class="form-control" id="blood_group" name="blood" >
                            <option >{{Auth::user()->blood}}</option>
                            <option >A+</option>
                            <option >A-</option>
                            <option >B+</option>
                            <option >B-</option>
                            <option >O+</option>
                            <option >O-</option>
                            <option >AB+</option>
                            <option >AB-</option>
                        </select>
                </div>

            </div>
            <!-- End Interests -->
            <div class="col-md-5"></div>
            <div class="col-md-7">
                <input class="btn btn-warning" type="reset" value="Clear">
                <input class="btn btn-primary" type="submit" value="Save">
            </div>


        </form>
        <br> <br>
    </sectionn><!-- End About Sectionn -->


</body>

</html>

@endsection