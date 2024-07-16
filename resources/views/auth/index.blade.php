<!DOCTYPE html>
<html lang="en">

<head>
    @include('auth.global.head');
</head>

<body class="bg-gradient-primary">

    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin my-5">
                        <div class="card-body">
                            <h5 class="card-title text-center">Sign In</h5>
                            <div class="form-signin">
                                <div class="form-label-group">
                                    <div id="name_err"></div>
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Username">
                                </div>
                                <div class="form-label-group">
                                    <div id="pass_err"></div>
                                    <input type="password" name="password" id="password" class="form-control mt-3"
                                        placeholder="Password" required>
                                </div>
                                <div id="msg"></div>
                                <button class="btn btn-md btn-primary btn-block text-uppercase mt-3" name="login"
                                    onclick="auth()" type="button">Sign in</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    @include('auth.global.script');

</body>
<script>
    const auth = async () => {
        var name = $("#name").val();
        var password = $("#password").val();
        if (name == "") {
            $("#name_err").html("<p class='text-danger'>Please fill out this field</p>");
            return;
        }
        if (password == "") {
            $("#pass_err").html("<p class='text-danger'>Please fill out this field</p>");
            return;
        }
        const response = await axios.post("chkAuth", {
            name,
            password
        }, {
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        if (response.data.status === 200) {
            location.href = "Dashboard"
        }
    }
</script>

</html>
