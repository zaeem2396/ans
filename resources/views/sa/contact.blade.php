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
            <section class="inner-header divider parallax layer-overlay overlay-white-8"
                data-bg-img="{{ asset('images/bg/bg6.jpg') }}">
                <div class="container pt-60 pb-60">
                    <!-- Section Content -->
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2 class="title">Contact</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Divider: Google Map -->
            <section>
                <div class="container-fluid pt-0 pb-0">
                    <div class="row">

                        <!-- Google Map HTML Codes -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.0895504604873!2d72.8525670142125!3d19.059799957436006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c8e0804a99ad%3A0xde769dd0767bf122!2sJairaj%20Building%2C%20Kala%20Nagar%2C%20Bandra%20East%2C%20Mumbai%2C%20Maharashtra%20400051!5e0!3m2!1sen!2sin!4v1608746036892!5m2!1sen!2sin"
                            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>

                    </div>
                </div>
            </section>

            <!-- Divider: Contact -->
            <section class="divider">
                <div class="container">
                    <div class="row pt-30">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left"
                                            href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
                                        <div class="media-body">
                                            <h5 class="mt-0">Our Office Location</h5>
                                            <p>1st floor, Jairaj Building, Opposite Income Tax, Bandra Kurla Complex,
                                                Bandra (E), Mumbai- 400 050.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-12">
                                    <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left"
                                            href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
                                        <div class="media-body">
                                            <h5 class="mt-0">Contact Number</h5>
                                            <p>+(91) 845 208 8290</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-12">
                                    <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left"
                                            href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
                                        <div class="media-body">
                                            <h5 class="mt-0">Email Address</h5>
                                            <p>info@anssystemcertification.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h3 class="line-bottom mt-0 mb-30">Interested in discussing?</h3>
                            <!-- Contact Form -->
                            <form id="contactForm">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Name <small>*</small></label>
                                            <div id="name_err"></div>
                                            <input name="name" id="name" class="form-control" type="text"
                                                placeholder="Enter Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Email <small>*</small></label>
                                            <div id="email_err"></div>
                                            <input name="email" id="email" class="form-control required email"
                                                type="email" placeholder="Enter Email">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Subject <small>*</small></label>
                                            <div id="subject_err"></div>
                                            <input name="subject" id="subject" class="form-control required" type="text"
                                                placeholder="Enter Subject">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Message</label>
                                    <div id="message_err"></div>
                                    <textarea name="message" id="message" class="form-control required" rows="5"
                                        placeholder="Enter Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <div id="success"></div>
                                    <button type="button" onclick="sendMail()"
                                        class="btn btn-dark btn-theme-colored btn-flat mr-5"
                                        data-loading-text="Please wait...">Send your message</button>
                                    <button type="reset"
                                        class="btn btn-default btn-flat btn-theme-colored">Reset</button>
                                        <span id="contactResponse"></span>
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
    const sendMail = async () => {
        var name = $('#name').val();
        var email = $('#email').val();
        var subject = $('#subject').val();
        var message = $('#message').val();
        const fields = validateFields('name', 'email', 'subject', 'message');
        const response = await axios.post("contactUs", {
            name, email, subject, message
        }, {
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        let status = response.data.status
        let res = response.data.message
        if(status==200) {
            $('#contactResponse').html("<span class='alert alert-success' role='alert'>"+res+"</span>");
            $('#contactForm').trigger("reset");
        } else {
            $('#contactResponse').html("<span class='alert alert-danger' role='alert'>"+res+"</span>");
        }
    }
</script>

</html>
