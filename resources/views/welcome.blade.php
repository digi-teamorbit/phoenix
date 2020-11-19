@extends('layouts.main')

<head>

<title>Phoenix - Home</title>

</head>


@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

<!-- BANNER SECTION BEGIN -->
<section class="main-slider">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <?php $counter=0; ?>
              @foreach ($banner as $key=>$value)
                <div class="item {{$counter == 0 ? 'active' :''}}">
                    <img src="{{asset($value->image)}}" class="img-responsive" alt="main-slider-bg_01">
                    <div class="slider-caption">
                        <div class="slider-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7 col-xs-12">
                                    <div class="slide_Sec_txt">
                                        <h3 class="wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="1.4s">{{$value->title}}</h3>
                                        <?= html_entity_decode($value->description) ?>
                                        <form action="{{route('find_your_coach')}}">
                                        <input name="q" type="text" placeholder="Enter Coach Name" class="wow zoomIn" data-wow-delay="0.9s" data-wow-duration="1.9s">
                                        <button class="wow zoomIn" data-wow-delay="0.9s" data-wow-duration="1.9s">Find Your Coach</button>
                                        <!-- <a href="#" class="wow zoomIn" data-wow-delay="0.9s" data-wow-duration="1.9s">Find Your Coach</a> -->
                                        </form>
                                        <!-- <a href="product-detail.html" class="primary-btn primary-bg mb-1">Shop Now <i class="fa fa-long-arrow-right"></i></a> -->
                                        <br>
                                    </div>
                                    </div>
                                </div>
                                <div class="watch_buttn wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="1.7s">
                                 <a data-fancybox="gallery" href="{{$cms_home9->url}}">
                                  <img src="{{asset('images/play_button.png')}}" alt="image" class="img-responsive"></a>
                                  <?= html_entity_decode($cms_home9->content) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $counter++; ?>
                @endforeach
                <!-- <div class="item active">
                    <img src="{{asset('images/banner.png')}}" class="img-responsive" alt="main-slider-bg_01">
                    <div class="slider-caption">
                        <div class="slider-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7 col-xs-12">
                                    <div class="slide_Sec_txt">
                                        <h3 class="wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="1.4s">Lose Weight, Look Great</h3>
                                        <h1 class="wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="1.6s">Get in the Best  <span> Shape of Your Life</span></h1>
                                        <p class="wow fadeInLeft" data-wow-delay="0.8s" data-wow-duration="1.8s">Lorem ipsum dolor sit amet,  adipiscing elit,  sed  do tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <input type="text" placeholder="Improve Nutrition" class="wow zoomIn" data-wow-delay="0.9s" data-wow-duration="1.9s">
                                        <a href="#" class="wow zoomIn" data-wow-delay="0.9s" data-wow-duration="1.9s">Find Your Coach</a>
                                         <a href="product-detail.html" class="primary-btn primary-bg mb-1">Shop Now <i class="fa fa-long-arrow-right"></i></a> 
                                        <br>
                                    </div>
                                    </div>
                                </div>
                                <div class="watch_buttn wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="1.7s">
                                 <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=apbSsILLh28">
                                  <img src="{{asset('images/play_button.png')}}" alt="image" class="img-responsive"></a>
                                  <h4>Watch Our <br> Presentation</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
</section>
<!-- BANNER SECTION END -->

<!-- LOSE WEIGHT SECTION BEGIN -->
@include('widgets.lose_weight')
<!-- LOSE WEIGHT SECTION END -->

<!-- WEIGHT LOSS SECTION BEGIN -->
<section class="weight_loss_seec_txt" style="
    background: url({{asset($cms_home5->image)}});background-repeat: no-repeat;
    background-size: cover;
    background-position: center;">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="weight_loss_seec_txt1">
          <h2 class="wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="1.4s">{{$cms_home5->name}}</h2>
          <?= html_entity_decode($cms_home5->content) ?>
        </div>
      </div>
    </div>
    <form action="{{route('weightlosstipsSubmit')}}" method="post">
      @csrf
      <input type="hidden" name="section" value="Weight Loss Tips">
    <div class="row">
      <div class="col-md-1 col-sm-1 col-xs-12">
      </div>
      <div class="col-md-10 col-sm-10 col-xs-12">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="weight_loss_seec_txt13 wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="1.4s">
              <input name="name" type="text" placeholder="Enter Your Name" class="@error('name') is-danger @enderror" required="">
              @error('name')
               <p class="help is-danger" style="color: red;">{{ $errors->first('name') }}</p>
              @enderror
            </div>
          </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="weight_loss_seec_txt13 wow fadeInRight" data-wow-delay="0.6s" data-wow-duration="1.6s">
              <input class="@error('email') is-danger @enderror" name="email" type="email" placeholder="Enter Your Email Address" required="">
              @error('email')
               <p class="help is-danger" style="color: red;">{{ $errors->first('email') }}</p>
              @enderror
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-1 col-sm-1 col-xs-12">
      </div>
    </div>
    <div class="weight_loss_seec_txt13a">
      <button class="wow zoomIn" data-wow-delay="0.9s" data-wow-duration="1.9s">Give Me Instant Access</button>
      <!-- <a href="#" class="wow zoomIn" data-wow-delay="0.9s" data-wow-duration="1.9s">Give Me Instant Access</a> -->
    </div>
    </form>
  </div>
</section>
<!-- WEIGHT LOSS SECTION END -->

<!-- LATEST VIDEO SECTION BEGIN -->
<section class="latest_video_sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="latest_video_sec1">
          <h2 class="wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="1.4s">{{$cms_home6->name}}</h2>
          <?= html_entity_decode($cms_home6->content) ?>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach($videos as $video)
      <div class="col-md-4 col-sm-4 col-xs-12 wow zoomIn" data-wow-delay="0.4s" data-wow-duration="1.4s">
       <div id="hov">
          <div class="hover-box">
          <img src="{{asset($video->image)}}" alt="image" class="img-responsive">
            <div class="overlay"></div>
             <h3>{{$video->video_title}}</h3>
         </div>
      </div>
      <div class="pl_img">
      <a data-fancybox="gallery" href="{{$video->video->url}}"><img src="{{asset('images/pl.png')}}" alt="image" class="img-responsive"></a>
      </div>
      </div>
      @endforeach
       <!-- <div class="col-md-4 col-sm-4 col-xs-12 wow zoomIn" data-wow-delay="0.6s" data-wow-duration="1.6s">
       <div id="hov">
          <div class="hover-box">
          <img src="{{asset('images/l2.png')}}" alt="image" class="img-responsive">
            <div class="overlay"></div>
             <h3>Lorem Ipsum Dolor Sit Adipiscing Elit </h3>
         </div>
      </div>
       <div class="pl_img">
       <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=apbSsILLh28"><img src="{{asset('images/pl.png')}}" alt="image" class="img-responsive"></a>
      </div>
      </div> -->
       <!-- <div class="col-md-4 col-sm-4 col-xs-12 wow zoomIn" data-wow-delay="0.8s" data-wow-duration="1.8s">
       <div id="hov">
          <div class="hover-box">
          <img src="{{asset('images/l3.png')}}" alt="image" class="img-responsive">
            <div class="overlay"></div>
             <h3 class="wow fadeInRight" data-wow-delay="0.9s" data-wow-duration="1.9s">Lorem Ipsum Dolor Sit Adipiscing Elit </h3>
         </div>
      </div>
       <div class="pl_img">
        <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=apbSsILLh28"><img src="{{asset('images/pl.png')}}" alt="image" class="img-responsive"></a>
      </div>
      </div> -->
    </div>
    <div>
    <div class="latest_video_sec124">
      <a href="{{route('videos')}}">View All Video</a>
    </div>
    </div>
  </div>
</section>
<!-- LATEST VIDEO SECTION END -->

<!-- ABOUT US SECTION BEGIN -->
<section class="about_us_txt" style="
    background: url({{asset($cms_home7->image)}});
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="about_us_txt1">
          <h2 class="wow zoomIn" data-wow-delay="0.2s" data-wow-duration="1.2s">{{$cms_home7->name}}</h2>
          <?= html_entity_decode($cms_home7->content) ?>
          <a href="{{route('aboutUs')}}" class="wow zoomOut" data-wow-delay="0.8s" data-wow-duration="1.8s">Read More</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ABOUT US SECTION END -->

<!-- WATCH OUR SECTION BEGIN -->
@include('widgets.watch_video')
<!-- WATCH OUR SECTION END -->

<!-- RECENT POST SECTION BEGIN -->
<section class="recent_post_txt">
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="recent_post_txt1">
        <h2 class="wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="1.4s">{{$cms_home8->name}}</h2>
        <?= html_entity_decode($cms_home8->content) ?>
      </div>
    </div>
  </div>
    <div class="row">
      <div class="col-md-5 col-sm-5 col-xs-12 margin_zero wow zoomIn" data-wow-delay="0.4s" data-wow-duration="1.4s">
      <a href="#">
        <div id="hov" class="hov1">
          <div class="hover-box">
          <img src="{{asset('images/r1.png')}}" alt="image" class="img-responsive">
            <div class="overlay"></div>
            <h3><span>Fitness</span> Video Name Here</h3>
         </div>
      </div>
      </a>
      </div>
       <div class="col-md-7 col-sm-7 col-xs-12 margin_zero">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12 margin_zero wow zoomIn" data-wow-delay="0.5s" data-wow-duration="1.5s">
          <a href="#">
            <div id="hov">
          <div class="hover-box">
          <img src="{{asset('images/r2.png')}}" alt="image" class="img-responsive">
            <div class="overlay"></div>
            <h3><span>Fitness</span> Video Name Here</h3>
         </div>
          </div>
          </a>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 margin_zero wow zoomIn" data-wow-delay="0.7s" data-wow-duration="1.7s">
          <a href="#">
             <div id="hov">
          <div class="hover-box">
          <img src="{{asset('images/r3.png')}}" alt="image" class="img-responsive">
            <div class="overlay"></div>
            <h3><span>Fitness</span> Video Name Here</h3>
            </div>
            </div>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12 margin_zero wow zoomIn" data-wow-delay="0.8s" data-wow-duration="1.8s">
            <div class="recent_post_txt12a">
            <a href="#">
               <div id="hov">
          <div class="hover-box">
          <img src="{{asset('images/r4.png')}}" alt="image" class="img-responsive">
            <div class="overlay"></div>
            <h3><span>Fitness</span> Video Name Here</h3>
          </div>
            </div>
            </a>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 margin_zero wow zoomIn" data-wow-delay="0.9s" data-wow-duration="1.9s">
            <div class="recent_post_txt12a">
            <a href="#">
               <div id="hov">
            <div class="hover-box">
            <img src="{{asset('images/r5.png')}}" alt="image" class="img-responsive">
            <div class="overlay"></div>
            <h3><span>Fitness</span> Video Name Here</h3>
            </div>
            </div>
            </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- RECENT POST SECTION END -->

<!-- FREE TRIAL SECTION BEGIN -->
@include('widgets.free_trial')
<!-- FREE TRIAL SECTION END -->

<!-- ============================================================== -->
<!-- BODY END HERE -->
<!-- ============================================================== -->

@endsection
@section('css')
<style>

.slide_Sec_txt button {
    border: 0;
    text-align: center;
    text-decoration: none;
    padding: 13px 23px 14px;
    margin: 0px auto 0 auto;
    border-radius: 25px;
    outline: none;
    background: #f8ad57;
    font-weight: 500;
    font-size: 15px;
    color: #fff;
    transition: 0.6s all ease-in-out;
    font-family: 'Poppins', sans-serif;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    margin-left: -5px;
}

.slide_Sec_txt button:hover, .slide_Sec_txt button:focus {
    color: #fff;
    text-decoration: none;
    background: #000;
}


.weight_loss_seec_txt13a button {
    border: 0;
    text-align: center;
    text-decoration: none;
    display: block;
    width: 29%;
    padding: 14px 0 14px;
    margin: 35px auto 0 auto;
    border-radius: 25px;
    outline: none;
    background: #f8ad57;
    font-weight: 500;
    font-size: 18px;
    color: #fff;
    transition: 0.6s all ease-in-out;
    font-family: 'Poppins', sans-serif;
}

.weight_loss_seec_txt13a button:hover, .weight_loss_seec_txt13a button:focus {
  text-decoration: none;
  color: #fff;
  background: #000;}

</style>
@endsection

@section('js')
<script type="text/javascript"></script>
@endsection