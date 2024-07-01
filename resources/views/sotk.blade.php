@extends('layout.main')
@section('content')
    @include('partials.navbar_link')

    <section class="page-section pb-5 pt-5" id="sotk">
        <div class="card mx-5 px-4 px-lg-5">
            <h2 class="text-center mt-4">Struktur Organisasi</h2>
            <hr class="" />

            <div class="container px-4 px-lg-5 h-100 pt-8">
                <a href="kabiro" style="color: #000 !important;text-decoration:none!important">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <img src={{asset('assets/img/tegoch.jpg')}} alt="Avatar" class="image" height="400px">
                        <h4 class="text-black font-weight-bold pt-4">TEGOCH HADI NOEGROHO, SH</h4>
                        <h5 class="text-black font-weight-bold">Kepala Biro Kesejahteraan Rakyat Setda Provinsi</h5>
                        <h5 class="text-black font-weight-bold">Jawa Tengah</h5>
                    </div>
                </div>
            </div>
                        <hr class="" />

                        <div class="container px-4 px-lg-5 h-100 pt-8">
                            <a href="/kabagsatu" style="color: #000 !important;text-decoration:none!important">
                            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                                <div class="col-lg-8 align-self-end">
                                    <img src={{asset('assets/img/avatar.jpg')}} alt="Avatar" class="image" height="300px">
                                    <h4 class="text-black font-weight-bold pt-4">MUKHAMAD YUSUF, S.Ag, MM</h4>
                                    <h5 class="text-black font-weight-bold">Koordinator Keagamaan</h5>
                             </div>
                            </div>
                        </div>



                        <div class="row gx-4 gx-lg-5">
                            <div class="col-lg-4 col-md-6 text-center">
                                <a href="{{ URL::to('/tatausaha') }}" style="color: #000 !important;text-decoration:none!important">
                                    <div class="mt-5 mb-3">
                                        <img src={{asset('assets/img/avatar.jpg')}} alt="Avatar" class="image" height="200">
                                    </div>
                                    <h3 class="h6 mb-2">DWI FIBRIANTO, SKM</h3>
                                    <h3 class="h6 mb-2">Plt. Kepala Sub Bagian Tata Usaha</h3>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 text-center">
                                <a href="{{ URL::to('/sardik') }}" style="color: #000 !important;text-decoration:none!important">
                                    <div class="mt-5 mb-3">
                                        <img src={{asset('assets/img/avatar.jpg')}} alt="Avatar" class="image" height="200">
                                    </div>
                                    <h3 class="h6 mb-2">AGUNG PRIYONO, SE</h3>
                                    <h3 class="h6 mb-2">Sub Koordinator Sarana Pendidikan Keagamaan</h3>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 text-center">
                                <a href="{{ URL::to('/yangama') }}" style="color: #000 !important;text-decoration:none!important">
                                    <div class="mt-5 mb-3">
                                        <img src={{asset('assets/img/avatar.jpg')}} alt="Avatar" class="image" height="200">
                                    </div>
                                    <h3 class="h6 mb-2">n/a</h3>
                                    <h3 class="h6 mb-2">Sub Koordinator Pelayanan Kehidupan Beragama </h3>
                                </a>
                            </div>
                        </div>

                        <hr class="" />

                        <div class="container px-4 px-lg-5 h-100 pt-8">
                            <a href="{{ URL::to('/kabagdua') }}" style="color: #000 !important;text-decoration:none!important">
                            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                                <div class="col-lg-8 align-self-end">
                                    <img src={{asset('assets/img/avatar.jpg')}} alt="Avatar" class="image" height="300px">
                                    <h4 class="text-black font-weight-bold pt-4">GUNAWAN SUDHARSONO, SE, SH, M.Si</h4>
                                    <h5 class="text-black font-weight-bold">Koordinator Pendidikan, Kesehatan, dan Sosial</h5>
                             </div>
                            </div>
                        </div>

                        <div class="row gx-4 gx-lg-5">
                            <div class="col-lg-4 col-md-6 text-center">
                                <a href="{{ URL::to('/pendidikan') }}" style="color: #000 !important;text-decoration:none!important">
                                    <div class="mt-5 mb-3">
                                        <img src={{asset('assets/img/avatar.jpg')}} alt="Avatar" class="image" height="200">
                                    </div>
                                    <h3 class="h6 mb-2">ARIF HUSNI, S.Kom</h3>
                                    <h3 class="h6 mb-2">Sub Koordinator Pendidikan </h3>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 text-center">
                                <a href="{{ URL::to('/kesehatan') }}" style="color: #000 !important;text-decoration:none!important">
                                    <div class="mt-5 mb-3">
                                        <img src={{asset('assets/img/avatar.jpg')}} alt="Avatar" class="image" height="200">
                                    </div>
                                    <h3 class="h6 mb-2">ASIH LUH GATIE, SKM, M.Si</h3>
                                    <h3 class="h6 mb-2">Sub Koordinator Kesehatan</h3>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 text-center">
                                <a href="{{ URL::to('/kesehatan') }}" style="color: #000 !important;text-decoration:none!important">
                                    <div class="mt-5 mb-3">
                                        <img src={{asset('assets/img/avatar.jpg')}} alt="Avatar" class="image" height="200">
                                    </div>
                                    <h3 class="h6 mb-2">EDI BAWONO, S.I.Kom</h3>
                                    <h3 class="h6 mb-2">Sub Koordinator Sosial</h3>
                                </a>
                            </div>
                        </div>

                        <hr class="" />

                        <div class="container px-4 px-lg-5 h-100 pt-8">
                            <a href="{{ URL::to('/kabagtiga') }}" style="color: #000 !important;text-decoration:none!important">
                            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                                <div class="col-lg-8 align-self-end">
                                    <img src={{asset('assets/img/avatar.jpg')}} alt="Avatar" class="image" height="300px">
                                    <h4 class="text-black font-weight-bold pt-4">WORO BOEDISAYEKTI, S.Sos, M.Si</h4>
                                    <h5 class="text-black font-weight-bold">Koordinator Pemberdayaan Masyarakat, Keluarga Berencana, Kepemudaan dan Olahraga</h5>
                                    </a>
                             </div>
                            </div>
                        </div>

                        <div class="row gx-4 gx-lg-5">
                            <div class="col-lg-4 col-md-6 text-center">
                                <a href="{{ URL::to('/dukcapil') }}" style="color: #000 !important;text-decoration:none!important">
                                    <div class="mt-5 mb-3">
                                        <img src={{asset('assets/img/avatar.jpg')}} alt="Avatar" class="image" height="200">
                                    </div>
                                    <h3 class="h6 mb-2">ENY SURYANI, S.Pd, M.Dev, Plg</h3>
                                    <h3 class="h6 mb-2">Sub Koordinator Pemberdayaan Masyarakat Desa Kependudukan dan Pencatatan Sipil</h3>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 text-center">
                                <a href="{{ URL::to('/pppakb') }}" style="color: #000 !important;text-decoration:none!important">
                                    <div class="mt-5 mb-3">
                                        <img src={{asset('assets/img/avatar.jpg')}} alt="Avatar" class="image" height="200">
                                    </div>
                                    <h3 class="h6 mb-2">DWI PANGESTUTI, S.Sos</h3>
                                    <h3 class="h6 mb-2">Sub Koordinator Pemberdayaan Perempuan, Perlindungan Anak, Pengendalian Penduduk dan Keluarga Berencana</h3>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 text-center">
                                <a href="{{ URL::to('/pora') }}" style="color: #000 !important;text-decoration:none!important">
                                    <div class="mt-5 mb-3">
                                        <img src={{asset('assets/img/avatar.jpg')}} alt="Avatar" class="image" height="200">
                                    </div>
                                    <h3 class="h6 mb-2">BUDI MARTONO, SH, MM</h3>
                                    <h3 class="h6 mb-2">Sub Koordinator Kepemudaan dan Olahraga </h3>
                                </a>
                            </div>
                        </div>



    </section>

@endsection
