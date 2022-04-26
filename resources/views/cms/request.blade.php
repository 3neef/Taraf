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
                <div class="title3">
                    @if (App::getLocale() == 'ar')
                    <h4>طلب شراء</h4>
                    @else
                    <h4>Ordering</h4>
                    @endif
                    <h2 class="title-inner3">{{$product->{'name_'.app()->getLocale() } }}</h2>
                    <div class="line"></div>
                </div>
                <form method="POST" action="{{ route("admin.requested-products.store") }}" enctype="multipart/form-data" class="theme-form">
                    @csrf

                    @if (App::getLocale() == 'ar')
                        
                    
                    <div class="form-row row">
                        <div class="col-md-6 form-group">
                            <label for="name">الاسم</label>
                            <input type="text" class="form-control  {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="name" placeholder="الاسم"
                                required="">
                                @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="country">البلد</label>
                            <input type="text" class="form-control  {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country" id="country" placeholder="البلد " required="">
                            @if($errors->has('country'))
                            <div class="invalid-feedback">
                                {{ $errors->first('country') }}
                            </div>
                        @endif
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="phone">رقم الهاتف</label>
                            <input type="text" class="form-control  {{ $errors->has('phone') ? 'is-invalid' : '' }}" name="phone" id="phone" placeholder="رقم الهاتف"
                                required="">
                                @if($errors->has('phone'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('phone') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="email">البريد الإلكتروني</label>
                            <input type="email" class="form-control  {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" id="email" placeholder="البريد الإلكتروني" required="">
                            @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="note">الملاحظات </label>
                            <input type="note" class="form-control  {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note" placeholder="الملاحظات " >
                            @if($errors->has('note'))
                            <div class="invalid-feedback">
                                {{ $errors->first('note') }}
                            </div>
                        @endif
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" name="product" id="product" placeholder="المنتج " value="{{$product->{'name_'.app()->getLocale() } }}" required="" hidden>
                        </div>
                        <div class="col-md-12 form-group">
                            <button class="btn btn-solid" type="submit">أرسل طلبك</button>
                        </div>
                    </div>
                    @else
                    
                    <div class="form-row row">
                        <div class="col-md-6 form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control  {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="name" placeholder="Enter Your name"
                                required="">
                                @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="country">Country</label>
                            <input type="text" class="form-control  {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country" id="country" placeholder="country" required="">
                            @if($errors->has('country'))
                            <div class="invalid-feedback">
                                {{ $errors->first('country') }}
                            </div>
                        @endif
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="phone">Phone number</label>
                            <input type="text" class="form-control  {{ $errors->has('phone') ? 'is-invalid' : '' }}" name="phone" id="phone" placeholder="Enter your number"
                                required="">
                                @if($errors->has('phone'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('phone') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control  {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" id="email" placeholder="Email" required="">
                            @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="note">Note </label>
                            <input type="note" class="form-control  {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note" placeholder="note " >
                            @if($errors->has('note'))
                            <div class="invalid-feedback">
                                {{ $errors->first('note') }}
                            </div>
                        @endif
                        </div
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" name="product" id="product" placeholder="{{$product->{'name_'.app()->getLocale() } }}" value="{{$product->{'name_'.app()->getLocale() } }}" required="" hidden>
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