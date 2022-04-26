@extends('layouts.cms')
@section('content')

<!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    @if (App::getLocale() == 'ar')
                    <h2> طلب منتج غير موجود</h2>
                    
                        
                    @else
                    <h2> Order A Product</h2>
                        
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!--section start-->
<section class="contact-page section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title3">
                    @if (App::getLocale() == 'ar')
                    <h4>طلب منتج</h4>
                    @else
                    <h4>Ordering</h4>
                    @endif
                    
                    <div class="line"></div>
                </div>
                <form method="POST" action="{{ route("admin.request-orders.store") }}" enctype="multipart/form-data" class="theme-form">
                    @csrf

                    @if (App::getLocale() == 'ar')
                        
                    
                    <div class="form-row row">
                        <div class="col-md-6 form-group">
                            <label for="fullname">الاسم</label>
                            <input type="text" class="form-control  {{ $errors->has('fullname') ? 'is-invalid' : '' }}" name="fullname" id="fullname" placeholder="الاسم"
                                required="">
                                @if($errors->has('fullname'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('fullname') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="product">المنتج المطلوب</label>
                            <input type="text" class="form-control  {{ $errors->has('product') ? 'is-invalid' : '' }}" name="product" id="product" placeholder="المنتج المطلوب " required="">
                            @if($errors->has('product'))
                            <div class="invalid-feedback">
                                {{ $errors->first('product') }}
                            </div>
                        @endif
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="packaging_type">نوع التغليف</label>
                            <input type="text" class="form-control  {{ $errors->has('packaging_type') ? 'is-invalid' : '' }}" name="packaging_type" id="packaging_type" placeholder="نوع التغليف"
                                >
                                @if($errors->has('packaging_type'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('packaging_type') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="quantity">الكمية</label>
                            <input type="quantity" class="form-control  {{ $errors->has('quantity') ? 'is-invalid' : '' }}" name="quantity" id="quantity" placeholder="الكمية" required="">
                            @if($errors->has('quantity'))
                            <div class="invalid-feedback">
                                {{ $errors->first('quantity') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="expected_price">السعر المتوقع</label>
                            <input type="expected_price" class="form-control  {{ $errors->has('expected_price') ? 'is-invalid' : '' }}" name="expected_price" id="expected_price" placeholder="السعر المتوقع" required="">
                            @if($errors->has('expected_price'))
                            <div class="invalid-feedback">
                                {{ $errors->first('expected_price') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="product_country">بلاد المنتج</label>
                            <input type="product_country" class="form-control  {{ $errors->has('product_country') ? 'is-invalid' : '' }}" name="product_country" id="product_country" placeholder="بلاد المنتج ">
                            @if($errors->has('product_country'))
                            <div class="invalid-feedback">
                                {{ $errors->first('product_country') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="payment_method">طريقة الدفع</label>
                            <input type="payment_method" class="form-control  {{ $errors->has('payment_method') ? 'is-invalid' : '' }}" name="payment_method" id="payment_method" placeholder="طريقة الدفع " required="">
                            @if($errors->has('payment_method'))
                            <div class="invalid-feedback">
                                {{ $errors->first('payment_method') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="place_of_delivery">مكان التوصيل (الميناء)</label>
                            <input type="place_of_delivery" class="form-control  {{ $errors->has('place_of_delivery') ? 'is-invalid' : '' }}" name="place_of_delivery" id="place_of_delivery" placeholder="مكان التوصيل " required="">
                            @if($errors->has('place_of_delivery'))
                            <div class="invalid-feedback">
                                {{ $errors->first('place_of_delivery') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="note">ملاحظات</label>
                            <input type="note" class="form-control  {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note" placeholder="الملاحظات ">
                            @if($errors->has('note'))
                            <div class="invalid-feedback">
                                {{ $errors->first('note') }}
                            </div>
                            @endif
                        </div>
                        
                        <div class="col-md-12 form-group">
                            <button class="btn btn-solid" type="submit">أرسل طلبك</button>
                        </div>
                    </div>
                    @else
                    
                    <div class="form-row row">
                        <div class="col-md-6 form-group">
                            <label for="fullname">full Name</label>
                            <input type="text" class="form-control  {{ $errors->has('fullname') ? 'is-invalid' : '' }}" name="fullname" id="fullname" placeholder="Enter Your name"
                                required="">
                                @if($errors->has('fullname'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('fullname') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="product">Product</label>
                            <input type="text" class="form-control  {{ $errors->has('product') ? 'is-invalid' : '' }}" name="product" id="product" placeholder="product" required="">
                            @if($errors->has('product'))
                            <div class="invalid-feedback">
                                {{ $errors->first('product') }}
                            </div>
                        @endif
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="packaging_type">Packaging Type</label>
                            <input type="text" class="form-control  {{ $errors->has('packaging_type') ? 'is-invalid' : '' }}" name="packaging_type" id="packaging_type" placeholder="Enter your number"
                                required="">
                                @if($errors->has('packaging_type'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('packaging_type') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="quantity">Quantity</label>
                            <input type="quantity" class="form-control  {{ $errors->has('quantity') ? 'is-invalid' : '' }}" name="quantity" id="quantity" placeholder="quantity" required="">
                            @if($errors->has('quantity'))
                            <div class="invalid-feedback">
                                {{ $errors->first('quantity') }}
                            </div>
                        @endif
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="expected_price">Expected Price</label>
                            <input type="expected_price" class="form-control  {{ $errors->has('expected_price') ? 'is-invalid' : '' }}" name="expected_price" id="expected_price" placeholder="expected_price" required="">
                            @if($errors->has('expected_price'))
                            <div class="invalid-feedback">
                                {{ $errors->first('expected_price') }}
                            </div>
                        @endif
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="product_country">Product Country</label>
                            <input type="product_country" class="form-control  {{ $errors->has('product_country') ? 'is-invalid' : '' }}" name="product_country" id="product_country" placeholder="product_country" required="">
                            @if($errors->has('product_country'))
                            <div class="invalid-feedback">
                                {{ $errors->first('product_country') }}
                            </div>
                        @endif
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="payment_method">payment_method</label>
                            <input type="payment_method" class="form-control  {{ $errors->has('payment_method') ? 'is-invalid' : '' }}" name="payment_method" id="payment_method" placeholder="payment_method" required="">
                            @if($errors->has('payment_method'))
                            <div class="invalid-feedback">
                                {{ $errors->first('payment_method') }}
                            </div>
                        @endif
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="place_of_delivery">Place Of Delivery (port)</label>
                            <input type="place_of_delivery" class="form-control  {{ $errors->has('place_of_delivery') ? 'is-invalid' : '' }}" name="place_of_delivery" id="place_of_delivery" placeholder="place_of_delivery" required="">
                            @if($errors->has('place_of_delivery'))
                            <div class="invalid-feedback">
                                {{ $errors->first('place_of_delivery') }}
                            </div>
                        @endif
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="note">Note</label>
                            <input type="note" class="form-control  {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note" placeholder="note" required="">
                            @if($errors->has('note'))
                            <div class="invalid-feedback">
                                {{ $errors->first('note') }}
                            </div>
                        @endif
                        </div>
                        
                        <div class="col-md-12 form-group">
                            <button class="btn btn-solid" type="submit">Send Your Request</button>
                        </div>
                    </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</section>
<!--Section ends-->
    
@endsection