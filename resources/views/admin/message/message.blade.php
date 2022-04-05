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
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Department</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Subject</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Name</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">E-mail</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Message</th>

                            <th class="d-none d-sm-table-cell" style="width: 15%;">Files</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messageData as $rs)
                            <tr>
                                @if ($rs->department == 0)
                                    <td class="font-w600 font-size-sm">Support</td>
                                @elseif($rs->department == 1)
                                    <td class="font-w600 font-size-sm">Sales</td>
                                @endif
                                <td class="font-w600 font-size-sm">{{ $rs->subject }}</td>
                                <td class="font-w600 font-size-sm">{{ $rs->name }}</td>
                                <td class="font-w600 font-size-sm">{{ $rs->email }}</td>
                                <td class="font-w600 font-size-sm">{{ $rs->message }}</td>
                                <td>
                                    <div class="btn-group">

                                        <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip"
                                            title="Remove Client">
                                            <a href="{{ route('admin.download', ['id' => $rs->id]) }}">
                                                <i class="fa fa-fw fa-times"></i>
                                        </button>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">

                                        <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip"
                                            title="Remove Client">
                                            <a href="{{ route('admin.message_destroy', ['id' => $rs->id]) }}"
                                                onclick="return confirm('Delete ! Are you sure ?')">
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
