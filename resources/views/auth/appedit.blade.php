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
                    <h6 class="m-0 font-weight-bold text-primary">Edit Application <span id="res"></span></h6>
                </div>
                <form class="container" action="" method="POST">
                    <div class="form-group">
                        <div class="col-md-6">
                            <label>Company name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $singleApp[0]->comp_name }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label>Certificate Number</label>
                            <input type="text" class="form-control" id="cert_number" name="cert_number"
                                value="{{ $singleApp[0]->cert_number }}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label>Scope</label>
                            <input type="text" class="form-control" id="scope" name="scope"
                                value="{{ $singleApp[0]->scope }}" required>
                        </div>
                    </div>
                    {{-- <div class="form-group">
            <div class="col-md-6">
              <label>Status</label>
              <select class="form-control" name="status">
                <option {{@if ($singleApp[0]->status == 'Valid') selected
                    
                @endif}}>Valid</option>
                <option @if ($singleApp[0]->status == 'Expired') selected
                    
                @endif>Expired</option>
              </select>
            </div>
          </div> --}}
                    <div class="form-group">
                        <div class="col-md-6">
                            <label>Issued Date</label>
                            <input type="date" class="form-control" id="date" name="date"
                                value="{{ $singleApp[0]->issue_date }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label>Standard Name</label>
                            <input type="text" class="form-control" id="cer_name" name="cer_name"
                                value="{{ $singleApp[0]->cert_name }}" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <button type="button" onclick="updateCertificate()" class="btn btn-primary"
                                name="update">Update</button>
                        </div>
                    </div>
                </form>
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
        const updateCertificate = async () => {
            let url = "{{ url('/') }}"
            let id = "{{ $singleApp[0]->id }}"
            let name = document.getElementById("name").value
            let cert_number = document.getElementById("cert_number").value
            let scope = document.getElementById("scope").value
            let date = document.getElementById("date").value
            let cer_name = document.getElementById("cer_name").value
            const response = await axios.post(`${url}/editApp`, {
                id,
                name,
                cert_number,
                scope,
                date,
                cer_name
            }, {
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            if (response.data.status == 200) {
                document.getElementById("res").innerHTML =
                    "<p class='badge badge-success'>Certificate updated successfully</p>";
            }
        }
    </script>
</body>

</html>
