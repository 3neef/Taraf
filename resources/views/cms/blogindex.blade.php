@extends('layouts.cms')
@section('content')
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    @if (App::getLocale() == 'ar')
                    <h2>المدونة</h2>
                        
                    @else
                    <h2>Blog</h2>
                        
                    @endif
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        @if (App::getLocale() == 'ar')
                        <li class="breadcrumb-item active">مدونة </li>
                        <li class="breadcrumb-item"><a href="{{route('taraf')}}">الصفحة الرئيسية</a></li>
                            
                        @else
                        <li class="breadcrumb-item"><a href="{{route('taraf')}}">Home</a></li>
                        <li class="breadcrumb-item active">blog</li>
                            
                        @endif
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
        <!-- section start -->
        <section class="section-b-space blog-page ratio2_3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @foreach ($posts as $post)
                        <div class="row blog-media">
                            <div class="col-xl-6">
                                <div class="blog-left">
                                    
                                    <a href="{{route('show.post', $post)}}">
                                        @foreach ($post->image as $media)
                                        <img src="{{$media->getUrl()}}"
                                            class="img-fluid blur-up lazyload bg-img" alt="">
                                            @endforeach
                                        </a>
                                        
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="blog-right">
                                    <div>
                                        <h6>{{$post->created_at->format('Y-m-d')}}</h6> <a href="{{route('show.post', $post)}}">
                                            <h4>{{ $post->{'title_'.app()->getlocale()} }}</h4>
                                        </a>
                                        <ul class="post-social">
                                            <li>Posted By : Admin Admin</li>
                                        </ul>
                                        {!! $post->{'body_'.app()->getlocale()} !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        @endforeach
                        
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- Section ends -->
@endsection