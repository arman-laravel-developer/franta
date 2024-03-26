@extends('admin.master')

@section('title')
    Draw Tickets | {{env('APP_NAME')}}
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <button class="btn btn-success ms-1 mt-2 float-end" data-bs-toggle="modal" data-bs-target="#staticBackdrop">+ Draw</button>
                <h4 class="page-title">Draw Tickets</h4>
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
                                @foreach($draw_tickets as $ticket)
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

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div> <!-- end modal header -->
                <form action="{{route('winner.draw')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="modal-body">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Contest Code</label>
                            <select name="contest_code" class="form-control" id="recipient-name">
                                <option value="" selected disabled>Select Code</option>
                                @foreach($contests as $contest)
                                <option value="{{$contest->code}}">{{$contest->code}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Number of Winner</label>
                            <input type="number" name="number_of_winner" min="1" class="form-control" id="message-text" required/>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div> <!-- end modal footer -->
                </form>
            </div> <!-- end modal content-->
        </div> <!-- end modal dialog-->
    </div> <!-- end modal-->


@endsection
