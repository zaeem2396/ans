<!DOCTYPE html>
<html lang="en">

<head>

    @include('auth.global.head')
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
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
                @include('auth.global.nav');
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Edit Standards</h1>

                    <form class="col-10" id="add_form" action="{{ url('super/editStd') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="stdid" value="{{ $certData[0]->id }}">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Standard Name</label>
                            <input class="form-control" type="text" value="{{ $certData[0]->cer_name }}" name="name"
                                placeholder="Name" id="example-text-input" required>
                        </div>
                        <div class="form-group">
                            <label for="dbimg" class="form-control-label">Existing Image :</label>
                            <br>
                            <img src="{{ $certData[0]->img }}" alt="" height="150" width="auto" id="dbimage">
                        </div>


                        <div class="form-group">

                            <div class="custom-file">
                                <input type="file" name="fileToUpload" class="custom-file-input" id="file">
                                <label class="custom-file-label" for="file" id="img_lable">
                                    {{ $certData[0]->img }}</label>
                            </div>
                        </div>

                        <textarea name="editor1" id="editor1" rows="10" cols="80">
                            {{ $certData[0]->description }}
                                    </textarea>
                        <!-- <div class="form-group">
                                        <div id="myeditor" style="height: 300px;background-color: white;
                                        color: black;white-space: normal !important;">
                                        </div>
                                    </div> -->
                        <button class="btn btn-primary mt-3" type="submit" name="update" id="add_btn">Update</button>
                    </form>

                </div>
                <!-- /.container-fluid -->
                {{-- @include('auth.global.footer') --}}
            </div>
            <!-- End of Main Content -->



        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('auth.global.script')
    <!-- Footer -->

    <!-- End of Footer -->
</body>
<!-- Initialize Quill editor -->
<script>
    CKEDITOR.replace('editor1');
</script>

</html>
