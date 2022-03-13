@extends('layouts.cms')
@section('content')
        <!-- section start -->
        <section class="section-b-space blog-page ratio2_3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @foreach ($posts as $post)
                        <div class="row blog-media">
                            <div class="col-xl-6">
                                <div class="blog-left">
                                    @foreach ($post->image as $media)
                                    
                                    <a href="{{route('show.post', $post)}}"><img src="{{$media->getUrl()}}"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        
                                    @endforeach
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
                                            {{-- <li><i class="fa fa-heart"></i> 5 Hits</li>
                                            <li><i class="fa fa-comments"></i> 10 Comment</li> --}}
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