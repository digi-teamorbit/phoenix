@extends('layouts.main')

<head>

<title>Phoenix - Contact Us</title>

</head>


@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

<!-- BANNER SECTION BEGIN -->
<section class="main-slider">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                    <img src="{{asset($inner_banner->image)}}" class="img-responsive" alt="main-slider-bg_01">
                    <div class="slider-caption">
                        <div class="slider-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7 col-xs-12">
                                    <div class="slide_Sec_txt slide_Sec_txt147">
                                        <h1 class="wow fadeInLeft" data-wow-delay="0.7s" data-wow-duration="1.7s">{{$inner_banner->title}}</h1>
                                        <br>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
</section>
<!-- BANNER SECTION END -->

<!-- CONTACT US SECTION BEGIN -->
<section class="contact_sec_txt"> 
  <div class="container">
    <div class="row">
      <div class="col-md-7 col-sm-7 col-xs-12">
        <div class="contact_sec_txt1">
          <h4 class="wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="1.5s">{{$cms_contact->name}}</h4>
          <?= html_entity_decode($cms_contact->content) ?>
        </div>
        <form method="post" action="{{route('contactUsSubmit')}}">
          @csrf

        <div class="contact_sec_txt1 wow zoomIn @error('name') is-danger @enderror" data-wow-delay="0.2s" data-wow-duration="1.2s">
        <input name="name" type="text" placeholder="Complete Name" required="">
        @error('name')
         <p class="help is-danger" style="color: red;">{{ $errors->first('name') }}</p>
        @enderror
        </div>

         <div class="contact_sec_txt1 wow zoomIn @error('email') is-danger @enderror" data-wow-delay="0.4s" data-wow-duration="1.4s">
        <input name="email" type="email" placeholder="Email Address" required="">
        @error('email')
         <p class="help is-danger" style="color: red;">{{ $errors->first('email') }}</p>
        @enderror
        </div>

         <div class="contact_sec_txt1 wow zoomIn @error('phone') is-danger @enderror" data-wow-delay="0.6s" data-wow-duration="1.6s">
        <input name="phone" type="number" placeholder="Phone No" required="">
        @error('phone')
         <p class="help is-danger" style="color: red;">{{ $errors->first('phone') }}</p>
        @enderror
        </div>

         <div class="contact_sec_txt1 wow zoomIn @error('message') is-danger @enderror" data-wow-delay="0.8s" data-wow-duration="1.8s">
        <textarea name="message" cols="4" rows="4" placeholder="Message" required=""></textarea>
        @error('message')
         <p class="help is-danger" style="color: red;">{{ $errors->first('message') }}</p>
        @enderror
        </div>

         <div class="contact_sec_txt1">
          <button class="wow fadeInLeft" data-wow-delay="0.9s" data-wow-duration="1.9s">Send Message</button>
        <!-- <a href="#" class="wow fadeInLeft" data-wow-delay="0.9s" data-wow-duration="1.9s">Send Message</a> -->
        </div>
        </form>
      </div>
       <div class="col-md-5 col-sm-5 col-xs-12">
         <div class="contact_sec_txt1">
          <h4 class="wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="1.7s">{{$cms_contact1->name}}</h4>
          <?= html_entity_decode($cms_contact1->content) ?>
        </div>
        <div class="contact_sec_txt1a wow zoomIn" data-wow-delay="0.4s" data-wow-duration="1.4s">
        <img src="{{asset('images/c1.png')}}" alt="image" class="img-responsive">
        <div class="contact_sec_txt1ab">
          <a href="mailto:{{App\Http\Traits\HelperTrait::returnFlag(218) }}"><span>Email Address</span> {{App\Http\Traits\HelperTrait::returnFlag(218) }}</a>
        </div>
        </div>
        <div class="contact_sec_txt1a wow zoomIn" data-wow-delay="0.6s" data-wow-duration="1.6s">
        <img src="{{asset('images/c2.png')}}" alt="image" class="img-responsive">
        <div class="contact_sec_txt1ab">
          <a href="tel:{{App\Http\Traits\HelperTrait::returnFlag(59) }}"><span>Phone Number</span> {{App\Http\Traits\HelperTrait::returnFlag(59) }}
           <!-- <br> + 123 - 456 - 789 -->
         </a>
        </div>
        </div>
         <div class="contact_sec_txt1a wow zoomIn" data-wow-delay="0.8s" data-wow-duration="1.8s">
        <img src="{{asset('images/c3.png')}}" alt="image" class="img-responsive">
        <div class="contact_sec_txt1ab">
          <a href="javascript:void(0)"><span>Address</span> {{App\Http\Traits\HelperTrait::returnFlag(519) }}</a>
        </div>
        </div>
        <div class="contact_sec_txt1ag wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="1.7s" >
        <ul>
          <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(682) }}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(1960) }}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <!-- <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(59) }}"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li> -->
          <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(1964) }}" target="_blank"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
        </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- CONTACT US SECTION END -->

<!-- MAP SECTION BEGIN -->
<section class="google_map wow zoomIn" data-wow-delay="0.7s" data-wow-duration="1.7s">
<div class="container">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
       <iframe src="{{App\Http\Traits\HelperTrait::returnFlag(1966) }}" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </div>
</div>
</section>
<!-- MAP SECTION END -->

<!-- ============================================================== -->
<!-- BODY END HERE -->
<!-- ============================================================== -->

@endsection
@section('css')
<style>

.contact_sec_txt1 button {
    display: block;
    border: 0;
    outline: none !important;
    text-align: center;
    text-decoration: none !important;
    padding: 12px 0;
    border-radius: 25px;
    background: #fba05d;
    color: #fff !important;
    font-weight: 500;
    font-size: 18px;
    transition: 0.6s all ease-in-out;
    font-family: 'Poppins', sans-serif;
    width: 100%;
}

.contact_sec_txt1 button:hover, .contact_sec_txt1 button:focus {
    background-color: #000;
    color: #fff !important;
    text-decoration: none;
}


/*INPUT TYPE NUMBER*/
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

</style>
@endsection

@section('js')
<script type="text/javascript"></script>
@endsection