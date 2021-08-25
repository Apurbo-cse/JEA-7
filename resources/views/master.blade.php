<!DOCTYPE html>
<html>

<head>
	
    @include('layouts.frontend.header')

</head>

<body>

    <!-- Navber -->
        @include('layouts.frontend.navber')
	<!-- Navber End-->

    <!-- Content -->
        @yield('content')
    <!-- Content End -->
 
    <!-- Footer -->
    <div class="footer">

        @include('layouts.frontend.footer')
        
    </div>
    <!-- Footer End -->

    <!-- Script -->
        @include('layouts.frontend.script')
    <!-- Script End -->

</body>

	<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/20-06-2017/elite_shoppy-demo_Free/1660570665/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Jul 2021 21:12:49 GMT -->

</html>