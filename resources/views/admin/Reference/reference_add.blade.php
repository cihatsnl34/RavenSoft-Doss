@extends('admin/layouts.app')
@section('content')
    <div class="content">
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">References Add</h3>
            </div>
            <div class="block-content block-content-full">
                <form action="{{ route('admin.reference_add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row push">
                        <div class="col-lg-4">
                            <p class="font-size-sm text-muted">

                            </p>
                        </div>
                        <div class="col-lg-8 col-xl-5">
                            <div class="form-group">
                                <label for="example-text-input">Company Name</label>
                                <input type="text" class="form-control" id="example-text-input" name="name">
                            </div>
                        </div>
                    </div>


                    <div class="row push">
                        <div class="col-lg-4">
                            <p class="font-size-sm text-muted">
                            </p>
                        </div>
                        <div class="col-lg-8 col-xl-5 overflow-hidden">
                            <div class="form-group">
                                <label class="d-block" for="example-file-input">Company Logo</label>
                                <input type="file" id="example-file-input" name="files">
                            </div>
                            <button type="submit" class="btn btn-rounded btn-secondary">Add</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
