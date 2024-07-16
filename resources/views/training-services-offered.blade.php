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
            <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="{{asset('images/bg/bg6.jpg')}}">
                <div class="container pt-60 pb-60">
                    <!-- Section Content -->
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2 class="title">TRAINING SERVICES OFFERED</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="accordion1" class="panel-group accordion transparent">
                                <div class="panel">
                                    <div id="accordion11" class="panel-collapse collapse in" role="tablist" aria-expanded="true">
                                        <div class="panel-content">
                                            <p>
                                                At ANS system certification, we are committed to empowering organizations with the necessary skills to excel in the realm of international standards and certifications. We offer lead auditor training through Classroom across KSA and Online Modes.
                                            </p>
                                            <p class="mt-30">
                                                <b>
                                                    <h4>Onsite training</h4>
                                                </b>
                                            <p>
                                                The Class Room Lead Auditor Training is a Day Public Open training program available at ANS SYSTEM CERTIFICATION locations across the KSA, The In-House training is available on request.
                                            </p>
                                            <p class="mt-30">
                                                <b>
                                                    <h4>Online E-training</h4>
                                                </b>
                                            </p>
                                            <p>
                                                ANS SYSTEM CERTIFICATION offers online E-trainings for candidates across the Globe. The candidates must pass the ANS SYSTEM CERTIFICATION online assessment after acquiring the competency knowledge from online tutorials of ANS SYSTEM CERTIFICATION through our training e-portal.
                                            </p>
                                        </div>
                                    </div>
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

</body>

<!-- Mirrored from kodesolution.website/html/s/konsultplus/v5.0/demo/page-faq-style3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Dec 2020 04:47:00 GMT -->

</html>