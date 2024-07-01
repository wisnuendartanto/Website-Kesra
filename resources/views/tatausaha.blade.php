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
                            <h2 class="text-center mt-4">Sub Bagian Tata Usaha Biro</h2>
                            <hr class="" />
                            <img src={{ asset('assets/img/avatar.jpg') }} alt="Avatar" class="image" height="300px">
                            <h4 class="text-black font-weight-bold pt-4">DWI FIBRIANTO, SKM</h4>
                            <h5 class="text-black font-weight-bold">Plt. Kepala Sub Bagian tata Usaha</h5>
                            <hr class="" />
                            <h5 class="text-black font-weight-bold">Tugas Sub Bagian tata Usaha</h5>
                            <h5 class="text-black font-weight-bold">(Pasal 63)</h5>
                            <h6 class="text-black font-weight-bold">Berdasarkan Peraturan Gubernur Jawa Tengah nomor 70
                                tahun 2018
                                tentang Organisasi dan Tata Kerja Sekretariat Daerah Provinsi Jawa Tengah</h6>
                            <hr class="" />
                            <h4 class="text-black font-weight-bold pt-4">TUGAS</h4>
                            <p class="text-black font-weight-bold">Melakukan penyiapan bahan pengoordinasian
                                pelaksanaan kegiatan secara terpadu dan pelaporan lingkup biro di bidang
                                ketatatausahaan Biro.</p>
                            <hr class="" />
                            <h4 class="text-black font-weight-bold pt-4">Meliputi :</h4>
                            <p class="text-black font-weight-bold">Menyiapkan bahan pengelolaan dan pelayanan ketatausahaan</p>
                            <p class="text-black font-weight-bold">Menyiapkan bahan koordinasi dan pengelolaan arsip, laporan, data lain di
                                lingkup Biro</p>
                            <p class="text-black font-weight-bold">Menyipkan bahan pengoordinasian penyusunan program dan kegiatan di
                                lingkup Biro</p>
                            <p class="text-black font-weight-bold">Menyiapkan bahan administrasi kepegawaian di lingkup Biro</p>
                            <p class="text-black font-weight-bold">Menyiapkan bahan administrasi keuangan di lingkup Biro yang meliputi
                                gaji pegawai, keuangan, perjalanan dinas serta hak-hak keuangan lainnya</p>
                            <p class="text-black font-weight-bold">Menyiapkan bahan pengoordinasian dan pelaksanaan organisasi, Tata
                                laksana dan kehumasan di lingkup Biro</p>
                            <p class="text-black font-weight-bold">menyiapkan bahan penyusunan rencana kebutuhan dan mengurus
                                permintaan alat tulis kantor serta Memelihara perlengkapan Biro</p>
                            <p class="text-black font-weight-bold">Menyiapkan bahan penyusunan laporan pertanggungjawaban dan laporan
                                kinerja di lingkup Biro</p>
                            <p class="text-black font-weight-bold">Melakukan tugas kedinasan lain yang diberikan oleh pimpinan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
            <div class="card">
                <img src={{ asset('assets/img/kanal_laporgub.jpg') }} width="100%" class="tie-appear">
            </div>
            <div class="card">
                <img src={{ asset('assets/img/sipandu.jpg') }} width="100%" class="tie-appear">
            </div>
            <div class="card pt-2">
                <a class="twitter-timeline" data-height="700"
                    href="https://twitter.com/birokesrajateng?ref_src=twsrc%5Etfw">Tweets by birokesrajateng</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
        </div>
        </div>
    </section>
@endsection
