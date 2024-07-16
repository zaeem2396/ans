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
                                <h2 class="title">Feedback</h2>
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
                            <h3 class="line-bottom mt-0 mb-30">We'd like to hear from you!</h3>
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
                                            <label>Contact Name <small>*</small></label>
                                            <div id="contact_name_err"></div>
                                            <input name="contact_name" id="contact_name" class="form-control" type="text" placeholder="Enter Contact Name">
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
                                            <label>Email <small>*</small></label>
                                            <div id="email_err"></div>
                                            <input name="email" id="email" class="form-control" type="email" placeholder="Enter Email" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Contact Number <small>*</small></label>
                                            <div id="contact_err"></div>
                                            <input name="contact" id="contact" class="form-control" type="text" placeholder="Enter Contact">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Audit Date <small>*</small></label>
                                            <div id="audit_date_err"></div>
                                            <input name="audit_date" id="audit_date" class="form-control" type="date" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Audit Standards <small>*</small></label>
                                            <div id="audit_std_err"></div>
                                            <input name="audit_std" id="audit_std" class="form-control" type="text" placeholder="Enter Audit Standard">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Company Activities <small>*</small></label>
                                            <div id="company_act_err"></div>
                                            <input name="company_act" id="company_act" class="form-control" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Audit Type <small>*</small></label>
                                            <div id="audit_type_err"></div>
                                            <select name="audit_type" id="audit_type" class="form-control">
                                                <option selected disabled>--Select audit type--</option>
                                                @foreach ($certData as $item)
                                                <option value="{{ $item->id }}">{{ $item->cer_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Lead Auditor Name <small>*</small></label>
                                            <div id="lead_audit_name_err"></div>
                                            <input name="lead_audit_name" id="lead_audit_name" class="form-control required" type="text" placeholder="Enter Subject">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Other Audit Team Name <small>*</small></label>
                                            <div id="other_audit_team_err"></div>
                                            <input name="other_audit_team" id="other_audit_team" class="form-control required" type="text" placeholder="Enter Subject">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Feedback for LA/ Audit Name <small>*</small></label>
                                            <div id="la_audit_err"></div>
                                            <input name="la_audit" id="la_audit" class="form-control required" type="text" placeholder="Enter Subject">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Feedback for ANSCERT <small>*</small></label>
                                            <div id="feedback_err"></div>
                                            <input name="feedback" id="feedback" class="form-control required" type="text" placeholder="Enter Subject">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Suggestions (If any) <small>*</small></label>
                                            <div id="suggestion_err"></div>
                                            <input name="suggestion" id="suggestion" class="form-control required" type="text" placeholder="Enter Subject">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="button" name="submit_feedback" id="submit_feedback" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Submit feedback</button>
                                    <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
                                    <span id="feedbackResponse"></span>
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
    $('#submit_feedback').click(async function() {
        var company_name = $('#company_name').val();
        var contact_name = $('#contact_name').val();
        var address = $('#address').val();
        var email = $('#email').val();
        var contact = $('#contact').val();
        var audit_date = $('#audit_date').val();
        var audit_std = $('#audit_std').val();
        var company_act = $('#company_act').val();
        var audit_type = $('#audit_type').val();
        var lead_audit_name = $('#lead_audit_name').val();
        var other_audit_team = $('#other_audit_team').val();
        var la_audit = $('#la_audit').val();
        var feedback = $('#feedback').val();
        var suggestion = $('#suggestion').val();
        const fields = validateFields('company_name', 'contact_name', 'address', 'email', 'contact', 'audit_date', 'audit_std', 'company_act', 'audit_type', 'lead_audit_name', 'other_audit_team', 'la_audit', 'feedback', 'suggestion')
        const response = await axios.post("submitFeedback", {
            company_name,
            contact_name,
            address,
            email,
            contact,
            audit_date,
            audit_std,
            company_act,
            audit_type,
            lead_audit_name,
            other_audit_team,
            la_audit,
            feedback,
            suggestion
        }, {
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        let status = response.data.status
        let message = response.data.message
        if(status==200) {
            $('#feedbackResponse').html("<span class='alert alert-success' role='alert'>"+message+"</span>");
            $('#feedback_form').trigger("reset");
        } else {
            $('#feedbackResponse').html("<span class='alert alert-danger' role='alert'>"+message+"</span>");
        }
    });
</script>

</html>