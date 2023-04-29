@extends('AdminPanel.layout.master')
@section('content')

<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Create-Collaborator</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create-Collaborator</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- Row -->
            <div class="row">
                <div class="col-md-12 col-xl-6">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h4 class="card-title">Horizontal Form</h4>
                        </div> -->
                        <div class="card-body">
                            <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{route('collaboratorCreated')}}">
                                @csrf
                                <div class=" row mb-1">
                                    <label for="inputName" class="col-md-3 form-label">Name *</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" id="inputName" required placeholder="Enter Name" >
                                    </div>
                                </div>
                                <div class=" row mb-1">
                                    <label for="Role" class="col-md-3 form-label">Role *</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="role" id="Role" required placeholder="Enter Role">
                                    </div>
                                </div>
                                <div class=" row mb-1">
                                    <label for="image" class="col-md-3 form-label">Image 239*359 *</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image" required id="image">
                                    </div>
                                </div>
                                <div class=" row mb-1">
                                    <label for="Description" class="col-md-3 form-label">Description *</label>
                                    <div class="col-md-9">
                                    <textarea class="form-control " placeholder="Enter Description" name="des" required rows="3"></textarea>
                                    </div>
                                </div>
                                <!-- <div class="mb-0 row justify-content-end">
                                    <div class="col-md-9">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                            <span class="custom-control-label">Check me Out</span>
                                        </label>
                                    </div>
                                </div> -->
                                <div class="mb-0 mt-4 row justify-content-end ">
                                    <div class="col-md-9">
                                        <button type="submit" class="btn btn-primary" id="from-submit-btn">Create</button>
                                        <a href="{{route('adminDashboard')}}" class="btn btn-secondary">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->

        </div>
        <!-- CONTAINER CLOSED -->

    </div>
</div>
<!--app-content close-->
@endsection