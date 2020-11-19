<!-- FOOTER SECTION BEGIN -->
<footer class="footer_sec_txt">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="footer_sec_txt1">
          <h4>Contact</h4>
          <ul>
            <li><a href="javascript:void(0)"><i class="fa fa-map-marker" aria-hidden="true"></i> {{App\Http\Traits\HelperTrait::returnFlag(519) }}</span></a></li>
            <li><a href="mailto:{{App\Http\Traits\HelperTrait::returnFlag(218) }}"><i class="fa fa-envelope" aria-hidden="true"></i> {{App\Http\Traits\HelperTrait::returnFlag(218) }}</a></li>
            <li><a href="tel:{{App\Http\Traits\HelperTrait::returnFlag(59) }}"><i class="fa fa-phone" aria-hidden="true"></i>{{App\Http\Traits\HelperTrait::returnFlag(59) }}</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-2 col-sm-2 col-xs-12">
        <div class="footer_sec_txt1a">
        <h4>Quick Link</h4>
        <ul>
          <li><a href="#">Lorem Ipsum</a></li>
          <li><a href="#">Dolor Sit Amet</a></li>
          <li><a href="#">Adipising elit</a></li>
          <li><a href="#">Minim Veniam</a></li>
          <li><a href="#">Quis Nostrud</a></li>
        </ul>
        </div>
      </div>
      <div class="col-md-2 col-sm-2 col-xs-12">
         <div class="footer_sec_txt1a">
        <h4>Services</h4>
        <ul>
          <li><a href="#">Lorem Ipsum</a></li>
          <li><a href="#">Dolor Sit Amet</a></li>
          <li><a href="#">Adipising elit</a></li>
          <li><a href="#">Minim Veniam</a></li>
          <li><a href="#">Quis Nostrud</a></li>
        </ul>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="footer_sec_txt1avc">
          <h4>Newsletter</h4>
          <form action="{{route('newsletterSubmit')}}" method="post">
            @csrf
            <input type="hidden" name="section" value="Newsletter">
          <input name="email" type="text" placeholder="Enter Your Email Address" required="">
          <!-- <a href="#">Subscribe</a> -->
          <!-- <input class="insub" type="submit" value="Subscribe"> -->
          <button type="submit" class="newsltr-inpt">Subscribe</button>
          </form>
        </div>
         <div class="footer_sec_txt1abb">
         <h4>Follow Us</h4>
         <ul>
           <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(1960) }}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(682) }}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
             <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(1962) }}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(1961) }}" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
         </ul>
         </div>
      </div>
    </div>
  </div>
</footer>
<!-- FOOTER SECTION END -->

<!-- COPY RIGHT SECTION BEGIN -->
<section class="copy_right_sec">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="copy_right_sec1">
          <p>{{App\Http\Traits\HelperTrait::returnFlag(499) }}</p>
        </div>
      </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="copy_right_sec1a">
          <ul>
            <li><a href="{{route('terms_and_condition')}}">Terms & Condition</a></li>
            <li><span>|</span></li>
            <li><a href="{{route('privacy_policy')}}">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- COPY RIGHT SECTION END -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="sign_in">
            <h4>Log In</h4>
            <input type="text" placeholder="Email Address">
            <input type="text" placeholder="Password">
            <a href="#">Log In</a>
            <p>Lorem Ipsum is simply dummy text of the more then the printing and typesetting industry.</p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="sign_up">
            <h4>Sign Up</h4>
            <input type="text" placeholder="Email Address">
            <input type="text" placeholder="Password">
            <input type="text" placeholder="Re-Enter Password">
            <a href="#">Create an Account</a>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->


<style type="text/css">

.newsltr-inpt{

        border: 0;
    text-align: center;
    text-decoration: none;
    width: 29%;
    border-radius: 25px;
    outline: none;
    background: #f8ad57;
    font-weight: 500;
    font-size: 15px;
    color: #fff !important;
    transition: 0.6s all ease-in-out;
    font-family: 'Poppins', sans-serif;
    margin-left: -116px;
    display: inline-block;
    height: inherit;
    padding: 13px 0;
    position: absolute;
    right: 0;
    }

    .newsltr-inpt:hover, .newsltr-inpt:focus {
    background-color: #000;
    color: #fff !important;
    text-decoration: none;
}

</style>

