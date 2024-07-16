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
            <section class="inner-header divider parallax layer-overlay overlay-white-8"
                data-bg-img="{{ asset('images/bg/bg6.jpg') }}">
                <div class="container pt-60 pb-60">
                    <!-- Section Content -->
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2 class="title">Check status</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <h5>Enter your certificate number</h5>
                            <div class="newsletter-form mt-40">
                                <label for="mce-EMAIL"></label>
                                <span id="error" class="text-danger"></span>
                                <div class="input-group">
                                    <input type="text" id="app_id" name="app_id" data-height="45px" class="form-control input-lg"
                                        placeholder="Your certificate number">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-colored btn-dark btn-lg m-0"
                                            data-height="45px" onclick="getApplicationData()">Search</button>
                                    </span>
                                </div>
                            </div>
                            <br>
                            <div id="applicationResponse"></div>
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
    const getApplicationData = async () => {
            let app_id = document.getElementById("app_id").value
            if(!app_id) {
                return document.getElementById("error").innerHTML = "Enter a valid application number"
            }
            const response = await axios.post("getAppData", {
                app_id
            }, {
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            let appData = response.data.data
            if (response.data.status == 200) {
                document.getElementById("applicationResponse").innerHTML =
                    `<table class="table">
                              <tbody>
                                <tr>
                                  <th scope="row">Certificate No</th>
                                  <td>${appData[0].cert_number}</td>
                                </tr>
                                <tr>
                                  <th scope="row">Company Name</th>
                                  <td>${appData[0].comp_name}</td>
                                </tr>
                                <tr>
                                  <th scope="row">Standard</th>
                                  <td>${appData[0].cert_name}</td>
                                </tr>
                                <tr>
                                  <th scope="row">Scope</th>
                                  <td>${appData[0].scope}</td>
                                </tr>
                                <tr>
                                  <th scope="row">Date of issue</th>
                                  <td>${appData[0].issue_date}</td>
                                </tr>
                                <tr>
                                  <th scope="row">Date of valid</th>
                                  <td>${appData[0].exp_date}</td>
                                </tr>
                                <tr>
                                  <th scope="row">Status</th>
                                  <td>${appData[0].status}</td>
                                </tr>
                              </tbody>
                            </table>`
            }
        }
</script>
<!-- Mirrored from kodesolution.website/html/s/konsultplus/v5.0/demo/form-subscribe.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Dec 2020 04:46:45 GMT -->

</html>
