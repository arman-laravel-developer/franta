@extends('admin.master')
@section('title')
    Contest Manage | {{env('APP_NAME')}} 
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <form class="d-flex">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-light" id="dash-daterange">
                            <span class="input-group-text bg-primary border-primary text-white">
                                                    <i class="mdi mdi-calendar-range font-13"></i>
                                                </span>
                        </div>
                        <a href="javascript: void(0);" class="btn btn-primary ms-2">
                            <i class="mdi mdi-autorenew"></i>
                        </a>
                        <a href="javascript: void(0);" class="btn btn-primary ms-1">
                            <i class="mdi mdi-filter-variant"></i>
                        </a>
                    </form>
                </div>
                <h4 class="page-title">Contest Manage</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane show active" id="alt-pagination-preview">
                            <table id="alternative-page-datatable" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Title</th>
                                    <th>Code</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contests as $contest)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$contest->title}}</td>
                                        <td>{{$contest->code}}</td>
                                        <td>{{$contest->price}}</td>
                                        <td>{{$contest->qty}}</td>
                                        <td>{{$contest->start_date}}</td>
                                        <td>{{$contest->end_date}}</td>
                                        <td>
                                            <img src="{{asset($contest->image)}}" alt="" style="height: 80px">
                                        </td>
                                        <td>
                                            @if($contest->status == 1)
                                                <span class="badge badge-success-lighten">Active</span>
                                            @else
                                                <span class="badge badge-danger-lighten">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('contest.edit', ['id' => $contest->id])}}" class="btn btn-success" title="Edit"><i class="uil-edit-alt"></i></a>
                                            <a href="{{route('contest.delete', ['id' => $contest->id])}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger" title="delete"><i class="uil-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div> <!-- end preview-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div> <!-- end row-->
@endsection


