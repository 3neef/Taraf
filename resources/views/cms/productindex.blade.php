@extends('layouts.cms')
@section('content')
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    @if (App::getLocale() == 'ar')
                    <h2>المنتجات</h2>
                        
                    @else
                    <h2>Products</h2>
                        
                    @endif
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        @if (App::getLocale() == 'ar')
                        <li class="breadcrumb-item active">منتجاتنا </li>
                        <li class="breadcrumb-item"><a href="{{route('taraf')}}">الصفحة الرئيسية</a></li>
                            
                        @else
                        <li class="breadcrumb-item"><a href="{{route('taraf')}}">Home</a></li>
                        <li class="breadcrumb-item active">Products</li>
                            
                        @endif
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="title1 section-t-space">
    @if (App::getLocale() == 'ar')
    <h4>منتجاتنا</h4>
    <h2 class="title-inner1">أجود انواع المنتجات</h2>
    @else
        
    <h4>Products</h4>
    <h2 class="title-inner1">Top quality products</h2>
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
@endsection