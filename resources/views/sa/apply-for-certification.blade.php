<!DOCTYPE html>
<html dir="ltr" lang="en">


<head>

    @include('sa.include.head')

    @include('sa.include.script')
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
        @include('sa.include.nav')

        <!-- Start main-content -->
        <div class="main-content">

            <!-- Section: inner-header -->
            <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="{{ asset('images/bg/bg6.jpg') }}">
                <div class="container pt-60 pb-60">
                    <!-- Section Content -->
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2 class="title">Apply for Certificaiton</h2>
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
                            <h3 class="line-bottom mt-0 mb-30">Get Certified Now!</h3>
                            <!-- Contact Form -->
                            <form id="feedback_form">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Company Name <small>*</small></label>
                                            <div id="company_name_err"></div>
                                            <input name="company_name" id="company_name" class="form-control" type="text" placeholder="Enter Company Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Country <small>*</small></label>
                                            <div id="country_err"></div>
                                            <select name="country" id="country" class="form-control">
                                                <option selected disabled>--Select country--</option>
                                                @foreach ($countryData ?? '' as $country) 
                                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Address</label>
                                    <div id="address_err"></div>
                                    <textarea name="address" id="address" class="form-control" rows="5" placeholder="Enter Address"></textarea>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Company Activities <small>*</small></label>
                                            <div id="company_act_err"></div>
                                            <input name="company_act" id="company_act" class="form-control" type="text" placeholder="Enter compoany activities">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Contact name <small>*</small></label>
                                            <div id="contact_name_err"></div>
                                            <input name="contact_name" id="contact_name" class="form-control" type="text" placeholder="Enter Contact Name">
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
                                            <label>Service Required <small>*</small></label>
                                            <div id="service_required_err"></div>
                                            <input name="service_required" id="service_required" class="form-control" type="text" placeholder="Enter service required">
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
        @include('sa.include.footer')
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
    <!-- end wrapper -->

    <!-- Footer Scripts -->
    <!-- JS | Custom script for all pages -->
    @include('sa.include.script2')

</body>
<script>
    $('#submit').click(async function() {
        var company_name = $('#company_name').val();
        var country = $('#country').val();
        var address = $('#address').val();
        var company_act = $('#company_act').val();
        var contact_name = $('#contact_name').val();
        var email = $('#email').val();
        var contact_number = $('#contact_number').val();
        var service_required = $('#service_required').val();
        const fields = validateFields('company_name', 'country', 'address', 'company_act', 'contact_name', 'email', 'contact_number', 'service_required')
        const response = await axios.post("applyForCertification", {
            company_name,
            country,
            address,
            company_act,
            contact_name,
            email,
            contact_number,
            service_required
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