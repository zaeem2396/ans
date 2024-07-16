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
                    <h6 class="m-0 font-weight-bold text-primary">Add Application <span id="response"></span></h6>
                </div>
                <form id="addApp" class="container pt-2">
                    <div class="form-group">
                        <div class="col-md-6">
                            <label>Company name</label>
                            <input type="text" class="form-control" id="name">
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
                            <label>Standard Name</label>
                            <select id="cer_name" class="form-control">
                                <option selected disabled>--Select Standard--</option>
                                @foreach ($certList as $item)
                                    <option value="{{ $item->cer_name }}">{{ $item->cer_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label>Scope</label>
                            <input type="text" class="form-control" id="scope">
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
                            <label>Applied Date</label>
                            <input type="date" class="form-control" id="date">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <button type="button" onclick="addApplication()" class="btn btn-primary">Add</button>
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
        const addApplication = async () => {
            let name = document.getElementById("name").value
            let cert_number = document.getElementById("cert_number").value
            let cer_name = document.getElementById("cer_name").value
            let scope = document.getElementById("scope").value
            let status = document.getElementById("status").value
            let date = document.getElementById("date").value
            if (!name) {
                return document.getElementById("name").classList.add("is-invalid")
            } else {
                document.getElementById("name").classList.remove("is-invalid")
            }
            if (!cert_number) {
                return document.getElementById("cert_number").classList.add("is-invalid")
            } else {
                document.getElementById("cert_number").classList.remove("is-invalid")
            }
            if (!cer_name) {
                return document.getElementById("cer_name").classList.add("is-invalid")
            } else {
                document.getElementById("cer_name").classList.remove("is-invalid")
            }
            if (!scope) {
                return document.getElementById("scope").classList.add("is-invalid")
            } else {
                document.getElementById("scope").classList.remove("is-invalid")
            }
            if (!status) {
                return document.getElementById("status").classList.add("is-invalid")
            } else {
                document.getElementById("status").classList.remove("is-invalid")
            }
            if (!date) {
                return document.getElementById("date").classList.add("is-invalid")
            } else {
                document.getElementById("date").classList.remove("is-invalid")
            }
            const response = await axios.post("addApplication", {
                name,
                cert_number,
                cer_name,
                scope,
                status,
                date
            }, {
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            if (response.data.status == 200) {
                document.getElementById("response").innerHTML =
                    "<span class='alert alert-success'>Application added successfully</span>"
                    document.getElementById("addApp").reset();
            }
        }
    </script>
</body>

</html>
