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
                                        <h6 class="product-title size-text" <span><a href=""
                                                    data-bs-toggle="modal" data-bs-target="#sizemodal">Details</a></span></h6>
                                        <div class="modal fade" id="sizemodal" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">{{$product->{'name_'.app()->getLocale() } }}</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"><span
                                                                aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        {!! $product->{'description_'.app()->getLocale() }!!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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