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

                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Add Standards
                            @if (session()->has('message'))
                                <span class="alert alert-success">
                                    {{ session()->get('message') }}
                                </span>
                            @endif
                        </h1>

                        <form class="col-10" id="add_form" action="{{ url('super/uploadStd') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Certificate Title</label>
                                <input class="form-control" type="text" name="name" placeholder="Name"
                                    id="example-text-input" required>
                            </div>

                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Certificate name</label>
                                <input class="form-control" type="text" name="cert_name" placeholder="Eg. iso-9001-2105"
                                    id="example-text-input" required>
                            </div>

                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" name="fileToUpload" class="custom-file-input" id="file" required>
                                    <label class="custom-file-label" for="file" id="img_lable">
                                        Select Header Image</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div id="myeditor" style="height: 300px;background-color: white;
                                        color: black;">
                                </div>
                            </div>

                            <button class="btn btn-primary" type="submit" name="submit" id="add_btn">Add</button>
                        </form>

                    </div>
                    <!-- /.container-fluid -->
                    {{-- @include('global/footer.php'); --}}
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
    </body>
    <!-- Initialize Quill editor -->
    <script>
        var quill = new Quill('#myeditor', {
            modules: {
                toolbar: [
                    [{
                        header: [1, 2, 3, 4, 5, 6, false]
                    }],
                    ['bold', 'italic', 'underline', 'strike'],
                    ['link', 'image'],

                    [{
                        'header': 1
                    }, {
                        'header': 2
                    }],
                    [{
                        'list': 'ordered'
                    }, {
                        'list': 'bullet'
                    }],
                    [{
                        'indent': '-1'
                    }, {
                        'indent': '+1'
                    }],
                    [{
                        'color': []
                    }, {
                        'background': []
                    }],
                    // [{ size: ['small',false,'large','huge'] }],
                ]
            },
            placeholder: 'Add Certificate Content Here.....',
            theme: 'snow' // or 'bubble'
        });;
    </script>
    <!-- Script to append Quill data into form data -->
    <script type="text/javascript">
        $(document).ready(function() {
            $("#add_form").on("submit", function() {
                var hvalue = $('.ql-editor').html();
                //console.log(hvalue);
                $(this).append("<textarea name='content' style='display:none'>" + hvalue + "</textarea>");
            });
        });
    </script>
    <script>
        $("#file").change(function() {
            var file = this.files[0];
            var fileType = file.type;
            var match = ['image/jpeg', 'image/png', 'image/jpg'];
            if (!((fileType == match[0]) || (fileType == match[1]) || (fileType == match[2]) || (fileType == match[
                    3]) || (fileType == match[4]) || (fileType == match[5]))) {

                alert('Sorry, only JPG, JPEG, & PNG files are allowed to upload.');
                $("#file").val(null);
                // return false;
            } else {
                var img_name = $("#file").val();
                //console.log(img_name);
                var n = (img_name.lastIndexOf('\\')) + 1;
                //console.log(n);
                var file_name = img_name.slice(n);
                //console.log(file_name);
                document.getElementById("img_lable").innerHTML = file_name;
            }
        });
    </script>

    </html>
