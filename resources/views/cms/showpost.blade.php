@extends('layouts.cms')
@section('content')
<section class="blog-detail-page section-b-space ratio2_3">
    <div class="container">
        <div class="row">
            @foreach($post->image as $key => $media)
            <div class="col-sm-12 blog-detail"><img src="{{ $media->getUrl() }}"
                    class="img-fluid blur-up lazyload" alt="">
            @endforeach
                <h3>{{ $post->{'title_'.app()->getlocale()} }}</h3>
                <ul class="post-social">
                    <li>{{$post->created_at->format('d-m-y')}}</li>
                    <li>Posted By : Admin Admin</li>
                </ul>
                <p>{!! $post->{'body_'.app()->getlocale()} !!}</p>
            </div>
        </div>
        
    </div>
</section>
@endsection
