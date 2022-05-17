<footer>
    <div class="bg-color2">
        <section class="p-0">
            <div class="container-fluid">
                <div class="row footer-theme2 section-light footer-border custom-footer ">
                    <div class="col">
                        <div class="footer-block">
                            <div class="footer-container">
                                <div class="footer-title footer-mobile-title">
                                    <h4>about</h4>
                                </div>
                                <div class="footer-contant">
                                    @foreach ($setting as $setting )
                            <div class="footer-logo pa">
                                <img src="{{$setting->logo->getUrl()}}" alt="">
                                <h3>{!! $setting->{'slogan_'.app()->getLocale()} !!}</h3>
                            </div>
                            @endforeach
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col form-p p-0 tot">
                        <div class="footer-block">
                            <div class="footer-title footer-mobile-title">
                                @if (app()->getLocale() == 'ar')
                                <h4> رؤية عمان</h4>
                                    
                                @else
                                <h4> Oman Vision</h4>
                                    
                                @endif
                            </div>
                            <div class="footer-contant">
                                <img src="/images/oman.png" alt="" srcset="">
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
                                <div class="footer-contant pc">
                                    <ul class="contact-details me">
                                        @if (app()->getLocale() == 'ar')
                                        <li><i class="fa fa-map-marker"></i> موقعنا :{!! $contact->address !!}</li>
                                        
                                        
                                        <li><i class="fa fa-phone"></i>  هاتفنا على :   <a href="tel:{{$contact->phone}}"> {{$contact->phone}}</a> </li>
                                        @if ($contact->additional_phone)
                                            
                                        <li><i class="fa fa-phone"></i>  او على :<a href="tel:{{$contact->additional_phone}}"> {{$contact->additional_phone}}</a></li>
                                        @endif
                                        <li><i class="fa fa-envelope-o"></i>  راسلنا على : <a href="mailto:{{$contact->email}}">{{$contact->email}}</a></li>
                                        
                                    @else
                                    <li><i class="fa fa-map-marker"></i> Location :<p>Sultanate of Oman - Muscat - the high costs of the building of the Small and Medium Enterprises Development Authority, second floor, office No. 11.2</p></li>
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
                                    <li><a href="{{route('order','?language='.App::getLocale())}}">الطلبات</a> </li>
                                    <li><a href="{{route('contact','?language='.App::getLocale())}}">للتواصل</a> </li>
                                    <li><a href="http://webmail.6araff.com/">بوابة الايميل</a></li>
                                    <li><a href="{{route('login')}}">لوحة التحكم</a></li>
                                    @else
                                    <li><a href="{{route('taraf','?language='.App::getLocale())}}">Home</a></li>
                                    <li><a href="{{route('about','?language='.App::getLocale())}}">About Us</a></li>
                                    <li><a href="{{route('products','?language='.App::getLocale())}}">Products</a></li>
                                    <li><a href="{{route('blog','?language='.App::getLocale())}}">blog</a></li>
                                    <li><a href="{{route('order','?language='.App::getLocale())}}">Orders</a></li>
                                    <li><a href="{{route('contact','?language='.App::getLocale())}}">Contact Us</a></li>
                                    <li><a href="http://webmail.6araff.com/">Email-Gateway</a></li>
                                    <li><a href="{{route('login')}}">Dashboard</a></li>
                                    
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