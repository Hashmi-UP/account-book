@extends('./layouts/admin')
@section('content')
        <div class="page-wrapper">

            <!-- Page Content-->
            <div class="page-content-tab">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/dashboard">Unikit</a>
                                        </li><!--end nav-item-->
                                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a>
                                        </li><!--end nav-item-->
                                        <li class="breadcrumb-item active">Analytics</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Analytics</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->

                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="pt-3">
                                        <h3 class="text-dark text-center font-24 fw-bold line-height-lg">Account
                                        <br>Software</h3>
                                        <div class="text-center text-muted font-16 fw-bold pt-3 pb-1">We Design and Develop Clean and High Quality Web Applications</div>

                                        <div class="text-center py-3 mb-3">
                                            <a href="#" class="btn btn-primary">Buy Now</a>
                                        </div>
                                        <img src="assets/images/small/business.png" alt="" class="img-fluid px-3 mb-2">
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->
                        <div class="col-lg-9">
                            <div class="row justify-content-center">
                                <div class="col-lg-3">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="row d-flex">
                                                <div class="col-3">
                                                    <i class="ti ti-users font-36 align-self-center text-dark"></i>
                                                </div><!--end col-->
                                                <div class="col-12 ms-auto align-self-center">
                                                    <div id="dash_spark_1" class="mb-3"></div>
                                                </div><!--end col-->
                                                <div class="col-12 ms-auto align-self-center">
                                                    <h3 class="text-dark my-0 font-22 fw-bold">24000</h3>
                                                    <p class="text-muted mb-0 fw-semibold">Sessions</p>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div> <!--end col-->
                                <div class="col-lg-3">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="row d-flex">
                                                <div class="col-3">
                                                    <i class="ti ti-clock font-36 align-self-center text-dark"></i>
                                                </div><!--end col-->
                                                <div class="col-auto ms-auto align-self-center">
                                                    <span class="badge badge-soft-success px-2 py-1 font-11">Active</span>
                                                </div><!--end col-->
                                                <div class="col-12 ms-auto align-self-center">
                                                    <div id="dash_spark_2" class="mb-3"></div>
                                                </div><!--end col-->
                                                <div class="col-12 ms-auto align-self-center">
                                                    <h3 class="text-dark my-0 font-22 fw-bold">00:18</h3>
                                                    <p class="text-muted mb-0 fw-semibold">Avg.Sessions</p>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div> <!--end col-->
                                <div class="col-lg-3">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="row d-flex">
                                                <div class="col-3">
                                                    <i class="ti ti-activity font-36 align-self-center text-dark"></i>
                                                </div><!--end col-->
                                                <div class="col-12 ms-auto align-self-center">
                                                    <div id="dash_spark_3" class="mb-3"></div>
                                                </div><!--end col-->
                                                <div class="col-12 ms-auto align-self-center">
                                                    <h3 class="text-dark my-0 font-22 fw-bold">{{$aedprice->rate}}</h3>
                                                    <p class="text-muted mb-0 fw-semibold">{{$aedprice->name}}</p>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div> <!--end col-->

                                <div class="col-lg-3">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="row d-flex">
                                                <div class="col-3">
                                                    <i class="ti ti-confetti font-36 align-self-center text-dark"></i>
                                                </div><!--end col-->
                                                <div class="col-auto ms-auto align-self-center">
                                                    <span class="badge badge-soft-danger px-2 py-1 font-11">-2%</span>
                                                </div><!--end col-->
                                                <div class="col-12 ms-auto align-self-center">
                                                    <div id="dash_spark_4" class="mb-3"></div>
                                                </div><!--end col-->
                                                <div class="col-12 ms-auto align-self-center">
                                                    <h3 class="text-dark my-0 font-22 fw-bold">{{$pkrprice->rate}}</h3>
                                                    <p class="text-muted mb-0 fw-semibold">{{$pkrprice->name}}</p>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div> <!--end col-->
                            </div><!--end row-->

                        </div><!--end col-->
                    </div><!--end row-->


                </div><!-- container -->

                <!--Start Rightbar-->
                <!--Start Rightbar/offcanvas-->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
                    <div class="offcanvas-header border-bottom">
                      <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                      <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <h6>Account Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch1">
                                <label class="form-check-label" for="settings-switch1">Auto updates</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                                <label class="form-check-label" for="settings-switch2">Location Permission</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch3">
                                <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->
                        <h6>General Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch4">
                                <label class="form-check-label" for="settings-switch4">Show me Online</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                                <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch6">
                                <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->
                    </div><!--end offcanvas-body-->
                </div>
                <!--end Rightbar/offcanvas-->
                 <!--end Rightbar-->

@endsection
