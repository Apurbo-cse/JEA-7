<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JEA - | Admin Login |</title>
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
                    <center><h3> Admin Login</h3</center>
                    <p class="mb-4" style="font-size:15px;padding-top:10px;">Joypurhat Engineer's Association</p>
                </div>

                <form action="{{ route('admin.login') }}" method="post">
                    @csrf
                    <div class="form-group first">
                        <label for="username">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"  required autocomplete="email" autofocus class="form-control" id="username">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group last mb-4">
                        <label for="password">Password</label>
                        <input id="email" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" class="form-control" id="password">
                        @error('password')
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

                        <input type="submit" value="Log In" class="btn btn-block btn-primary">

                    </div>
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

</body>

</html>