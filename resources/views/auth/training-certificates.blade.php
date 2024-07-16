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
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add Certificate <span id="response" class="badge badge-success"></span></h6>
                </div>
                <form id="addApp" class="container pt-2">
                    <div class="form-group">
                        <div class="col-md-6">
                            <label>Candidate Name</label>
                            <input type="text" class="form-control" id="cname">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label>Certificate Number</label>
                            <input type="text" class="form-control" id="cert_number">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label>Training's completed</label>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle col-md-12" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #ffffff; border-color: #d1d3e2">
                                    --Select Course--
                                </button>
                                <div class="dropdown-menu" aria-labelledby="cer_nameDropdown" id="cer_nameDropdown">
                                    @foreach ($trainings as $item)
                                    <div class="dropdown-item">
                                        <input type="checkbox" id="cer_name_{{ $item->id }}" value="{{ $item->training_name }}">
                                        <label for="cer_name_{{ $item->id }}">{{ $item->training_name }}</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label>Issued Date</label>
                            <input type="date" class="form-control" id="issueDate">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label>Status</label>
                            <select class="form-control" id="status">
                                <option selected disabled>--Select status--</option>
                                <option value="Valid">Valid</option>
                                <option value="Expired">Expired</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <button type="button" onclick="addCandidateCertificate()" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </form>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
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
        const addCandidateCertificate = async () => {
            const checkboxes = document.querySelectorAll('#cer_nameDropdown input[type="checkbox"]');
            const selectedValues = [];

            checkboxes.forEach((checkbox) => {
                if (checkbox.checked) {
                    selectedValues.push(checkbox.value);
                }
            });
            let url = "{{ url('/') }}"
            const cname = document.getElementById('cname').value
            const cert_number = document.getElementById('cert_number').value
            const trainingDone = selectedValues.toString()
            const issueDate = document.getElementById('issueDate').value
            const status = document.getElementById('status').value

            const response = await axios.post(`${url}/addCadidateTrainingCertificates`, {
                cname,
                cert_number,
                trainingDone,
                issueDate,
                status
            }, {
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            console.log(response.data);
            if(response.data.status === 200) {
                document.getElementById('response').innerHTML = response.data.message
                document.getElementById("addApp").reset();
                setTimeout(() => {
                    document.getElementById("addApp").reset();
                    window.location.reload()
                }, 1500);
            }
        }
    </script>
</body>

</html>