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
              <h2 class="title">Complaint Handling Process</h2>
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
                <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion11" class="active" aria-expanded="true"> <span class="open-sub"></span> <h3>All complaints or appeals can be registered officially through ANSCERT website, email, phone and post, for all such complaints.</h3></a> </div>
                <div id="accordion11" class="panel-collapse collapse in" role="tablist" aria-expanded="true">
                  <div class="panel-content">
                      <ul>
                          <li><i class="fa fa-check"></i> ANSCERT Upon receipt of a complaint confirms whether the complaint relates to certification activities that it is responsible for and, if so, shall deal with it. In case of complaint related to a certified client then examination of complaint considers the effectiveness of the certified management system all such valid complaints are referred to certified client for response.</li>
                          <li><i class="fa fa-check"></i> Upon receipt of either written or verbal complaints, it shall be recorded on Complaints & Appeals Register. Any correspondence connected with the complaints shall be attached to this record, entire process and documents are retained as confidential.</li>
                          <li><i class="fa fa-check"></i> The complaint-handling panel which consists of the Certification Manager and Head Certification shall jointly review the complaints, decide appropriate remedial actions and appoint individuals responsible for those actions. All the information shall be recorded on Complaints & Appeals Register.</li>
                          <li><i class="fa fa-check"></i> The decisions which are to be noticed to the complainants shall be made, reviewed and approved by the persons who do not have any previous relationships with the complainants.</li>
                          <li><i class="fa fa-check"></i> When the remedial actions have been satisfactorily completed, Certification Manager signs the close-out section of Complaints and Appeals Request.</li>
                          <li><i class="fa fa-check"></i> The progress, outcome and close-out of the complaints shall be noticed to the complainants within twelve weeks from the date of the receipt. In general, all complaints shall be closed out within the twelve weeks from the date of the receipt.</li>
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