@extends('admin/layouts.app')
@section('content')
    <div class="content">
        <!-- Dynamic Table Full Pagination -->
        <div class="block">
            <div class="block-header">

            </div>
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th class="d-none d-sm-table-cell" style="width: 30%;">Image</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($image as $rs)
                            <tr>
                                <td class="font-w600 font-size-sm">{{ $rs->name }}</td>

                                <td class="d-none d-sm-table-cell">
                                    <img src="{{ asset("storage/image/".$rs->file) }}" alt="" width="150" height="50">
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip"
                                            title="Edit Client">
                                             <a href="{{ route('admin.image_edit',['id' =>$rs->id]) }}" >
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                             </a> 
                                        </button>
                                        <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip"
                                            title="Remove Client">
                                             <a href="{{ route('admin.image_destroy',['id' =>$rs->id]) }}" onclick="return confirm('Delete ! Are you sure ?')">
                                            <i class="fa fa-fw fa-times"></i>
                                        </button>
                                        </a> 
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END Dynamic Table Full Pagination -->

    </div>
@endsection

