
        <div class="sidebar-inner slimscrollleft">
    <div class="user-details">
        <div class="text-center">
            <img src="https://diutransport.com/assets/frontend/icons/profile.jpg" alt="" class="img-circle">
        </div>
        <div class="user-info">
            <div class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{ Auth::guard('admin')->user()->name }}</a>
            </div>

            <p class="text-muted m-0"><i class="fa fa-dot-circle-o text-success"></i> Online</p>
        </div>
    </div>
    <!--- Divider -->
    <div id="sidebar-menu">
        <ul>
            <li>
                <a href="{{route('dashboard')}}" class="waves-effect"><i class="ti-home"></i><span> Dashboard </span></a>
            </li>

            
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-user"></i> <span> Users </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{url('http://127.0.0.1:8000/dashboard/user')}}">User List</a></li>
                    <li><a href="#">Create New User</a></li>
                </ul>
            </li>
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-video-camera"></i> <span> Video </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('video.index')}}">Video List</a></li>
                    <li><a href="{{route('video.create')}}">Create New Video</a></li>
                </ul>
            </li>
            

            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-sliders"></i> <span>Slider</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('slider.index')}}">Slider List</a></li>
                    <li><a href="{{route('slider.create')}}">Create New Slider</a></li>
                </ul>
            </li>
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-image"></i> <span>Contact</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('contact.index')}}">Contact List</a></li>
                    <li><a href="{{route('page.index')}}">Page Link</a></li>
                </ul>
            </li>

            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tag"></i> <span>Category</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('category.index')}}">Category List</a></li>
                    <li><a href="{{route('category.create')}}">Create New Category</a></li>
                </ul>
            </li>
           

            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tag"></i> <span>Tag</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('tag.index')}}">Tag List</a></li>
                    <li><a href="{{route('tag.create')}}">Create New Tag</a></li>
                </ul>
            </li>

            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-newspaper-o"></i> <span>Post</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('post.index')}}">post List</a></li>
                    <li><a href="{{route('post.create')}}">Create New post</a></li>
                </ul>
            </li>

            
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-newspaper-o"></i> <span>Service</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('service.index')}}">Service List</a></li>
                    <li><a href="{{route('service.create')}}">Create New Service</a></li>
                </ul>
            </li>

            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-info-circle"></i> <span>About</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('about.index')}}">About List</a></li>
                    <li><a href="{{route('abouth.index')}}">Detailes List</a></li>
                    <li><a href="{{route('aboutm.index')}}">M-V-H List</a></li>
                </ul>
               
            </li>

         

            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-image"></i> <span> Gallery </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('gallery.index')}}">Gallery List</a></li>
                    <li><a href="{{route('gallery.create')}}">Create New Gallery</a></li>
                </ul>
            </li>
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-image"></i> <span> Developer </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('developer.index')}}">Developer profile</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="clearfix"></div>
</div> 
<!-- end sidebarinner -->

