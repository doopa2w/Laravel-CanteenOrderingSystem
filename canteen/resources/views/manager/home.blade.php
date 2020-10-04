@extends('manager.layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Manager :: Dashboard</div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <p>You are logged in!</p><br>
                <p>
                    <a class="btn btn-primary btn-lg" href="{{ url('/manager/foods') }}" role="button">Foods</a>
                    <a class="btn btn-primary btn-lg" href="{{ url('/manager/posts') }}" role="button">Posts</a>
                </p>
            </div>
        </div>
        <br>
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-chart-area"></i> Area Chart for food popularity
            </div>
            <div class="card-body">
                {!! $chart->container() !!}
                {!! $chart->script() !!}
            </div>
        </div>
        {{--Testing another chart--}}
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-chart-area"></i>Number of orders for the past 30 days
            </div>
            <div class="card-body">
                {!! $chart2->container() !!}
                {!! $chart2->script() !!}
            </div>
        </div>

    </div>
</div>
@endsection
