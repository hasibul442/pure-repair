@extends('backend.layout.master')
@section('title','Brand')
@section('page_title_name','Brand > Brand Update')
@section('page_dec','Brand Update')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <form class="forms-sample" action="{{ url('/admin/brand/edit/'.$brand->id) }}"  method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    {{-- <ul class="alert alert-warning d-none" id="save_errorList"></ul> --}}

                    <div class="form-group">
                        <label>Name<small class="text-danger">*</small></label>
                        <input type="text" name="name" value="{{ $brand->name }}"  class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="image">Brand Image</label>
                        <br>
                        <input type="file" name="image">
                    </div>
                    <div class="float-right">
                        <button type="submit" class="btn  btn-sm btn-gradient-primary mr-2">Submit</button>
                        <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-6">
                @if($brand->image == Null)
                <img src="{{ asset('/backend/assets/images/default/default.jpg' ) }}" style="width: 100px; height:100px">
                @else
                <img class="img-fluid" src="{{ asset('/backend/assets/images/brand/'.$brand->image) }}" alt="">
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
