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
                                <h2 class="title">PROFESSIONAL DEVELOPMENT PROGRAMS</h2>
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
                                                ANS system certification offers Lead Auditor training as part of their professional development programs.
                                            </p>
                                            <p>
                                                Adhering to today's complex business landscape and thriving in it is vital for organizations. That's where ISO training services come in to aid in achieving excellence, ensure compliance, and build trust with stakeholders. ANS SYSTEM CERTIFICATION helps businesses with its lead auditor training service, so a QMS Auditor can ensure compliance with international ISO standards.
                                            </p>
                                            <p>
                                                Becoming a Management System Lead Auditor for ISO standards involves specific training and qualifications. ISO (International Organization for Standardization) offers various standards for different management systems, such as ISO9001 (Quality Management), ISO 14001 (Environmental Management), ISO 27001 (Information Security Management), and ISO 45001 (Occupational Health and Safety), among others.
                                            </p>
                                            <p>
                                                We will complete an analysis of your training needs and deliver training courses across the full range of our services. For example, in addition to our scheduled courses, we can deliver courses on-demand, either from our extensive portfolio or tailored to your requirements and held at your premises.
                                            </p>
                                            <p>
                                                <b>Trainings offered:</b>
                                            </p>
                                            <ul style="list-style-type:disc; padding-left: 2rem;">
                                                @foreach($training as $data)
                                                <li>{{$data->training_name}}</li>
                                                @endforeach
                                            </ul>
                                            <p class="mt-30">
                                                <b>
                                                    <h4>Benifit's</h4>
                                                </b>
                                            <p>
                                                <b>Expertise Development:</b>
                                                Lead Auditor Training equips individuals with in-depth knowledge of specific ISO standards. It helps participants understand the principles, requirements, and best practices associated with the chosen standard.
                                            </p>
                                            <p>
                                                <b>Auditing Skills Enhancement: </b>
                                                The training focuses on developing auditing skills, including planning and conducting audits, report writing, and effective communication. Participants learn how to assess compliance and identify areas for improvement.
                                            </p>
                                            <p>
                                                <b>Career Advancement: </b>
                                                Obtaining Lead Auditor certification enhances a professional's credentials, making them more competitive in the job market. It can lead to career advancement opportunities, especially in roles related to quality management, environmental management, information security, and more.
                                            </p>
                                            <p>
                                                <b>Global Recognition: </b>
                                                Lead Auditor certification is often globally recognized. This recognition is valuable for professionals working in international organizations or for those involved in industries that require compliance with international standards.
                                            </p>
                                            <p>
                                                <b>Contribution to Organizational Success: </b>
                                                Trained Lead Auditors can contribute significantly to their organizations by ensuring compliance with ISO standards. This can improve processes, enhance product or service quality, and increase customer satisfaction.
                                            </p>
                                            <p>
                                                <b>Risk Management: </b>
                                                Lead Auditor Training helps individuals understand the risks associated with non-compliance and provides tools for effective risk management. This is crucial for maintaining the integrity and reputation of an organization.
                                            </p>
                                            <p>
                                                <b>Continuous Improvement: </b>
                                                Trained Lead Auditors are equipped to identify areas for improvement within an organization. This contributes to the continuous improvement of processes and systems, aligning them with international best practices.
                                            </p>

                                            </p>
                                            <p class="mt-30">
                                                <b>
                                                    <h4>The Process of Becoming a Lead Auditor</h4>
                                                </b>
                                            </p>
                                            <ul style="list-style-type:disc; padding-left: 2rem;">
                                                <li>Pick an audit standard</li>
                                                <li>Choose a reputed institute and enroll yourself in the lead auditor training program</li>
                                                <li>Attend all the classes to become an effective auditor</li>
                                                <li>Clear all the necessary exams to get certification</li>
                                                <li>Get Certified</li>
                                                <li>Start working to gain auditing experience</li>
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