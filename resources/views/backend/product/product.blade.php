@extends('backend.layout.master')
@section('title','Producd')
@section('page_title_name','Product')
@section('page_dec','Product List')

@section('content')
<div class="card">
    <h4 class="text-center mt-3 mb-3"><u>Service List</u></h4>
    <div class="card-body">
        <div class="float-right">
            <a type="button" href="#" class="btn   btn-outline-success mb-5 btn-sm" data-toggle="modal"
                data-target="#serviceAddModal">
                <i class="icofont icofont-plus"></i> Add Services
            </a>
        </div>
        <div class="table-responsive">
            <table id="example" class=" table display" style="min-width: 845px">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Short Description</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=0;
                    @endphp
                    @foreach ($service as $item )
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <input type="checkbox" data-on="On" data-off="Off" data-width="100"
                                data-style="slow" data-toggle="toggle" data-onstyle="success"
                                data-offstyle="danger" name="status1" class="status" id="status1"
                                data-id="{{ $item->id }}" {{ $item->status == 1 ? 'checked' : '' }}>
                            </td>
                            <td>
                                <img src="{{ asset('/backend/assets/images/service/'.$item->image ) }}" style="width: 100px; height:100px">
                            </td>
                            <td>
                                <a type="button" class="btn waves-effect waves-light btn-success btn-outline-success btn-sm" href="#"><i class="icofont icofont-eye-alt"></i></a>
                                <a type="button" class="btn waves-effect waves-light btn-warning btn-outline-warning btn-sm" href="javascript:void(0);" data-id="{{ $item->id }}" ><i class="icofont icofont-edit"></i></a>
                                <a type="button" class="btn waves-effect waves-light btn-danger btn-outline-danger btn-sm deletebtn" href="javascript:void(0);" data-id="{{ $item->id }}"><i class="icofont icofont-delete"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Short Description</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

    {{-- Data add Model Start --}}
    <div class="modal fade" id="serviceAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="text-center">
                        <h3 class="modal-title" id="exampleModalLabel">Add Company Details</h3>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="forms-sample" id="serviceForm" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- <ul class="alert alert-warning d-none" id="save_errorList"></ul> --}}

                        <div class="form-group">
                            <label>Service Name<small class="text-danger">*</small></label>
                            <input type="text" name="name" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Description<small class="text-danger">*</small></label>
                            <input type="text" name="description" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="image">Service Image</label>
                            <input type="file" name="image" class="form-control" required>
                            <input type="hidden" name="status" value="1" class="form-control">
                        </div>
                        <div class="float-right">
                            <button type="submit" class="btn  btn-sm btn-gradient-primary mr-2">Submit</button>
                            <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Data Add Modal End --}}
@endsection
