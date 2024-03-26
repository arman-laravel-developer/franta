@extends('admin.master')
@section('title')
    Order Approved | {{env('APP_NAME')}}
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
                <h4 class="page-title">Order Approved</h4>
            </div>
        </div>
    </div>
    <!-- end row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="alternative-page-datatable" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Order Code</th>
                            <th>Order Quantity</th>
                            <th>Order Date</th>
                            <th>Order Total</th>
                            {{--                            <th>Image</th>--}}
                            <th>Payment Status</th>
                            <th>Order Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$order->order_code}}</td>
                                <td>{{$order->qty}}</td>
                                <td>{{$order->order_date}}</td>
                                <td>Tk.{{$order->total_price}}</td>
                                {{--                            <td>--}}
                                {{--                                <img src="{{asset($contest->image)}}" style="height: 100px" alt="{{$contest->name}}">--}}
                                {{--                            </td>--}}
                                <td>
                                    @if($order->payment_status == 1)
                                        <span class="badge bg-success">Confirmed</span>
                                    @else
                                        <span class="badge bg-danger">Pending</span>
                                    @endif
                                </td>
                                <td><span class="badge bg-success">Approved</span></td>
                                <td>
                                    <a href="{{route('order.detail-approval', ['id' => $order->id])}}" class="btn btn-success btn-sm" title="Detail">
                                        <i class="ri-book-open-fill"></i>
                                    </a>
                                    <button type="button" onclick="confirmDelete({{$order->id}});" class="btn btn-danger btn-sm" title="Delete">
                                        <i class="ri-chat-delete-fill"></i>
                                    </button>

                                    <form action="{{route('order.delete', ['id' => $order->id])}}" method="POST" id="categoryDeleteForm{{$order->id}}">
                                        @csrf
                                    </form>
                                    <script>
                                        function confirmDelete(categoryId) {
                                            var confirmDelete = confirm('Are you sure you want to delete this?');
                                            if (confirmDelete) {
                                                document.getElementById('categoryDeleteForm' + categoryId).submit();
                                            } else {
                                                return false;
                                            }
                                        }
                                    </script>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>

@endsection



