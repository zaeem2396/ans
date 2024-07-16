<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <!-- Meta Tags -->
    @include('sa.include.head')

    @include('sa.include.script')
</head>

<style>
    .modal.fade.in .lab-modal-body {
        bottom: 0;
        opacity: 1;
    }

    .lab-modal-body h1 {
        font-size: 2rem;
    }

    .lab-modal-body p {
        margin: 0 0 1.62rem 0;
        line-height: 1.62;
        font-weight: 300;
        font-size: 1.62rem;
        color: #666;
    }

    .lab-modal-body {
        position: relative;
        bottom: -250px;
        margin: 230px auto 0;
        padding: 20px;
        max-width: 60%;
        height: auto;
        background-color: rgb(0 46 91);
        border: 1px solid #002e5b;
        opacity: 0;
        -webkit-transition: opacity 0.3s ease-out, bottom 0.3s ease-out;
        -moz-transition: opacity 0.3s ease-out, bottom 0.3s ease-out;
        -o-transition: opacity 0.3s ease-out, bottom 0.3s ease-out;
        transition: opacity 0.3s ease-out, bottom 0.3s ease-out;
    }

    .close {
        margin-top: -20px;
        margin-right: -20px;
        text-shadow: 0 1px 0 #ffffff;
    }

    .popup-button {
        margin-top: 70px;
    }
</style>

<body class="has-side-panel side-panel-right fullwidth-page">


    <!-- MODAL FOR COOKIE STARTS -->
    <div class="modal fade" id="lab-slide-bottom-popup" data-keyboard="false" data-backdrop="false">
        <div class="lab-modal-body">
            <h1 class="text-white text-center">
                This website uses cookies
            </h1>
            <p class="text-white text-center">
                We use cookies to improve your experience and deliver personalized content.
            </p>
            <div class="text-center">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <button type="button" onclick="acceptCookies()" class="btn btn-primary">Accept</button>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <button type="button" onclick="closeCookie()" class="btn btn-default">Reject</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  MODAL FOR COOKIE ENDS -->

    <div class="body-overlay"></div>
    <div id="side-panel" class="dark layer-overlay overlay-white-8" data-bg-img="{{ asset('images/bg/bg1.jpg') }}">
        <!-- side panel -->
        @include('sa.include.side_panel')
    </div>
    <div id="wrapper" class="clearfix">

        <!-- Header -->
        @include('sa.include.nav')

        <!-- Start main-content -->
        <div class="main-content">

            <!-- Section: home -->
            <section id="home" class="divider">
                <div class="container-fluid p-0">

                    <!-- START REVOLUTION SLIDER 5.0.7 -->
                    <div id="rev_slider_home_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery34" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
                        <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
                        <div id="rev_slider_home" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                            <ul>
                                <!-- SLIDE 1 -->
                                <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('images/bg/slide1.jpg') }}" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Make an Impact">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ asset('images/bg/slide1.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" id="slide-1-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-basealign="slide" data-responsive_offset="on" style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);">
                                    </div>
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-1-layer-2" data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']" data-voffset="['120','100','70','90']" data-fontsize="['56','46','40','36']" data-lineheight="['70','60','50','45']" data-fontweight="['800','700','700','700']" data-width="['700','650','600','420']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">
                                        Take the <span class="text-theme-colored2">world's</span> best <span class="text-theme-colored2">Certification</span> Site.
                                    </div>
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-1-layer-3" data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']" data-voffset="['280','220','180','180']" data-fontsize="['18','18','16','13']" data-lineheight="['30','30','28','25']" data-fontweight="['600','600','600','600']" data-width="['700','650','600','420']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">We provides always our best services
                                        for our clients and always<br> try to achieve our client's trust and
                                        satisfaction.
                                    </div>
                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-1-layer-4" data-x="['left','left','left','left']" data-hoffset="['53','53','53','30']" data-y="['top','top','top','top']" data-voffset="['360','290','260','260']" data-fontsize="['18','18','16','16']" data-lineheight="['30','30','30','30']" data-fontweight="['600','600','600','600']" data-width="['700','650','600','420']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">
                                    </div>
                                </li>

                                <!-- SLIDE 2 -->
                                <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('images/bg/slide2.jpg') }}" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Make an Impact">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ asset('images/bg/slide2.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" id="slide-2-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-basealign="slide" data-responsive_offset="on" style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);">
                                    </div>
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-2-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['120','100','70','90']" data-fontsize="['28','24','24','24']" data-lineheight="['33','30','30','30']" data-fontweight="['600','600','600','600']" data-textalign="['center','center','center','center']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">Online Solution
                                    </div>
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-2-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['165','135','105','130']" data-fontsize="['56','46','40','36']" data-lineheight="['70','60','50','45']" data-fontweight="['800','700','700','700']" data-textalign="['center','center','center','center']" data-width="['700','650','600','420']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">
                                        Grow Up<span class="text-theme-colored2"> Business</span> Choose <span class="text-theme-colored2">Right</span> Solution.
                                    </div>
                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-2-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['320','260','220','220']" data-fontsize="['18','18','16','13']" data-lineheight="['30','30','28','25']" data-fontweight="['600','600','600','600']" data-textalign="['center','center','center','center']" data-width="['700','650','600','420']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">We provides always our best services
                                        for our clients and always<br> try to achieve our client's trust and
                                        satisfaction.
                                    </div>
                                    <!-- LAYER NR. 5 -->
                                    <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-2-layer-5" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['400','340','300','300']" data-fontsize="['18','18','16','16']" data-lineheight="['30','30','30','30']" data-fontweight="['600','600','600','600']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">
                                    </div>
                                </li>

                                <!-- SLIDE 3 -->
                                <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('images/bg/slide3.jpg') }}" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Make an Impact">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ asset('images/bg/slide3.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" id="slide-3-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-basealign="slide" data-responsive_offset="on" style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 1.00);">
                                    </div>
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-3-layer-2" data-x="['center','center','center','center']" data-hoffset="['310','200','100','0']" data-y="['top','top','top','top']" data-voffset="['120','100','70','90']" data-fontsize="['56','46','40','36']" data-lineheight="['70','60','50','45']" data-fontweight="['800','700','700','700']" data-width="['700','650','500','420']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">We
                                        help you <span class="text-theme-colored2">business</span> to grow and expand
                                    </div>
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-3-layer-3" data-x="['center','center','center','center']" data-hoffset="['310','200','100','0']" data-y="['top','top','top','top']" data-voffset="['280','220','180','180']" data-fontsize="['18','18','16','13']" data-lineheight="['30','30','28','25']" data-fontweight="['600','600','600','600']" data-width="['700','650','500','420']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">We provides always our best services
                                        for our clients and always<br> try to achieve our client's trust and
                                        satisfaction.
                                    </div>
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-3-layer-4" data-x="['center','center','center','center']" data-hoffset="['310','200','100','0']" data-y="['top','top','top','top']" data-voffset="['360','290','260','260']" data-fontsize="['18','18','16','16']" data-lineheight="['30','30','30','30']" data-fontweight="['600','600','600','600']" data-width="['700','650','500','420']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">
                                    </div>
                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption rs-parallaxlevel-0" id="slide-3-layer-5" data-x="['center','center','center','center']" data-hoffset="['310','33','0','0']" data-y="['top','top','top','top']" data-voffset="['360','290','260','260']" data-width="['700','650','600','420']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:0;y:0;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off" style="z-index: 8; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                                    </div>
                                </li>
                            </ul>
                            <div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(166, 216, 236, 1.00);"></div>
                        </div>
                    </div>

                    <!-- END REVOLUTION SLIDER -->
                    <script type="text/javascript">
                        var tpj = jQuery;
                        var revapi34;
                        tpj(document).ready(function() {
                            if (tpj("#rev_slider_home").revolution == undefined) {
                                revslider_showDoubleJqueryError("#rev_slider_home");
                            } else {
                                revapi34 = tpj("#rev_slider_home").show().revolution({
                                    sliderType: "standard",
                                    jsFileLocation: "js/revolution-slider/js/",
                                    sliderLayout: "fullscreen",
                                    dottedOverlay: "none",
                                    delay: 9000,
                                    navigation: {
                                        keyboardNavigation: "on",
                                        keyboard_direction: "horizontal",
                                        mouseScrollNavigation: "off",
                                        onHoverStop: "on",
                                        touch: {
                                            touchenabled: "on",
                                            swipe_threshold: 75,
                                            swipe_min_touches: 1,
                                            swipe_direction: "horizontal",
                                            drag_block_vertical: false
                                        },
                                        arrows: {
                                            style: "zeus",
                                            enable: true,
                                            hide_onmobile: true,
                                            hide_under: 600,
                                            hide_onleave: true,
                                            hide_delay: 200,
                                            hide_delay_mobile: 1200,
                                            tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                                            left: {
                                                h_align: "left",
                                                v_align: "center",
                                                h_offset: 30,
                                                v_offset: 0
                                            },
                                            right: {
                                                h_align: "right",
                                                v_align: "center",
                                                h_offset: 30,
                                                v_offset: 0
                                            }
                                        },
                                        bullets: {
                                            enable: true,
                                            hide_onmobile: true,
                                            hide_under: 600,
                                            style: "metis",
                                            hide_onleave: true,
                                            hide_delay: 200,
                                            hide_delay_mobile: 1200,
                                            direction: "horizontal",
                                            h_align: "center",
                                            v_align: "bottom",
                                            h_offset: 0,
                                            v_offset: 30,
                                            space: 5,
                                            tmp: '<span class="tp-bullet-img-wrap"><span class="tp-bullet-image"></span></span>'
                                        }
                                    },
                                    viewPort: {
                                        enable: true,
                                        outof: "pause",
                                        visible_area: "80%"
                                    },
                                    responsiveLevels: [1240, 1024, 778, 480],
                                    gridwidth: [1240, 1024, 778, 480],
                                    gridheight: [600, 550, 500, 450],
                                    lazyType: "none",
                                    parallax: {
                                        type: "scroll",
                                        origo: "enterpoint",
                                        speed: 400,
                                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50],
                                    },
                                    shadow: 0,
                                    spinner: "off",
                                    stopLoop: "off",
                                    stopAfterLoops: -1,
                                    stopAtSlide: -1,
                                    shuffle: "off",
                                    autoHeight: "off",
                                    hideThumbsOnMobile: "off",
                                    hideSliderAtLimit: 0,
                                    hideCaptionAtLimit: 0,
                                    hideAllCaptionAtLilmit: 0,
                                    debugMode: false,
                                    fallbacks: {
                                        simplifyAll: "off",
                                        nextSlideOnWindowFocus: "off",
                                        disableFocusListener: false,
                                    }
                                });
                            }
                        }); /*ready*/
                    </script>
                    <!-- END REVOLUTION SLIDER -->
                </div>
            </section>

            <!-- Section: home-boxes -->
            <section class="" data-bg-img="{{ asset('images/pattern/p6.png') }}">
                <div class="container pt-0 pb-0">
                    <div class="section-content">
                        <div class="row" data-margin-top="-100px">
                            <div class="col-sm-12 col-md-4">
                                <div class="post icon-box p-30 iconbox-theme-colored bg-white border-1px text-center">
                                    <div class="entry-content  bg-theme-colored2-transparent-1">
                                        <a class="icon" href="professional-training-and-certification">
                                            <i class="fa fa-graduation-cap font-48 font-weight-100"></i>
                                        </a>
                                        <h3 class="mt-0">Professional Training and Certification</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="post icon-box p-30 iconbox-theme-colored bg-white border-1px text-center">
                                    <div class="entry-content  bg-theme-colored2-transparent-1">
                                        <a class="icon" href="professional-development-programs">
                                            <i class="fa fa-level-up font-48 font-weight-100"></i>
                                        </a>
                                        <h3 class="mt-0">Professional develop <br> ment programs</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="post icon-box p-30 iconbox-theme-colored bg-white border-1px text-center">
                                    <div class="entry-content  bg-theme-colored2-transparent-1">
                                        <a class="icon" href="training-services-offered">
                                            <i class="fa fa-paper-plane font-48 font-weight-100"></i>
                                        </a>
                                        <h3 class="mt-0">Training Service Offered</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3"></div>
                        <div class="col-sm-12 col-md-3">
                            <div class="post icon-box p-30 iconbox-theme-colored bg-white border-1px text-center">
                                <div class="entry-content  bg-theme-colored2-transparent-1">
                                    <a class="icon" href="management-system-certification">
                                        <i class="fa fa-list font-48 font-weight-100"></i>
                                    </a>
                                    <h3 class="mt-0">Management System Certification</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <div class="post icon-box p-30 iconbox-theme-colored bg-white border-1px text-center">
                                <div class="entry-content  bg-theme-colored2-transparent-1">
                                    <a class="icon" href="integrated-management-system">
                                        <i class="fa fa-assistive-listening-systems font-48 font-weight-100"></i>
                                    </a>
                                    <h3 class="mt-0">Integrated Management Systems</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: about -->
            <section class="">
                <div class="container pb-0">
                    <div class="row">
                        <div class="col-md-7">
                            <h3 class="text-theme-colored2 mt-0 mt-sm-30 mb-0">Welcome To ANS</h3>
                            <h2 class="text-theme-colored mt-0">DELIVERING EXCELLENCE THROUGH INTERNATIONAL
                                CERTIFICATIONS & TRAININGS!</h2>
                            <p class="font-weight-600">ANS is an international institution providing Auditing,
                                Certification and Training services of International repute on Management Systems &
                                Standards Worldwide. The prime mission of ANS is to provide transparent, Impartial and
                                Value Added training & certification services to help its customers achieving
                                qualitative business goals with trusted assurance seal of ANS.</p>
                            <div class="row mb-sm-30">
                                <div class="col-sm-6 col-md-6">
                                    <div class="icon-box">
                                        <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">
                                            <i class="pe-7s-scissors text-white"></i>
                                        </a>
                                        <div class="ml-70 ml-sm-0">
                                            <h4 class="mt-10">Certified Company</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="icon-box">
                                        <a class="icon bg-theme-colored2 icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">
                                            <i class="pe-7s-pen text-white"></i>
                                        </a>
                                        <div class="ml-70 ml-sm-0">
                                            <h4 class="mt-10">Innovative Works</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="icon-box">
                                        <a class="icon bg-theme-colored2 icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">
                                            <i class="pe-7s-tools text-white"></i>
                                        </a>
                                        <div class="ml-70 ml-sm-0">
                                            <h4 class="mt-10">Business Solutions</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="icon-box">
                                        <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">
                                            <i class="pe-7s-vector text-white"></i>
                                        </a>
                                        <div class="ml-70 ml-sm-0">
                                            <h4 class="mt-10">Client Management</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <img src="images/about/a4.png" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Services -->
            <section class="bg-silver-light">
                <div class="container pb-20">
                    <div class="section-title text-center">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h2 class="title text-uppercase line-bottom-double-line-centered">Our <span class="text-theme-colored2">Services</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="section-content text-center">
                        <div class="row">
                            <div class="col-md-12">

                                <!-- Portfolio Gallery Grid -->
                                <div id="grid-1" class="gallery-isotope grid-3 gutter-20 clearfix">
                                    <!-- Portfolio Item Start -->
                                    @foreach ($certData as $data)
                                    <div class="gallery-item mechanical">
                                        <div class="project mb-30">
                                            <div class="thumb">
                                                <img class="img-fullwidth" style="height: 250px; width: 250px;" src="{{ str_replace('/c_fit,h_150,w_150', '', $data->img); }}" alt="">
                                                <div class="hover-link">
                                                    <a href="/sa/{{ $data->name }}"><i class="fa fa-bar-chart"></i></a>
                                                </div>
                                            </div>
                                            <h3 class="text-theme-colored">{{ $data->cer_name }}</h3>
                                            {{-- <p>{{ htmlspecialchars(trim(strip_tags($data->description))) }}</p> --}}
                                            <p>{!! substr(str_replace('$nbsp;', ' ', $data->description),0,100) !!}</p>
                                            <a href="/sa/{{ $data->name }}" target="_blank" class="btn btn-sm btn-theme-colored text-white">Learn more</a>
                                        </div>
                                    </div>
                                    <!-- Portfolio Item End -->
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- end main-content -->
        </div>

        <!-- Footer -->
        @include('sa.include.footer')
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>



    </div>
    <!-- end wrapper -->

    @include('sa.include.script2')

</body>
<script>
    // $("#lab-slide-bottom-popup").modal('show');

    const closeCookie = () => {
        $("#lab-slide-bottom-popup").modal('hide');
    }

    const acceptCookies = () => {
        const cookieName = localStorage.getItem('ANS_COOKIE')
        if (cookieName == null) {
            localStorage.setItem('ANS_COOKIE', '1')
            $("#lab-slide-bottom-popup").modal('hide');
        }
    }


    $(document).ready(function() {
        const cookieName = localStorage.getItem('ANS_COOKIE')
        if (cookieName) {
            acceptCookies()
        } else {
            $("#lab-slide-bottom-popup").modal('show');
        }
    });
</script>

</html>