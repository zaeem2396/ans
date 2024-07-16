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
                            <h6 class="m-0 font-weight-bold text-primary">Manage Training <button type="button" class="btn btn-xs btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Add training</button></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sr No</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @foreach ($training as $data)
                                    <tr>
                                        <td>{{ $x++ }}</td>
                                        <td>{{ $data->training_name }}</td>
                                        <td class="text-center">
                                            @if ($data->status == 1)
                                            <span class="badge badge-success">Active</span>
                                            @else
                                            <span class="badge badge-danger">De-active</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <button onclick="deleteTraining(this)" data-id="{{ $data->id }}" class="btn btn-sm btn-danger">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
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

    <!-- Add training modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Training</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <span class="text-danger" id="training_error"></span>
                    <span class="text-success" id="training_success"></span>
                    <input type="text" name="trainingName" id="trainingName" class="form-control" placeholder="Add Training...">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="addTraining()">Add</button>
                </div>
            </div>
        </div>
    </div>

    @include('auth.global.script')
    <script>
        const deleteTraining = async (e) => {
            let id = e.getAttribute("data-id")
            let url = "{{ url('/') }}"
            const response = await axios.post(`${url}/deleteTraining`, {
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

        const addTraining = async () => {
            let trainingName = document.getElementById('trainingName').value
            let url = "{{ url('/') }}"
            if (!trainingName) {
                document.getElementById('training_error').innerHTML = 'Field cannot be blank'
            }
            const response = await axios.post(`${url}/addtraining`, {
                trainingName
            }, {
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            console.log(response.data);
            if (response.data.status === 200) {
                document.getElementById('training_success').innerHTML = response.data.message
                window.location.reload()
            } else {
                document.getElementById('training_error').innerHTML = response.data.message
            }
        }
    </script>
</body>

</html>