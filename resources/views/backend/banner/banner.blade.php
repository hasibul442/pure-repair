@extends('backend.layout.master')
@section('title','Banner')
@section('page_title_name','Banner')
@section('page_dec','All Baner Type Image')

@section('content')
    <div class="card">
        <h4 class="text-center mt-3 mb-3"><u>Banner Image List</u></h4>
        <div class="card-body">
            <div class="float-right">
                <a type="button" href="#" class="btn   btn-outline-success mb-5 btn-sm" data-toggle="modal"
                    data-target="#bannerAddModal">
                    <i class="icofont icofont-plus"></i> Add Image
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
                        @foreach ($banner as $item )
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->dec }}</td>
                                <td>
                                    <input type="checkbox" data-on="On" data-off="Off" data-width="100"
                                    data-style="slow" data-toggle="toggle" data-onstyle="success"
                                    data-offstyle="danger" name="status1" class="status" id="status1"
                                    data-id="{{ $item->id }}" {{ $item->status == 1 ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <img src="{{ asset('/backend/assets/images/banner/'.$item->image ) }}" style="width: 100px; height:100px">
                                </td>
                                <td>
                                    {{-- <a type="button" class="btn waves-effect waves-light btn-success btn-outline-success btn-sm" href="#"><i class="icofont icofont-eye-alt"></i></a> --}}
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
    <div class="modal fade" id="bannerAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
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
                    <form class="forms-sample" id="bannnerForm" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- <ul class="alert alert-warning d-none" id="save_errorList"></ul> --}}

                        <div class="form-group">
                            <label for="image">Banner Image</label>
                            <input type="file" name="image" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Title<span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label>Short Description<small class="text-danger">(Optional)</small></label>
                            <input type="text" name="dec" class="form-control"/>
                        </div>
                        <div class="form-group">

                            <input type="hidden" name="status" value="0" class="form-control">
                        </div>

                        {{-- <div class="form-check form-check-flat form-check-primary">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input"> Remember me </label>
                </div> --}}
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

    <script>
        $(document).on('change', '#status1', function() {
            var id = $(this).attr('data-id');
            if (this.checked) {
                var catstatus = 1;
            } else {
                var catstatus = 0;
            }
            $.ajax({
                dataType: "json",
                url: '/admin/banner/' + id + '/' + catstatus,
                method: 'get',
                success: function(result1) {
                    console.log(result1);
                }
            });
        })
    </script>
    <script>
        $('#bannnerForm').on('submit', function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var myformData = new FormData($('#bannnerForm')[0]);
            $.ajax({
                type: "post",
                url: "{{ route('banner-add') }}",
                data: myformData,
                cache: false,
                //enctype: 'multipart/form-data',
                processData: false,
                contentType: false,
                dataType: "json",
                success: function(response) {
                    console.log(response);
                    //$("#categoryform").reset();
                    $("#bannnerForm").find('input').val('');
                    //$("#categoryTable").DataTable().ajax.reload();
                    $('#bannerAddModal').modal('hide');
                    //alert("Data Save");
                    location.reload();
                },
                error: function(error) {
                    console.log(error);
                    alert("Data Not Save");
                }
            });
        });

        $('body').on('click', '.deletebtn', function() {
            var id = $(this).data("id");
            var token = $("meta[name='csrf-token']").attr("content");
            if (confirm("Are You sure want to delete !")) {
                $.ajax({
                    type: "DELETE",
                    url: "/admin/banner/delete/" + id,
                    data: {
                        "id": id,
                        "_token": token,
                        },
                    success: function(data) {
                        location.reload();
                    },
                    error: function(data) {
                        console.log('Error:', data);
                    }
                });
                }
        });
    </script>
@endsection
