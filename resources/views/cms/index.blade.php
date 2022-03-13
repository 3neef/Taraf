@extends('layouts.cms')
@section('content')
     <!-- Home slider -->
     <section class="p-0">
        <div class="slide-1 home-slider">
            @foreach ($galleries as $gallery)
            @if ($gallery->is_sliderable == 'yes')
            @if ($gallery->image)
                
            @endif
            <div>
                <div class="home  text-center">
                    <img src="{{ $gallery->image->getUrl() }}" alt="" class="bg-img blur-up lazyload">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="slider-contain">
                                    <div>
                                        {{-- @foreach ($setting as $item)
                                        <h4>{!!  $item->{'slogan_'.app()->getLocale()} !!}</h4>    
                                        @endforeach --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            @endif
                
            @endforeach
        </div>
    </section>
    <!-- Home slider end -->


   


    <!-- Paragraph-->
    <div class="title1 section-t-space">
        @if (App::getLocale() == 'ar')
        <h4>عروض خاصة</h4>
        <h2 class="title-inner1">احدث المنتجات</h2>
            
        @else
        <h4>special offer</h4>
        <h2 class="title-inner1">Latest Drops</h2>
        
        @endif
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="product-para">
                    @if (App::getLocale() == 'ar')
                        
                    <p class="text-center">اجود و احدث المنتجات</p>
                    @else
                        
                    <p class="text-center">the best products with the best prices</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Paragraph end -->


    <!-- Product slider -->
    <section class="section-b-space pt-0 ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="product-4 product-m no-arrow">
                        @foreach ($products as $product )
                        <div class="product-box">
                            <div class="img-wrapper">
                                @foreach ($product->images as $key => $media)
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img src="{{ $media->getUrl() }}"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="back">
                                    <a href="product-page(no-sidebar).html"><img src="{{ $media->getUrl() }}"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                @endforeach
                            </div>
                            <div class="product-detail">
                                <a href="product-page(no-sidebar).html">
                                    <h6>{{ $product->{'name_'.app()->getLocale()} }}</h6>
                                </a>
                                <h4>${{$product->price}}</h4>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product slider end -->


    <!-- Parallax banner -->
    <section class="p-0">
        <div class="full-banner parallax text-center p-left">
            <img src="/images/banner.png" alt="" class="bg-img blur-up lazyload">
            <div class="container">
                <div class="row">
                    <div class="col">
                        @if (App::getLocale() == 'ar')
                        <div class="banner-contain">
                            <h2>2040</h2>
                            <h3>رؤية عمان</h3>
                            {{-- <h4>special offer</h4> --}}
                        </div>
                            
                        @else
                        <div class="banner-contain">
                            <h2>2040</h2>
                            <h3>Oman Vision</h3>
                            {{-- <h4>special offer</h4> --}}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Parallax banner end -->


    <!-- Tab product -->
    <div class="title1 section-t-space">

        @if (App::getLocale() == 'ar')
        <h4>عروض خاصة</h4>
        <h2 class="title-inner1">المنتجات الحصرية</h2>
            
        @else
        <h4>special offer</h4>
        <h2 class="title-inner1">Exclusive Products</h2>
        @endif
    </div>
    <section class="section-b-space pt-0 ratio_asos">
        <div class="container">
            <div class="row">
                
                <div class="col">
                    <div class="theme-tab">
                        <ul class="tabs tab-title">
                            @foreach ($categories as $category)
                            <li class="current"><a href="tab-{{$category->id}}">{{ $category->{'name_'.app()->getLocale() } }}</a></li>    
                            @endforeach
                            
                        </ul>
                        <div class="tab-content-cls">
                            @foreach ($categories as $category)
                            <div id="tab-{{$category->id}}" class="tab-content ">
                                <div class="no-slider row">
                                    @foreach ($category->products as $product )
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            @foreach ($product->images as $key => $media)
                                                
                                            <div class="front">
                                                <a href="{{route('show.product', $product)}}"><img
                                                    src="{{ $media->getUrl() }}"
                                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                                </a>
                                            </div>
                                            <div class="back">
                                                <a href="{{route('show.product', $product)}}"><img
                                                    src="{{ $media->getUrl() }}"
                                                    class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                </div>
                                            @endforeach
                                              
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a href="{{route('show.product', $product)}}">
                                                <h6>{{ $product->{'name_'.app()->getLocale()} }}</h6>
                                            </a>
                                            <h4>${{$product->price}}</h4>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>                                
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tab product end -->


    <!-- service layout -->
    <div class="container">
        <section class="service border-section small-section">
            <div class="row">
                @foreach ($services as $service)
                <div class="col-md-4 service-block">
                    <div class="media">
                        @foreach ($service->image as $key => $media)
                        <img src="{{$media->getUrl()}}" alt="" srcset="" width="80" height="60" class="img-responsive img-fluid max-h-10 max-w-4xl">
                        @endforeach
                        <div class="media-body">
                            <h4>{{$service->{'name_'.app()->getLocale()} }}</h4>
                            <p>{!! $service->{'description_'.app()->getLocale()} !!}</p>
                        </div>
                    </div>
                </div>
                    
                @endforeach
            </div>
        </section>
    </div>
    <!-- service layout  end -->


    <!-- blog section -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="title1 section-t-space">
                    <h4>From the Blog</h4>
                    <h2 class="title-inner1">Fashion for you</h2>
                </div>
            </div>
        </div>
    </div>
    <section class="blog pt-0 ratio2_3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slide-3 no-arrow slick-default-margin">
                      @foreach ($posts as $post)
                      <div class="col-md-12">
                          <a href="#">
                              <div class="classic-effect">
                                  <div>
                                      @foreach ($post->image as $media)

                                      <img src="{{$media->getUrl()}}" class="img-fluid blur-up lazyload bg-img"
                                      alt="">
                                      
                                      @endforeach
                                  </div>
                                  <span></span>
                              </div>
                          </a>
                          <div class="blog-details">
                              <h4>{{$post->created_at->format('Y-m-d H:i:s')}}</h4>
                              <a href="#">
                                  <p>{{ $post->{'title_'.app()->getlocale()} }}</p>
                              </a>
                              <hr class="style1">
                              <h6>by: John Dio , 2 Comment</h6>
                          </div>
                      </div>
                      @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section end -->


    <!-- instagram section -->
    <section class="instagram ratio_square">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 p-0">
                    <h2 class="title-borderless">Our Gallery</h2>
                    <div class="slide-7 no-arrow slick-instagram">
                        @foreach ($galleries as $gallery)
                
                        @if($gallery->image)
                        <div>
                            <a href="#">
                                
                                <div class="instagram-box"> <img src="{{ $gallery->image->getUrl() }}" class="bg-img"
                                    alt="img">
                                    <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                </div>
                            </a>
                            
                        </div>
                        @endif
                        
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- instagram section end -->


    <!--  logo section -->
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slide-6 no-arrow">
                        @foreach ($clients as $client)
                            
                        <div>
                            <div class="logo-block">
                                <a href="#"><img src="{{ $client->logo->getUrl() }}" alt="" width="80" height="60"></a>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection