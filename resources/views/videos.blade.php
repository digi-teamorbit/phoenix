@extends('layouts.main')

<head>

<title>Phoenix - Videos</title>

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
                                        <h1>{{$inner_banner->title}}</h1>
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

<!-- LATEST VIDEO SECTION BEGIN -->
<section class="latest_video_sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="latest_video_sec1">
          <h2>{{$cms_video1->name}}</h2>
          <?= html_entity_decode($cms_video1->content) ?>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach ($videos as $video)
      <div class="col-md-4 col-sm-4 col-xs-12">
       <div id="hov">
          <div class="hover-box">
          <img src="{{asset($video->image)}}" alt="image" class="img-responsive">
            <div class="overlay"></div>
             <h3>{{$video->video_title}}</h3>
         </div>
      </div>
      <div class="pl_img">
      <a data-fancybox="gallery" href="{{$video->video_url}}"><img src="{{asset('images/pl.png')}}" alt="image" class="img-responsive"></a>
      </div>
      </div>
      @endforeach
       <!-- <div class="col-md-4 col-sm-4 col-xs-12">
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
       <!-- <div class="col-md-4 col-sm-4 col-xs-12">
       <div id="hov">
          <div class="hover-box">
          <img src="{{asset('images/l3.png')}}" alt="image" class="img-responsive">
            <div class="overlay"></div>
             <h3>Lorem Ipsum Dolor Sit Adipiscing Elit </h3>
         </div>
      </div>
       <div class="pl_img">
        <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=apbSsILLh28"><img src="{{asset('images/pl.png')}}" alt="image" class="img-responsive"></a>
      </div>
      </div> -->
    </div>
    <div>
    <div class="latest_video_sec124">
      <!-- <a href="#">View All Video</a> -->
    </div>
    </div>
  </div>
</section>
<!-- LATEST VIDEO SECTION END -->

<!-- RECENT POST SECTION BEGIN -->
<section class="recent_post_txt">
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="recent_post_txt1">
        <h2>{{$cms_video2->name}}</h2>
        <?= html_entity_decode($cms_video2->content) ?>
      </div>
    </div>
  </div>
    <div class="row">
      <div class="col-md-5 col-sm-5 col-xs-12 margin_zero">
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
          <div class="col-md-6 col-sm-6 col-xs-12 margin_zero">
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
          <div class="col-md-6 col-sm-6 col-xs-12 margin_zero">
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
          <div class="col-md-6 col-sm-6 col-xs-12 margin_zero">
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
          <div class="col-md-6 col-sm-6 col-xs-12 margin_zero">
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

<!-- ============================================================== -->
<!-- BODY END HERE -->
<!-- ============================================================== -->

@endsection
@section('css')
<style>

</style>
@endsection

@section('js')
<script type="text/javascript"></script>
@endsection