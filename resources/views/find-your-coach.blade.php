@extends('layouts.main')

<head>

<title>Phoenix - Find Your Coach</title>

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
<section class="find_coach_sec_det">
  <div class="container">
    <div class="row">
    <div class="col-md-2 col-sm-2 col-sm-12">
    </div>
      <div class="col-md-8 col-sm-8 col-xs-12">
        <div class="find_coach_sec_det1">
          <form>
          <input type="text" name="q" placeholder="Enter Coach Name">
          <button>Find Your Trainer</button>
         <!-- <select>
           <option>Search Trainers...</option>
           <option>Search Trainers...</option>
         </select> -->
         <!-- <a href="#">Find Your Trainer</a> -->
         </form>
        </div>
      </div>
        <div class="col-md-2 col-sm-2 col-sm-12">
    </div>
    </div>
    <div class="row">
      @foreach($coaches as $coach)
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="find_coach_sec_det11">
          <img src="{{asset($coach->image)}}" alt="image" class="img-responsive">
        </div>
        <div class="box_shade_color">
        <div class="find_coach_sec_det11a">
          <a href="{{route('find_your_coach_detail',$coach->id )}}"><i class="fa fa-plus" aria-hidden="true"></i></a>
        </div>
        <div class="find_coach_sec_det11ab">
          <h4>{{$coach->name}}</h4>
          <span>{{$coach->title}}</span>
          <?= html_entity_decode($coach->short_detail) ?>
           <ul>
          <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(1960) }}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(682) }}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(1962) }}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(1961) }}" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
         </ul>
        </div>
        </div>
      </div>
      @endforeach
        <!-- <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="find_coach_sec_det11">
          <img src="{{asset('images/f2.png')}}" alt="image" class="img-responsive">
        </div>
        <div class="box_shade_color">
        <div class="find_coach_sec_det11a">
          <a href=""><i class="fa fa-plus" aria-hidden="true"></i></a>
        </div>
        <div class="find_coach_sec_det11ab">
          <h4>Lorem Ipsum</h4>
          <span>Trainers</span>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
           <ul>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
         </ul>
        </div>
        </div>
      </div> -->
        <!-- <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="find_coach_sec_det11">
          <img src="{{asset('images/f3.png')}}" alt="image" class="img-responsive">
        </div>
        <div class="box_shade_color">
        <div class="find_coach_sec_det11a">
          <a href=""><i class="fa fa-plus" aria-hidden="true"></i></a>
        </div>
        <div class="find_coach_sec_det11ab">
          <h4>Lorem Ipsum</h4>
          <span>Trainers</span>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
           <ul>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
         </ul>
        </div>
        </div>
      </div> -->
    </div>

     <div class="row plus_margin">
      <!-- <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="find_coach_sec_det11">
          <img src="{{asset('images/f4.png')}}" alt="image" class="img-responsive">
        </div>
        <div class="box_shade_color">
        <div class="find_coach_sec_det11a">
          <a href=""><i class="fa fa-plus" aria-hidden="true"></i></a>
        </div>
        <div class="find_coach_sec_det11ab">
          <h4>Lorem Ipsum</h4>
          <span>Trainers</span>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
           <ul>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
         </ul>
        </div>
        </div>
      </div> -->
        <!-- <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="find_coach_sec_det11">
          <img src="{{asset('images/f5.png')}}" alt="image" class="img-responsive">
        </div>
        <div class="box_shade_color">
        <div class="find_coach_sec_det11a">
          <a href=""><i class="fa fa-plus" aria-hidden="true"></i></a>
        </div>
        <div class="find_coach_sec_det11ab">
          <h4>Lorem Ipsum</h4>
          <span>Trainers</span>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
           <ul>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
         </ul>
        </div>
        </div>
      </div> -->
        <!-- <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="find_coach_sec_det11">
          <img src="{{asset('images/f6.png')}}" alt="image" class="img-responsive">
        </div>
        <div class="box_shade_color">
        <div class="find_coach_sec_det11a">
           <a href=""><i class="fa fa-plus" aria-hidden="true"></i></a>
        </div>
        <div class="find_coach_sec_det11ab">
          <h4>Lorem Ipsum</h4>
          <span>Trainers</span>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
           <ul>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
         </ul>
        </div>
        </div>
      </div> -->
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

.find_coach_sec_det11{
  margin-top: 50px;
}

.find_coach_sec_det11{
  height: 443px;
}

.find_coach_sec_det1 input {
    width: 76%;
    padding: 14px 0 14px 19px;
    border-radius: 25px;
    outline: none;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.find_coach_sec_det1 button {
    border: 0;
    padding: 18px 35px;
    border-radius: 25px;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    margin-left: -6px;
    outline: none;
    background: #f8ad57;
    color: #fff;
    transition: 0.6s all ease-in-out;
    text-decoration: none;
}

</style>
@endsection

@section('js')
<script type="text/javascript"></script>
@endsection