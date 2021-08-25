@extends('backend.layout.master')
@section('title','Product')
@section('page_title_name','Product')
@section('page_dec','Product List')

@section('content')
<div class="card">
    <h4 class="text-center mt-3 mb-3"><u>Product List</u></h4>
    <div class="card-body">
        <div class="float-right">
            <a type="button" href="#" class="btn   btn-outline-success mb-5 btn-sm" data-toggle="modal"
                data-target="#productAddModal">
                <i class="icofont icofont-plus"></i> Add Product
            </a>
        </div>
        <div class="table-responsive">
            <table id="example" class=" table display" style="min-width: 845px">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Brand</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=0;
                    @endphp
                    @foreach ($product as $item )
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $item->p_name }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->brand }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <input type="checkbox" data-on="On" data-off="Off" data-width="100"
                                data-style="slow" data-toggle="toggle" data-onstyle="success"
                                data-offstyle="danger" name="status1" class="status" id="status1"
                                data-id="{{ $item->id }}" {{ $item->status == 1 ? 'checked' : '' }}>
                            </td>
                            <td>
                                <img src="{{ asset('/backend/assets/images/product/'.$item->image ) }}" style="width: 100px; height:100px">
                            </td>
                            <td>
                                <a type="button" class="btn waves-effect waves-light btn-success btn-outline-success btn-sm mb-2" href="#"><i class="icofont icofont-eye-alt"></i></a>
                                <a type="button" class="btn waves-effect waves-light btn-warning btn-outline-warning btn-sm mb-2" href="javascript:void(0);" data-id="{{ $item->id }}" ><i class="icofont icofont-edit"></i></a>
                                <a type="button" class="btn waves-effect waves-light btn-danger btn-outline-danger btn-sm deletebtn mb-2" href="javascript:void(0);" data-id="{{ $item->id }}"><i class="icofont icofont-delete"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Brand</th>
                        <th>Description</th>
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
    <div class="modal fade" id="productAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
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
                    <form class="forms-sample" id="productForm" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- <ul class="alert alert-warning d-none" id="save_errorList"></ul> --}}

                        <div class="form-group">
                            <label>Product Name<small class="text-danger">*</small></label>
                            <input type="text" name="p_name" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Price<small class="text-danger">*</small></label>
                            <input type="text" name="price" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Brand<small class="text-danger">*</small></label>
                            <input type="text" name="brand" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Description<small class="text-danger">*</small></label>
                            <input type="text" name="description" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="image">Product Image</label>
                            <br>
                            <input type="file" name="image" required>

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

    <script>
        $(document).ready(function() {
             $('#example').DataTable();
         } );
     </script>

    <script>
        $('#productForm').on('submit', function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var myformData = new FormData($('#productForm')[0]);
            $.ajax({
                type: "post",
                url: "{{ route('product-add') }}",
                data: myformData,
                cache: false,
                //enctype: 'multipart/form-data',
                processData: false,
                contentType: false,
                dataType: "json",
                success: function(response) {
                    console.log(response);
                    //$("#categoryform").reset();
                    $("#productForm").find('input').val('');
                    //$("#categoryTable").DataTable().ajax.reload();
                    $('#productAddModal').modal('hide');
                    //alert("Data Save");
                    location.reload();
                },
                error: function(error) {
                    console.log(error);
                    alert("Data Not Save");
                }
            });
        });
    </script>
@endsection
