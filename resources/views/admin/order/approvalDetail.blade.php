@extends('admin.master')

@section('title')
    Order Detail | {{env('APP_NAME')}}
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
                @php($user = \App\Models\UserAuth::find($order->userAuth_id))
                <h4 class="page-title">{{$user->name}} Order</h4>
            </div>
        </div>
    </div>
    <!-- end row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5>Order Detail</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped dt-responsive nowrap w-100">
                        <tr>
                            <th>Order Code</th>
                            <td>{{$order->order_code}}</td>
                        </tr>
                        <tr>
                            <th>Order Quantity</th>
                            <td>{{$order->qty}}</td>
                        </tr>
                        <tr>
                            <th>Order Date</th>
                            <td>{{$order->order_date}}</td>
                        </tr>
                        <tr>
                            <th>Order Total</th>
                            <td>Tk. {{$order->total_price}}</td>
                        </tr>
                    </table>
                </div> <!-- end card body-->
                <div class="card-header">
                    <h5>User Detail</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped dt-responsive nowrap w-100">
                        <tr>
                            <th>Name</th>
                            <td>{{$userAuth->name}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$userAuth->email}}</td>
                        </tr>
                        <tr>
                            <th>Mobile Number</th>
                            <td>{{$userAuth->mobile}}</td>
                        </tr>
                    </table>
                </div> <!-- end card body-->
                <div class="card-header">
                    <h5>Contest Detail</h5>
                </div>
                <div class="card-body">
                    @foreach($order->orderDetails as $detail)
                    <table class="table table-striped dt-responsive nowrap w-100">
                        <tr>
                            <th>Contest Name</th>
                            <td>{{$detail->contest_name}}</td>
                        </tr>
                        <tr>
                            <th>Contest Code</th>
                            <td>{{$detail->contest->code}}</td>
                        </tr>
                        <tr>
                            <th>Contest Price</th>
                            <td>Tk. {{$detail->contest_price}}</td>
                        </tr>
                        <tr>
                            <th>Contest Image</th>
                            <td><img src="{{asset($detail->contest->image)}}" alt="" style="height: 50px;"></td>
                        </tr>
                        <tr>
                            <th>Contest Start Date</th>
                            <td>{{$detail->contest->start_date}}</td>
                        </tr>
                        <tr>
                            <th>Contest End Date</th>
                            <td>{{$detail->contest->end_date}}</td>
                        </tr>
                    </table>
                    @endforeach
                </div> <!-- end card body-->
                <div class="card-header">
                    <h5>Payment Status</h5>
                </div>
                <div class="card-body">
                    @foreach($order->transactions as $transaction)
                        <table class="table table-striped dt-responsive nowrap w-100">
                            <tr>
                                <th>Payment Method</th>
                                <td>{{$transaction->payment_method}}</td>
                            </tr>
                            <tr>
                                <th>Payment Amount</th>
                                <td>Tk. {{$transaction->payment_amount}}</td>
                            </tr>
                            <tr>
                                <th>Payment Status</th>
                                <td>{{$transaction->payment_status == 3 ? 'Waiting' : 'Confirmed'}}</td>
                            </tr>
                            <tr>
                                <th>Payment Number / Transaction Id</th>
                                <td>{{$transaction->transaction_no}}</td>
                            </tr>
                            <tr>
                                <th>Payment Date</th>
                                <td>{{$transaction->created_at->format('d M Y')}}</td>
                            </tr>
                        </table>
                    @endforeach
                </div> <!-- end card body-->
{{--                <div class="card-footer">--}}
{{--                    <a href="{{$order->status == 2 ? route('ticket.generate', ['id' => $order->id]) : 'javascript::(0)' }}" class="btn btn-success">--}}
{{--                        <i class="ri-check-double-fill"></i>--}}
{{--                        Approved--}}
{{--                    </a>--}}
{{--                    <a href="{{$order->status == 2 ? '' : 'javascript::(0)' }}" class="btn btn-danger">--}}
{{--                        <i class="uil-cancel"></i>--}}
{{--                        Reject--}}
{{--                    </a>--}}
{{--                </div>--}}
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
@endsection
