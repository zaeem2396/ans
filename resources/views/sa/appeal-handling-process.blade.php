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
              <h2 class="title">Appeal Handling Process</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div id="accordion1" class="panel-group accordion transparent">
              <div class="panel">
                <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion11" class="active" aria-expanded="true"> <span class="open-sub"></span> <h3>The auditee has the right to appeal to the ANSCERT against any decisions made under the certification conditions agreed by the ANSCERT and the auditee.</h3></a> </div>
                <div id="accordion11" class="panel-collapse collapse in" role="tablist" aria-expanded="true">
                  <div class="panel-content">
                      <ul>
                          <li><i class="fa fa-check"></i> Upon receipt of an appeal, it will be reviewed by the ANSCERT certification Manager or independent reviewer in cases appeal or complaint refers to activities managed by certification manager if required; it would be circulated to all concerned personnel’s for their feedback.</li>
                          <li><i class="fa fa-check"></i> Appeals will be recorded and the records shall be retained.</li>
                          <li><i class="fa fa-check"></i> The appeal handling process will be independent of certification process.</li>
                          <li><i class="fa fa-check"></i> ANSCERT provides Action Request for Appeals and Complaints - to those who wish to appeal. Any appeals either written or verbal will be recorded using Complaints & Appeals Register. Any correspondence records in relation to the appeals will be included in Complaints & Appeals Register and this shall be forwarded to the ANSCERT Certification Manager.</li>
                          <li><i class="fa fa-check"></i> The appellant shall provide objective evidence to support the justification of his/her appeal. Appeals with sufficient evidence will be forwarded to the ANSCERT Certification Manager for review.</li>
                          <li><i class="fa fa-check"></i> Head Certification / Independent reviewer are responsible for all decisions at all levels of the appeals-handling process. He ensures that the persons engaged in the appeal handling process are different from those who carried out the audits and make the certification decisions.</li>
                          <li><i class="fa fa-check"></i> Both the appellant and certification personnel’s concerned shall be communicated individually with confidentiality for the relevant matters. The decision made by Head Certification / Independent reviewer will be the final one and recorded on Complaints & Appeals Request. The decision is communicated to the appellant in writing by the Certification Manager.</li>
                          <li><i class="fa fa-check"></i> Submission, investigation and decision on appeals will not result in any discriminatory actions against the appellant.</li>
                          <li><i class="fa fa-check"></i> Certification Manager gives formal information to the appellant on submission, progress, decision and close-out of the appeal.</li>
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