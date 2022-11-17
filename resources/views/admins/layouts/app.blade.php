<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('public/assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{url('public/assets/vendors/iconly/bold.css')}}">

    <link rel="stylesheet" href="{{url('public/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{url('public/assets/images/favicon.svg')}}" type="image/x-icon">
 
</head>
    @yield('css')
</head>

<body>
<div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>

                    <li class="sidebar-item active ">
                        <a href="/home" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-image-fill"></i>
                            <span>GALLERY</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{route('photo')}}">Photos</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{route('category')}}">Categories</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item ">
                        <a href="{{route('certificatesAdmin')}}" class='sidebar-link'>
                            <i class="bi bi-paperclip"></i>
                            <span>Certificates</span>
                        </a>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-stack"></i>
                            <span>Blogs</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{route('blogsAdmin')}}">Our Blogs</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{route('commentsAdmin')}}">Comments</a>
                            </li>
                        </ul>
                    </li>
                    <!-- users -->
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-stack"></i>
                            <span>Users</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{route('users.index')}}">Users</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{route('users.create')}}">Create New User</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item ">
                        <a href="{{route('contactAdmin')}}" class='sidebar-link'>
                            <i class="bi bi-envelope-fill"></i>
                            <span>Messeges</span>
                        </a>
                    </li>



                    <li class="sidebar-item  ">
                        <a href="{{ route('logout') }}" class='sidebar-link'
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="bi bi-cloud-arrow-up-fill"></i>
                            <span>{{ __('Logout') }}</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>

    @yield('main')

</div>


<script src="{{url('public/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{url('public/assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{url('public/assets/vendors/apexcharts/apexcharts.js')}}"></script>
<script src="{{url('public/assets/js/pages/dashboard.js')}}"></script>

<script src="{{url('public/assets/js/main.js')}}"></script>
@yield('js')
</body>

</html>
