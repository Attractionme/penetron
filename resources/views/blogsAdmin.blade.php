@extends('admins.layouts.app')
@section('title','Blogs')

@section('css')
    <link rel="stylesheet" href="{{asset('assets/vendors/simple-datatables/style.css')}}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
@endsection

@section('main')

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
                        <h3>Blogs</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                <li class="breadcrumb-item"><a href="{{route('createBlog')}}">Create New Blog</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-12">
                        @if (session('success'))
                            <div class="alert text-center alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Image Profile</th>
                                <th>Description</th>
                                <th>Title</th>
                                <th>Operation</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($blogs as $blog)
                                <tr>
                                    <td style="width: 100px"><img src="public/assets/images/blog_images/{{$blog->image}}" data-img="public/assets/images/blog_images/{{$blog->image}}" class="rounded" width="100%" alt="gal" data-toggle="popover"></td>
                                    <td style="width: 100px"><img src="public/assets/images/blog_images/{{$blog->image_profile}}" data-img="public/assets/images/blog_images/{{$blog->image_profile}}" class="rounded" width="100%" alt="gal" data-toggle="popover"></td>
                                    <td dir="rtl">{{$blog->description}}</td>
                                    <td>{{$blog->tittle}}</td>
                                    <td>
                                        <a href="{{"editBlog/".$blog->id}}" class="btn btn-outline-success btn-sm">Edit</a>
                                        <a onclick="return confirm('Are you sure?')" href="{{route('delete-blogs',$blog->id)}}" class="btn btn-outline-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
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
@endsection



@section('js')

<script>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover({
//trigger: 'focus',
            trigger: 'hover',
            html: true,
            content: function () {
                return '<img class="img-fluid" src="'+$(this).data('img') + '" />';
            },
            title: 'Photo View'
        })

    });
</script>

    <script src="{{asset('assets/vendors/simple-datatables/simple-datatables.js')}}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

@endsection
