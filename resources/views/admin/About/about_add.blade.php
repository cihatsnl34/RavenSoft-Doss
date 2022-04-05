@extends('admin/layouts.app')
@section("content")
<main id="main-container">
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <!-- Validation Wizard -->
                <div class="js-wizard-validation block block">
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
                    </ul>
                    <!-- END Step Tabs -->

                    <!-- Form -->
                    <form class="js-wizard-validation-form" action="be_forms_wizard.html" method="POST">
                        <!-- Steps Content -->
                        <div class="block-content block-content-full tab-content px-md-5" style="min-height: 300px;">
                            <!-- Step 1 -->
                            <div class="tab-pane active" id="wizard-validation-step1" role="tabpanel">
                                <div class="form-group">
                                    <label for="wizard-validation-firstname">1.Başlık</label>
                                    <input class="form-control" type="text" id="wizard-validation-firstname"
                                        name="wizard-validation-firstname">
                                </div>
                                <div class="form-group">
                                    <label for="wizard-validation-bio">1.Paragraf</label>
                                    <textarea class="form-control" id="wizard-validation-bio"
                                        name="wizard-validation-bio" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="wizard-validation-firstname">2.Başlık</label>
                                    <input class="form-control" type="text" id="wizard-validation-firstname"
                                        name="wizard-validation-firstname">
                                </div>
                                <div class="form-group">
                                    <label for="wizard-validation-firstname">3.Başlık</label>
                                    <input class="form-control" type="text" id="wizard-validation-firstname"
                                        name="wizard-validation-firstname">
                                </div>
                                <div class="form-group">
                                    <label for="wizard-validation-bio">3.Paragraf</label>
                                    <textarea class="form-control" id="wizard-validation-bio"
                                        name="wizard-validation-bio" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="wizard-validation-firstname">4.Başlık</label>
                                    <input class="form-control" type="text" id="wizard-validation-firstname"
                                        name="wizard-validation-firstname">
                                </div>
                                <div class="form-group">
                                    <label for="wizard-validation-bio">4.Paragraf</label>
                                    <textarea class="form-control" id="wizard-validation-bio"
                                        name="wizard-validation-bio" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="wizard-validation-firstname">5.Başlık</label>
                                    <input class="form-control" type="text" id="wizard-validation-firstname"
                                        name="wizard-validation-firstname">
                                </div>
                                <div class="form-group">
                                    <label for="wizard-validation-bio">5.Paragraf</label>
                                    <textarea class="form-control" id="wizard-validation-bio"
                                        name="wizard-validation-bio" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="wizard-validation-firstname">6.Başlık</label>
                                    <input class="form-control" type="text" id="wizard-validation-firstname"
                                        name="wizard-validation-firstname">
                                </div>
                                <div class="form-group">
                                    <label for="wizard-validation-bio">6.Paragraf</label>
                                    <textarea class="form-control" id="wizard-validation-bio"
                                        name="wizard-validation-bio" rows="5"></textarea>
                                </div>
                            </div>
                            <!-- END Step 1 -->

                            <!-- Step 2 -->
                            <div class="tab-pane" id="wizard-validation-step2" role="tabpanel">
                                <div class="form-group">
                                    <label for="wizard-validation-firstname">7.Başlık</label>
                                    <input class="form-control" type="text" id="wizard-validation-firstname"
                                        name="wizard-validation-firstname">
                                </div>
                                <div class="form-group">
                                    <label for="wizard-validation-firstname">8.Başlık</label>
                                    <input class="form-control" type="text" id="wizard-validation-firstname"
                                        name="wizard-validation-firstname">
                                </div>
                                <div class="form-group">
                                    <label for="wizard-validation-bio">8.Paragraf</label>
                                    <textarea class="form-control" id="wizard-validation-bio"
                                        name="wizard-validation-bio" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="wizard-validation-firstname">9.Başlık</label>
                                    <input class="form-control" type="text" id="wizard-validation-firstname"
                                        name="wizard-validation-firstname">
                                </div>
                                <div class="form-group">
                                    <label for="wizard-validation-bio">9.Paragraf</label>
                                    <textarea class="form-control" id="wizard-validation-bio"
                                        name="wizard-validation-bio" rows="5"></textarea>
                                </div>
                            </div>
                            <!-- END Step 2 -->

                            <!-- Step 3 -->
                            <div class="tab-pane" id="wizard-validation-step3" role="tabpanel">
                                <div class="form-group">
                                    <label for="wizard-validation-firstname">10.Başlık</label>
                                    <input class="form-control" type="text" id="wizard-validation-firstname"
                                        name="wizard-validation-firstname">
                                </div>
                                <div class="form-group">
                                    <label for="wizard-validation-bio">10.Paragraf</label>
                                    <textarea class="form-control" id="wizard-validation-bio"
                                        name="wizard-validation-bio" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="wizard-validation-firstname">11.Başlık</label>
                                    <input class="form-control" type="text" id="wizard-validation-firstname"
                                        name="wizard-validation-firstname">
                                </div>
                                <div class="form-group">
                                    <label for="wizard-validation-bio">11.Paragraf</label>
                                    <textarea class="form-control" id="wizard-validation-bio"
                                        name="wizard-validation-bio" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="wizard-validation-firstname">12.Başlık</label>
                                    <input class="form-control" type="text" id="wizard-validation-firstname"
                                        name="wizard-validation-firstname">
                                </div>
                                <div class="form-group">
                                    <label for="wizard-validation-bio">12.Paragraf</label>
                                    <textarea class="form-control" id="wizard-validation-bio"
                                        name="wizard-validation-bio" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="wizard-validation-firstname">13.Başlık</label>
                                    <input class="form-control" type="text" id="wizard-validation-firstname"
                                        name="wizard-validation-firstname">
                                </div>
                                <div class="form-group">
                                    <label for="wizard-validation-bio">13.Paragraf</label>
                                    <textarea class="form-control" id="wizard-validation-bio"
                                        name="wizard-validation-bio" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="wizard-validation-firstname">14.Başlık</label>
                                    <input class="form-control" type="text" id="wizard-validation-firstname"
                                        name="wizard-validation-firstname">
                                </div>
                                <div class="form-group">
                                    <label for="wizard-validation-bio">14.Paragraf</label>
                                    <textarea class="form-control" id="wizard-validation-bio"
                                        name="wizard-validation-bio" rows="5"></textarea>
                                </div>
                            </div>
                            <!-- END Step 3 -->
                        </div>
                    </form>
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