@extends('layouts.main')

<head>

<title>Phoenix - Purchasing Membership</title>

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
                                    <div class="col-md-12 col-xs-12">
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

<!-- PURCHASING MEMBERSHIP SECTION BEGIN -->
<section class="purchasing_membership_txt">
  <div class="container">
    <div class="row">
      @foreach($packages as $package)
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="purchasing_membership_txt1">
          <h4>{{$package->package_name}}</h4>
          <span>${{$package->price}}</span>
          <p>{{$package->title}}</p>
          </div>
          <div class="purchasing_membership_txt1a">
          <a href="javascript:void(0)">{{$package->time_period}}</a>
        </div>
        <div class="purchasing_membership_txt1c">
          <?= html_entity_decode($package->description) ?>
          <a href="#">Selected Plan</a>
        </div>
      </div>
      @endforeach
       <!-- <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="purchasing_membership_txt1">
          <h4>Premium Plan</h4>
          <span>$60</span>
          <p>For fitness</p>
          </div>
          <div class="purchasing_membership_txt1a">
          <a href="#">Per Month</a>
        </div>
        <div class="purchasing_membership_txt1c">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <ul>
            <li><i class="fa fa-check" aria-hidden="true"></i> Contrary to popular</li>
            <li><i class="fa fa-check" aria-hidden="true"></i> Lorem Ipsum is not simply</li>
            <li><i class="fa fa-check" aria-hidden="true"></i> Random text it has roots</li>
            <li><i class="fa fa-check" aria-hidden="true"></i> Piece of classical literature</li>
          </ul>
          <a href="#">Selected Plan</a>
        </div>
      </div> -->
        <!-- <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="purchasing_membership_txt1">
          <h4>Ultimate Plan</h4>
          <span>$80</span>
          <p>For fitness</p>
          </div>
          <div class="purchasing_membership_txt1a">
          <a href="#">Per Month</a>
        </div>
        <div class="purchasing_membership_txt1c">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <ul>
            <li><i class="fa fa-check" aria-hidden="true"></i> Contrary to popular</li>
            <li><i class="fa fa-check" aria-hidden="true"></i> Lorem Ipsum is not simply</li>
            <li><i class="fa fa-check" aria-hidden="true"></i> Random text it has roots</li>
            <li><i class="fa fa-check" aria-hidden="true"></i> Piece of classical literature</li>
          </ul>
          <a href="#">Selected Plan</a>
        </div>
      </div> -->
    </div>
  </div>
</section>
<!-- PURCHASING MEMBERSHIP SECTION END -->

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