@extends('layouts.cms')
@section('content')
    
 <!-- breadcrumb start -->
 <div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    @if (App::getLocale() == 'ar')
                    <h2>للتواصل</h2>
                    
                        
                    @else
                    <h2>contact</h2>
                        
                    @endif
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        @if (App::getLocale() == 'ar')
                        <li class="breadcrumb-item active">اتصل بنا</li>
                        <li class="breadcrumb-item"><a href="{{route('taraf')}}">الصفحة الرئيسية</a></li>
                            
                        @else
                        <li class="breadcrumb-item"><a href="{{route('taraf')}}">Home</a></li>
                        <li class="breadcrumb-item active">contact</li>
                            
                        @endif
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->


<!--section start-->
<section class="contact-page section-b-space">
    <div class="container">
        <div class="row section-b-space">
            <div class="col-lg-7 map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.588088597058!2d58.37298500000001!3d23.583233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e91ffd7754d7d45%3A0x417555f31d937469!2sAl%20Raffd%20Fund!5e0!3m2!1sen!2s!4v1655731093678!5m2!1sen!2s"
                    allowfullscreen></iframe>
            </div>
            <div class="col-lg-5">
                <div class="contact-right">
                    <ul>
                        <li>
                            <div class="contact-icon"><i class="fa fa-phone" aria-hidden="true"></i>
                                @if (App::getLocale() == 'ar')
                                    <h6>اتصل بنا</h6>
                                @else
                                <h6>Contact Us</h6>
                                    
                                @endif
                            </div>
                            <div class="media-body">
                                <p> <a href="tel:{{$contact->phone}}"> {{$contact->phone}}</a></p>
                                @if ($contact->additional_phone)
                                        
                                 
                                 <p><a href="tel:{{$contact->additional_phone}}"> {{$contact->additional_phone}}</a></p>
                                 @endif
                                 
                            </div>
                        </li>
                        <li>
                            <div class="contact-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                @if (App::getLocale() == 'ar')
                                <h6>العنوان</h6>
                                @else
                                
                                <h6>Address</h6>
                                @endif
                            </div>
                            <div class="media-body">
                                <p>{!! $contact->address !!}</p> <br>
                                <p>E-post Box: B2052</p>
                            </div>
                        </li>
                        <li>
                            <div class="contact-icon"><i class="fa fa-envelope" aria-hidden="true"></i>
                                @if (App::getLocale() == 'ar')
                                    <h6>البريد الإلكتروني</h6>
                                @else
                                <h6>Email</h6>
                                    
                                @endif
                            </div>
                            <div class="media-body">
                                <p><a href="mailto:{{$contact->email}}">{{$contact->email}}</a></p>
                                <p><a href="mailto:manager@6araff.com">manager@6araff.com</a></p>
                                <p><a href="mailto:info@6araff.com">info@6araff.com</a></p>
                                
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <form class="theme-form">
                    @if (App::getLocale() == 'ar')
                        
                    
                    <div class="form-row row">
                        <div class="col-md-6">
                            <label for="name">الاسم الأول</label>
                            <input type="text" class="form-control" id="name" placeholder="الاسم الأول"
                                required="">
                        </div>
                        <div class="col-md-6">
                            <label for="email">اسم العائلة</label>
                            <input type="text" class="form-control" id="last-name" placeholder="اسم العائلة" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="review">رقم التليفون</label>
                            <input type="text" class="form-control" id="review" placeholder="رقم التليفون"
                                required="">
                        </div>
                        <div class="col-md-6">
                            <label for="email">البريد الإلكتروني</label>
                            <input type="text" class="form-control" id="email" placeholder="البريد الإلكتروني" required="">
                        </div>
                        <div class="col-md-12">
                            <label for="review">اكتب رسالتك</label>
                            <textarea class="form-control" placeholder="اكتب رسالتك"
                                id="exampleFormControlTextarea1" rows="6"></textarea>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-solid" type="submit">أرسل رسالتك</button>
                        </div>
                    </div>
                    @else
                    
                    <div class="form-row row">
                        <div class="col-md-6">
                            <label for="name">First Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Your name"
                                required="">
                        </div>
                        <div class="col-md-6">
                            <label for="email">Last Name</label>
                            <input type="text" class="form-control" id="last-name" placeholder="Email" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="review">Phone number</label>
                            <input type="text" class="form-control" id="review" placeholder="Enter your number"
                                required="">
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Email" required="">
                        </div>
                        <div class="col-md-12">
                            <label for="review">Write Your Message</label>
                            <textarea class="form-control" placeholder="Write Your Message"
                                id="exampleFormControlTextarea1" rows="6"></textarea>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-solid" type="submit">Send Your Message</button>
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