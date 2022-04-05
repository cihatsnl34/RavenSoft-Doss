@extends('admin/layouts.app')
@section('content')
    <main id="main-container">
        <div class="content">
            <div class="row">
                <div class="col-md-12 ">
                    <!-- Validation Wizard -->
                    <div class="js-wizard-simple block block">
                        <!-- Step Tabs -->
                        <ul class="nav nav-tabs nav-tabs-block nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#wizard-validation-step1" data-toggle="tab">1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#wizard-validation-step2" data-toggle="tab">2</a>
                            </li>s
                        </ul>
                        <!-- END Step Tabs -->

                        <!-- Form -->
                        <form class="js-wizard-validation-form" action="{{ route('admin.contact_add') }}" method="POST">
                            @csrf
                            <!-- Wizard Progress Bar -->
                            <div class="block-content block-content-sm">
                                <div class="progress" data-wizard="progress" style="height: 8px;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary"
                                        role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!-- END Wizard Progress Bar -->
                            <!-- Steps Content -->
                            <div class="block-content block-content-full tab-content px-md-5" style="min-height: 300px;">

                                <!-- Step 1 -->
                                <div class="tab-pane active" id="wizard-validation-step1" role="tabpanel">
                                    <div class="form-group">
                                        <label for="wizard-validation-firstname">E-mail</label>
                                        <input class="form-control" name="email" type="email"
                                            id="wizard-validation-firstname">
                                    </div>
                                    <div class="form-group">
                                        <label for="wizard-validation-bio">Phone</label>
                                        <input class="form-control" name="phone" type="number"
                                            id="wizard-validation-firstname">
                                    </div>
                                    <div class="form-group">
                                        <label for="wizard-validation-bio">Adress</label>
                                        <textarea class="form-control" id="wizard-validation-bio" name="adress" rows="5"></textarea>
                                    </div>
                                </div>
                                <!-- END Step 1 -->
                                <!-- Step 2 -->
                                <div class="tab-pane" id="wizard-validation-step2" role="tabpanel">
                                    <div class="form-group">
                                        <label for="wizard-validation-firstname">Facebook Url</label>
                                        <input class="form-control" type="text" id="wizard-validation-firstname"
                                            name="facebookUrl">
                                    </div>
                                    <div class="form-group">
                                        <label for="wizard-validation-firstname">Twitter Url</label>
                                        <input class="form-control" type="text" id="wizard-validation-firstname"
                                            name="twitterUrl">
                                    </div>
                                    <div class="form-group">
                                        <label for="wizard-validation-firstname">İnstagram Url</label>
                                        <input class="form-control" type="text" id="wizard-validation-firstname"
                                            name="instagramUrl">
                                    </div>
                                    <div class="form-group">
                                        <label for="wizard-validation-firstname">Linkedin Url</label>
                                        <input class="form-control" type="text" id="wizard-validation-firstname"
                                            name="linkedinUrl">
                                    </div>
                                </div>
                                <!-- END Step 2 -->
                            </div>
                        
                        <!-- END Steps Content -->
                        <!-- Steps Navigation -->
                        <div class="block-content block-content-sm block-content-full bg-body-light rounded-bottom">
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="btn btn-secondary" data-wizard="prev">
                                        <i class="fa fa-angle-left mr-1"></i> Previous
                                    </button>
                                </div>
                                <div class="col-6 text-right">
                                    <button type="button" class="btn btn-secondary" data-wizard="next">
                                        Next <i class="fa fa-angle-right ml-1"></i>
                                    </button>
                                    <button type="submit" class="btn btn-primary d-none" data-wizard="finish">
                                        <i class="fa fa-check mr-1"></i> Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- END Steps Navigation -->
                        </form>
                        <!-- END Form -->

                        <!-- END Validation Wizard Classic -->
                    </div>
                </div>
            </div>

        </div>
        </div>
        </div>
    </main>
@endsection
