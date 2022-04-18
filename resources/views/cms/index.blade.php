@extends('layouts.cms')
@section('content')
     <!-- Home slider -->
     <section class="p-0">
        <div class="slide-1 home-slider">
            @foreach ($galleries as $gallery)
            @if ($gallery->is_sliderable == 'yes')
           
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
                        
                    <h4 class="text-center">اجود و احدث المنتجات</h4>
                    @else
                        
                    <h4 class="text-center">the best products with the best prices</h4>
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
                        <div class="product-box product-wrap">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="{{route('show.product', $product)}}">
                                        @foreach ($product->images as $media)
                                        <img alt="" src="{{$media->getUrl()}}"
                                            class="img-fluid blur-up lazyload bg-img">
                                            @endforeach
                                    </a>
                                </div>
                                <div class="back">
                                    <a href="{{route('show.product', $product)}}">
                                        @foreach ($product->images as $media)
                                        <img alt="" src="{{ $media->getUrl() }}"
                                            class="img-fluid blur-up lazyload bg-img">
                                            @endforeach
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="{{route('show.product', $product)}}">
                                    <h3>{{ $product->{'name_'.app()->getLocale()} }}</h3>
                                </a>
                                <h4>{{$product->price}}</h4>
                                <div class="add-btn">
                                    <a href="{{route('show.product', $product)}}"
                                        class="btn btn-outline">
                                        <i class="ti-shopping-cart"></i>
                                        @if (App::getLocale() == 'ar')
                                        
                                        تفاصيل المنتج
                                            
                                        @else
                                        
                                        Product details
                                        
                                        @endif
                                    </a>
                                </div>
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
                            <h2>٢٠٤٠</h2>
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
                            <li class="current"><a href="tab-1">
                                @if (App::getLocale() == 'ar')
                                الكل
                                @else
                                All
                                @endif
                                
                            </a></li>
                            @foreach ($categories as $category)
                            <li><a href="tab-{{$category->id + 1}}">{{ $category->{'name_'.app()->getLocale() } }}</a></li>    
                            @endforeach
                            
                        </ul>
                        <div class="tab-content-cls">
                            <div id="tab-1" class="tab-content">
                                <div class="no-slider row">
                                    @foreach ($products as $product )
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="{{route('show.product', $product)}}">
                                                    @foreach ($product->images as $key => $media)
                                                    <img
                                                    src="{{ $media->getUrl() }}"
                                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                                    @endforeach
                                                </a>
                                            </div>
                                            <div class="back">
                                                <a href="{{route('show.product', $product)}}">
                                                    @foreach ($product->images as $key => $media)
                                                    <img
                                                    src="{{ $media->getUrl() }}"
                                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                                    @endforeach
                                                </a>
                                                </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="{{route('show.product', $product)}}">
                                                <h3>{{ $product->{'name_'.app()->getLocale()} }}</h3>
                                            </a>
                                            <h4>{{$product->price}}</h4>
                                            <div class="add-btn">
                                                <a href="{{route('show.product', $product)}}"
                                                    class="btn btn-outline">
                                                    <i class="ti-shopping-cart"></i>
                                                    @if (App::getLocale() == 'ar')
                                                    
                                                    تفاصيل المنتج
                                                        
                                                    @else
                                                    
                                                    Product details
                                                    
                                                    @endif
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @foreach ($categories as $category)
                            <div id="tab-{{$category->id + 1}}" class="tab-content ">
                                <div class="no-slider row">
                                    @foreach ($category->products as $product )
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="{{route('show.product', $product)}}">
                                                    @foreach ($product->images as $key => $media)
                                                    <img
                                                    src="{{ $media->getUrl() }}"
                                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                                    @endforeach
                                                </a>
                                            </div>
                                            <div class="back">
                                                <a href="{{route('show.product', $product)}}">
                                                    @foreach ($product->images as $key => $media)
                                                    <img
                                                    src="{{ $media->getUrl() }}"
                                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                                    @endforeach
                                                </a>
                                                </div>
                                            
                                        </div>
                                        <div class="product-info">
                                            <a href="{{route('show.product', $product)}}">
                                                <h3>{{ $product->{'name_'.app()->getLocale()} }}</h3>
                                            </a>
                                            <h4>{{$product->price}}</h4>
                                            <div class="add-btn">
                                                <a href="{{route('show.product', $product)}}"
                                                    class="btn btn-outline">
                                                    <i class="ti-shopping-cart"></i>
                                                    @if (App::getLocale() == 'ar')
                                                    
                                                    تفاصيل المنتج
                                                        
                                                    @else
                                                    
                                                    Product details
                                                    
                                                    @endif
                                                </a>
                                            </div>
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
    <section class="section-b-space border-section  become-vendor ">
        <div class="title1 title5">
            @if (App::getLocale() == 'ar')
            <h2 class="title-inner1">مسيرتنا</h2>
                
            @else
            <h2 class="title-inner1">Our History</h2>
                
            @endif
            <hr role="tournament6">
           </div>
        <div class="container">
            <div class="step-bg">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="step-box">
                            <div>
                                @if (App::getLocale() == 'ar')
                                <div class="steps">٢٠١٤</i></div>
                                
                                
                                <h4>تأسيس الشركة بنشاط النقل
                                    البري بالشاحنات للبضائع و المعدات</h4> <br>
                                    
                                    @else
                                    <div class="steps">2014</i></div>
                               
                                <h4>Establishment of the company with the activity of road transport by truck of goods and equipment</h4>
                                @endif
                                
                                    
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="step-box">
                            <div>
                                @if (App::getLocale() == 'ar')
                                <div class="steps">۲۰۱٦</i></div>
                                
                                <h4>توزيع المياة المعدنية المعبأة</h4>
                                
                                @else
                                <div class="steps">2016</i></div>
                                <h4>Bottled mineral water distribution</h4>
                                @endif
                               
                                    
                              
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="step-box">
                            <div>
                                @if (App::getLocale() == 'ar')
                                <div class="steps">۲۰۱۷</i></div>
                                
                                <h4>إضافة نشاط الوساطة التجارية</h4>
                                
                                @else
                                <div class="steps">2017</i></div>
                                <h4>We Added a commercial brokerage activity</h4>
                                @endif
                              
                                    
                                
                               
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-6">
                        <div class="step-box">
                            <div>
                                @if (App::getLocale() == 'ar')
                                <div class="steps">۲۰۱۹</i></div>
                                
                                <h4>التوقف الكلي عن توزيع المياة المعدنية
                                    التوسع في نشاط السمسرة التجارية</h4>
                                    
                                @else
                                    <div class="steps">2019</i></div>
                                <h4>Total cessation of mineral water distribution Expansion of commercial brokerage activity</h4>
                                @endif
                              
                                    
                                
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="step-box">
                            <div>
                                @if (App::getLocale() == 'ar')
                                <div class="steps">۲۰۲۲</i></div>
                                
                                <h4>ومازلنا مستمرين بقوة</h4>
                                
                                @else
                                <div class="steps">2022</i></div>
                                <h4>And we're still going strong</h4>
                                @endif
                              
                                    
                                
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- blog section -->
    <section class="blog pt-0 ratio2_3 border-section  ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title1 section-t-space">
                        @if (App::getLocale() == 'ar')
                        {{-- <h4></h4> --}}
                        <h2 class="title-inner1"> المدونة</h2>
                            
                        @else
                        
                        {{-- <h4></h4> --}}
                        <h2 class="title-inner1">the Blog</h2>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slide-3 no-arrow slick-default-margin">
                        @foreach ($posts as $post)
                        <div class="col-md-12">
                            <a href="{{route('show.post', $post)}}">
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
                                <h4>{{$post->created_at->format('M d, Y H:i:s')}}</h4>
                                <a href="{{route('show.post', $post)}}">
                                    <p>{{ $post->{'title_'.app()->getlocale()} }}</p>
                                </a>
                                <hr class="style1">
                                {{-- <h6>by: John Dio , 2 Comment</h6> --}}
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section end -->
    
    {{-- why us section --}}
    <section class="section-b-space beauty-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title1 section-t-space">
                        @if (App::getLocale() == 'ar')
                        <h2 class="title-inner1">لماذا نحن</h2>
                        @else
                        
                        <h2 class="title-inner1">Why Us</h2>
                        @endif
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-12 offset-xl-1 text-center">
                    @if (App::getlocale() == 'ar')
                    <img src="/images/why-usar.png"alt="" class="img-fluid blur-up lazyload" srcset="" width="300" height="300">
                        
                    @else
                    <img src="/images/why-us.png" alt="" class="img-fluid blur-up lazyload" srcset="" width="300" height="300">
                        
                    @endif
                </div>
                <div class="col-xl-5 col-lg-6 col-md-12">
                    <div class="about-section">
                        <div>
                            <div class="about-text">
                                @if (App::getLocale() == 'ar')
                                <div class="col-sm-12">
                                    <h2>لماذا عليكم اختيارنا؟</h2>
                                    <h5>&#9832; حلقة الربط وجسر التواصل و التفاهم بين
                                        العملاء وإستثمارتهم</h5>
                                    <h5>&#9832; نقرب وجهات النظر بين المستثمرين</h5>
                                    <h5>&#9832; نحن الحلقة التي تربط أطراف النجاح</h5>
                                    <h5>&#9832; نشارك في تجاوز الصعوبات الإستثمارية</h5>
                                    <h5>&#9832; نعمل على جعل حلم المستثمرين واقعا</h5>
                                </div>
                                    
                                @else
                                <div class="col-sm-12">
                                    <h2>Why should you choose us?</h2>
                                    <h5>&#9832; The linking ring and the bridge of communication and understanding between customers and their investments</h5>
                                    <h5>&#9832; We bring the views of investors closer</h5>
                                    <h5>&#9832; We are the link that connects the parties to success</h5>
                                    <h5>&#9832; We participate in overcoming investment difficulties</h5>
                                    <h5>&#9832; We are working to make the dream of investors a reality</h5>
                                </div>
                                    
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- instagram section -->
    <section class="instagram ratio_square border-section ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 p-0">
                    <div class="title1 section-t-space">
                        @if (App::getLocale() == 'ar')
                        {{-- <h4></h4> --}}
                        <h2 class="title-inner1"> استوديو الصور</h2>
                            
                        @else
                        
                        {{-- <h4></h4> --}}
                        <h2 class="title-inner1">Our Gallery</h2>
                        @endif
                    </div>
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
    <section class="section-b-space border-section ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title1 section-t-space">
                        @if (App::getLocale() == 'ar')
                        {{-- <h4></h4> --}}
                        <h2 class="title-inner1"> عملائنا</h2>
                            
                        @else
                        
                        {{-- <h4></h4> --}}
                        <h2 class="title-inner1">Our Clients</h2>
                        @endif
                    </div>
                    <div class="slide-6 ">
                        @foreach ($clients as $client)
                            
                        @if ($client->is_partner == 'no')
                                
                        <div>
                            <div class="logo-block">
                                <a href="#"><img src="{{ $client->logo->getUrl() }}" alt="" style="height: 100px; width: auto;"></a>
                            </div>
                        </div>
                    
                            
                        @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title1 section-t-space">
                        @if (App::getLocale() == 'ar')
                        {{-- <h4></h4> --}}
                        <h2 class="title-inner1"> شركائنا</h2>
                            
                        @else
                        
                        {{-- <h4></h4> --}}
                        <h2 class="title-inner1">Our Partners</h2>
                        @endif
                    </div>

                    <div class="slide-6 no-arrow">
                        @foreach ($clients as $client)
                            @if ($client->is_partner == 'yes')
                                
                            <div>
                                <div class="logo-block">
                                    <a href="#"><img src="{{ $client->logo->getUrl() }}" alt="" style="height: 100px; width: auto;"></a>
                                </div>
                            </div>
                        
                                
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection