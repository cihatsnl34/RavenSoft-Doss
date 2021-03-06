@extends('admin/layouts.app')
@section('content')
    <div class="content">
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">Image Edit</h3>
            </div>
            <div class="block-content block-content-full">
                <form action="{{ route('admin.image_update', ['id' => $imagedata->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row push">
                        <div class="col-lg-4">
                            <p class="font-size-sm text-muted">
                            </p>
                        </div>
                        <div class="col-lg-8 col-xl-5">
                            <div class="form-group">
                                <label for="example-text-input">Name</label>
                                <input value="{{ $imagedata->name }}" type="text" va class="form-control"
                                    id="example-text-input" name="name">
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
                                <label class="d-block" for="example-file-input">Image</label>
                                <img src="{{ asset('storage/image/' .$imagedata->file) }}" alt="" width="150"
                                    height="50">
                                <input type="file" id="example-file-input" name="files">
                            </div>
                            <button type="submit" class="btn btn-rounded btn-secondary">Edit</button>
                        </div>

                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
