@extends('layouts.app')

@section('content')
    <div class="container-fluid bg-white mt-5">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box card">
                <div class="card-body">
                    <h3 class="box-title pull-left">Package #{{ $package->id }}</h3>
                    
                        <a class="btn btn-success pull-right" href="{{ url('/admin/package') }}">
                            <i class="icon-arrow-left-circle" aria-hidden="true"></i> Back</a>
                    
                    <div class="clearfix"></div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $package->id }}</td>
                            </tr>
                            <tr><th> Package Name </th><td> {{ $package->package_name }} </td></tr><tr><th> Title </th><td> {{ $package->title }} </td></tr><tr><th> Price </th><td> {{ $package->price }} </td></tr><tr><th> Time Period </th><td> {{ $package->time_period }} </td></tr><tr><th> Description </th><td><?= html_entity_decode($package->description) ?></td></tr>
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

