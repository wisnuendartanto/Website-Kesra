@extends('layout.main')
@section('content')
    @include('partials.navbar_link')


    <section class="page-section pb-5 pt-5" id="post">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body">

                            <!-- Title-->
                            <div id="kegiatan">
                                <div class="container-fluid pt-2 pb-5">
                                    <h2 class="text-center mt-0">{{ $article->title }}</h2>
                                </div>
                            </div>

                            <div class="container pb-4">
                                <!-- Post-->
                                <img src="{{ asset($article->image) }}" class="w-100" alt="...">
                            </div>

                            <div class="container w-90" style="font-family: Merriweather Sans">
                                <!-- artikel-->
                                {!! $article->content !!}
                            </div>

                            <!-- share artikel-->
                            <div class="col-12 d-flex justify-content-center pb-2">
                                <h4>Bagikan :</h4>
                            </div>

                            <div class="col-12 d-flex justify-content-center pb-5">
                                
                                
                                

                                <!-- AddToAny BEGIN -->
                                <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                    <a class="a2a_button_twitter"></a>
                                    <a class="a2a_button_facebook"></a>
                                    <a class="a2a_button_whatsapp"></a>
                                    <a class="a2a_button_telegram"></a>
                                </div>

                                <script async src="https://static.addtoany.com/menu/page.js"></script>

                                <!-- AddToAny END -->

                            </div>





                        </div>
                        
                        
                        
                        
                    </div>
                    
                    
                    
                    
                </div>
                
                
                
<div class="col-sm-4">
            <div class="card">
                <img src={{ asset('assets/img/kanal_laporgub.jpeg') }} width="100%" class="tie-appear">
            </div>
            <div class="card">
                <img src={{ asset('assets/img/lapor.jpg') }} width="100%" class="tie-appear">
            </div>
            
            <div class="col-lg-12 col-md-12 text-center">
            <a href="https://jdih.jatengprov.go.id/" style="color: #000 !important;text-decoration:none!important">
                <div class="mt-5">
                    <img src={{ asset('assets/img/jdih3.jpg') }} width="100%" class="tie-appear">
                    <h3 class="h4 mb-2"></h3>
                    
            </a>
        </div>
        
            <div class="card">
                <img src={{ asset('assets/img/investasi.jpg') }} width="100%" class="tie-appear">
            </div>
            <div class="card">
                 
            </div>
            
            
            
            
            <div class="card">
                <a class="twitter-timeline" data-height="700"
                    href="https://twitter.com/birokesrajateng?ref_src=twsrc%5Etfw">Tweets by birokesrajateng</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            
            
            
            
        </div>
        </div>
        </div>
    </section>
@endsection
