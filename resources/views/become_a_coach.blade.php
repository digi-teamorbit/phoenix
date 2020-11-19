@extends('layouts.main')

<head>

<title>Phoenix - Become A Coach</title>

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

<!-- BECOME A COACH SECTION BEGIN -->
<section class="become-coach">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="become-Img wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="1.4s">
          <img src="{{asset($cms_coach1->image)}}" class="img-responsive" alt="img">
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="become-text">
        <h3 class="wow fadeInRight" data-wow-delay="0.4s" data-wow-duration="1.4s">{{$cms_coach1->name}}</h3>
        <?= html_entity_decode($cms_coach1->content) ?>
        </div>
      </div>
    </div>
    <div class="become-text wow zoomIn" data-wow-delay="0.7s" data-wow-duration="1.7s">
      <?= html_entity_decode($cms_coach2->content) ?>
      <div class="become-btn wow zoomIn" data-wow-delay="0.9s" data-wow-duration="1.9s">
          <a href="{{route('purchasing_membership')}}">Purchasing Membership</a>
    </div></div>

  </div>
</section>
<!-- BECOME A COACH SECTION END -->

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