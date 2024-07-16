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
                                <h2 class="title">PROFESSIONAL TRAINING AND CERTIFICATIONS</h2>
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
                                                ANS system certification provides professional training and certification in various industrial skills and disciplines. Professional training and certification are valuable for individuals seeking to enhance their skills, validate their expertise, and advance their careers The Professional Training and Certifications offered by us include:
                                            </p>
                                            <ul style="list-style-type:disc; padding-left: 2rem;">
                                                <li>Six Sigma (Master Black Belt / Black Belt / Green Belt)</li>
                                                <li>Information Security Risk Manager (ISRM)</li>
                                                <li>Certified Cyber Security Analyst (CCSA)</li>
                                                <li>Certified Management System Specialist (CMSS)</li>
                                                <li>Certified Management System Consultant (CMSC)</li>
                                                <li>Certified Supplier Quality Auditor (CSQA)</li>
                                                <li>Certified Quality Manager (CQM)</li>
                                                <li>Certified Software Quality Engineer (CSQE)</li>
                                                <li>Certified EHS Professional (CEHSP)</li>
                                                <li>Certified Ethical Trade Professional (CETP)</li>
                                                <li>Certified Compliance Manager (CCM)</li>
                                                <li>Certified Industrial Safety Professional (CISP)</li>
                                                <li>HACCP – Food Safety Management</li>
                                            </ul>
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