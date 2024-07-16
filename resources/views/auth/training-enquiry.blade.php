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
                            <h6 class="m-0 font-weight-bold text-primary">Enquiry for Training</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sr No</th>
                                            <th>Name</th>
                                            <th>Country</th>
                                            <th>Email</th>
                                            <th>Contact Number</th>
                                            <th>Required Training</th>
                                            <th>Required Mode</th>
                                            <th>Applied Date</th>
                                        </tr>
                                    </thead>
                                    @foreach ($trainData as $data)
                                        <tr>
                                            <td>{{ $x++ }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->countryName }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->contact_number }}</td>
                                            <td>{{ $data->required_training }}</td>
                                            <td>{{ $data->training_mode }}</td>
                                            <td>{{ $data->applied_date }}</td>
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
