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
                                Edit Contract
                                <a class=" btn btn-success float-right" href="{{ route('services.view')}}"> <i class="fa fa-list"></i> Your Contracts</a>

                            </h4>




                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content p-0">
                                <!-- Morris chart - Sales -->
                                <form method="POST" action="{{ route('contracts.update',$editData->id)}}" id="myForm" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                    <div class="form-group col-md-4">
                                            <label for="image">Address</label>
                                            <input type="text" value="{{$editData->address}}" name="address" class="form-control" id="address">

                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="image">Mobile</label>
                                            <input type="text" value="{{$editData->mobile}}"  name="mobile" class="form-control" id="mobile">

                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="image">Email</label>
                                            <input type="text" value="{{$editData->email}}" name="email" class="form-control" id="email">

                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="image">Facebook</label>
                                            <input type="text" value="{{$editData->facebook}}" name="facebook" class="form-control" id="facebook">

                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="image">Twitter</label>
                                            <input type="text" value="{{$editData->twitter}}" name="twitter" class="form-control" id="twitter">

                                        </div>
                                        
                                        <div class="form-group col-md-4">
                                            <label for="image">Google</label>
                                            <input type="text" value="{{$editData->google}}" name="google" class="form-control" id="google">

                                        </div>


                                        



                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        <div class="form-group col-md-6 " style="padding-top: 60px;">

                                            <input type="submit" value="Update" class="btn btn-primary">
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