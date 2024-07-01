<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand fs-5" href="{{ URL::to('/#beranda') }}">
            <img src="{{ asset('assets/img/logojateng.png') }}" alt="" height="30" class="me-2">
            Biro Kesejahteraan Rakyat
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/#beranda') }}">Beranda</a></li>
                
                
                <li class="nav-item dropdown">
                      <a class="nav-link {{ Request::route()->getPrefix() == '/sotk' ? 'active' : '' }} dropdown-toggle"
                          data-bs-toggle="dropdown" href="/post" role="button" aria-expanded="false">Profil</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ URL::to('/sotk') }}">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="{{ URL::to('/#tugas-dan-fungsi') }}">Tugas &
                          Fungsi</a></li>
                            <li>
                            <hr class="dropdown-divider">
                            <li><a class="dropdown-item" href="{{ URL::to('') }}">Kepegawaian</a></li>
                        </ul>
                
                
                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/#layanan') }}">Layanan</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link {{ Request::route()->getPrefix() == '/kegiatan' ? 'active' : '' }} dropdown-toggle"
                        data-bs-toggle="dropdown" href="/post" role="button" aria-expanded="false">Kegiatan</a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{ URL::to('/kegiatan/pelayanan-dasar') }}">Pelayanan
                                Dasar</a></li>
                          <li><a class="dropdown-item" href="{{ URL::to('/kegiatan/non-pelayanan-dasar') }}">Non
                                Pelayanan Dasar</a></li>
                          <li>
                          <hr class="dropdown-divider">
                          <li><a class="dropdown-item"
                                href="{{ URL::to('/kegiatan/informasi-dan-komunikasi') }}">Informasi dan Komunikasi
                                Publik</a></li>
                          <li><a class="dropdown-item" href="{{ URL::to('/kegiatan/covid19') }}">Covid-19</a></li>
                          <hr class="dropdown-divider">
                          <li><a class="dropdown-item" href="{{ URL::to('/kegiatan/csr') }}">CSR</a></li>
                          <hr class="dropdown-divider">
                          <li><a class="dropdown-item" href="https://jdih.jatengprov.go.id">JDIH</a></li>
                      </ul>
                          <li class="nav-item"><a class="nav-link" href="{{ URL::to('/#dokumentasi') }}">Dokumentasi</a></li>
                          
                          <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle"
                          data-bs-toggle="dropdown" href="/post" role="button" aria-expanded="false">Urusan Terkait</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://dinsos.jatengprov.go.id">Dinas Sosial</a></li>
                            <li><a class="dropdown-item" href="https://dinkesjatengprov.go.id">Dinas Kesehatan</a></li>
                            <li><a class="dropdown-item" href="https://www.pdkjateng.go.id">Dinas Pendidikan dan Kebudayaan</a></li>
                            <li><a class="dropdown-item" href="https://bpbd.jatengprov.go.id">BPBD</a></li>
                            <li><a class="dropdown-item" href="https://disnakertrans.jatengprov.go.id">Dinas Tenaga Kerja dan Transmigrasi</a></li>
                            <li><a class="dropdown-item" href="https://disporapar.jatengprov.go.id">Dinas Kepemudaan OR dan Pariwisata</a></li>
                            <li><a class="dropdown-item" href="https://dispermadesdukcapil.jatengprov.go.id">Dinas Permasdukcapil</a></li>
                            <li><a class="dropdown-item" href="https://semarang.pom.go.id">BPOM</a></li>
                            <li><a class="dropdown-item" href="https://jateng.bps.go.id">BPJS Kesehatan</a></li>
                            <li><a class="dropdown-item" href="https://jateng.bkkbn.go.id">BKKBN</a></li>
                            <li><a class="dropdown-item" href="https://jateng.kemenag.go.id">Kemenag Jateng</a></li>
                            <li><a class="dropdown-item" href="https://jateng.baznas.go.id">BAZNAS</a></li>
                            
                        </ul>
                          
                          
                           
                          <li class="nav-item dropdown">
                      <a class="nav-link @if(str_contains(url()->current(), 'pencairanhibah')) active @endif dropdown-toggle"
                          data-bs-toggle="dropdown" href="/pencairanhibah" role="button" aria-expanded="false">Pengumuman</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ URL::to('/pencairanhibah') }}">Pencairan Hibah</a></li>
                            
                            
                        </ul>
                          
                          <li class="nav-item"><a class="nav-link" href="{{ URL::to('/contact') }}">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>
