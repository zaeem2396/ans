<!DOCTYPE html>
<html lang="en">

<head>

    @include('auth.global.head')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('auth.global.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('auth.global.nav')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Customer Feedback</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sr No</th>
                                            <th>Company Details</th>
                                            <th>Address</th>
                                            <th>Audit Details</th>
                                            <th>Auditor Details</th>
                                            <th>Feedback</th>
                                            <th>Suggestions</th>
                                            <th>Feedback date</th>
                                        </tr>
                                    </thead>
                                    @foreach ($feedback as $data)
                                        <tr>
                                            <td>{{ $x++ }}</td>
                                            <td>
                                                <b>Company</b> : {{$data->company_name}} <br>
                                                <b>Contact</b> : {{$data->contact_name}}, {{$data->contact}} <br>
`                                               <b>Email</b> : {{$data->email}}
                                            </td>
                                            <td>{{ $data->address }}</td>
                                            <td>
                                                <b>Audit Date</b>: {{$data->audit_date}} <br>
                                                <b>Audit Std</b>: {{$data->audit_std}} <br>
                                                <b>Company activities</b>: {{$data->company_act}} <br>
                                                <b>Audit Type</b>: {{$data->audit_type}}
                                            </td>
                                            <td>
                                                <b>Lead A Name</b>: {{$data->lead_audit_name}} <br>
                                                <b>Other A Name</b>: {{$data->other_audit_team}} <br>
                                                <b>LA Audit</b>: {{$data->la_audit}} <br>
                                            </td>
                                            <td>{{ $data->feedback }}</td>
                                            <td>{{ $data->suggestion }}</td>
                                            <td>{{ $data->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            {{-- @include('auth.global.footer'); --}}
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('auth.global.script')
</body>

</html>
