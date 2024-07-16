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
                            <h6 class="m-0 font-weight-bold text-primary">Enquiry for Certification</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sr No</th>
                                            <th>Comapny Name</th>
                                            <th>Country</th>
                                            <th>Address</th>
                                            <th>Company Activities</th>
                                            <th>Contact Name</th>
                                            <th>Contact Number</th>
                                            <th>Email</th>
                                            <th>Service required</th>
                                            <th>Applied Date</th>
                                        </tr>
                                    </thead>
                                    @foreach ($enqData as $data)
                                        <tr>
                                            <td>{{ $x++ }}</td>
                                            <td>{{ $data->company_name }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->address }}</td>
                                            <td>{{ $data->company_act }}</td>
                                            <td>{{ $data->contact_name }}</td>
                                            <td>{{ $data->contact_number }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->service_required }}</td>
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
    <script>
        const deleteCert = async (e) => {
            let id = e.getAttribute("data-id")
            let url = "{{ url('/') }}"
            const response = await axios.post(`${url}/deleteCert`, {
                id
            }, {
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            if (response.data.status == 200) {
                window.location.reload()
            }
        }
    </script>
</body>

</html>
