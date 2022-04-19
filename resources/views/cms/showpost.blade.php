@extends('layouts.cms')
@section('content')
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>{{$post->{'title_'.app()->getLocale() } }}</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        @if (App::getLocale() == 'ar')
                        <li></li>
                        <li class="breadcrumb-item active"><a href="{{route('taraf')}}">الصفحة الرئيسية</a></li>
                        <li class="breadcrumb-item active"><a href="{{route('blog')}}">مدونة</a> </li>
                        <li class="breadcrumb-item ">{{$post->{'title_'.app()->getLocale() } }} </li>
                            
                        @else
                        <li class="breadcrumb-item"><a href="{{route('taraf')}}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{route('blog')}}">Blog</a></li>
                        <li class="breadcrumb-item active">{{$post->{'title_'.app()->getLocale() } }}</li>
                            
                        @endif
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="blog-detail-page section-b-space ratio2_3">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 blog-detail">
                <div class="slide-1 no-arrow home-slider">
                @foreach($post->image as $key => $media)
                <img src="{{ $media->getUrl() }}"
                    class="img-fluid blur-up lazyload" alt="" style="height: 300px; width: auto;">
                @endforeach
                </div>
                <h3>{{ $post->{'title_'.app()->getlocale()} }}</h3>
                <ul class="post-social">
                    <li>{{$post->created_at->format('d-m-y')}}</li>
                    <li>Posted By : Admin Admin</li>
                </ul>
                <h4>{!! $post->{'body_'.app()->getlocale()} !!}</p>
            </div>
        </div>
        
    </div>
</section>
@endsection
