@extends('customer.layouts.app')

@section('content')
<div class="row">
    <!--left side-->
    <div class="col-lg-3">
        <h1 class="my-4">
            Food Menu
        </h1>
        <div class="list-group">
            <a href="{{url('/foods')}}" class="list-group-item">All</a>
            <a href="{{url('/foods/category/western')}}" class="list-group-item">Western</a>
            <a href="{{url('/foods/category/local')}}" class="list-group-item">Local</a>
        </div>
    </div>
    <!--right side-->
    <div class="col-lg-9">
        <!--dynamic slide-->
        @isset($foods_slide)
        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach($foods_slide as $food_slide)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop-> index }}" class="{{ $loop->first ? 'active': '' }}"></li>
                @endforeach
            </ol>
            <div class="carousel-inner" role="listbox">
                @foreach( $foods_slide as $food_slide )
                    <div class="carousel-item {{ $loop->first ? 'active': '' }}">
                        <img class="d-block img-fluid" style="width:100%;" src="{{url('/storage/cover_images')}}/{{ $food_slide->cover_image }}" alt="{{ $food_slide->title }}">
                        <div class="carousel-caption d-none d-md-block" style="text-shadow: black 0.1em 0.1em 0.2em;" >
                            <a href="{{url('/foods')}}/{{$food_slide->id}}" class="link-unstyled"><h2>{{ $food_slide->title }}</h2></a>
                            <p>{{ $food_slide->desc }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        @endisset
        <br>
        <div class="row">
            <!--items-->
            @if(count($foods) > 0)
                @foreach($foods as $food)
                <div class="col-lg-4 col-md-6 mb-4" >
                    <!--one slot-->
                    <div class="card h-60">
                        <a href="{{url('/foods')}}/{{$food->id}}">
                            <img class="card-img-top" style="height:100%;" src="{{url('/storage/cover_images')}}/{{$food->cover_image}}">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="{{url('/foods')}}/{{$food->id}}">{{$food->title}}</a>
                            </h4>
                            <div class="row">
                                <div class="col">
                                    <span class="float-left">
                                        <h5>RM {{$food->price}}</h5>
                                    </span>
                                </div>
                                <div class="col">
                                    <span class="float-right">
                                        {!!Form::open(['action' => ['Customer\OrdersController@create'], 'method' => 'POST'])!!}
                                        {{Form::hidden('food_id', $food->id)}}
                                        {{Form::submit('Order', ['class' => 'btn btn-success'])}}
                                        {!!Form::close()!!}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            {{ str_limit($food->desc, $limit =50, $end = '...') }}
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <p>No Food Found!</p>
            @endif
        </div>
        <div class="row">
            {{$foods->links()}}
        </div>
    </div>
</div>
@endsection