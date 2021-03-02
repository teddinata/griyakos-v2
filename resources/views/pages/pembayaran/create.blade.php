@extends('layouts.transaksi')

@section('title', 'Konfirmasi Transaksi')

@section('content')
<main>
    <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    Transaksi Saya 
                                </li>
                                
                                <li class="breadcrumb-item active">
                                    Konfirmasi Pembayaran
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ( $errors->all() as $error )
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            <h1>Konfirmasi Pembayaran</h1>
                            <p>Lengkapi Pembayaran Anda</p>
                        <form method="POST" action="{{route('pembayaran.konfirmasi',  ['id' => $id])}}" enctype="multipart/form-data">
                               @method('POST')
                                @csrf
                               
                               
                                <div class="col-12 text-center">
                                    <img src="" 
                                    style="object-fit:cover;border:2px solid #E3E3E3;" 
                                    alt class="rounded-circle" height="250" width="250">
                                </div>
                                <h2 class="text-center">Unggah Foto Konfirmasi Pembayaran</h2>
                                <div class="form-group mt-3">
                                <input type="file" class="form-control" name="foto">
                                </div>
                                <div class="member mt-3">
                                
                                   <!-- <input type="hidden" name="_token" value="" >
                                    <input type="hidden" name="_method" value="PUT"> -->
                                      
                                <div class="form-group">
                                    <label for="transactions_id">Kode Order</label>
                                <input type="text" class="form-control" name="transactions_id" id="transactions_id"  value="GK0000{{$id}}" disabled="">
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="bank">From Bank</label>
                                        <input type="text" class="form-control" name="bank" id="bank"  value="{{old('bank')}}" >
                                        </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label for="nama">Name Account Bank</label>
                                                <input type="text" class="form-control" name="nama" id="nama" value="{{old('nama')}}" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label for="rekening">No Account Bank</label>
                                                <input type="text" class="form-control" name="rekening" id="" value="{{old('rekening')}}" required="">
                                            </div>
                                        </div>
                                </div>
                                    
                                   
                                        <div class="form-group">
                                            <label for="tanggal_transfer">Tanggal Transfer</label>
                                            <input type="text" class="form-control datepicker"
                                            id="tanggal_transfer" name="tanggal_transfer" placeholder="Tanggal Transfer" value data-type="">
                                        
                                        </div>
                                    
                                    
                                        <div class="form-group">
                                            <label for="total">Total Transfer</label>
                                        <input type="text" class="form-control" name="total" id="total" value="{{old('total')}}">
                                        </div>
                                        
                                    
                                    <div class="row">
                                    <div class="col-12 text-center">
                                        
                                            <button type="submit" class="btn btn-logout px-2 mt-4 mx-1" onclick="return confirm('Yakin untuk mengubah data?')">
                                                Simpan Perubahan
                                            </button>
                                    
                                        <a href="{{('/profil')}}" class="btn btn-cancel  px-2 mt-4 mx-1 ">Cancel</a>
                                    </div>  
                                    </div>
                    
                                    </div>
                                    </form>
                                </div>
                            </div>
                        
                                 
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2 class="text-center">Menu</h2>
                            <hr>
                            <div class="text-center mt-3">
                                <a href="#" class="edit-profil">
                                    Profil Saya
                                </a>
                                </div>
                            <div class="text-center mt-3">
                                <a href="#" class="edit-profil">
                                    Edit Profil
                                </a>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="listtransaction.html" class="mytransaction">
                                        Transaksi Saya
                                    </a>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="#" class="room">
                                        Pilih Kamar
                                    </a>
                                </div>
                                <div class="text-center mt-3 active">
                                    <a href="#" class="travel">
                                        Pilih Paket Travel
                                    </a>
                                </div>
                                </div>
                               
                                <div class="join-container">
                                    <a href="" class="btn btn-block btn-join-now mt-3 py-2">Logout</a>
                                </div>
                        </div>
                    </div>
    </section>
    
</main>
@endsection

@push('prepend-style')
  <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}" />
@endpush

@push('addon-script')
  <script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
  <script>
    $(document).ready(function() {
        var date = new Date();
        date.setDate(date.getDate());
      $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        minDate: new Date,
        uiLibrary: 'bootstrap4',
        icons: {
          rightIcon: '<img src="{{ url('frontend/images/doe.png') }}" />'
        }
      });
    });
  </script>
@endpush



   


   
  

