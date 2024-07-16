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
            <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="{{asset('images/bg/bg6.jpg')}}">
                <div class="container pt-60 pb-60">
                    <!-- Section Content -->
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2 class="title">CERTIFICATION MARK GUIDELINES</h2>
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
                                    <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion11" class="active" aria-expanded="true"> <span class="open-sub"></span>
                                            <h3>Certified organizations as meeting the requirements of relevant international standards may use the relevant certification mark on stationery, brochures and other items relevant to the organisation's certified activity, subject to the conditions set out in this document.</h3>
                                        </a>
                                    </div>
                                    <div id="accordion11" class="panel-collapse collapse in" role="tablist" aria-expanded="true">
                                        <div class="panel-content">
                                            <ul>
                                                <h4>Instruction for Use of Certification Marks and Guidelines</h4>
                                                <li><i class="fa fa-check"></i> ANSCERT will provide its certified clients with the relevant ANSCERT certification mark(s).</li>
                                                <li><i class="fa fa-check"></i> Certified clients may utilize the certification mark in communication media such as the, brochures, letter head, envelopes, business cards and certain packaging (see Table 1 below).</li>
                                                <li><i class="fa fa-check"></i> If the scope of certification does not include all products and/or services provided by the organization, and/or all locations/facilities of the organization, the material bearing the mark shall not suggest that all products/services/sites/locations of the organization are covered by the scope of certification.</li>
                                                <li><i class="fa fa-check"></i> The mark(s) cannot be altered or modified. However, it may be resized, provided the proportions of the entire mark are maintained and all features of the mark are clearly distinguishable.</li>
                                                <li><i class="fa fa-check"></i> The client shall not use the certificate mark(s) provided by ANSCERT in such a manner that would bring ANSCERT and/or the certification system into disrepute and lose public trust. </li>
                                                <li><i class="fa fa-check"></i> Under no conditions shall the mark be affixed to a product or used in any way that might suggest product certification.</li>
                                                <li><i class="fa fa-check"></i> The mark applies only to management system certification. </li>
                                                <li><i class="fa fa-check"></i> Upon a reduction of the scope of certification, the client shall amend all advertising material referring to its certification to properly reflect the reduced scope. </li>
                                                <li><i class="fa fa-check"></i> Upon suspension or withdrawal of its certification, the client shall discontinue its use of all advertising material that contains a reference to certification, as directed by ANSCERT. </li>
                                                <li><i class="fa fa-check"></i> Clients are not permitted to apply ANSCERT mark to their laboratory test and/or calibration reports. </li>
                                                <li><i class="fa fa-check"></i> Contractual obligation: Correct use of the certificate, certification mark or accreditation mark is a contractual
                                                    obligation and will be monitored at surveillance and certificate renewal assessments. Any misuse of the certificate,
                                                    certification mark by the client may result in action including requests for correction and corrective action, suspension,
                                                    withdrawal of certification, publication of the transgression and, if necessary, legal action. </li>
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
        @include('sa.include.footer')
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
    <!-- end wrapper -->

    <!-- Footer Scripts -->
    <!-- JS | Custom script for all pages -->
    @include('sa.include.script2')

</body>

<!-- Mirrored from kodesolution.website/html/s/konsultplus/v5.0/demo/page-faq-style3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Dec 2020 04:47:00 GMT -->

</html>