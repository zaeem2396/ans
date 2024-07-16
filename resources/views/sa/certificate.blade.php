<!DOCTYPE html>
<html dir="ltr" lang="en">



<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="{{ $cert[0]->content }}" />
    <meta name="keywords" content="" />
    <meta name="google-site-verification" content="s6fUdykgTh16jMp9zSyaDepyShwQgJdfhie6TSXdhjA" />
    
    <!-- Page Title {{ ($cert[0]->cer_name == "HACCP Certification (Hazard Analysis Critical Control Point)") ? "HACCP (Hazard Analysis Critical Control Point)" : "" }} -->
    <title>{{ $cert[0]->cer_name }}</title>
    
    <!-- Favicon and Touch Icons -->
    <!--<link href="images/favicon.png" rel="shortcut icon" type="image/png">-->
    <link href="{{ asset('images/logo.png') }}" rel="logo">
    <link href="{{ asset('images/logo.png') }}" rel="logo" sizes="72x72">
    <link href="{{ asset('images/logo.png') }}" rel="logo" sizes="114x114">
    <link href="{{ asset('images/logo.png') }}" rel="logo" sizes="144x144">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- href language tag -->
    <link rel="alternate" href="{{ url()->current() }}" hreflang="en-sa" />

    <!-- Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/css-plugin-collections.css') }}" rel="stylesheet" />
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="{{ asset('css/menuzord-skins/menuzord-boxed.css') }}" rel="stylesheet" />
    <!-- CSS | Main style file -->
    <link href="{{ asset('css/style-main.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{ asset('css/preloader.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{ asset('css/custom-bootstrap-margin-padding.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->
    
    <!-- Revolution Slider 5.x CSS settings -->
    <link href="{{ asset('js/revolution-slider/css/settings.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('js/revolution-slider/css/layers.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('js/revolution-slider/css/navigation.css') }}" rel="stylesheet" type="text/css" />
    
    <!-- CSS | Theme Color -->
    <link href="{{ asset('css/colors/theme-skin-color-set1.css') }}" rel="stylesheet" type="text/css">
    
    <!-- Popup -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PKP5M5G2');</script>

    @include('sa.include.script')
    <style>
        .margin-5 {
            margin: 5rem;
        }
    </style>
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
        @include('sa.include.nav');

        <!-- Start main-content -->
        <div class="main-content">
            <!-- Section: inner-header -->
            <section class="inner-header divider parallax layer-overlay overlay-dark-5"
                data-bg-img="{{ str_replace('/c_fit,h_150,w_150', '', $cert[0]->img); }}">
                <div class="container pt-70 pb-20">
                    <!-- Section Content -->
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="title text-white text-center">{{ ($cert[0]->cer_name == "HACCP Certification (Hazard Analysis Critical Control Point)") ? "HACCP (Hazard Analysis Critical Control Point)" : $cert[0]->cer_name }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: service-->
            <section>
                <div class="margin-5">
                    <div class="row">
                        <div class="col-md-12 blog-pull-right">
                            <div class="single-service">
                                <div class="text-center">
                                    <img src="{{ str_replace('/c_fit,h_150,w_150', '', $cert[0]->img); }}" alt="{{ $cert[0]->altText }}" style="height: 400px; width: auto;">
                                </div>
                                <h3 class="text-theme-colored line-bottom text-theme-colored">{{ $cert[0]->cer_name }}
                                </h3>
                                <p style="text-align: left;">{!! str_replace('$nbsp;', ' ', $cert[0]->description) !!}</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="sidebar sidebar-left mt-sm-30 ml-40">
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

                                    <!-- Schema  -->
                                    <script type="application/ld+json">
                                        {!! html_entity_decode($cert[0]->seoSchema) !!}
                                    </script>
                                    <!--  FAQ Schema  -->
                                    <script type="application/ld+json">
                                        {!! html_entity_decode($cert[0]->faqSchema) !!}
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
        @include('sa.include.footer')
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
    <!-- end wrapper -->

    <!-- Footer Scripts -->
    <!-- JS | Custom script for all pages -->
    @include('sa.include.script2')
</body>
