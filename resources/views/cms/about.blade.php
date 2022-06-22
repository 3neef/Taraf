@extends('layouts.cms')
@section('content')
      <!-- breadcrumb start -->
      <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        @if (App::getLocale() == 'ar')
                        <h2>عن المؤسسة</h2>
                            
                        @else
                            <h2>About Us</h2>
                        @endif
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        @if (App::getLocale() == 'ar')
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('taraf')}}">الرئيسية</a></li>
                            <li class="breadcrumb-item active" aria-current="page">عن المؤسسة</li>
                        </ol>
                        
                        @else
                        <ol class="breadcrumb rtl">
                            <li class="breadcrumb-item"><a href="{{route('taraf')}}">Home</a></li>
                            <li class="breadcrumb-item active " aria-current="page">About us</li>
                        </ol>
                            
                        @endif
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->


    @foreach ($about as $item)
    <!-- about section start -->
    <section class="about-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @foreach ($item->images as $media )
                        
                    <div class="banner-section">
                        <img src="{{ $media->getUrl() }}"
                        class="img-fluid blur-up lazyload" alt="">
                    </div>
                    @endforeach
                 
                    
                </div>
                <div class="col-sm-12">
                    <h4>{{ $item->{'title_'.app()->getLocale()} }}</h4>
                    <p>{{ $item->{'title_'.app()->getLocale()} }}</p>
                    <p>{!! $item->{'description_'.app()->getLocale()} !!}</p>
                </div>
            </div>
        </div>
    </section>
    @endforeach
    <!-- about section end -->


    <!-- how to start section start -->
    <section class="section-b-space become-vendor">
        <div class="container">
            {{-- @if (App::getLocale() == 'ar')
                
            <h4>قيم المؤسسة</h4>
            @else
                
            <h4>Values and goals</h4>
            @endif --}}
            <div class="step-bg">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="step-box">
                            <div>
                                <div class="steps"><i class="fa fa-eye" aria-hidden="true"></i></div>
                                @if (App::getLocale() == 'ar')
                             
                                <h4>رؤيتنا</h4>
                                
                                @else
                                <h4>Visions</h4>
                                @endif
                                @foreach ($visions as $vision)
                                    
                                <p>&#9867;{!! $vision->{'description_'.app()->getLocale()} !!}</p> <br>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="step-box">
                            <div>
                                <div class="steps"><i class="fa fa-bullseye" aria-hidden="true"></i></div>
                                @if (App::getLocale() == 'ar')
                             
                                <h4>رسالتنا</h4>
                                
                                @else
                                <h4>Missions</h4>
                                @endif
                                @foreach ($missions as $mission)
                                    
                                <p>&#9867;{!! $mission->{'description_'.app()->getLocale()} !!}</p> <br>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="step-box">
                            <div>
                                <div class="steps"><i class="fa fa-check" aria-hidden="true"></i> </div>
                                @if (App::getLocale() == 'ar')
                                
                                <h4>قيمنا</h4>
                                
                                @else
                               
                                <h4>Values</h4>
                                @endif
                                @foreach ($values as $value)
                                    
                                <p>&#9867;{!! $value->{'description_'.app()->getLocale()} !!}</p> <br>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="step-box">
                            <div>
                                <div class="steps"><i class="fa fa-compass" aria-hidden="true"></i></div>
                                @if (App::getLocale() == 'ar')
                                
                                <h4>أهدافنا</h4>
                                
                                @else
                                <h4>goals</h4>
                                @endif
                                @foreach ($goals as $goal)
                                    
                                <p>&#9867;{!! $goal->{'description_'.app()->getLocale()} !!}</p> <br>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- how to start section end -->

     <!--Team start-->
     <section id="team" class="team section-b-space slick-default-margin ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Our Team</h2>
                    <div class="team-4">
                       @foreach ($teams as $team)
                       <div>
                           <div>
                               <img src="{{$team->photo->getUrl()}}" class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>
                            <h4>{{$team->name}}</h4>
                            <h6>{{$team->title}}</h6>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Team ends-->

@endsection