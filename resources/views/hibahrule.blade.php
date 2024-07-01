@extends('layout.main')
@section('content')
    @include('partials.navbar_link')

{{--  <!-- Contact-->  --}}
<section class="page-section pt-4" id="hibahrule" style="font-family: Merriweather Sans">
    <div class="container pt-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
               
           
                    <table class="table table-striped">
                        <tr>
                            <td class="table-light">Nama Lembaga</td>
                            <td colspan="2">n/a</td>
                        </tr> 
                        <tr>
                           <td class="table-light">Alamat</td>
                           <td colspan="2">n/a</td>
                       </tr> 
                        <tr>
                           <td class="table-light">Rekening</td>
                           <td colspan="2">n/a</td>
                       </tr> 
                        <tr>
                           <td class="table-light">Nominal</td>
                           <td colspan="2">n/a</td>
                       </tr> 
                        <tr>
                           <td class="table-light">Keterangan</td>
                           <td colspan="2">n/a</td>
                       </tr> 
                       <tr>
                           <td class="table-light">Catatan</td>
                           
                           <td colspan="2">n/a</td>
                       </tr> 
                      
                         
                       
                    </table>
            
        
            
            
      </div>
      <div class="modal-footer">
          <a class="btn btn-primary" href="{{ URL::to('/pencairanhibah') }}" role="button">Tutup</a>
          <a class="btn btn-primary" href="" role="button">Cetak</a>
      </div>
    </div>
  </div>
</div>
                
            </div>
        </div>
    </div>
       
       
   
   
   
   
   
   
</section>
@endsection