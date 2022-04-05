@extends('admin/layouts.app')
@section('content')
<div class="content">
    <!-- Dynamic Table Full Pagination -->
    <div class="block">

        <div class="block-content">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th>1.Başlık</th>
                            <th>1.Paragraf</th>
                            <th>2.Başlık</th>
                            <th>3.Başlık</th>
                            <th>3.Paragraf</th>
                            
                            <th class="text-center" style="width: 100px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($aboutData as $ad)
                        <tr>
                            <td class="font-w600 font-size-sm">{{ $ad->firstTitle }}</td>
                            <td class="font-w600 font-size-sm">{{ $ad->firstText }}</td>
                            <td class="font-w600 font-size-sm">{{ $ad->secondTitle }}</td>
                            <td class="font-w600 font-size-sm">{{ $ad->thirdTitle }}</td>
                            <td class="font-w600 font-size-sm">{{ $ad->thirdText }}</td>
                            
                            <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip"
                                    title="Edit Client">
                                     <a href="{{ route('admin.about_edit',['id' =>$ad->id]) }}" >
                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                     </a> 
                                </button>
                                <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip"
                                    title="Remove Client">
                                     <a href="{{ route('admin.about_destroy',['id' =>$ad->id]) }}" onclick="return confirm('Delete ! Are you sure ?')">
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
    </div>
    <!-- END Dynamic Table Full Pagination -->
</div>
@endsection