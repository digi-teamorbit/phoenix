@extends('layouts.app')

@section('content')
    <div class="container-fluid bg-white mt-5">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box card">
                <div class="card-body">
                    <h3 class="box-title pull-left">Video #{{ $video->id }}</h3>
                    
                        <a class="btn btn-success pull-right" href="{{ url('/admin/video') }}">
                            <i class="icon-arrow-left-circle" aria-hidden="true"></i> Back</a>
                    
                    <div class="clearfix"></div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $video->id }}</td>
                            </tr>
                            <tr><th> Video Title </th><td> {{ $video->video_title }} </td></tr><tr><th> Video Url </th><td> {{ $video->video_url }} </td></tr><tr><th> Image </th><td><img src="{{ asset($video->image) }}" style="width: 30%;"></td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.admin.footer')
</div>
@endsection

