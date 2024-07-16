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
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Manage appliactions</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Company Name</th>
                                        <th>Scope</th>
                                        <th>Certificate number</th>
                                        <th>Status</th>
                                        <th>Valid Date</th>
                                        <th>Expiry Date</th>
                                        <th>Standard Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allAppData as $app)
                                        <tr>
                                            <td>1</td>
                                            <td class="text-capitalize">{{ $app->comp_name }}</td>
                                            <td class="text-capitalize">{{ $app->scope }}</td>
                                            <td>{{ $app->cert_number }}</td>
                                            <td>
                                                @if ($app->status == 'Valid')
                                                    <p class="badge badge-success">Valid</p>
                                                @else
                                                    <p class="badge badge-danger">Invalid</p>
                                                @endif

                                            </td>
                                            <td>{{ $app->issue_date }}</td>
                                            <td>{{ $app->exp_date }}</td>
                                            <td>{{ $app->cert_name }}</td>
                                            <td><a class="btn btn-sm btn-primary"
                                                    href="/App-edit/{{ $app->id }}"><i
                                                        class="
                                                    fas fa-edit"></i></a>
                                                |
                                                <button data-id="{{ $app->id }}" class="btn btn-sm btn-danger"
                                                    onclick="deleteApplication(this)"><i
                                                        class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
<script>
    const deleteApplication = async (e) => {
        let id = e.getAttribute("data-id")
        let url = "{{ url('/') }}"
        const response = await axios.post(`${url}/deleteApp`, {
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

</html>
