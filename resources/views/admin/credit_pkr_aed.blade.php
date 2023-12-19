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
                                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                    <li class="breadcrumb-item active">Datatables</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Datatables</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>

                <!-- end page title end breadcrumb -->
                <div class="row">
                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong></strong>{{Session::get('success')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        @if (Session::has('fail'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong></strong>{{Session::get('fail')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Customers Details </h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="datatable_1">
                                        <thead class="thead-light">
                                          <tr>
                                            <th>Sender Name</th>
                                            <th>Sender Phone</th>
                                            <th>Reciever Name</th>
                                            <th>Amount Sent</th>
                                            <th>Credit Amount</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                            {{-- <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                                            <th>Completion</th> --}}
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($credit as $key => $credit)

                                            <tr>
                                                <td>{{$credit->sender_name}}</td>
                                                <td>{{$credit->sender_phone}}</td>
                                                <td>{{$credit->reciver_name}}</td>
                                                <td>{{$credit->sended_amount}}</td>
                                                <td>{{$credit->credit_amount}}</td>
                                                <td>{{$credit->created_at->format('d/m/Y')}}</td>
                                                <td style="display:flex;">
                                                    <a href = 'deleteaedtopkrecord/{{ $credit->id }}'><button class="btn btn-danger btn-xs" data-original-title="btn btn-danger btn-xs">Delete</button></a>
                                                    <form action="editpkrtoaedcredit" method="POST" style="margin-left:2px">
                                                        @csrf
                                                        <input type="text" name="credit_id" id="" value="{{$credit->id}}" hidden>
                                                        <button class="btn btn-success btn-xs">Edit</button>
                                                    </form>
                                                    {{-- <a href = 'editaedtopkcredit/{{ $credit->id }}'><button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-success btn-xs" title="">Edit</button></a> --}}
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                      </table>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->


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

           <!--Start Footer-->
           <!-- Footer Start -->
           <footer class="footer text-center text-sm-start">
               &copy; <script>
                   document.write(new Date().getFullYear())
               </script> Unikit <span class="text-muted d-none d-sm-inline-block float-end">Crafted with <i
                       class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
           </footer>
           <!-- end Footer -->
@endsection
