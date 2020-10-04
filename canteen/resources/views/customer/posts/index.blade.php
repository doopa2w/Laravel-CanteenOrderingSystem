@extends('customer.layouts.app')

@section('content')
<h3>Announcements</h3><hr>
<div class="row">
    @if(count($posts) > 0)
        @foreach($posts as $post)
        <div class="col-lg-6 col-md-6 mb-4" >
            <div class="card">
                <a href="{{url('/posts')}}/{{$post->id}}">
                    <img class="card-img-top" style="height:100%;"
                    src="{{url('/storage/cover_images')}}/{{$post->cover_image}}" height="190"></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="{{url('/posts')}}/{{$post->id}}">{{$post->title}}</a>
                    </h4>
                </div>
                <div class="card-footer">
                    Written on {{$post->created_at}} by {{$post->manager->name}}
                    <hr>
                    {{ str_limit($post->body, $limit=70, $end = '...') }}
                </div>
            </div>
        </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
</div>
@endsection