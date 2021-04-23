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
                                Profile


                            </h4>




                        </div><!-- /.card-header -->
                        <div class="card-body">

                            <div class="tab-content p-0">
                                <!-- Morris chart - Sales -->
                                <section class="col-md-4 offset-md-4">
                                <div class="card card-primary card-outline">
                                    <div class="card-body box-profile">
                                        <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle" src="
                                            
                                            {{(!empty($user->image))? url('upload/user_images/'.$user->image):url('upload/no_image.jpg') }}
                                             
                                            
                                            " alt="User profile picture">
                                        </div>

                                        <h3 class="profile-username text-center">{{$user->name}}</h3>

                                        <p class="text-muted text-center">{{$user->address}}</p>
                                        <table width = "100%" class="table table-borderd">
                                            <tbody >
                                                <tr>
                                                    <td>Mobile No</td>
                                                    <td>{{$user->mobile}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td>{{$user->email}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Gender</td>
                                                    <td>{{$user->gender}}</td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>

                                        

                                        <a href="{{ route('profiles.edit',$user->id)}}" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                </section>
















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