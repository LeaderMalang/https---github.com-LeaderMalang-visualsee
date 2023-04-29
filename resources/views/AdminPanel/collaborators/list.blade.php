@extends('AdminPanel.layout.master')
@section('content')

<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Collaborators Table</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Collaborators Table</li>
                    </ol>
                </div>

            </div>
            <!-- PAGE-HEADER END -->

            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title">Responsive DataTable</h3>
                        </div> -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="example2" class="table table-bordered text-nowrap border-bottom dataTable no-footer dtr-inline" role="grid" aria-describedby="example2_info" style="width: 843px;">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="border-bottom-0 sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" style="width: 200.411px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th>
                                                        <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" style="width: 250.411px;" aria-label="Position: activate to sort column ascending">Role</th>
                                                        <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" style="width: 135.4109px;" aria-label="Office: activate to sort column ascending">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if($collaborators)
                                                    @foreach($collaborators as $collaborator)
                                                    <tr class="odd">
                                                        <td class="dtr-control sorting_1" tabindex="0">{{$collaborator->name}}</td>
                                                        <td>{{$collaborator->role}}</td>
                                                        <td><a href="{{route('updateCollaborator',['id'=>$collaborator->id])}}" class="btn btn-sm btn-primary" id="bEdit">
                                                                <span class="fe fe-edit">
                                                                    <a href="{{route('collaboratorDeleted',['id'=>$collaborator->id])}}" class="btn btn-sm btn-danger mx-2" id="bDelete">
                                                                        <span class="fe fe-trash-2"> </span>
                                                                    </a></td>
                                                    </tr>
                                                    @endforeach
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- CONTAINER CLOSED -->

    </div>
</div>
<!--app-content closed-->
@endsection