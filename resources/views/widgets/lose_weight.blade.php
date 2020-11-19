<?php 

$cms_home1 = DB::table('pages')->where('id', 1)->first();
$cms_home2 = DB::table('pages')->where('id', 2)->first();
$cms_home3 = DB::table('pages')->where('id', 3)->first();
$cms_home4 = DB::table('pages')->where('id', 4)->first();

         ?>
<!-- LOSE WEIGHT SECTION BEGIN -->
<section class="lose_weight_sec_txt">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="lose_weight_sec_txt2">
          <h2 class="wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="1.4s">{{$cms_home1->name}}</h2>
          <?= html_entity_decode($cms_home1->content) ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12 wow zoomIn" data-wow-delay="0.4s" data-wow-duration="1.4s">
        <div class="lose_weight_sec_txt2a">
          <img src="{{asset($cms_home2->image)}}" alt="image" class="img-responsive">
        </div>
         <div class="lose_weight_sec_txt2b">
         <a href="#"><img src="{{asset('images/lose1a.png')}}" alt="image" class="img-responsive"></a>
         </div>
         <div class="lose_weight_sec_txt2c">
           <h4>{{$cms_home2->name}}</h4>
         </div>
      </div>
       <div class="col-md-4 col-sm-4 col-xs-12 wow zoomIn" data-wow-delay="0.6s" data-wow-duration="1.6s">
        <div class="lose_weight_sec_txt2a">
          <img src="{{asset($cms_home3->image)}}" alt="image" class="img-responsive">
        </div>
         <div class="lose_weight_sec_txt2b">
         <a href="#"><img src="{{asset('images/lose2a.png')}}" alt="image" class="img-responsive"></a>
         </div>
         <div class="lose_weight_sec_txt2c">
           <h4>{{$cms_home3->name}}</h4>
         </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 wow zoomIn" data-wow-delay="0.8s" data-wow-duration="1.8s">
        <div class="lose_weight_sec_txt2a">
          <img src="{{asset($cms_home4->image)}}" alt="image" class="img-responsive">
        </div>
         <div class="lose_weight_sec_txt2b">
         <a href="#"><img src="{{asset('images/lose3a.png')}}" alt="image" class="img-responsive"></a>
         </div>
         <div class="lose_weight_sec_txt2c">
           <h4>{{$cms_home4->name}}</h4>
         </div>
      </div>
    </div>
  </div>
</section>
<!-- LOSE WEIGHT SECTION END -->