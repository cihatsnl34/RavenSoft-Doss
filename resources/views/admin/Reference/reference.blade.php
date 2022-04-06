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
                            <th>Company Name</th>
                            <th class="d-none d-sm-table-cell" style="width: 30%;">Logo</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reference as $rs)
                            <tr>
                                <td class="font-w600 font-size-sm">{{ $rs->CompanyName }}</td>

                                <td class="d-none d-sm-table-cell">
                                    <img src="{{ asset("storage/company/".$rs->CompanyLogo) }}" alt="" width="150" height="50">
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip"
                                            title="Edit Client">
                                             <a href="{{ route('admin.reference_edit',['id' =>$rs->id]) }}" >
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                             </a> 
                                        </button>
                                        <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip"
                                            title="Remove Client">
                                             <a href="{{ route('admin.reference_destroy',['id' =>$rs->id]) }}" onclick="return confirm('Delete ! Are you sure ?')">
                                            <i class="fa fa-fw fa-times"></i>
                                        </a> 
                                        </button>
                                        
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
