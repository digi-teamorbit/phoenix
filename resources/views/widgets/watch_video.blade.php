<?php

 $cms_home9 = DB::table('pages')->where('id', 22)->first();

?>


<!-- WATCH OUR SECTION BEGIN -->
<section class="watch_our_sec">
  <div class="container">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="watch_our_seca">
        <h2 class="wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="1.4s">{{$cms_home9->name}}</h2>
        <?= html_entity_decode($cms_home9->content) ?>
      </div>
    </div>
  </div>
    <div class="row">
      <div class="col-md-1 col-sm-1 col-xs-12">
      </div>
       <div class="col-md-10 col-sm-10 col-xs-12  wow zoomIn" data-wow-delay="0.8s" data-wow-duration="1.8s">
        <div class="watch_our_sec1">
          <img src="{{asset($cms_home9->image)}}" alt="image" class="img-responsive">
        </div>
        <div class="watch_our_sec1re">
         <a data-fancybox="gallery" href="{{$cms_home9->url}}"><img src="{{asset('images/new_play.png')}}" alt="image" class="img-responsive"></a>
        </div>
      </div>
       <div class="col-md-1 col-sm-1 col-xs-12">
      </div>
    </div>
  </div>
</section>
<!-- WATCH OUR SECTION END -->