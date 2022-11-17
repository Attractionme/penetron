@extends('admins.layouts.app')
@section('title','Categories')

@section('css')
    <link rel="stylesheet" href="{{asset('assets/vendors/simple-datatables/style.css')}}">
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
                        <h3>Categories</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">Categories</li>
                                <li class="breadcrumb-item"><a href="{{route('createCategory')}}">Create New
                                        Category</a></li>
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
                                <th>Name</th>
                                <th>English Name</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td class="subid">{{$category->id}}</td>
                                    <td class="subname">{{$category->name}}</td>
                                    <td class="subname-en">{{$category->name_en}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="card-body" id="editgroupform" style="display: none">
                        <div class="col-md-4">
                            <label>Edit Category</label>
                        </div>
                        <form  action="{{url('update-category')}}" class="form form-horizontal">
                            {{csrf_field()}}
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-8 form-group" style="display: none">
                                        <input type="text" id="categoryid" class="form-control"
                                               name="categoryid" placeholder="categoryid" >
                                    </div>
                                    <div class="col-md-8 form-group" >
                                        <input type="text" id="name" class="form-control" name="name" placeholder="Category Name(AR)" >
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="name-en" class="form-control" name="name-en" placeholder="Category Name(EN) " required>
                                    </div>
                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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

            $(".editcategory").click(function() {
            var $row = $(this).closest("tr");    // Find the row
            var $subid = $row.find(".subid").text();
            var $subname = $row.find(".subname").text(); // Find the text
            var $subname_en = $row.find(".subname-en").text();

            document.getElementById("editgroupform").style.display = "block";

            document.getElementById("categoryid").value = $subid;
            document.getElementById("name").value = $subname;
            document.getElementById("name-en").value = $subname_en;
        });
        });

    </script>


    <script src="{{asset('assets/vendors/simple-datatables/simple-datatables.js')}}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
@endsection

