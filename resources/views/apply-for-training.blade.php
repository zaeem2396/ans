<!DOCTYPE html>
<html dir="ltr" lang="en">


<head>

    @include('include.head')

    @include('include.script')
</head>

<body class="">
    <div id="wrapper" class="clearfix">
        <!-- preloader -->
        <div id="preloader">
            <div id="spinner">
                <div class="preloader-dot-loading">
                    <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
                </div>
            </div>
            <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
        </div>

        <!-- Header -->
        @include('include.nav')

        <!-- Start main-content -->
        <div class="main-content">

            <!-- Section: inner-header -->
            <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="{{ asset('images/bg/bg6.jpg') }}">
                <div class="container pt-60 pb-60">
                    <!-- Section Content -->
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2 class="title">Apply for Training</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Divider: Contact -->
            <section class="divider">
                <div class="container">
                    <div class="row pt-30">
                        <div class="col-md-12">
                            <h3 class="line-bottom mt-0 mb-30">Join us now!</h3>
                            <!-- Contact Form -->
                            <form id="feedback_form">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Name <small>*</small></label>
                                            <div id="name_err"></div>
                                            <input name="name" id="name" class="form-control" type="text" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Country <small>*</small></label>
                                            <div id="country_err"></div>
                                            <select name="country" id="country" class="form-control">
                                                <option selected disabled>--Select country--</option>
                                                @foreach ($countryData as $country) 
                                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email <small>*</small></label>
                                            <div id="email_err"></div>
                                            <input name="email" id="email" class="form-control" type="text" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Contact Number <small>*</small></label>
                                            <div id="contact_number_err"></div>
                                            <input name="contact_number" id="contact_number" class="form-control" type="text" placeholder="Enter Contact Number">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Required Training <small>*</small></label>
                                            <div id="required_training_err"></div>
                                            <input name="required_training" id="required_training" class="form-control" type="text" placeholder="Enter required training">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Training Mode <small>*</small></label>
                                            <div id="training_mode_err"></div>
                                            <select name="training_mode" id="training_mode" class="form-control">
                                                <option selected disabled>--Select training mode--</option>
                                                    <option value="Online">Online</option>
                                                    <option value="Offline">Offline</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="button" name="submit" id="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Submit</button>
                                    <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
                                    <span id="certificationResponse"></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- end main-content -->

        <!-- Footer -->
        @include('include.footer')
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
    <!-- end wrapper -->

    <!-- Footer Scripts -->
    <!-- JS | Custom script for all pages -->
    @include('include.script2')

</body>
<script>
    $('#submit').click(async function() {
        var name = $('#name').val();
        var country = $('#country').val();
        var email = $('#email').val();
        var contact_number = $('#contact_number').val();
        var required_training = $('#required_training').val();
        var training_mode = $('#training_mode').val();
        const fields = validateFields('name', 'country', 'email', 'contact_number', 'required_training', 'training_mode')
        const response = await axios.post("applyForTraining", {
            name,
            country,
            email,
            contact_number,
            required_training,
            training_mode,
        }, {
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        let status = response.data.status
        let message = response.data.message
        if(status==200) {
            $('#certificationResponse').html("<span class='alert alert-success' role='alert'>"+message+"</span>");
            $('#feedback_form').trigger("reset");
        } else {
            $('#certificationResponse').html("<span class='alert alert-danger' role='alert'>"+message+"</span>");
        }
    });
</script>

</html>