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
                                    <li class="breadcrumb-item"><a href="#">Unikit</a></li>
                                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                    <li class="breadcrumb-item active">Form Elements</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Add AED Record</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">
                    <div class="col-lg-6" style=" margin:auto">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Record</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <form action="/addnewrecorddb" method="POST">
                                    @csrf

                                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>👍</strong>{{Session::get('success')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        @if (Session::has('fail'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>😓</strong>{{Session::get('fail')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif


                        <!--Alert start-->
                        @if($errors->any())
                        @foreach($errors->all() as $error)
                        <div class="alert alert-secondary alert-dismissible fade show" role="alert"><strong>⚠️&nbsp;</strong>{{ $error }}
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" data-bs-original-title="" title=""></button>
                        </div>
                        @endforeach
                        @endif
                        <!--Alert End-->
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1">Sender's Name</label>
                                        <input type="text" name="send_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Sender's Name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1">Sender's Phone</label>
                                        <input type="text" name="send_phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Sender's Phone">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1">Reciever's Name</label>
                                        <input type="text" name="rec_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Reciever's Name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1">Reciever's Phone</label>
                                        <input type="text" name="rec_phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Reciever's Phone">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1">City</label>
                                        <select class="form-select" name="city" aria-label="Default select example">
                                            <option selected="" disabled>--Select--</option>
                                            <option value="lahore">Lahore</option>
                                            <option value="sailkot">Sailkot</option>
                                            <option value="multan">Multan</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1">AED Amount</label>
                                        <input type="number" name="aed_amount" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter AED Amount">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1">Credit Amount</label>
                                        <input type="number" name="credit_amount" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter AED Amount">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1">AED Rate</label>
                                        <input type="number" name="aed_rate" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter AED Amount">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1">Service Charges</label>
                                        <select class="form-select" name="ser_chrg" aria-label="Default select example">
                                            <option selected="" disabled>--Select--</option>
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                        </select>
                                    </div>

                                    <div style="text-align: center"><button type="submit" class="btn btn-de-primary">Submit</button></div>
                                </form>
                            </div><!--end card-body-->
                        </div><!--end card-->
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
