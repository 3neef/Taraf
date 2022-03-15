<footer class="footer-light">
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
                                
                            <h4>الصفحات</h4>
                            @else
                                
                            <h4>Pages</h4>
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
                            <h4>معلومات المتجر</h4>
                                
                            @else
                            <h4>store information</h4>
                                
                            @endif
                        </div>
                        <div class="footer-contant">
                            <ul class="contact-list">
                                <li><i class="fa fa-map-marker"></i>{!! $contact->address !!}
                                </li>
                                <li><i class="fa fa-phone"></i>{{$contact->phone}}</li>
                                @if ($contact->additional_phone)
                                    
                                <li><i class="fa fa-phone"></i>{{$contact->additional_phone}}</li>
                                @endif
                                <li><i class="fa fa-envelope-o"></i>Email Us: <a href="mailto:{{$contact->email}}">{{$contact->email}}</a></li>
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
</footer>