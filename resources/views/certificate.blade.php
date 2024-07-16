<!DOCTYPE html>
<html dir="ltr" lang="en">



<head>
    @include('include.head');

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
        @include('include.nav');

        <!-- Start main-content -->
        <div class="main-content">
            <!-- Section: inner-header -->
            <section class="inner-header divider parallax layer-overlay overlay-dark-5"
                data-bg-img="{{ $cert[0]->img }}">
                <div class="container pt-70 pb-20">
                    <!-- Section Content -->
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="title text-white">{{ $cert[0]->cer_name }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: service-->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 blog-pull-right">
                            <div class="single-service">
                                <img src="{{ str_replace('/c_fit,h_150,w_150', '', $cert[0]->img); }}" alt="" style="height: 400px; width: auto;">
                                <h3 class="text-theme-colored line-bottom text-theme-colored">{{ $cert[0]->cer_name }}
                                </h3>
                                <p>{!! str_replace('$nbsp;', ' ', $cert[0]->description) !!}</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="sidebar sidebar-left mt-sm-30 ml-40">
                                <div class="widget">
                                    <h4 class="widget-title line-bottom">Service <span
                                            class="text-theme-colored2">List</span></h4>
                                    <div class="services-list">
                                        <ul class="list list-border">
                                            @foreach ($certData as $item)
                                                <li>
                                                    <a
                                                        href="/{{ $item->name }}">{{ $item->cer_name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget" style="display: none;">
                                    <h4 class="widget-title line-bottom">Quick <span
                                            class="text-theme-colored2">Contact</span></h4>
                                    <div class="quick-contact-form">
                                        <div class="form-group">
                                            <div id="email_err"></div>
                                            <input name="email" id="email" class="form-control" type="text"
                                                placeholder="Enter Email">
                                        </div>
                                        <div class="form-group">
                                            <div id="msg_err"></div>
                                            <textarea name="message" id="message" class="form-control"
                                                placeholder="Enter Message" rows="3"></textarea>
                                        </div>
                                        <div class="form-group" id="response">
                                            <button type="button"
                                                class="btn btn-theme-colored btn-flat btn-xs btn-quick-contact text-white pt-5 pb-5">Send
                                                Message</button>
                                        </div>
                                    </div>

                                    <!-- Quick Contact Form Validation-->
                                    <script type="text/javascript">
                                        $("#quick_contact_form_sidebar").validate({
                                            submitHandler: function(form) {
                                                var form_btn = $(form).find('button[type="submit"]');
                                                var form_result_div = '#form-result';
                                                $(form_result_div).remove();
                                                form_btn.before(
                                                    '<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>'
                                                );
                                                var form_btn_old_msg = form_btn.html();
                                                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                                $(form).ajaxSubmit({
                                                    dataType: 'json',
                                                    success: function(data) {
                                                        if (data.status == 'true') {
                                                            $(form).find('.form-control').val('');
                                                        }
                                                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                                                        $(form_result_div).html(data.message).fadeIn('slow');
                                                        setTimeout(function() {
                                                            $(form_result_div).fadeOut('slow')
                                                        }, 6000);
                                                    }
                                                });
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
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
    <script>
        $("#send_mail").click(() => {
            const email = $("#email").val();
            const message = $("#message").val();
            if (!email) {
                $("#email_err").html("<p class='text-danger p-1'>Please fill out this field</p>")
            }
            if (!message) {
                $("#msg_err").html("<p class='text-danger p-1'>Please fill out this field</p>")
            }
            $.ajax({
                url: "ajax.php",
                method: "POST",
                data: {
                    action: 'send_mail',
                    email: email,
                    message: message
                },
                success: function(response) {
                    console.log(response)
                    if (response == '1') {
                        $("#response").html(
                            "<button class='btn btn-theme-colored btn-flat btn-xs btn-quick-contact text-white pt-5 pb-5'>Mail sent <i class='fa fa-check'></i></button>"
                        )
                    }
                }
            })
        })
    </script>
</body>
