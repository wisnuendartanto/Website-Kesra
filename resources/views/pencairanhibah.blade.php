@extends('layout.main')
@section('content')
    @include('partials.navbar_link')

{{--  <!-- Contact-->  --}}
<section class="page-section pt-4" id="pencairanhibah" style="font-family: Merriweather Sans">
    <div class="container pt-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
               
                <p align="center"><img src={{ asset('assets/img/jateng.png') }} width="25%" class="tie-appear"></p>
                    <h4 align="center" style="margin: 15px 0 -10px 0;"><b>PENGUMUMAN</b></h4>
                    <h4 align="center" style="margin: 15px 0 -10px 0;"><b>PENCAIRAN DANA HIBAH</b></h4>
                    <h4 align="center" style="margin: 15px 0 50px 0;"><b>PEMERINTAH PROVINSI JAWA TENGAH</b></h4>
                                
                    <form action="" metod="GET">
                        <div class="imput group">
                            <input type="text" class="form-control" name="cari"
                            placeholder="Silahkan masukkan rekening yang terdaftar" value="">
                            <div class="input-group-oppend">
                            <div class="form-group" style="margin: 50px 0 20px 0;">
                            <a class="btn btn-primary" href="{{ URL::to('/hibahrule') }}" role="button">Lihat Hasil</a>
                            </div>
                        </div>
                    </form>
                    
                    
                 
                            
                                
                                
                            </div>
                        
                    </form>

            </div>
        </div>
    </div>
       
       
   
   
   
   
   
   
</section>
@endsection
