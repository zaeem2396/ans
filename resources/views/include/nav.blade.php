<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PKP5M5G2"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<header id="header" class="header modern-header modern-header-theme-colored">
    <div class="header-middle p-0 bg-lightest xs-text-center pb-30">
        <div class="container pt-20 pb-20">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <a href="/">
                        <img src="https://res.cloudinary.com/greyhat/image/upload/v1670244390/ans/logo_1_cos5ur.jpg" alt="" style="height: 60px;">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-9">
                    <div class="header-widget-contact-info-box">
                        <div class="media element contact-info">
                            <div class="media-left">
                                <a href="#">
                                    <i class="fa fa-envelope text-theme-colored font-icon sm-display-block"></i>
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="mailto:operationsmanager@anssystemcertification.com" class="">Mail Us Today
                                <h5 class="media-heading subtitle">operationsmanager@anssystemcertification.com</h5></a>
                            </div>
                        </div>
                        <div class="media element contact-info">
                            <div class="media-left">
                                <a href="#">
                                    <i class="fa fa-phone-square text-theme-colored font-icon sm-display-block"></i>
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="https://wa.me/+966567383361" class="">Call us for more details
                                <h5 class="media-heading subtitle">+966 56 738 3361</h5></a>
                            </div>
                        </div>
                        <div class="media element contact-info">
                            <div class="media-left">
                                <a href="#">
                                    <i class="fa fa-building-o text-theme-colored font-icon sm-display-block"></i>
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="#" class="title">Company Location</a>
                                <h5 class="media-heading subtitle">Mumbai</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav">
        <div class="header-nav-wrapper navbar-scrolltofixed">
            <div class="container">
                <nav id="menuzord" class="menuzord blue">
                    <ul class="menuzord-menu">
                        <li><a href="{{ url('/') }}">Home</a>
                        </li>
                        <li><a href="javascript:void(0)">About us</a>
                            <ul class="dropdown">
                                <li><a href="{{ url('Quality-Policy') }}">Quality policy</a>
                                <li><a href="{{ url('impartiality-policy') }}">Impartiality policy</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Service</a>
                            <ul class="dropdown">
                                @foreach ($certData as $item)
                                    <li>
                                        <a href="/{{ $item->name }}">{{ $item->cer_name }}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Customer</a>
                            <ul class="dropdown">
                                <li><a href="{{ 'Check-Status' }}">Certificate Verification</a></li>
                                <li><a href="{{ '/certification-mark-guidelines' }}">Certification Mark Guidelines</a>
                                <li><a href="{{ url('customer-feedback') }}">Customer Feedback</a>
                                <li><a href="{{ url('apply-for-certification') }}">Apply for Certification</a>
                                <li><a href="{{ url('apply-for-training') }}">Apply for Training</a>
                                <li><a href="{{ url('verify-training-certificate') }}">Verify Training Certificates</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Resources</a>
                            <ul class="dropdown">
                                <!-- <li><a href="{{ url('') }}">Certification process</a></li> -->
                                <li><a href="{{ url('Appeal-Handling-Process') }}">Appeal Handling Process</a>
                                <li><a href="{{ url('Complaint-Handling-Process') }}">Comaplaint Handling Process</a>
                                <!-- <li><a href="{{ url('') }}">News & Blogs</a> -->
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{ url('Contact') }}">Contact us</a></li>
                        <li><a href="javascript:void(0)">Languages <i class="fa fa-globe"></i></a>
                            <ul class="dropdown">
                                <li><a href="javascript:void(0)" onclick="translatePageTo('en')">English <img class="lang-flag" src="https://cdn.britannica.com/25/4825-004-F1975B92/Flag-United-Kingdom.jpg"></a></li>
                                <li><a href="javascript:void(0)" onclick="translatePageTo('ar')">Arabic <img class="lang-flag" src="https://cdn.britannica.com/79/5779-050-46C999AF/Flag-Saudi-Arabia.jpg"></a></li>
                                <li><a href="javascript:void(0)" onclick="translatePageTo('id')">Indonesian <img class="lang-flag" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/255px-Flag_of_Indonesia.svg.png"></a></li>
                                <li><a href="javascript:void(0)" onclick="translatePageTo('bn')">Bangali <img class="lang-flag" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Flag_of_Bangladesh.svg/2560px-Flag_of_Bangladesh.svg.png"></a></li>
                                <li><a href="javascript:void(0)" onclick="translatePageTo('zh-CN')">Chinese <img class="lang-flag" src="https://t3.ftcdn.net/jpg/05/09/75/06/360_F_509750646_dXGPtke91yl85iuv4hKUOIgH67e5iFCd.jpg"></a></li>
                                <li><a href="javascript:void(0)" onclick="translatePageTo('it')">Italian <img class="lang-flag" src="https://upload.wikimedia.org/wikipedia/en/thumb/0/03/Flag_of_Italy.svg/1200px-Flag_of_Italy.svg.png"></a></li>
                                <li><a href="javascript:void(0)" onclick="translatePageTo('ne')">Nepali <img class="lang-flag" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9b/Flag_of_Nepal.svg/1200px-Flag_of_Nepal.svg.png"></a></li>
                                <li><a href="javascript:void(0)" onclick="translatePageTo('ms')">Malaysian <img class="lang-flag" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/66/Flag_of_Malaysia.svg/1200px-Flag_of_Malaysia.svg.png"></a></li>
                                <li><a href="javascript:void(0)" onclick="translatePageTo('tr')">Turkish <img class="lang-flag" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/1200px-Flag_of_Turkey.svg.png"></a></li>
                                <li><a href="javascript:void(0)" onclick="translatePageTo('fil')">Philippines <img class="lang-flag" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/1280px-Flag_of_the_Philippines.svg.png"></a></li>
                                <li><a href="javascript:void(0)" onclick="translatePageTo('es')">Spanish <img class="lang-flag" src="https://upload.wikimedia.org/wikipedia/en/thumb/9/9a/Flag_of_Spain.svg/800px-Flag_of_Spain.svg.png"></a></li>
                                <li><a href="javascript:void(0)" onclick="translatePageTo('si')">Srilankan <img class="lang-flag" src="https://cdn.britannica.com/13/4413-004-3277D2EF/Flag-Sri-Lanka.jpg"></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
