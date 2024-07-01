@extends('layout.main')
@section('content')
    @include('partials.navbar_link')

    <section class="page-section pb-5 pt-5" id="sotk">
        <div class="container text-center">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pt-3">
                    <li class="breadcrumb-item"><a href="{{ URL::to('/sotk') }}"
                            style="color: #000 !important;text-decoration:none!important">SOTK</a></li>
                    <li class="breadcrumb-item"><a href="{{ URL::to('/kabiro') }}"
                            style="color: #000 !important;text-decoration:none!important">Kepala Biro Kesra</a></li>
                            <li class="breadcrumb-item"><a href="{{ URL::to('/kabagsatu') }}"
                                style="color: #000 !important;text-decoration:none!important">Bagian 1</a></li>
                        <li class="breadcrumb-item"><a href="{{ URL::to('/kabagdua') }}"
                                style="color: #000 !important;text-decoration:none!important">Bagian 2</a></li>
                        <li class="breadcrumb-item"><a href="{{ URL::to('/kabagtiga') }}" style="color: #000 !important;text-decoration:none!important">Bagian 3</a></li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="text-center mt-4">Bagian Pendidikan, Kebudayaan, Kesehatan, Sosial, Tenaga Kerja Dan
                                Transmigrasi</h2>
                            <hr class="" />
                            <img src={{ asset('assets/img/avatar.jpg') }} alt="Avatar" class="image" height="300px">
                            <h4 class="text-black font-weight-bold pt-4">GUNAWAN SUDHARSONO, SE, SH, M.Si</h4>
                            <h5 class="text-black font-weight-bold">Analis Kebijakan Ahli Madya</h5>
                            <h5 class="text-black font-weight-bold">Selaku</h5>
                            <h5 class="text-black font-weight-bold">Koordinator Pendidikan, Kesehatan, dan Sosial</h5>
                            <hr class="" />
                            <h5 class="text-black font-weight-bold">Tugas Pokok dan Fungsi Bagian Pendidikan, Kebudayaan,
                                Kesehatan, Sosial, Tenaga Kerja Dan
                                Transmigrasi pada Biro Kesejahteraan Rakyat</h5>
                            <h5 class="text-black font-weight-bold">(Pasal 64 dan 65)</h5>
                            <h6 class="text-black font-weight-bold">Berdasarkan Peraturan Gubernur Jawa Tengah nomor 70
                                tahun 2018 tentang Organisasi dan Tata Kerja Sekretariat Daerah Provinsi Jawa Tengah</h6>
                            <hr class="" />
                            <h4 class="text-black font-weight-bold pt-4">TUGAS</h4>
                            <p class="text-black font-weight-bold">Melaksanakan penyiapan pengoordinasian penyusunan dan
                                analisis kebijakan Daerah, pengoordinasian pelaksanaan tugas Perangkat Daerah,
                                pemantauan dan evaluasi pelaksanaan kebijakan Daerah, penyiapan bahan
                                pengoordinasian pelaksanaan tugas Perangkat Gubemur bidang Pendidikan,
                                Kebudayaan, Kesehatan, Sosial, Tenaga Kerja Dan Transmigrasi, pelayanan
                                adrninistratif dan pembinaan sumber daya ASN di bidang pendidikan, kebudayaan,
                                kesehatan, sosial, tenaga kerja dan transmigrasi.</p>
                            <hr class="" />
                            <h4 class="text-black font-weight-bold pt-4">FUNGSI</h4>
                            <p class="text-black font-weight-bold">Penyiapan bahan pengoordinasian penyusunan dan analisis
                                kebijakan Daerah, pengoordinasian pelaksanaan tugas Perangkat Daerah, pemantauan dan
                                evaluasi pelaksanaan kebijakan Daerah, pelayanan adrninistratif dan pembinaan sumber daya
                                ASN di bidang Kesehatan</p>
                            <p class="text-black font-weight-bold">Penyiapan bahan pengoordinasian penyusunan dan analisis
                                kebijakan Daerah, pengoordinasian pelaksanaan tugas Perangkat Daerah, pemantauan dan
                                evaluasi pelaksanaan kebijakan Daerah, pelayanan adrninistratif dan pembinaan sumber daya
                                ASN di bidang Sosial, Tenaga Kerja Dan Transmigrasi</p>
                            <p class="text-black font-weight-bold">Penyiapan bahan pengoordinasian pelaksanaan tugas
                                Perangkat Gubemur bidang Pendidikan, Kebudayaan, Kesehatan, Sosial, Tenaga Kerja Dan
                                Transmigrasi</p>
                            <p class="text-black font-weight-bold">Penyiapan bahan pengoordinasian pelaksanaan kegiatan
                                secara terpadu dan pelaporan lingkup Biro di bidang pelayanan administrasi ketatausahaan,
                                pengelolaan sistem informasi dan rumah tangga Biro</p>
                            <p class="text-black font-weight-bold">Pelaksanaan tugas lain yang diberikan oleh Kepala Biro
                                Kesejahteraan Rakyat sesuai dengan tugas dan fungsinya.</p>

                                <hr class="" />
                                <h4 class="text-center mt-4">Membidangi</h4>
                                <hr class="" />
                                <div class="container text-center">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card-body">
                                                <a href="{{ URL::to('/pendidikan') }}" style="color: #000 !important;text-decoration:none!important">
                                                    <img src={{ asset('assets/img/avatar.jpg') }} alt="Avatar" class="image" height="150">
                                                    <h5 class="card-title pt-3">Sub Koordinator Pendidikan</h5>
                                                    <p class="card-text">Tugas Sub Koordinator Pendidikan</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="" />
                                    <div class="col">
                                        <a href="{{ URL::to('/kesehatan') }}" style="color: #000 !important;text-decoration:none!important">
                                            <div class="card-body">
                                                <img src={{ asset('assets/img/avatar.jpg') }} alt="Avatar" class="image" height="150">
                                                <h5 class="card-title pt-3">Sub Koordinator Kesehatan</h5>
                                                <p class="card-text">Tugas Sub Koordinator Kesehatan</p>
                                            </a>
                                        </div>
                                    </div>
                                    <hr class="" />
                                    <div class="col">
                                        <a href="{{ URL::to('/sosial') }}" style="color: #000 !important;text-decoration:none!important">
                                            <div class="card-body">
                                                <img src={{ asset('assets/img/avatar.jpg') }} alt="Avatar" class="image" height="150">
                                                <h5 class="card-title pt-3">Sub Koordinator Sosial</h5>
                                                <p class="card-text">Tugas Sub Koordinator Sosial</p>
                                            </a>
                                        </div>
                                    </div>
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
            <div class="card">
                <img src={{ asset('assets/img/investasi.jpg') }} width="100%" class="tie-appear">
            </div>
            <div class="card pt-2">
                <a class="twitter-timeline" data-height="600"
                    href="https://twitter.com/birokesrajateng?ref_src=twsrc%5Etfw">Tweets by birokesrajateng</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
        </div>
        </div>
        </section>
        @endsection

