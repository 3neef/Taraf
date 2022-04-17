{{-- <footer class="footer-light">
    <section class="section-b-space light-layout">
        <div class="container">
            <div class="row footer-theme partition-f">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-title footer-mobile-title">
                        <h4>about</h4>
                    </div>
                    <div class="footer-contant">
                        @foreach ($setting as $setting )
                        <div class="footer-logo">
                            <img src="{{$setting->logo->getUrl()}}" alt="" width="150" height="100">
                        </div>
                        <p>{!! $setting->{'slogan_'.app()->getLocale()} !!}</p>
                            @endforeach
                        <div class="footer-social">
                            <ul>
                                @foreach ($socials as $link)
                                <li><a href="{{$link->url}}"><i class="fa fa-{{ $link->name}}" aria-hidden="true"></i></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="sub-title">
                        <div class="footer-title">
                            @if (App::getLocale() == 'ar')
                                
                            <h4>روابط مفيدة</h4>
                            @else
                                
                            <h4>Useful Links</h4>
                            @endif

                        </div>
                        <div class="footer-contant">
                            <ul>
                                @if (App::getLocale() == 'ar')
                                <li><a href="{{route('taraf','?language='.App::getLocale())}}">الرئيسية</a></li>
                                <li><a href="{{route('about','?language='.App::getLocale())}}">عن المؤسسة</a></li>
                                <li><a href="{{route('products','?language='.App::getLocale())}}">المنتجات</a></li>
                                <li>
                                    <a href="{{route('blog','?language='.App::getLocale())}}">مدونة</a>

                                </li>
                                @else
                                <li><a href="{{route('taraf','?language='.App::getLocale())}}">Home</a></li>
                                <li><a href="{{route('about','?language='.App::getLocale())}}">About Us</a></li>
                                <li><a href="{{route('products','?language='.App::getLocale())}}">Products</a></li>
                                <li><a href="{{route('blog','?language='.App::getLocale())}}">blog</a></li>
                                
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="sub-title">
                        <div class="footer-title">
                            @if (app()->getLocale() == 'ar')
                            <h4>تفاصيل الاتصال</h4>
                                
                            @else
                            <h4>Contact information</h4>
                                
                            @endif
                        </div>
                        <div class="footer-contant">
                            <ul class="contact-list">
                                <li><i class="fa fa-map-marker"></i>{!! $contact->address !!}
                                </li>
                                @if (app()->getLocale() == 'ar')

                                <li><i class="fa fa-phone"></i>هاتفنا على:  <a href="tel:{{$contact->phone}}"> {{$contact->phone}}</a> </li>
                                @if ($contact->additional_phone)
                                    
                                <li><i class="fa fa-phone"></i>او على :<a href="tel:{{$contact->additional_phone}}"> {{$contact->additional_phone}}</a></li>
                                @endif
                                <li><i class="fa fa-envelope-o"></i>راسلنا على : <a href="mailto:{{$contact->email}}">{{$contact->email}}</a></li>
                                
                            @else
                           
                            <li><i class="fa fa-phone"></i>Call us at: <a href="tel:{{$contact->phone}}"> {{$contact->phone}}</a> </li>
                            @if ($contact->additional_phone)
                                
                            <li><i class="fa fa-phone"></i>Or at: <a href="tel:{{$contact->additional_phone}}"> {{$contact->additional_phone}}</a></li>
                            @endif
                            <li><i class="fa fa-envelope-o"></i>Email Us: <a href="mailto:{{$contact->email}}">{{$contact->email}}</a></li>
                                
                            @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="footer-end">
                        <p><i class="fa fa-copyright" aria-hidden="true"></i> 2022  powered by
                            Flix Technology</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer> --}}
<footer>
    <div class="bg-color2">
        <section class="p-0">
            <div class="container-fluid">
                <div class="row footer-theme2 section-light footer-border custom-footer">
                    <div class="col">
                        <div class="footer-block">
                            <div class="footer-container">
                                <div class="footer-title footer-mobile-title">
                                    <h4>about</h4>
                                </div>
                                <div class="footer-contant">
                                    @foreach ($setting as $setting )
                        <div class="footer-logo">
                            <img src="{{$setting->logo->getUrl()}}" alt="">
                            <h3>{!! $setting->{'slogan_'.app()->getLocale()} !!}</h3>
                        </div>
                            @endforeach
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col form-p p-0">
                        <div class="footer-block">
                            <div class="footer-container">
                                <img src="/images/oman.png" alt="" srcset="" width="300" height="300">
                            </div>
                        </div>
                    </div>
                    <div class="col coool">
                        <div class="footer-block">
                            <div class="footer-container">
                                <div class="footer-title">
                                    @if (app()->getLocale() == 'ar')
                                    <h4>تفاصيل الاتصال</h4>
                                        
                                    @else
                                    <h4>Contact information</h4>
                                        
                                    @endif
                                </div>
                                <div class="footer-contant">
                                    <ul class="contact-details">
                                        <li><i class="fa fa-map-marker"></i>{!! $contact->address !!}
                                        </li>
                                        @if (app()->getLocale() == 'ar')
        
                                        <li><i class="fa fa-phone"></i>  هاتفنا على :   <a href="tel:{{$contact->phone}}"> {{$contact->phone}}</a> </li>
                                        @if ($contact->additional_phone)
                                            
                                        <li><i class="fa fa-phone"></i>  او على :<a href="tel:{{$contact->additional_phone}}"> {{$contact->additional_phone}}</a></li>
                                        @endif
                                        <li><i class="fa fa-envelope-o"></i>  راسلنا على : <a href="mailto:{{$contact->email}}">{{$contact->email}}</a></li>
                                        
                                    @else

                                    <li><i class="fa fa-phone"></i>Call us at: <a href="tel:{{$contact->phone}}"> {{$contact->phone}}</a> </li>
                                    @if ($contact->additional_phone)
                                        
                                    <li><i class="fa fa-phone"></i>Or at: <a href="tel:{{$contact->additional_phone}}"> {{$contact->additional_phone}}</a></li>
                                    @endif
                                    <li><i class="fa fa-envelope-o"></i>Email Us: <a href="mailto:{{$contact->email}}">{{$contact->email}}</a></li>
                                        
                                    @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col coool">
                        <div class="footer-block">
                            <div class="footer-container">
                        <div class="footer-link">
                            <div class="footer-title">
                                @if (App::getLocale() == 'ar')
                                
                                <h4>روابط مفيدة</h4>
                                @else
                                    
                                <h4>Useful Links</h4>
                                @endif
                            </div>
                            <div class="footer-contant">
                                <ul>
                                    @if (App::getLocale() == 'ar')
                                    <li><a href="{{route('taraf','?language='.App::getLocale())}}">الرئيسية</a></li>
                                    <li><a href="{{route('about','?language='.App::getLocale())}}">عن المؤسسة</a></li>
                                    <li><a href="{{route('products','?language='.App::getLocale())}}">المنتجات</a></li>
                                    <li><a href="{{route('blog','?language='.App::getLocale())}}">مدونة</a> </li>
                                    <li><a href="{{route('contact','?language='.App::getLocale())}}">للتواصل</a> </li>
                                    <li><a href="{{route('requestproduct','?language='.App::getLocale())}}">الطلبات</a> </li>
                                    @else
                                    <li><a href="{{route('taraf','?language='.App::getLocale())}}">Home</a></li>
                                    <li><a href="{{route('about','?language='.App::getLocale())}}">About Us</a></li>
                                    <li><a href="{{route('products','?language='.App::getLocale())}}">Products</a></li>
                                    <li><a href="{{route('blog','?language='.App::getLocale())}}">blog</a></li>
                                    <li><a href="{{route('requestproduct','?language='.App::getLocale())}}">Requests</a></li>
                                    <li><a href="{{route('contact','?language='.App::getLocale())}}">Contact Us</a></li>
                                    
                                    @endif
                                </ul>
                                <div class="social-white">
                                    <ul>
                                        @foreach ($socials as $link)
                                        <li><a href="{{$link->url}}"><i class="fa fa-{{ $link->name}}" aria-hidden="true"></i></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="footer-end">
                        @if (App::getLocale() == 'ar')
                        <p>كل الحقوق محفوظة للصالح <span>شركة طرف</span><i class="fa fa-copyright" aria-hidden="true"></i> 2022  <span>&nbsp;&nbsp;</span> طورت بواسطة شركة<a href="https://www.flixtechnology.com/"> Flix Technology</a></p>
                        
                        @else
                        
                        <p>Copyright<i class="fa fa-copyright" aria-hidden="true"></i> 2022 <span>Taraf</span> <span>&nbsp;&nbsp;</span> Developed by <a href="https://www.flixtechnology.com/"> Flix Technology</a></p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>