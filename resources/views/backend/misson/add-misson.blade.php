@extends('backend/layouts/master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->






            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">


                            <h4>
                                Add Misson
                                
                                <a class=" btn btn-success float-right" href="{{ route('missons.view')}}"> <i class="fa fa-plus-circle"></i> Misson list</a>

                            </h4>




                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content p-0">
                                <!-- Morris chart - Sales -->
                                <form method="POST" action="{{ route('missons.store')}}" id="myForm" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="image">Title</label>
                                            <textarea name="title" id="title" rows="4"class="form-control"></textarea>


                                            

                                        </div>
                                        

                                       


                                        <div class="form-group col-md-4">
                                            <label for="image">Image</label>
                                            <input type="file" name="image" class="form-control" id="image">

                                        </div>
                                        <div class="form-group col-md-2">
                                            <img id="showImage" src="{{url('upload/no_image.jpg') }}" alt="" style="width:150px; height:160px; border: 1px solid black #00">

                                        </div>



                                        <div class="form-group col-md-6 " style="padding-top: 60px;">

                                            <input type="submit" value="Submit" class="btn btn-primary">
                                        </div>

                                    </div>

                                </form>
















                            </div>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                </section>
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->

                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>





@endsection