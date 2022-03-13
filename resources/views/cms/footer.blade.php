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
                                  @if ($link->name == 'facebook')
                                  <li><a href="{{$link->url}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                  @endif  
                                  @if ($link->name == 'twitter')
                                      
                                  <li><a href="{{$link->url}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                  @endif
                                  @if ($link->name == 'instagram')
                                      
                                  <li><a href="{{$link->url}}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                  @endif
                                  @if ($link->name == 'linkedin')
                                      
                                  <li><a href="{{$link->url}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                  @endif
                                  @if ($link->name == 'youtube')              
                                  <li><a href="{{$link->url}}"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                  @endif
                                  
                                @endforeach
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
                                a
                                <li><i class="fa fa-fax"></i>Fax: 123456</li>
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
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="payment-card-bottom">
                        <ul>
                            <li>
                                <a href="#"><img src="/assets/images/icon/visa.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/assets/images/icon/mastercard.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/assets/images/icon/paypal.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/assets/images/icon/american-express.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/assets/images/icon/discover.png" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>