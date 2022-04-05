@extends('admin/layouts.app')
@section('content')
    <div class="content">
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">References Edit</h3>
            </div>
            <div class="block-content block-content-full">
                <form action="{{ route('admin.reference_update', ['id' => $references->id]) }}" method="POST"
                    enctype="multipart/form-data" onsubmit="return false;">
                    @csrf
                    <div class="row push">
                        <div class="col-lg-4">
                            <p class="font-size-sm text-muted">

                            </p>
                        </div>
                        <div class="col-lg-8 col-xl-5">
                            <div class="form-group">
                                <label for="example-text-input">Company Name</label>
                                <input  value={{$references->name}} type="text" va class="form-control" id="example-text-input" name="name">
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

                            

                        </div>
                        <button type="submit" class="btn btn-rounded btn-secondary">Edit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
