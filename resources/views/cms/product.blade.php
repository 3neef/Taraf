@extends('layouts.cms')
@section('content')
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>{{$product->{'name_'.app()->getLocale() } }}</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        @if (App::getLocale() == 'ar')
                        <li></li>
                        <li class="breadcrumb-item active"><a href="{{route('taraf')}}">الصفحة الرئيسية</a></li>
                        <li class="breadcrumb-item active"><a href="{{route('products')}}">منتجاتنا</a> </li>
                        <li class="breadcrumb-item ">{{$product->{'name_'.app()->getLocale() } }} </li>
                            
                        @else
                        <li class="breadcrumb-item"><a href="{{route('taraf')}}">Home</a></li>
                        <li class="breadcrumb-item active">Products</li>
                        <li class="breadcrumb-item active">{{$product->{'name_'.app()->getLocale() } }}</li>
                            
                        @endif
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="section-b-space">
    <div class="collection-wrapper">
        <div class="container">
            <div class="row data-sticky_parent">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-12 product_img_scroll image-scroll" data-sticky_column>
                                        
                                            <div class="slide-2 no-arrow home-slider">
                                                @foreach($product->images as $key => $media)
                                                <img src="{{ $media->getUrl() }}" alt=""
                                                    class="img-fluid blur-up lazyload" style="height: 300px; width: auto;">
                                                    @endforeach
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 rtl-text">
                                <div class="product-right pro_sticky_info" data-sticky_column>
                                    <h2>{{$product->{'name_'.app()->getLocale() } }}</h2>
                                    <h3 class="price-detail">{{$product->price}}</h3>
                                    
                                    <div id="selectSize"
                                        class="addeffect-section product-description border-product">
                                        <h6 class="product-title size-text" <span>
                                            {!! $product->{'description_'.app()->getLocale() } !!}</span></h6>
                                    </div>
                                    <div class="border-product">
                                        <h6 class="product-title">
                                            @if (App::getlocale() == 'ar')
                                            شارك المنتج
                                                
                                            @else
                                                
                                            share it
                                            @endif
                                            

                                        </h6>
                                        <div class="product-icon">
                                            <ul class="product-social">
                                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=https://taraf.flixtechnology.com/products/"."{{$product->id}}"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-buttons"><a href="{{route('requestproduct', $product)}}" class="btn btn-solid"><i
                                            class="fa fa-shopping-cart me-1" aria-hidden="true"></i>
                                            @if (App::getlocale() == 'ar')
                                            طلب المنتج                                                
                                            @else
                                                
                                            
                                            Request product
                                            @endif
                                        </a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-b-space ratio_asos">
    <div class="container">
        <div class="row">
            <div class="col-12 product-related">
                @if (App::getlocale() == 'ar')
                <h2>منتجات مشابهة</h2>
                    
                @else
                    
                <h2>related products</h2>
                @endif
            </div>
        </div>
        <div class="row search-product">
            @foreach ($products as $product)
                
            
            <div class="col-xl-2 col-md-4 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="{{route('show.product', $product)}}">
                                @foreach ($product->images as $key => $media)
                                <img src="{{ $media->getUrl() }}"
                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                @endforeach
                                </a>
                        </div>
                        <div class="back">
                            <a href="{{route('show.product', $product)}}">
                                @foreach ($product->images as $key => $media)
                                <img src="{{ $media->getUrl() }}"
                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                    @endforeach
                                </a>
                        </div>
                    </div>
                    <div class="product-detail">
                        <a href="product-page(no-sidebar).html">
                            <h3>{{$product->{'name_'.app()->getLocale() } }}</h3>
                        </a>
                        <h4>{{$product->price}}</h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection