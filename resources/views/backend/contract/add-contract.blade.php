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
                                Add Contract
                                <a class=" btn btn-success float-right" href="{{ route('contracts.view')}}"> <i class="fa fa-plus-circle"></i> Contract list</a>

                            </h4>




                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content p-0">
                                <!-- Morris chart - Sales -->
                                <form method="POST" action="{{ route('contracts.store')}}" id="myForm" >
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="image">Address</label>
                                            <input type="text" name="address" class="form-control" id="address">

                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="image">Mobile</label>
                                            <input type="text" name="mobile" class="form-control" id="mobile">

                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="image">Email</label>
                                            <input type="text" name="email" class="form-control" id="email">

                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="image">Facebook</label>
                                            <input type="text" name="facebook" class="form-control" id="facebook">

                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="image">Twitter</label>
                                            <input type="text" name="twitter" class="form-control" id="twitter">

                                        </div>
                                        
                                        <div class="form-group col-md-4">
                                            <label for="image">Google</label>
                                            <input type="text" name="google" class="form-control" id="google">

                                        </div>
                                        


                                        



                                       
                                            <input type="submit" value="Submit" class="btn btn-primary">
                                        </>

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