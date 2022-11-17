<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Photo</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../{{asset('assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="../{{asset('assets/vendors/iconly/bold.css')}}">

    <link rel="stylesheet" href="../{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="../{{asset('assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="../{{asset('assets/css/app.css')}}">
    <link rel="shortcut icon" href="../{{asset('assets/images/favicon.svg')}}" type="image/x-icon">

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

    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Edit Photo</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">Edit Photo</li>
                                <li class="breadcrumb-item"><a href="{{route('photo')}}">Photo</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Basic Vertical form layout section start -->
            <section id="basic-vertical-layouts">
                <div class="row match-height">
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form form-vertical" method="POST" action="{{route('updPhoto',$images->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="file"><img
                                                                src="../{{asset('assets/images/gallery/'. $images->path)}}"
                                                                id="image"></label>
                                                        <input type="file" class="d-none" id="file" name="image"
                                                               onchange="loadImage(event)">

                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="description"
                                                               class="form-label">Description</label>
                                                        <textarea class="form-control" id="description"
                                                                  name="description"
                                                                  rows="3">{{$images->description}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary me-1 mt-4">Edit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Basic Vertical form layout section end -->
        </div>

        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2022 &copy; Dashboard</p>
                </div>
                <div class="float-end">
                    <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                            href="http://attractionme.net">Attractionme</a></p>
                </div>
            </div>
        </footer>
    </div>

    {{--    @endsection--}}


</div>


<script src="../{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="../{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="../{{asset('assets/vendors/apexcharts/apexcharts.js')}}"></script>
<script src="../{{asset('assets/js/pages/dashboard.js')}}"></script>

<script src="../{{asset('assets/js/main.js')}}"></script>


<script>
    var loadImage = function (event) {
        var output = document.getElementById('image');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function () {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
</body>

</html>


