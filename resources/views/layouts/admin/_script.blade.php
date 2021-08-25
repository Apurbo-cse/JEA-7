
<!-- jQuery  -->
<script src="{{asset('admin/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/js/modernizr.min.js')}}"></script>
<script src="{{asset('admin/js/detect.js')}}"></script>
<script src="{{asset('admin/js/fastclick.js')}}"></script>
<script src="{{asset('admin/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('admin/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('admin/js/waves.js')}}"></script>
<script src="{{asset('admin/js/wow.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('admin/js/jquery.scrollTo.min.js')}}"></script>

<script src="{{asset('admin/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    @if(Session::has('success'))
        toastr.success("{{ Session::get ('success')}}");
    @endif
</script>

<!-- Datatables-->
@yield('datatable_script')
@yield('table_script')


<script src="{{asset('admin/pages/dashborad.js')}}"></script>

<script src="{{asset('admin/js/app.js')}}"></script>
