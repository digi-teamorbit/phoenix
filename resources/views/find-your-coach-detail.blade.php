@extends('layouts.main')

<head>

<title>Phoenix - Find Your Coach Detail</title>

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

<!-- FIND COACH SECTION BEGIN -->
<section class="find_coach_sec">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-5 col-xs-12">
      <div class="main_borderr">
        <div class="find_coach_sec1">
          <img src="{{asset($coach_detail->image)}}" alt="image" class="img-responsive">
        </div>
         <div class="find_coach_sec1">
         <h4>{{$coach_detail->name}}</h4>
         <p>{{$coach_detail->title}}</p>
         </div>
         <div class="find_coach_sec1b">
         <ul>
           <li><i class="fa fa-phone" aria-hidden="true"></i> {{$coach_detail->phone}}</li>
         </ul>
         </div>
         <div class="find_coach_sec1ba">
         <ul>
          <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(1960) }}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(682) }}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
             <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(1962) }}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(1961) }}" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
         </ul>
         </div>
         <div class="find_coach_sec1baff">
          <?= html_entity_decode($coach_detail->short_detail) ?>
           <a href="{{route('contact_us')}}"><i class="fa fa-comments" aria-hidden="true"></i> Chat Now</a>
         </div>
      </div>
      </div>
      <div class="col-md-7 col-sm-7 col-xs-12">
        <div class="find_coach_sec1ba_new">
          <?= html_entity_decode($coach_detail->long_detail) ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- FIND COACH SECTION END -->

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