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
                                @foreach ($product->images as  $media)
                                @if ($media)
                                    <div class="front">
                                    <a href="{{route('show.product', $product)}}"><img src="{{ $media->getUrl() }}"
                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                    </div>
                                    <div class="back">
                                        <a href="{{route('show.product', $product)}}"><img src="{{ $media->getUrl() }}"
                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                    </div>
                                @endif
                                @endforeach
                            </div>
                            <div class="product-detail">
                                <a href="{{route('show.product', $product)}}">
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
                            @foreach ($products as $product)
                            <div id="tab-{{$product->category->id}}" class="tab-content ">
                                <div class="no-slider row">
                                    {{-- @foreach ($category->products as $product ) --}}
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
                                            <a href="{{route('show.product', $product)}}">
                                                <h6>{{ $product->{'name_'.app()->getLocale()} }}</h6>
                                            </a>
                                            <h4>${{$product->price}}</h4>
                                        </div>
                                    </div>
                                    {{-- @endforeach --}}
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
    <section class="about-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title4">
                        @if (App::getLocale() == 'ar')
                        <h2 class="title-inner4">مسيرتنا </h2>
                        @else
                        
                        <h2 class="title-inner4">Our History</h2>
                        @endif
                        <div class="line mb-0">
                         <span></span>
                        </div>
                       </div>
                </div>
                @if (App::getLocale() == 'ar')
                <div class="col-sm-12">
                    <h3>&#9839; 2014</h2>
                    <h4>تأسيس الشركة بنشاط النقل
                        البري بالشاحنات للبضائع و المعدات</h4>
                        <h3>&#9839; 2016</h3>
                        <h4>توزيع المياة المعدنية المعبأة</h4>
                        <h3>&#9839; 2017</h3>
                        <h4>إضافة نشاط الوساطة التجارية</h4>
                        <h3>&#9839; 2019</h3>
                        <h4>التوقف الكلي عن توزيع المياة المعدنية
                            التوسع في نشاط السمسرة التجارية</h4>
                            <h3>&#9839; 2022</h3>
                            <h4>ومازلنا مستمرين بقوة</h4>
                </div>
                    
                @else
                <div class="col-sm-12">
                    <h3>&#9839; 2014</h2>
                    <h4>Establishment of the company with the activity of road transport by truck of goods and equipment</h4>
                        <h3>&#9839; 2016</h3>
                        <h4>Bottled mineral water distribution</h4>
                        <h3>&#9839; 2017</h3>
                        <h4>Add a commercial brokerage activity</h4>
                        <h3>&#9839; 2019</h3>
                        <h4>Total cessation of mineral water distribution Expansion of commercial brokerage activity</h4>
                            <h3>&#9839; 2022</h3>
                            <h4>And we're still going strong</h4>
                </div>
                    
                @endif
            </div>
        </div>
    </section>

    <!-- blog section -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="title1 section-t-space">
                    @if (App::getLocale() == 'ar')
                    {{-- <h4></h4> --}}
                    <h2 class="title-inner1">من المدونة</h2>
                        
                    @else
                    
                    {{-- <h4></h4> --}}
                    <h2 class="title-inner1">From the Blog</h2>
                    @endif
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
    <section class="about-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title4">
                        @if (App::getLocale() == 'ar')
                        <h2 class="title-inner4">لماذا نحن</h2>
                        @else
                        
                        <h2 class="title-inner4">Why Us</h2>
                        @endif
                        <div class="line mb-0">
                         <span></span>
                        </div>
                       </div>
                </div>
                @if (App::getLocale() == 'ar')
                <div class="col-sm-12">
                    <h4>لماذا عليكم اختيارنا؟</h4>
                    <h5>&#9832; حلقة الربط وجسر التواصل و التفاهم بين
                        العملاء وإستثمارتهم</h5>
                    <h5>&#9832; نقرب وجهات النظر بين المستثمرين</h5>
                    <h5>&#9832; نحن الحلقة التي تربط أطراف النجاح</h5>
                    <h5>&#9832; نشارك في تجاوز الصعوبات الإستثمارية</h5>
                    <h5>&#9832; نعمل على جعل حلم المستثمرين واقعا</h5>
                </div>
                    
                @else
                <div class="col-sm-12">
                    <h4>Why should you choose us?</h4>
                    <h5>&#9832; The linking ring and the bridge of communication and understanding between customers and their investments</h5>
                    <h5>&#9832; We bring the views of investors closer</h5>
                    <h5>&#9832; We are the link that connects the parties to success</h5>
                    <h5>&#9832; We participate in overcoming investment difficulties</h5>
                    <h5>&#9832; We are working to make the dream of investors a reality</h5>
                </div>
                    
                @endif
            </div>
        </div>
    </section>

    <!-- instagram section -->
    <section class="instagram ratio_square">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 p-0">
                    @if (App::getLocale() == 'ar')
                    
                    <h2 class="title-borderless">استوديو الصور</h2>
                    @else
                    <h2 class="title-borderless">Our Gallery</h2>
                        
                    @endif
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
                    @if (App::getLocale() == 'ar')
                    
                    <h2 class="title-borderless">عملائنا</h2>
                    @else
                    <h2 class="title-borderless">Our Clients</h2>
                        
                    @endif
                    <div class="slide-6 no-arrow">
                        @foreach ($clients as $client)
                            
                        @if ($client->is_partner == 'no')
                                
                        <div>
                            <div class="logo-block">
                                <a href="#"><img src="{{ $client->logo->getUrl() }}" alt="" width="320" height="100"></a>
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
                    @if (App::getLocale() == 'ar')
                    
                    <h2 class="title-borderless">شركائنا</h2>
                    @else
                    <h2 class="title-borderless">Our Partners</h2>
                        
                    @endif
                    <div class="slide-6 no-arrow">
                        @foreach ($clients as $client)
                            @if ($client->is_partner == 'yes')
                                
                            <div>
                                <div class="logo-block">
                                    <a href="#"><img src="{{ $client->logo->getUrl() }}" alt="" width="250" height="100"></a>
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