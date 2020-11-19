@extends('layouts.main')

<head>

<title>Phoenix - About Us</title>

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

<!-- LOSE WEIGHT SECTION BEGIN -->
@include('widgets.lose_weight')
<!-- LOSE WEIGHT SECTION END -->

<!-- ABOUT US SECTION BEGIN -->
<section class="about_us_txt">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="about_us_txt1">
          <h2 class="wow zoomIn" data-wow-delay="0.2s" data-wow-duration="1.2s">{{$cms_about->name}}</h2>
          <?= html_entity_decode($cms_about->content) ?>
          <!-- <a href="#" class="wow zoomOut" data-wow-delay="0.8s" data-wow-duration="1.8s">Read More</a> -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ABOUT US SECTION END -->

<!-- WATCH OUR SECTION BEGIN -->
@include('widgets.watch_video')
<!-- WATCH OUR SECTION END -->

<!-- FREE TRIAL SECTION BEGIN -->
@include('widgets.free_trial')
<!-- FREE TRIAL SECTION END -->

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