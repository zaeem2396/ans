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
                                <h2 class="title">INTEGRATED MANAGEMENT SYSTEMS</h2>
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
                                                Integrate your management systems to reduce duplication and improve efficiency. If you are currently running separate management systems, get in touch to see how you could make potential savings.
                                            </p>
                                            <p>
                                                In today's competitive business environment, streamlining operations is essential to keeping overhead costs low. Key principles of lean management include eliminating redundancies and consolidating systems. Implementing an integrated management system provides a framework for doing just this. When you integrate your management systems, you reduce duplication and improve efficiency.
                                            </p>
                                            <p>
                                                Integrated management systems provide greater benefits than running separate management systems in parallel. If you are currently running separate management systems, get in touch to see how you could make potential savings.
                                            </p>
                                            <p class="mt-30">
                                                <b>
                                                    <h4 style="color: #d60000;">Management Integration and Certification</h4>
                                                </b>
                                            <p>
                                                Most businesses are aware of the value of certification under <b>ISO 9001, ISO 14001, ISO 45001</b>, and other management system standards. It's important to remember that the purpose of ISO and other standards is to help you run a better organization. If your management systems are causing your staff to duplicate work unnecessarily, they aren't delivering the value they should be.
                                            </p>
                                            <p>
                                                That’s where the ANS System Certification comes in. We can provide fully integrated audits of multiple management system standards, thereby giving you the reassurance that the integration of your system is effective and identifying any opportunities for further improving the integration, and therefore effectiveness, of your system.
                                            </p>
                                            <ul style="list-style-type: disc; margin-left: 2rem;">
                                                <li>
                                                    <b>ISO 9001.</b> Certification in the ISO 9001 integrated quality management system standard demonstrates that your organization is meeting stringent quality management system requirements in the following areas: facilities, people, training, services, and equipment. Attaining this certification is regarded as the first step in the implementation of a process of continuous improvement throughout your organization.
                                                </li>
                                                <li>
                                                    <b>ISO 14001.</b> Attaining ISO 14001 certification is essential for any organization that intends to establish, implement, maintain, and improve an efficient environmental management system. The extent to which ISO 14001 standards are applied is based on factors such as the organization’s specific environmental policies, the types of products and services it provides, and its location and operating conditions.
                                                </li>
                                                <li>
                                                    <b>ISO 45001.</b> The new H&S standard ISO 45001 encompasses the extremely important area of occupational health and safety. This standard will provide a framework for reducing workplace risks, improving employee safety, and generally creating better working conditions for employees throughout the world.
                                                </li>
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