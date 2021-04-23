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
                                View Visson
                                @if($countVisson<1) <a class=" btn btn-success float-right" href="{{ route('vissons.add')}}"> <i class="fa fa-plus-circle"></i> Add Visson</a>

                                    @endif
                            </h4>




                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content p-0">
                                <!-- Morris chart - Sales -->



                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL.</th>
                                            <th>Image</th>
                                            <th>Title</th>


                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($allData as $key =>$visson)
                                        <tr>
                                            <td>{{ $key+1 }}</td>


                                            <td> <img id="showImage" src="{{(!empty($visson->image))? url('upload/visson_images/'.$visson->image):url('upload/no_image.jpg') }}" alt="" style="width:150px; height:160px; border: 1px solid black #00">
                                            </td>
                                            <td>{{$visson->title}}</td>


                                            <td>
                                                <a class="btn btn-sm btn-primary" href="{{ route('vissons.edit',$visson->id)}}"> <i class="fa fa-edit"></i>Edit</a>
                                                <a class="btn btn-sm btn-danger" id="delete" href="{{ route('vissons.delete',$visson->id)}}"> <i class="fa fa-trash"></i>Delete</a>
                                            </td>



                                        </tr>

                                        @endforeach


                                    </tbody>

                                </table>













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