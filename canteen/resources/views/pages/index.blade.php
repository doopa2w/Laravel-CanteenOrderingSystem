@extends('customer.layouts.app')

@section('content')
<div class="jumbotron text-center" style="background-color: light-grey" >
    <h1 class="display-4">Welcome to Canteen!</h1>
    <hr>
    <p class="lead">Feel free to browse any food available here.</p>
    <p class="lead">To order, please log in or register an account first.</p>
</div>

<div class="jumbotron" style="background-color: light-grey">
    <h1>Featured Foods</h1>
    <hr>
    <div class="row">
    @if(count($foods) > 0)
        @foreach($foods as $food)
        <div class="col-lg-4 col-md-6 mb-4" >
            <div class="card h-60">
                <a href="{{url('/foods')}}/{{$food->id}}">
                    <img class="card-img-top" style="height:100%;" src="{{url('/storage/cover_images')}}/{{$food->cover_image}}">
                </a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="{{url('/foods')}}/{{$food->id}}">{{$food->title}}</a>
                    </h4>
                    <hr>
                    <h5>RM {{$food->price}}</h5>
                </div>
            </div>
        </div>
        @endforeach
    @else
        <p>No featured foods found.</p>
    @endif
    </div>
</div>

<div class="jumbotron" style="background-color: light-grey">
    <h1>Announcements</h1>
    <hr>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-striped table-bordered table-responsive-sm">

                    @if(count($posts) > 0)
                        @foreach($posts as $post)
                            <tr>
                                <td>
                                    <a href="{{url('/posts')}}/{{$post->id}}">
                                        <img img style="height:180px;" class="card-img-top" src="{{url('/storage/cover_images')}}/{{$post->cover_image}}">
                                    </a>
                                </td>
                                <td>
                                    <a href="{{url('/posts')}}/{{$post->id}}">{{$post->title}}</a>
                                    <br>
                                    Written on {{$post->created_at}} by {{$post->manager->name}}
                                    <br><br>
                                    {{ str_limit($post->body, $limit =100, $end = '...') }}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <p>No announcements.</p>
                    @endif
                </table>
            </div>
        </div>
    </div>
</div>
@endsection