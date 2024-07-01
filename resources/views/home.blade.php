@extends('layout.main')

@section('content')
@include('partials.navbar')
<!-- Masthead-->
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100 pt-8">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <img src="assets/img/logojateng.png" alt="Avatar" class="image" height="100">
                <hr class="" />
                <h4 class="text-white font-weight-bold">Selamat Datang di Portal Resmi</h4>
                <h3 class="text-white font-weight-bold">Biro Kesejahteraan Rakyat Setda Provinsi</h3>
                <h3 class="text-white font-weight-bold">Jawa Tengah</h3>
                <hr class="divider" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 mb-5">Pelayanan administratif dan pembinaan sumber daya ASN di Bidang
                    Keagamaan, Pendidikan, Kebudayaan, Kesehatan, Sosial, Tenaga Kerja dan Transmigrasi,
                    Pemberdayaan Masyarakat, Keluarga Berencana, Kepemudaan dan Olahraga</p>

                {{-- <!-- Button trigger modal -->
                    <div class="col-12 d-flex justify-content-center pb-5">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">Apa Saja Kegiatan di Jawa Tengah ?</button> --}}

                <!-- Modal--> 
                <!--<div class="modal" id="staticBackdrop" tabindex="-1" aria-labelledby="staticBackdropLabel">-->
                <!--    <div class="modal-dialog">-->
                <!--        <div class="modal-content">-->
                <!--            <div class="modal-header">-->
                <!--                <h5 class="modal-title" id="staticBackdropLabel"></h5>-->
                <!--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
                <!--            </div>-->
                <!--            <div class="modal-body">-->
                <!--                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">-->

                <!--                    <div class="carousel-inner">-->
                <!--                        @foreach ($Ads as $k => $r)-->
                <!--                        <div class="carousel-item {{ $k == 0 ? 'active' : '' }}">-->
                <!--                            <img src="{{ asset($r->image) }}" class="w-100" alt="...">-->
                <!--                        </div>-->
                <!--                        @endforeach-->
                <!--                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">-->
                <!--                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
                <!--                            <span class="visually-hidden">Previous</span>-->
                <!--                        </button>-->
                <!--                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">-->
                <!--                            <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
                <!--                            <span class="visually-hidden">Next</span>-->
                <!--                        </button>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
</header>

<!-- Tugas dan Fungsi-->
<section class="page-section bg-primary" id="tugas-dan-fungsi">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-white mt-0">Tugas Pokok dan Fungsi</h2>
                <hr class="divider divider-light" />
                <p class="text-white-75 mb-4 fs-5">Melaksanakan pengoordinasian penyusunan dan analisis kebijakan
                    Daerah,
                    pengoordinasian pelaksanaan tugas Perangkat Daerah, pemantauan dan evaluasi pelaksanaan
                    kebijakan Daerah, membantu pelaksanaan tugas dan wewenang Gubemur sebagai wakil pemerintah pusat
                    bidang Kesejahteraan Rakyat, pelayanan administratif dan pembinaan sumber daya ASN di bidang
                    keagamaan, Pendidikan, Kebudayaan, Kesehatan, Sosial, Tenaga Kerja Dan Transmigrasi, dan
                    Pemberdayaan Masyarakat, Keluarga Berencana, Kepemudaan dan Olahraga.</p>
            </div>
        </div>
    </div>
</section>
{{--  <!-- Layanan-->  --}}
<section class="page-section" id="layanan">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0">Tentang Layanan</h2>
        <hr class="divider" />
        <div class="row gx-4 gx-lg-5">
            <div class="col-lg-3 col-md-6 text-center">
                <a href="https://csr.kesra.jatengprov.go.id/" style="color: #000 !important;text-decoration:none!important">
                    <div class="mt-5">

                        <h3 class="h4 mb-2"></h3>
                        <p class="text-muted mb-0"></p>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
            <a href="https://silap-online.kesra.jatengprov.go.id/" style="color: #000 !important;text-decoration:none!important">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Silap Online</h3>
                    <p class="text-muted mb-0">Sistem Pelaporan Online Desa Dampingan</p>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 text-center">
        <a href="https://csr.kesra.jatengprov.go.id/" style="color: #000 !important;text-decoration:none!important">
            <div class="mt-5">
                <div class="mb-2"><i class="bi bi-journal fs-1 text-primary"></i></div>
                <h3 class="h4 mb-2">Silap CSR</h3>
                <p class="text-muted mb-0">Sistem Pelaporan Online CSR</p>
        </a>
    </div>
</div>
<div class="col-lg-3 col-md-6 text-center">
    <a href="https://silap-online.kesra.jatengprov.go.id/" style="color: #000 !important;text-decoration:none!important">
        <div class="mt-5">
            <h3 class="h4 mb-2"></h3>
            <p class="text-muted mb-0"></p>
    </a>
</div>
    </div>
    </div>
    </div>
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-lg-3 col-md-6 text-center">
                <a href="https://www.lapor.go.id/" style="color: #000 !important;text-decoration:none!important">
                    <div class="mt-5">
                        <img src={{ asset('assets/img/logo_lapor.jpeg') }} width="40%" class="tie-appear">
                        <h3 class="h4 mb-2"></h3>
                        <p class="text-muted mb-0">Layanan Aspirasi dan Pengaduan Online Rakyat</p>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
            <a href="http://wame.sipandu.co.id/" style="color: #000 !important;text-decoration:none!important">
                <div class="mt-5">
                    <img src={{ asset('assets/img/logo_sipandu.png') }} width="40%" class="tie-appear">
                    <h3 class="h4 mb-2"></h3>
                    <p class="text-muted mb-0">Sistem Informasi Layanan Terpadu</p>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 text-center">
        <a href="https://ppid.jatengprov.go.id/" style="color: #000 !important;text-decoration:none!important">
            <div class="mt-5">
                <img src={{ asset('assets/img/logo_ppid.jpeg') }} width="40%" class="tie-appear">
                <h3 class="h4 mb-2"></h3>
                <p class="text-muted mb-0">Pusat Pelayanan Informasi Publik Daerah</p>
        </a>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 text-center">
        <a href="https://laporgub.jatengprov.go.id/" style="color: #000 !important;text-decoration:none!important">
            <div class="mt-5">
                <img src={{ asset('assets/img/Logo_laporgub.png') }} width="40%" class="tie-appear">
                <h3 class="h4 mb-2"></h3>
                <p class="text-muted mb-0">Laporan Pengaduan Online Pemerintah Provinsi Jawa Tengah</p>
        </a>
    </div>
    </div>
    </div>
    </div>
    <div class="container px-1 px-lg-1">
        
        <div class="col-lg-12 col-md-12 text-center">
            <a href="https://jdih.jatengprov.go.id/" style="color: #000 !important;text-decoration:none!important">
                <div class="mt-5">
                    <img src={{ asset('assets/img/jdih3.jpg') }} width="40%" class="tie-appear">
                    <h3 class="h4 mb-2"></h3>
                    <p class="text-muted mb-0">Jaringan Dokumentasi dan Informasi Hukum</p>
                    <p class="text-muted mb-0">Provinsi Jawa Tengah</p>
            </a>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
</section>
<!-- Portfolio-->
<div id="dokumentasi">
    <div class="container-fluid p-0">
        <h2 class="text-center mt-0">Dokumentasi Kegiatan</h2>
        <hr class="divider" />
        <div class="row g-0">
            @foreach ($article as $r)
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="{{ URL::to('article') . '/' . $r->slug }}" title="{{ $r->name }}">
                    <img class="img-fluid" href="#" src="{{ asset($r->image) }}" alt="..." />
                    <div class="portfolio-box-caption">
                        {{-- <div class="project-category text-black-50">{{$r->category_name}}
                    </div>
                    <div class="project-name text-black-50">{{$r->title}}</div> --}}
            </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
</div>



<!-- Contact-->
<section class="page-section pb-5 pt-5" id="contact" style="font-family: Merriweather Sans">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="mt-0">Alamat Kantor</h2>
                <hr class="divider" />
                <div>Jalan Pahlawan No. 9 Semarang Kode Pos 50243</div>
                <div><i class="bi bi-telephone me-2"></i>Telepon : +62 (024) 8311174 (20 saluran)</div>
                <div><i class="bi bi-printer me-2"></i>Faksimile : (024) 8311266</div>
                <div><i class="bi bi-envelope me-2"></i>E-mail : kesraprovjateng@gmail.com</div>
            </div>
        </div>
    </div>
</section>
<!-- Sosmed-->
<div class="container pb-5" style="font-family: Merriweather Sans">
    <div class="row">
        <div class="col-xs-12 col-md-4 text-center">
            <a href="https://www.instagram.com/birokesrajateng/?hl=id" style="color: #000 !important;text-decoration:none!important">
                <div><img src="assets/img/instagram.png" alt="Avatar" class="image" height="25"></i>
                    @birokesrajateng <img src="assets/img/verified.png" alt="Avatar" class="image" height="15">
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-md-4 text-center">
            <a href="https://www.facebook.com/kesra.jatengprov" style="color: #000 !important;text-decoration:none!important">
                <div><img src="assets/img/facebook.png" alt="Avatar" class="image" height="25"></i> Biro Kesra
                    Setda Prov. Jateng <img src="assets/img/verified.png" alt="Avatar" class="image" height="15">
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-md-4 text-center">
            <a href="https://twitter.com/birokesrajateng" style="color: #000 !important;text-decoration:none!important">
                <div><img src="assets/img/twitter.png" alt="Avatar" class="image" height="25"></i>
                    @birokesrajateng <img src="assets/img/verified.png" alt="Avatar" class="image" height="15">
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        $("#staticBackdrop").modal("show");
    });
</script>
@endsection