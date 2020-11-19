<?php  

$cms=DB::table('pages')->where('id',9)->first();

?>

<!-- FREE TRIAL SECTION BEGIN -->
<section class="free_trial_txt">
  <div class="container"> 
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="free_trial_txt1">
          <h2 class="wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="1.4s">{{$cms->name}}</h2>
          <?= html_entity_decode($cms->content) ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-1 col-sm-1 col-xs-12">
      </div>
      <div class="col-md-10 col-sm-10 col-xs-12">
        <div class="free_trial_txt12 wow zoomIn" data-wow-delay="0.8s" data-wow-duration="1.8s">
          <form action="{{route('freetrialSubmit')}}" method="post">
            @csrf
            <input type="hidden" name="section" value="Free 14 Days Trial">
          <input name="email" type="email" placeholder="Email Address" class="@error('email') is-danger @enderror" required="">
          @error('email')
            <p class="help is-danger" style="color: red;">{{ $errors->first('email') }}</p>
          @enderror
          <button>Get Started</button>
          <!-- <a href="#">Get Started</a> -->
          </form>
        </div>
      </div>
      <div class="col-md-1 col-sm-1 col-xs-12">
      </div>
    </div>
  </div>
</section>
<!-- FREE TRIAL SECTION END -->


<style type="text/css">
  
  .free_trial_txt12 button {
    border: 0;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    width: 47%;
    padding: 18px 0 16px;
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

.free_trial_txt12 button:hover, .free_trial_txt12 button:focus {
    color: #fff;
    text-decoration: none;
    background: #000;
}

</style>