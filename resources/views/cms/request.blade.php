@extends('layouts.cms')
@section('content')

<!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    @if (App::getLocale() == 'ar')
                    <h2>طلب منتج</h2>
                    
                        
                    @else
                    <h2>Requst A Product</h2>
                        
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
                <form method="POST" action="{{ route("admin.requested-products.store") }}" enctype="multipart/form-data" class="theme-form">
                    @csrf

                    @if (App::getLocale() == 'ar')
                        
                    
                    <div class="form-row row">
                        <div class="col-md-6 form-group">
                            <label for="name">الاسم</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="الاسم"
                                required="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="country">البلد</label>
                            <input type="text" class="form-control" name="country" id="country" placeholder="البلد " required="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="phone">رقم الهاتف</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="رقم الهاتف"
                                required="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="email">البريد الإلكتروني</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="البريد الإلكتروني" required="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="product">المنتج المطلوب</label>
                            <input type="text" class="form-control" name="product" id="product" placeholder="المنتج " value="{{$product->{'name_'.app()->getLocale() } }}" required="">
                        </div>
                        <div class="col-md-12 form-group">
                            <button class="btn btn-solid" type="submit">أرسل طلبك</button>
                        </div>
                    </div>
                    @else
                    
                    <div class="form-row row">
                        <div class="col-md-6 form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your name"
                                required="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="country">Country</label>
                            <input type="text" class="form-control" name="country" id="country" placeholder="country" required="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="phone">Phone number</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter your number"
                                required="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email" required="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="product">Product</label>
                            <input type="text" class="form-control" name="product" id="product" placeholder="{{$product->{'name_'.app()->getLocale() } }}" value="{{$product->{'name_'.app()->getLocale() } }}" required="">
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