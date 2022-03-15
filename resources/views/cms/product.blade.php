@extends('layouts.cms')
@section('content')
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
                                        <div>
                                            @foreach($product->images as $key => $media)
                                            <div><img src="{{ $media->getUrl() }}" alt=""
                                                    class="img-fluid blur-up lazyload"></div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 rtl-text">
                                <div class="product-right pro_sticky_info" data-sticky_column>
                                    <h2>{{$product->{'name_'.app()->getLocale() } }}</h2>
                                    <div class="label-section">
                                        <span class="badge badge-grey-color">#1 Best seller</span>
                                        <span class="label-text">{{$product->category_id}}</span>
                                    </div>
                                    <h3 class="price-detail">${{$product->price}}</h3>
                                    
                                    <div id="selectSize"
                                        class="addeffect-section product-description border-product">
                                        <h6 class="product-title size-text" <span>
                                            {!! $product->{'description_'.app()->getLocale() } !!}</span></h6>
                                    </div>
                                    <div class="product-count">
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

@endsection