@extends('layout.main')
@section('content')
    @include('partials.navbar_link')

    <section class="page-section pb-5 pt-5" id="sotk">
        <div class="container text-center">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pt-3">
                    <li class="breadcrumb-item"><a href="{{ URL::to('/sotk') }}"
                            style="color: #000 !important;text-decoration:none!important">SOTK</a></li>
                    <li class="breadcrumb-item"><a href="{{ URL::to('/kabagsatu') }}"
                            style="color: #000 !important;text-decoration:none!important">Bagian 1</a></li>
                    <li class="breadcrumb-item"><a href="{{ URL::to('/kabagdua') }}"
                            style="color: #000 !important;text-decoration:none!important">Bagian 2</a></li>
                    <li class="breadcrumb-item"><a href="{{ URL::to('/kabagtiga') }}"
                            style="color: #000 !important;text-decoration:none!important">Bagian 3</a></li>
                </ol>

            </nav>

            <div class="row">
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="text-center mt-4">Kepala Biro Kesejahteraan Rakyat</h2>
                            <hr class="" />
                            <img src={{ asset('assets/img/tegoch.jpg') }} alt="Avatar" class="image" height="400px">
                            <h4 class="text-black font-weight-bold pt-4">TEGOCH HADI NOEGROHO, SH</h4>
                            <h5 class="text-black font-weight-bold">Kepala Biro Kesejahteraan Rakyat Setda Provinsi
                            </h5>
                            <h5 class="text-black font-weight-bold">Jawa Tengah</h5>
                            <hr class="" />
                            <h5 class="text-black font-weight-bold">Tugas Pokok dan Fungsi Biro Kesejahteraan Rakyat
                            </h5>
                            <h5 class="text-black font-weight-bold">(Pasal 55 dan 56)</h5>
                            <h6 class="text-black font-weight-bold">Berdasarkan Peraturan Gubernur Jawa Tengah nomor
                                70
                                tahun
                                2018 tentang Organisasi dan Tata Kerja Sekretariat Daerah Provinsi Jawa Tengah</h6>
                            <hr class="" />
                            <h4 class="text-black font-weight-bold pt-4">TUGAS</h4>
                            <p class="text-black font-weight-bold">Melaksanakan pengoordinasian penyusunan dan
                                analisis
                                kebijakan Daerah, pengoordinasian pelaksanaan tugas Perangkat Daerah,
                                pemantauan dan evaluasi pelaksanaan kebijakan Daerah, membantu pelaksanaan
                                tugas dan wewenang Gubemur sebagai wakil pemerintah pusat bidang
                                Kesejahteraan Rakyat, pelayanan administratif dan pembinaan sumber daya ASN
                                di bidang keagamaan, Pendidikan, Kebudayaan, Kesehatan, Sosial, Tenaga Kerja
                                Dan Transmigrasi, dan Pemberdayaan Masyarakat, Keluarga Berencana,
                                Kepemudaan dan Olahraga.</p>
                            <hr class="" />
                            <h4 class="text-black font-weight-bold pt-4">FUNGSI</h4>
                            <p class="text-black font-weight-bold">Pengoordinasian penyusunan dan analisis kebijakan
                                Daerahdi
                                bidang keagamaan, Pendidikan, Kebudayaan, Kesehatan, Sosial, Tenaga Kerja Dan
                                Transmigrasi,
                                dan
                                Pemberdayaan Masyarakat, Keluarga Berencana, Kepemudaan dan Olahraga.</p>
                            <p class="text-black font-weight-bold">Penggoordinasi pelaksanaan tugas Perangkat Daerah
                                di
                                bidang
                                keagamaan, Pendidikan, Kebudayaan, Kesehatan, Sosial, Tenaga Kerja Dan Transmigrasi,
                                dan
                                Pemberdayaan Masyarakat, Keluarga Berencana, Kepemudaan dan Olahraga.</p>
                            <p class="text-black font-weight-bold">Pemantauan dan evaluasi pelaksanaan kebijakan
                                Daerah
                                di
                                bidang keagamaan, Pendidikan, Kebudayaan, Kesehatan, Sosial, Tenaga Kerja Dan
                                Transmigrasi,
                                dan
                                Pemberdayaan Masyarakat, Keluarga Berencana, Kepemudaan dan Olahraga</p>
                            <p class="text-black font-weight-bold">Pengoordinasian pelaksanaan tugas dan wewenang
                                Gubemur
                                sebagai wakil pemerintah pusat bidang Kesejahteraan Rakyat.</p>
                            <p class="text-black font-weight-bold">Pelaksanaan pelayanan administrasi dan pembinaan
                                sumber
                                daya
                                ASN di bidang keagamaan, Pendidikan, Kebudayaan, Kesehatan, Sosial, Tenaga Kerja Dan
                                Transmigrasi, dan Pemberdayaan Masyarakat, Keluarga Berencana, Kepemudaan dan
                                Olahraga.
                            </p>
                            <p class="text-black font-weight-bold">Pelaksanaan tugas lain yang diberikan oleh
                                Asisten
                                Pemerintahan dan Kesejahteraan Rakyat.</p>
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
                                <div class="card-body">
                                    <a href="{{ URL::to('/kabagsatu') }}" style="color: #000 !important;text-decoration:none!important">
                                    <img src={{ asset('assets/img/avatar.jpg') }} alt="Avatar" class="image"
                                        height="150">
                                    <h5 class="card-title pt-3">Koordinator Keagamaan</h5>
                                    <p class="card-text">Tugas Pokok dan Fungsi Koordinator Keagamaan</p>
                                    </a>
                                </div>
                                <hr class="" />
                                <div class="card-body">
                                    <a href="{{ URL::to('/kabagdua') }}" style="color: #000 !important;text-decoration:none!important">
                                    <img src={{ asset('assets/img/avatar.jpg') }} alt="Avatar" class="image"
                                        height="150">
                                    <h5 class="card-title pt-3">Koordinator Pendidikan, Kesehatan, dan Sosial</h5>
                                    <p class="card-text">Tugas Pokok dan Fungsi Koordinator Pendidikan, Kesehatan,
                                        dan
                                        Sosial
                                    </p>
                                    </a>
                                </div>
                                <hr class="" />
                                
                                <div class="card-body">
                                    <a href="{{ URL::to('/kabagtiga') }}" style="color: #000 !important;text-decoration:none!important">
                                    <img src={{ asset('assets/img/avatar.jpg') }} alt="Avatar" class="image"
                                        height="150">
                                    <h5 class="card-title pt-3">Sub Koordinator Pelayanan Kehidupan Beragama</h5>
                                    <p class="card-text">Tugas Pokok dan Fungsi Koordinator Pemberdayaan Masyarakat,
                                        Keluarga
                                        Berencana, Kepemudaan dan Olahraga</p>
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
    </section>
@endsection
