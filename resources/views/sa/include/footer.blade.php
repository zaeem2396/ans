<footer id="footer" class="footer" data-bg-img="images/footer-bg.png" data-bg-color="#152029">
  <div class="container p-50" style="display: none;">
    <div class="row">
      <div class="col-md-3 mb-5">
        <i class="fa fa-circle iso-footer-link mr-5"></i><a class="iso-footer-link" href="/sa/iso-certification-in-dammam">ISO certification in Dammam Saudi Arabia</a>
      </div>
      <div class="col-md-3 mb-5">
        <i class="fa fa-circle iso-footer-link mr-5"></i><a class="iso-footer-link" href="/sa/iso-certification-in-makkah">ISO certification in Makkah Saudi Arabia</a>
      </div>
      <div class="col-md-3 mb-5">
        <i class="fa fa-circle iso-footer-link mr-5"></i><a class="iso-footer-link" href="/sa/iso-certification-in-jubail">ISO certification in Jubail Saudi Arabia</a>
      </div>
      <div class="col-md-3 mb-5">
        <i class="fa fa-circle iso-footer-link mr-5"></i><a class="iso-footer-link" href="/sa/iso-certification-in-jeddah">ISO certification in Jeddah Saudi Arabia</a>
      </div>
    </div>
    <div class="row mt-20">
      <div class="col-md-3 mb-5">
        <i class="fa fa-circle iso-footer-link mr-5"></i><a class="iso-footer-link" href="/sa/iso-certification-in-buraydah">ISO certification in Buraydah Saudi Arabia</a>
      </div>
      <div class="col-md-3 mb-5">
        <i class="fa fa-circle iso-footer-link mr-5"></i><a class="iso-footer-link" href="/sa/iso-certification-in-hofuf">ISO certification in Hofuf Saudi Arabia</a>
      </div>
      <div class="col-md-3 mb-5">
        <i class="fa fa-circle iso-footer-link mr-5"></i><a class="iso-footer-link" href="/sa/iso-certification-in-medina">ISO certification in Medina Saudi Arabia</a>
      </div>
      <div class="col-md-3 mb-5">
        <i class="fa fa-circle iso-footer-link mr-5"></i><a class="iso-footer-link" href="/sa/iso-certification-in-yanbu">ISO certification in Yanbu Saudi Arabia</a>
      </div>
    </div>
  </div>
  <div class="container p-50">
    <h3 class="text-center" style="color: #fff;">Quick Links</h3>
    <div class="row">
      @foreach ($certData as $item)
        <div class="col-md-3 mb-5">
          <i class="fa fa-circle iso-footer-link mr-5"></i><a class="iso-footer-link" href="/sa/{{ $item->name }}">{{ strtoupper($item->name) }}</a>
        </div>
      @endforeach
    </div>
  </div>
  <div class="container pt-70 pb-40">
    <div class="row border-bottom">
      <div class="col-sm-6 col-md-4">
        <div class="widget dark">
          <h3 style="color: #fff;">Head Office</h3>
          <p>1st floor, Jairaj Building, Opposite Income Tax, Bandra Kurla Complex, Bandra (E), Mumbai- 400 050.</p>
          <ul class="list-inline mt-5">
            <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored2 mr-5"></i> <a class="text-gray" href="https://wa.me/+966567383361">+966 56 738 3361</a> </li>
            <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored2 mr-5"></i> <a class="text-gray" href="mailto:operationsmanager@anssystemcertification.com">operationsmanager@anssystemcertification.com</a> </li>
          </ul>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="widget dark">
          <h3 style="color: #fff;">Branch Office</h3>
          <p>Prince Abdulaziz Ibn Mussaed Ibn Jalawi, Al Murabba Dist., Postal Code-12613, Riyadh, Kingdom of Saudi Arabia</p>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="widget dark">
          <h4 class="widget-title">Useful Links</h4>
          <ul class="list angle-double-right list-border">
            <li><a href="{{ url('/sa/Quality-Policy') }}">Quality Policy</a></li>
            <li><a href="{{ url('/sa/Check-Status') }}">Certificate Verification</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom bg-theme-colored-transparent-5">
    <div class="container pt-20 pb-20">
      <div class="row">
        <div class="col-md-12">
          <p class="font-11 text-black-777 m-0 text-center">Copyright &copy;{{date('Y')}} ANS. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </div>
</footer>