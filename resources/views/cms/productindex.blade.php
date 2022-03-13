@extends('layouts.cms')
@section('content')
<div class="title1 section-t-space">
    <h4>exclusive products</h4>
    <h2 class="title-inner1">everyday casual</h2>
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
                            <div class="product-4 product-m no-arrow">
                                @foreach ($category->products as $product )
                                <div class="product-box product-wrap">
                                    <div class="img-wrapper">
                                        @foreach ($product->images as $key => $media)
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html">
                                                <img alt="" src="{{ $media->getUrl() }}"
                                                    class="img-fluid blur-up lazyload bg-img">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html">
                                                <img alt="" src="{{ $media->getUrl() }}"
                                                    class="img-fluid blur-up lazyload bg-img">
                                            </a>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="product-info">
                                        <a href="product-page(no-sidebar).html">
                                            <h6>{{ $product->{'name_'.app()->getLocale()} }}</h6>
                                        </a>
                                        <h4>${{$product->price}}</h4>
                                        <div class="add-btn">
                                            <a href="{{route('show.product', $product)}}"
                                                class="btn btn-outline">
                                                <i class="ti-shopping-cart"></i> Product details
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