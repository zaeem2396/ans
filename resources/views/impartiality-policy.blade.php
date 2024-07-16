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
                                <h2 class="title">IMPARTIALITY POLICY</h2>
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
                                                ANSCERT is committed to impartiality in management system certification activities. ANSCERT’s Impartiality Policy is a publicly available statement stating that it understands the importance of impartiality in carrying out its management system certification activities manages conflict of interest and ensures the objectivity of its management system certification activities.
                                                ANSCERT comply with the requirements of ISO 17021:2015 and ensure impartiality for all its personals related to the certification activities & within all of its certification activities from time to time.
                                            </p>
                                            <p>
                                                ANSCERT has established processes to identify, analyse, evaluate, treat, monitor, and document risks related to conflict of interests arising from provision of certification including any conflicts arising from its relationships on an ongoing basis. In case of threats to impartiality ANSCERT documents and demonstrates elimination or minimization of such threats and documents residual risk, if any this residual risk is then reviewed to determine if it is within the level of acceptable risk. The demonstration covers all potential threats that are identified, whether they arise from within the ANSCERT or from activities of other persons, bodies or organisations. Whenever a relationship poses an unacceptable threat to impartiality then certification will not be provided.

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