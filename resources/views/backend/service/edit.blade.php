@extends('backend.layout.master')
@section('title','Service Update')
@section('page_title_name','Service > Service Update')
@section('page_dec','Update Service Details')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <form class="forms-sample" action= "{{ url('/admin/service/edit/'.$service->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    {{-- <ul class="alert alert-warning d-none" id="save_errorList"></ul> --}}

                    <div class="form-group">
                        <label>Service Name<small class="text-danger">*</small></label>
                        <input type="text" value="{{ $service->name }}" name="name" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Description<small class="text-danger">*</small></label>
                        <input type="text" value="{{ $service->description }}" name="description" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="image">Service Image</label>
                        <input type="file" name="image" class="form-control">
                        <input type="hidden" name="status" value="1" class="form-control">
                    </div>
                    <div class="float-right">
                        <button type="submit" class="btn  btn-sm btn-gradient-primary mr-2">Submit</button>
                        <a type="button" href="{{ route('service') }}" class="btn btn-sm btn-light" data-dismiss="modal">Cancel</a>
                    </div>
                </form>
            </div>
            <div class="col-sm-6">
                <img class="img-fluid" src="{{ asset('/backend/assets/images/service/'.$service->image) }}" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
