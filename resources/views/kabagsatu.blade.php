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
                        <li class="breadcrumb-item"><a href="{{ URL::to('/kabagtiga') }}"
                            style="color: #000 !important;text-decoration:none!important">Bagian 3</a></li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="text-center mt-4">Bagian Keagamaan</h2>
                            <hr class="" />
                            <img src={{ asset('assets/img/avatar.jpg') }} alt="Avatar" class="image" height="300px">
                            <h4 class="text-black font-weight-bold pt-4">MUKHAMAD YUSUF, S.Ag, MM</h4>
                            <h5 class="text-black font-weight-bold">Analis Kebijakan Ahli Madya</h5>
                            <h5 class="text-black font-weight-bold">Selaku</h5>
                            <h5 class="text-black font-weight-bold">Koordinator Keagamaan</h5>
                            <hr class="" />
                            <h5 class="text-black font-weight-bold">Tugas Pokok dan Fungsi Bagian Keagamaan</h5>
                            <h5 class="text-black font-weight-bold">(Pasal 58 dan 59)</h5>
                            <h6 class="text-black font-weight-bold">Berdasarkan Peraturan Gubernur Jawa Tengah nomor 70
                                tahun 2018
                                tentang Organisasi dan Tata Kerja Sekretariat Daerah Provinsi Jawa Tengah</h6>
                            <hr class="" />
                            <h4 class="text-black font-weight-bold pt-4">TUGAS</h4>
                            <p class="text-black font-weight-bold">Melaksanakan penyiapan pengoordinasian penyusunan dan
                                analisis
                                kebijakan Daerah, pengoordinasian pelaksanaan tugas Perangkat Daerah, pemantauan dan
                                evaluasi
                                pelaksanaan kebijakan Daerah, penyiapan bahan pengoordinasian pelaksanaan tugas Perangkat
                                Gubemur
                                bidang keagamaan, pelayanan administratif dan pembinaan surnber daya ASN di bidang
                                keagamaan.</p>
                            <hr class="" />
                            <h4 class="text-black font-weight-bold pt-4">FUNGSI</h4>
                            <p class="text-black font-weight-bold">Penyiapan bahan pengoordinasian penyusunan dan analisis
                                kebijakan
                                Daerah, pengoordinasian pelaksanaan tugas Perangkat Daerah, pemantauan dan evaluasi
                                pelaksanaan
                                kebijakan Daerah, pelayananadministratif dan pembinaan sumber daya ASN di bidang pelayanan
                                kehidupan
                                beragama.</p>
                            <p class="text-black font-weight-bold">Penyiapan bahan pengoordinasian penyusunan dan analisis
                                kebijakan
                                Daerah, pengoordinasian pelaksanaan tugas Perangkat Daerah, pemantauan dan evaluasi
                                pelaksanaan
                                kebijakan Daerah, pelayanan administratif dan pembinaan sumber daya ASN di bidang sarana
                                pendidikan
                                keagamaan</p>
                            <p class="text-black font-weight-bold">Penyiapan bahan pengkoordinasian pelaksanaan kegiatan
                                secara
                                terpadu dan pelaporan lingkup biro di bidang pelayanan administrasi ketatausahaan,
                                pengelolaan
                                sistem informasi dan rumah tangga biro.</p>
                            <p class="text-black font-weight-bold">Penyiapan bahan pengoordinasian pelaksanaan tugas
                                Perangkat
                                Gubernur bidang Keagamaan.</p>
                            <p class="text-black font-weight-bold">Pelaksanaan tugas lain yang diberikan oleh Kepala Biro
                                Kesejahteraan Rakyat sesuai dengan tugas dan fungsinya.</p>
                                <hr class="" />
                                <h4 class="text-center mt-4">Membidangi</h4>
                                <hr class="" />
                                <div class="container text-center">
                                    <div class="row">
                                      <div class="col">
                                          <a href="{{ URL::to('/tatausaha') }}" style="color: #000 !important;text-decoration:none!important">
                                        <div class="card-body">
                                            <img src={{ asset('assets/img/nadiroh.jpg') }} alt="Avatar" class="image"
                                                height="150">
                                            <h5 class="card-title pt-3">Sub Bagian Tata Usaha Biro</h5>
                                            <p class="card-text">Tugas Sub Bagian Tata Usaha Biro</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <hr class="" />
                                <div class="col">
                                    <a href="{{ URL::to('/sardik') }}" style="color: #000 !important;text-decoration:none!important">
                                    <div class="card-body">
                                        <img src={{ asset('assets/img/avatar.jpg') }} alt="Avatar" class="image" height="150">
                                        <h5 class="card-title pt-3">Sub Koordinator Sarana Pendidikan Keagamaan</h5>
                                        <p class="card-text">Tugas Sub Koordinator Sarana Pendidikan Keagamaan</p>
                                        </a>
                                    </div>
                                </div>
                                <hr class="" />
                                <div class="col">
                                    <a href="{{ URL::to('/yangama') }}" style="color: #000 !important;text-decoration:none!important">
                                    <div class="card-body">
                                    <img src={{ asset('assets/img/avatar.jpg') }} alt="Avatar" class="image" height="150">
                                    <h5 class="card-title pt-3">SuSub Koordinator Pelayanan Kehidupan Beragama</h5>
                                    <p class="card-text">Tugas Sub Koordinator Pelayanan Kehidupan Beragama</p>
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
