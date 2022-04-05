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
                            <th>4.Başlık</th>
                            <th>4.Paragraf</th>
                            <th>5.Başlık</th>
                            <th>5.Paragraf</th>
                            <th>6.Başlık</th>
                            <th>6.Paragraf</th>
                            <th>7.Başlık</th>
                            <th>8.Başlık</th>
                            <th>8.Paragraf</th>
                            <th>9.Başlık</th>
                            <th>9.Paragraf</th>
                            <th>10.Başlık</th>
                            <th>10.Paragraf</th>
                            <th>11.Başlık</th>
                            <th>11.Paragraf</th>
                            <th>12.Başlık</th>
                            <th>12.Paragraf</th>
                            <th>13.Başlık</th>
                            <th>13.Paragraf</th>
                            <th>14.Başlık</th>
                            <th>14.Paragraf</th>
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
                            <td class="font-w600 font-size-sm">{{ $ad->fourTitle }}</td>
                            <td class="font-w600 font-size-sm">{{ $ad->fourText }}</td>
                            <td class="font-w600 font-size-sm">{{ $ad->fiveTitle }}</td>
                            <td class="font-w600 font-size-sm">{{ $ad->fiveText }}</td>
                            <td class="font-w600 font-size-sm">{{ $ad->sixTitle }}</td>
                            <td class="font-w600 font-size-sm">{{ $ad->sixText }}</td>
                            <td class="font-w600 font-size-sm">{{ $ad->sevenTitle }}</td>
                            <td class="font-w600 font-size-sm">{{ $ad->eightTitle }}</td>
                            <td class="font-w600 font-size-sm">{{ $ad->eightText }}</td>
                            <td class="font-w600 font-size-sm">{{ $ad->nineTitle }}</td>
                            <td class="font-w600 font-size-sm">{{ $ad->nineText }}</td>
                            <td class="font-w600 font-size-sm">{{ $ad->tenTitle }}</td>
                            <td class="font-w600 font-size-sm">{{ $ad->tenText }}</td>
                            <td class="font-w600 font-size-sm">{{ $ad->elevenTitle }}</td>
                            <td class="font-w600 font-size-sm">{{ $ad->elevenText }}</td>
                            <td class="font-w600 font-size-sm">{{ $ad->twelveTitle }}</td>
                            <td class="font-w600 font-size-sm">{{ $ad->twelveText }}</td>
                            <td class="font-w600 font-size-sm">{{ $ad->thirteenTitle }}</td>
                            <td class="font-w600 font-size-sm">{{ $ad->thirteenText }}</td>
                            <td class="font-w600 font-size-sm">{{ $ad->fourteenTitle }}</td>
                            <td class="font-w600 font-size-sm">{{ $ad->fourteenText }}</td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip"
                                    title="Delete">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
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