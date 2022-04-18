<header>
    <div class="mobile-fix-option"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-menu">
                    <div class="menu-left">
                        @foreach ($setting as $setting )
                        
                        <div class="brand-logo">
                            <a href="{{route('taraf','?language='.App::getLocale())}}"><img src="{{$setting->logo->getUrl()}}"
                                    class="img-fluid blur-up lazyload" alt="" width="60" height="50"></a>
                        </div>
                        @endforeach
                    </div>
                    <div class="menu-right pull-right">
                        <div>
                            <nav id="main-nav">
                                <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                    @if (App::getLocale() == 'ar')
                                    <li>
                                        <div class="mobile-back text-end">عودة<i class="fa fa-angle-left ps-2"
                                                aria-hidden="true"></i></div>
                                    </li>
                                    <li><a href="{{route('taraf','?language='.App::getLocale())}}">الرئيسية</a></li>
                                    <li><a href="{{route('about','?language='.App::getLocale())}}">عن المؤسسة</a></li>
                                    <li><a href="{{route('products','?language='.App::getLocale())}}">المنتجات</a></li>
                                    <li><a href="{{route('contact','?language='.App::getLocale())}}">للتواصل</a></li>
                                    <li>
                                        <a href="{{route('blog')}}">مدونة</a>
                                    </li>
                                    <li> <a href="tel:{{$contact->phone}}" class="rtl"><i class="fa fa-phone" aria-hidden="true"></i>  اتصل بنا  {{$contact->phone}}</a></li>
                                    @else
                                    <li>
                                        <div class="mobile-back text-end">Back<i class="fa fa-angle-right ps-2"
                                                aria-hidden="true"></i></div>
                                    </li>
                                    <li><a href="{{route('taraf','?language='.App::getLocale())}}">Home</a></li>
                                    <li><a href="{{route('about','?language='.App::getLocale())}}">About Us</a></li>
                                    <li><a href="{{route('products','?language='.App::getLocale())}}">Products</a></li>
                                    <li><a href="{{route('contact','?language='.App::getLocale())}}">Contact Us</a></li>
                                    <li>
                                        <a href="{{route('blog')}}">blog</a>
                                        
                                    </li>
                                    <li> <a href="tel:{{$contact->phone}}" class="rtl"><i class="fa fa-phone" aria-hidden="true"></i> Call us:  {{$contact->phone}}</a></li>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                      
                    </div>
                    <div class="menu-left">
                        <div class="brand-logo">
                            <a href="{{route('taraf','?language='.App::getLocale())}}"><img src="{{asset('images/logo.png')}}"
                                    class="img-fluid blur-up lazyload" alt="" width="60" height="50"></a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>