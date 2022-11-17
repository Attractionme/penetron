@extends('admins.layouts.app')
@section('title','Certificates')

@section('css')
    <link rel="stylesheet" href="{{asset('assets/vendors/simple-datatables/style.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
                        <h3>Certificates</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">Certificates</li>
                                <li class="breadcrumb-item"><a href="{{route('createCertificate')}}">Create New
                                        Certificate</a></li>
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
                                <th>Id</th>
                                <th>Path</th>
                                <th>Creation Date</th>
                                <th>Updated Date</th>
                                <th>Operation</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($images as $image)
                                <tr>
                                    <td>{{$image->id}}</td>
                                    <td style="width: 100px"><img src="public/assets/images/gallery/{{$image->path}}"
                                                                  data-img="public/assets/images/gallery/{{$image->path}}"
                                                                  class="rounded" width="100%" alt="gal"
                                                                  data-toggle="popover"></td>
                                    <td style="display: none">{{$image->path}}</td>
                                    <td>{{$image->created_at}}</td>
                                    <td>{{$image->updated_at}}</td>
                                    <td>
                                        <a href="{{"editCertificate/".$image->id}}"
                                           class="btn btn-outline-success btn-sm">Edit</a>
                                        <a onclick="return confirm('Are you sure?')"
                                           href="{{"delete_Certificate/".$image->id}}"
                                           class="btn btn-outline-danger btn-sm">Delete</a>
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
        var loadImage = function (event) {
            var output = document.getElementById('photoi');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function () {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>


    <script>
        $(document).ready(function () {
            $('[data-toggle="popover"]').popover({
//trigger: 'focus',
                trigger: 'hover',
                html: true,
                content: function () {
                    return '<img class="img-fluid" src="' + $(this).data('img') + '" />';
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
