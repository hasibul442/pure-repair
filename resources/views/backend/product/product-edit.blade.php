@extends('backend.layout.master')
@section('title','Product')
@section('page_title_name','Product > Product Update')
@section('page_dec','Product Update')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <form class="forms-sample" action="{{ url('/admin/product/update/'.$product->id) }}"  method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    {{-- <ul class="alert alert-warning d-none" id="save_errorList"></ul> --}}

                    <div class="form-group">
                        <label>Product Name<small class="text-danger">*</small></label>
                        <input type="text" value="{{ $product->p_name }}" name="p_name" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="cat_id">Category</label>
                        <select class="form-control"  name="cat_id">
                          <option selected value="{{ $product->cat_id }}">{{ $product->category->cat_name }}</option>
                          @foreach ( App\Models\Category::get() as $item)
                            <option value="{{ $item->id }}">{{ $item->cat_name }}</option>
                          @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="brand_id">Brand</label>
                        <select class="form-control" name="brand_id">
                          <option selected value="{{ $product->brand_id }}">{{ $product->brand->name }}</option>
                          @foreach ( App\Models\Brand::get() as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                          @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="condition">Type</label>
                        <select class="form-control" name="condition">
                          <option selected value="{{ $product->condition }}">
                            @if($product->condition == 'new')New
                            @elseif($product->condition == 'hot')Hot
                            @elseif($product->condition == 'default')Default

                            @endif
                            </option>
                            <option value="new">New</option>
                            <option value="hot">Hot</option>
                            <option value="default">Defult</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Price<small class="text-danger">*</small></label>
                        <input type="text" value="{{ $product->price }}" name="price" class="form-control"/>
                        <input type="hidden" value="{{ $product->status }}" name="status" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Description<small class="text-danger">*</small></label>
                        <textarea type="text" value="{{ $product->description }}" rows="5" name="description" class="form-control">{{ $product->description }}</textarea>
                    </div>


                    <div class="form-group">
                        <label for="image">Product Image</label>
                        <br>
                        <input type="file" name="image">
                    </div>
                    <div class="float-right">
                        <button type="submit" class="btn  btn-sm btn-primary mr-2">Submit</button>
                        <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-6">
                <img class="img-fluid" src="{{ asset('/backend/assets/images/product/'.$product->image) }}" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
