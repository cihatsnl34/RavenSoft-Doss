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
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#wizard-validation-step3" data-toggle="tab">3</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#wizard-validation-step4" data-toggle="tab">4</a>
                            </li>
                        </ul>
                        <!-- END Step Tabs -->

                        <!-- Form -->
                        <form class="js-wizard-validation-form" action="{{ route('admin.about_add') }}" method="POST">
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
                                        <label for="wizard-validation-firstname">1.Başlık</label>
                                        <input class="form-control" name="firstTitle" type="text"
                                            id="wizard-validation-firstname">
                                    </div>
                                    <div class="form-group">
                                        <label for="wizard-validation-bio">1.Paragraf</label>
                                        <textarea class="form-control" id="wizard-validation-bio" name="firstText" rows="5"></textarea>
                                    </div>

                                </div>
                                <!-- END Step 1 -->
                                <!-- Step 2 -->
                                <div class="tab-pane" id="wizard-validation-step2" role="tabpanel">
                                    <div class="form-group">
                                        <label for="wizard-validation-firstname">2.Başlık</label>
                                        <input class="form-control" type="text" id="wizard-validation-firstname"
                                            name="secondTitle">
                                    </div>
                                    <div class="form-group">
                                        <label for="wizard-validation-firstname">3.Başlık</label>
                                        <input class="form-control" type="text" id="wizard-validation-firstname"
                                            name="thirdTitle">
                                    </div>
                                    <div class="form-group">
                                        <label for="wizard-validation-bio">3.Paragraf</label>
                                        <textarea class="form-control" id="wizard-validation-bio" name="thirdText" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="wizard-validation-firstname">4.Başlık</label>
                                        <input class="form-control" type="text" id="wizard-validation-firstname"
                                            name="fourTitle">
                                    </div>
                                    <div class="form-group">
                                        <label for="wizard-validation-bio">4.Paragraf</label>
                                        <textarea class="form-control" id="wizard-validation-bio" name="fourText" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="wizard-validation-firstname">5.Başlık</label>
                                        <input class="form-control" type="text" id="wizard-validation-firstname"
                                            name="fiveTitle">
                                    </div>
                                    <div class="form-group">
                                        <label for="wizard-validation-bio">5.Paragraf</label>
                                        <textarea class="form-control" id="wizard-validation-bio" name="fiveText" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="wizard-validation-firstname">6.Başlık</label>
                                        <input class="form-control" type="text" id="wizard-validation-firstname"
                                            name="sixTitle">
                                    </div>
                                    <div class="form-group">
                                        <label for="wizard-validation-bio">6.Paragraf</label>
                                        <textarea class="form-control" id="wizard-validation-bio" name="sixText" rows="5"></textarea>
                                    </div>
                                </div>
                                <!-- END Step 2 -->


                                <!-- Step 3 -->
                                <div class="tab-pane" id="wizard-validation-step3" role="tabpanel">
                                    <div class="form-group">
                                        <label for="wizard-validation-firstname">7.Başlık</label>
                                        <input class="form-control" type="text" id="wizard-validation-firstname"
                                            name="sevenTitle">
                                    </div>
                                    <div class="form-group">
                                        <label for="wizard-validation-firstname">8.Başlık</label>
                                        <input class="form-control" type="text" id="wizard-validation-firstname"
                                            name="eightTitle">
                                    </div>
                                    <div class="form-group">
                                        <label for="wizard-validation-bio">8.Paragraf</label>
                                        <textarea class="form-control" id="wizard-validation-bio" name="eightText" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="wizard-validation-firstname">9.Başlık</label>
                                        <input class="form-control" type="text" id="wizard-validation-firstname"
                                            name="nineTitle">
                                    </div>
                                    <div class="form-group">
                                        <label for="wizard-validation-bio">9.Paragraf</label>
                                        <textarea class="form-control" id="wizard-validation-bio" name="nineText" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="wizard-validation-firstname">10.Başlık</label>
                                        <input class="form-control" type="text" id="wizard-validation-firstname"
                                            name="tenTitle">
                                    </div>
                                    <div class="form-group">
                                        <label for="wizard-validation-bio">10.Paragraf</label>
                                        <textarea class="form-control" id="wizard-validation-bio" name="tenText" rows="5"></textarea>
                                    </div>
                                </div>

                                <!-- Step 3 -->
                                <div class="tab-pane" id="wizard-validation-step4" role="tabpanel">
                                    <div class="form-group">
                                        <label for="wizard-validation-firstname">11.Başlık</label>
                                        <input class="form-control" type="text" id="wizard-validation-firstname"
                                            name="elevenTitle">
                                    </div>
                                    <div class="form-group">
                                        <label for="wizard-validation-bio">11.Paragraf</label>
                                        <textarea class="form-control" id="wizard-validation-bio" name="elevenText" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="wizard-validation-firstname">12.Başlık</label>
                                        <input class="form-control" type="text" id="wizard-validation-firstname"
                                            name="twelveTitle">
                                    </div>
                                    <div class="form-group">
                                        <label for="wizard-validation-bio">12.Paragraf</label>
                                        <textarea class="form-control" id="wizard-validation-bio" name="twelveText" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="wizard-validation-firstname">13.Başlık</label>
                                        <input class="form-control" type="text" id="wizard-validation-firstname"
                                            name="thirteenTitle">
                                    </div>
                                    <div class="form-group">
                                        <label for="wizard-validation-bio">13.Paragraf</label>
                                        <textarea class="form-control" id="wizard-validation-bio" name="thirteenText" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="wizard-validation-firstname">14.Başlık</label>
                                        <input class="form-control" type="text" id="wizard-validation-firstname"
                                            name="fourteenTitle">
                                    </div>
                                    <div class="form-group">
                                        <label for="wizard-validation-bio">14.Paragraf</label>
                                        <textarea class="form-control" id="wizard-validation-bio" name="fourteenText" rows="5"></textarea>
                                    </div>
                                </div>
                                <!-- END Step 3 -->
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
