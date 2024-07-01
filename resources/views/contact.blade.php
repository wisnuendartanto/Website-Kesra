@extends('layout.main')
@section('content')
    @include('partials.navbar_link')

    <section class="page-section pb-5 pt-5" id="sotk">
        <div class="card mx-5 px-4 px-lg-5">
            <h2 class="text-center mt-4">Alamat Kantor</h2>
            <hr class="" />
{{--  <!-- Contact-->  --}}
<section class="page-section pb-5 pt-4" id="contact" style="font-family: Merriweather Sans">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="mt-0"></h2>
                <img src={{ asset('assets/img/jateng.png') }} width="25%" class="tie-appear">
                <hr class= />
                <div>Jalan Pahlawan No. 9 Semarang Kode Pos 50243</div>
                <div><i class="bi bi-telephone me-2"></i>Telepon : +62 (024) 8311174 (20 saluran)</div>
                <div><i class="bi bi-printer me-2"></i>Faksimile : (024) 8311266</div>
                <div><i class="bi bi-envelope me-2"></i>E-mail : kesraprovjateng@gmail.com</div>
                <hr class= />
            </div>
       
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1345505035033!2d110.4182863147573!3d-6.993429870434073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b674247cb8d%3A0xff776ca1db921c0d!2sJl.%20Pahlawan%20No.9%2C%20Mugassari%2C%20Kec.%20Semarang%20Sel.%2C%20Kota%20Semarang%2C%20Jawa%20Tengah%2050249!5e0!3m2!1sid!2sid!4v1668484029797!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
   </div>
</section>
{{--  <!-- Sosmed-->  --}}
<hr class="" />
<h2 class="text-center mt-4">Tentang Kami</h2>
<hr class="" />
<div class="container pb-5" style="font-family: Merriweather Sans">
    <div class="row">
        <div class="col-xs-12 col-md-4 text-center">
            <a href="https://www.instagram.com/birokesrajateng/?hl=id" style="color: #000 !important;text-decoration:none!important">
                <img src={{ asset('assets/img/instagram.JPG') }} width="35%" class="tie-appear">
                <div><img src={{ asset('assets/img/instagram.png') }} width="8%" class="tie-appear">
                    @birokesrajateng <img src={{ asset('assets/img/verified.png') }} width="4%" class="tie-appear">
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-md-4 text-center">
            <a href="https://www.facebook.com/kesra.jatengprov" style="color: #000 !important;text-decoration:none!important">
                <img src={{ asset('assets/img/Facebook.JPG') }} width="35%" class="tie-appear">
                <div><img src={{ asset('assets/img/facebook.png') }} width="8%" class="tie-appear"> Biro Kesra
                    Setda Prov. Jateng <img src={{ asset('assets/img/verified.png') }} width="4%" class="tie-appear">
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-md-4 text-center">
            <a href="https://twitter.com/birokesrajateng" style="color: #000 !important;text-decoration:none!important">
                <img src={{ asset('assets/img/Twitter.jpeg') }} width="35%" class="tie-appear">
                <div><img src={{ asset('assets/img/twitter.png') }} width="8%" class="tie-appear">
                    @birokesrajateng <img src={{ asset('assets/img/verified.png') }} width="4%" class="tie-appear">
                </div>
            </a>
        </div>
    </div>
</div>



    </section>
@endsection
