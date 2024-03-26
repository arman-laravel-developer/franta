@extends('admin.master')
@section('title')
    Contest Edit | {{env('APP_NAME')}}
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
                <h4 class="page-title">Contest Edit</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane show active" id="basic-form-preview">
                            <form action="{{route('contest.update', ['id' => $contest->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="parent_id" class="col-2 col-form-label">Select Category</label>
                                    <div class="col-10">
                                        <select name="catehory_id" id="parent_id" class="form-control @error('catehory_id') is-invalid @enderror">
                                            <option value="" selected disabled>Select Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" {{$contest->category_id == $category->id ? 'selected' : ''}}>{{$category->category_name}}</option>
                                            @endforeach
                                        </select>
                                        @error('parent_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-2 col-form-label">Title</label>
                                    <div class="col-10">
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{$contest->title}}" name="title" id="inputEmail3" placeholder="Contest title"/>
                                        @error('title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail4" class="col-2 col-form-label">Code</label>
                                    <div class="col-10">
                                        <input type="text" class="form-control @error('code') is-invalid @enderror" value="{{$contest->code}}" name="code" id="inputEmail4" placeholder="Contest code"/>
                                        @error('code')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmails4" class="col-2 col-form-label">Draw Date</label>
                                    <div class="col-10">
                                        <input type="date" class="form-control @error('draw_date') is-invalid @enderror" value="{{$contest->draw_date}}" name="draw_date" id="inputEmails4" placeholder="Contest code"/>
                                        @error('draw_date')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail5" class="col-2 col-form-label">Price</label>
                                    <div class="col-10">
                                        <input type="number" class="form-control @error('price') is-invalid @enderror" value="{{$contest->price}}" name="price" id="inputEmail5" placeholder="Contest price"/>
                                        @error('price')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail6" class="col-2 col-form-label">Quantity</label>
                                    <div class="col-10">
                                        <input type="number" class="form-control @error('qty') is-invalid @enderror" value="{{$contest->qty}}" name="qty" id="inputEmail6" placeholder="Contest quantity"/>
                                        @error('qty')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail8" class="col-2 col-form-label">Start Date</label>
                                    <div class="col-10">
                                        <input type="date" class="form-control @error('start_date') is-invalid @enderror" value="{{$contest->start_date}}" name="start_date" id="inputEmail8" placeholder="Contest quantity"/>
                                        @error('start_date')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail9" class="col-2 col-form-label">End Date</label>
                                    <div class="col-10">
                                        <input type="date" class="form-control @error('end_date') is-invalid @enderror" value="{{$contest->end_date}}" name="end_date" id="inputEmail9" placeholder="Contest quantity"/>
                                        @error('end_date')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="summernote" class="col-2 col-form-label">Description</label>
                                    <div class="col-10">
                                        <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="summernote" placeholder="">{{$contest->description}}</textarea>
                                        @error('description')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="summernote2" class="col-2 col-form-label">Details</label>
                                    <div class="col-10">
                                        <textarea type="details" class="form-control @error('details') is-invalid @enderror" name="details" id="summernote2" placeholder="">{{$contest->details}}</textarea>
                                        @error('title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-2 col-form-label">Image</label>
                                    <div class="col-10">
                                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="exampleInputPassword1">
                                        <img src="{{asset($contest->image)}}" alt="" style="height: 100px; width: 100px; padding: 3px; margin: 3px">
                                        @error('image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-2 col-form-label">Other Image</label>
                                    <div class="col-10">
                                        <input type="file" multiple name="other_images[]" class="form-control @error('other_images') is-invalid @enderror" id="exampleInputPassword1">
                                        @foreach($contest->otherImages as $otherImage)
                                            <img src="{{asset($otherImage->image)}}" alt="" style="height: 100px; width: 100px; padding: 3px; margin: 3px">
                                        @endforeach
                                        @error('other_images')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputEmail7" class="col-2 col-form-label">Status</label>
                                    <div class="col-10">
                                        {{--                                        <input type="checkbox" id="switch1" name="status" @if($notice->status == 1) checked @endif data-switch="bool"/>--}}
                                        <input type="checkbox" id="switch1" value="1" class="form-control" name="status" {{$contest->status == 1 ? 'checked' : ''}} data-switch="bool"/>
                                        <label for="switch1" data-on-label="On" data-off-label="Off"></label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-2 col-form-label"></label>
                                    <div class="col-10">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div> <!-- end preview-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <script>
        $('#summernote').summernote({
            tabsize: 2,
            height: 300
        });
    </script>
    <script>
        $('#summernote2').summernote({
            tabsize: 2,
            height: 300
        });
    </script>

@endsection



