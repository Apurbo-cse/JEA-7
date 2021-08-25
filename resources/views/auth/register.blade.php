<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Responsive Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/login/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('admin/login/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/login/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/login/css/style.css')}}">


    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

<body>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <img src="{{asset('admin/login/images/undraw_remotely_2j6y.svg')}}" alt="Image" class="img-fluid">
            </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                    <div class="col-md-8">
                    <div class="mb-4">
                    <center><h3> User Register</h3</center>
                    <p class="mb-4" style="font-size:15px;padding-top:10px;">Joypurhat Engineer's Association</p>
                </div>

                <form action="{{ route('register') }}" method="post">
                    @csrf

                    <div class="form-group first">
                        <label for="name">Name</label>
                        <input type="name" class="form-control @error('name') is-invalid @enderror" name="name"  required autocomplete="name" autofocus class="form-control" id="username">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group first">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"  required autocomplete="email" autofocus class="form-control" id="username">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group first">
                        <label for="password">Password</label>
                        <input id="email" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" class="form-control" id="password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group last mb-4">
                        <label for="password-confirm" readonly>Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control @error('password-confirm') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password-confirm" class="form-control" id="password-confirm">
                        @error('password-confirm')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="d-flex mb-5 align-items-center">
                        <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} checked="checked" />

                        <div class="control__indicator"></div>

                        </label>
                        <span class="ml-auto"><a href="/" class="forgot-pass"  ><i class="fa fa-home" aria-hidden="true"></i></a></span>
                    </div>

                    <p class="footer-company-name" style="font-size: 12px;margin-top:-30px;">
                            <a href="{{ route('login') }}" style="color:green; text-decoration:none;" >Already have a account ???</a>
                    </p> 
                    
                    <input type="submit" value="Sign Up" class="btn btn-block btn-primary">

                    </div>
                    <p class="footer-company-name" style="font-size: 12px;margin-top:50px;">&copy;Design & Developed by <a
                    href="https://www.facebook.com/apurbo.cse" style="color:orange; text-decoration:none; " >
                    <b style="color:orange; font-weight: 600" class="ml12">Apurbo Roy</b></a>
            </p>
                </form>
  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('admin/login/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('admin/login/js/popper.min.js')}}"></script>
<script src="{{asset('admin/login/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/login/js/main.js')}}"></script>

       
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <style>
        .ml12 {
    font-weight: 50;
    font-size: 10px;
    text-transform: uppercase;
    letter-spacing: 0.5em;
    margin-left:3px;
    }


    </style>

    <script>
    // Wrap every letter in a span
    var textWrapper = document.querySelector('.ml12');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({loop: true})
    .add({
        targets: '.ml12 .letter',
        translateX: [40,0],
        translateZ: 0,
        opacity: [0,1],
        easing: "easeOutExpo",
        duration: 1200,
        delay: (el, i) => 500 + 30 * i
    }).add({
        targets: '.ml12 .letter',
        translateX: [0,-30],
        opacity: [1,0],
        easing: "easeInExpo",
        duration: 1100,
        delay: (el, i) => 100 + 30 * i
    });</script>


</body>

</html>