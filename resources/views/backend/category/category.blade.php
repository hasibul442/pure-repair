@extends('backend.layout.master')
@section('title','Category')
@section('page_title_name','Category')
@section('page_dec','Product Category List')

@section('content')
<div class="card">
    <h4 class="text-center mt-3 mb-3"><u>Category List</u></h4>
    <div class="card-body">
        <div class="float-right">
            <a type="button" href="#" class="btn   btn-outline-success mb-5 btn-sm" data-toggle="modal"
                data-target="#CategoryAddModal">
                <i class="icofont icofont-plus"></i> Add Category
            </a>
        </div>
        <div class="table-responsive">
            <table id="example" class=" table display" style="min-width: 845px">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=0;
                    @endphp
                    @foreach ($category as $item )
                        <tr id="category-{{ $item->id }}">
                            <td>{{ ++$i }}</td>
                            <td>{{ $item->cat_name }}</td>
                            <td>
                                <a type="button" class="btn waves-effect waves-light btn-warning btn-outline-warning btn-sm mb-2" hhref="javascript:void(0);" onclick="editCategory({{ $item->id }})" ><i class="icofont icofont-edit"></i></a>
                                <a type="button" class="btn waves-effect waves-light btn-danger btn-outline-danger btn-sm deletebtn mb-2" href="javascript:void(0);" data-id="{{ $item->id }}"><i class="icofont icofont-delete"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

    {{-- Data add Model Start --}}
    <div class="modal fade" id="CategoryAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
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
                    <form class="forms-sample" id="CategoryForm" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- <ul class="alert alert-warning d-none" id="save_errorList"></ul> --}}

                        <div class="form-group">
                            <label>Category Name<small class="text-danger">*</small></label>
                            <input type="text" name="name" class="form-control"/>
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

    {{-- Data Edit Model Start --}}
    <div class="modal fade" id="CategoryEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="text-center">
                        <h3 class="modal-title" id="exampleModalLabel">Edit Bank Details</h3>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul id="BankForm_errorlist"></ul>
                    <form class="forms-sample" id="CategoryEditForm">
                        @csrf
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label>Category Name<small class="text-danger">*</small></label>
                            <input type="text" id="name" name="name" class="form-control"/>
                        </div>
                        <div class="float-right">
                            <button type="submit" class="btn  btn-sm btn-primary mr-2">Submit</button>
                            <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Data Edit Modal End --}}


    <script>
        $(document).ready(function() {
             $('#example').DataTable();
         } );
     </script>

<script>
    $('#CategoryForm').on('submit', function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var myformData = new FormData($('#CategoryForm')[0]);
        $.ajax({
            type: "post",
            url: "/admin/category/add",
            data: myformData,
            cache: false,
            //enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            dataType: "json",
            success: function(response) {
                console.log(response);
                //$("#categoryform").reset();
                $("#CategoryForm").find('input').val('');
                //$("#categoryTable").DataTable().ajax.reload();
                $('#CategoryAddModal').modal('hide');
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
                    url: "/admin/category/delete/" + id,
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

<script>
    function editCategory(id){
        $.get("/admin/category/edit/"+id, function(category){
            $('#id').val(category.id);
            $('#name').val(category.cat_name);
            $('#CategoryEditModal').modal("toggle");
        });
    }

    $('#CategoryEditForm').submit(function (e) {
        e.preventDefault();

        let id = $('#id').val();
        let cat_name = $('#name').val();
        let _token = $('input[name=_token]').val();

        $.ajax({
            type: "PUT",
            url: "/admin/category/update",
            data: {
                id:id,
                cat_name:cat_name,
                _token:_token,
            },
            dataType: "json",
            success: function (response) {
                $('#name'+response.id + 'td:nth-child(1)').text(response.cat_name);
                $('#CategoryEditModal').modal("toggle");
                location.reload();
                $('#CategoryEditForm')[0].reset();

            }
        });

    });
</script>
@endsection
