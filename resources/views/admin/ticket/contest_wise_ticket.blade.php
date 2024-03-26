@extends('admin.master')
@section('title')
{{$contest->code}} | {{env('APP_NAME')}}
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
                <h4 class="page-title">{{$contest->code}}</h4>
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
                                    <th>Contest code</th>
                                    <th>Ticket Number</th>
                                    <th>Draw Date</th>
                                    <th>User Name</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tickets as $ticket)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$ticket->contest_code}}</td>
                                        <td>{{$ticket->ticket_no}}</td>
                                        <td>{{$ticket->draw_date}}</td>
                                        <td>{{$ticket->userAuth->name}}</td>
                                        @php
                                            $text = $ticket->draw_status;
                                            // Replace special characters with spaces
                                            $text = preg_replace('/[_\-\.]/', ' ', $text);
                                            // Convert first character to uppercase
                                            $text = Str::ucfirst($text);
                                        @endphp
                                        <td>{{\Illuminate\Support\Str::ucfirst($text)}}</td>
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


