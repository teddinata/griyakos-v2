@extends('layouts.admin')

@section ('content')
     <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800"> Data Pengguna </h1>
  
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

<div class="card-shadow">
    <div class="card-body">
       <form action="{{ route('userdata.store') }}" method="POST">
        
        @csrf
        <div class="form-group">
            <label for="name">Nama</label>
        <input type="text" class="form-control" name="name" placeholder="Nama" value=" {{ old ('name') }}">
        </div>
        <div class="form-group">
                <label for="identity_card">Nomor KTP</label>
            <input type="number" class="form-control" name="identity_card" placeholder="Nomor KTP" value=" {{  old ('identity_card')  }}">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" placeholder="Alamat " value=" {{  old ('alamat') }}">
            </div>
            <div class="form-group">
                <label for="RT"> RT</label>
            <input type="text" class="form-control" name="RT" placeholder="RT " value=" {{  old ('RT') }}">
            </div>
            <div class="form-group">
                <label for="RW">RW</label>
            <input type="text" class="form-control" name="RW" placeholder="RW " value=" {{  old ('RW') }}">
            </div>
            <div class="form-group">
                <label for="kelurahan">Kelurahan</label>
            <input type="text" class="form-control" name="kelurahan" placeholder="kelurahan " value=" {{  old ('kelurahan') }}">
            </div>
            <div class="form-group">
                <label for="kecamatan">Kecamatan</label>
            <input type="text" class="form-control" name="kecamatan" placeholder="kecamatan " value=" {{  old ('kecamatan') }}">
            </div>
            <div class="form-group">
                <label for="kabupaten">Kabupaten</label>
            <input type="text" class="form-control" name="kabupaten" placeholder="kabupaten " value=" {{  old ('kabupaten') }}">
            </div>
            <div class="form-group">
                <label for="provinsi">Provinsi</label>
            <input type="text" class="form-control" name="provinsi" placeholder="provinsi " value=" {{  old ('provinsi') }}">
            </div>
            <div class="form-group">
                <label for="negara">Negara</label>
            <input type="text" class="form-control" name="negara" placeholder="Negara" value=" {{  old ('negara') }}">
            </div>
                <div class="form-group">
                    <label for="phone">Nomor HP</label>
                <input type="number" class="form-control" name="phone" placeholder="Nomor HP" value=" {{  old ('phone') }}">
                </div>
                <div class="form-group">
                    <label for="nomor_kamar">Nomor Kamar</label>
                    <input type="text" class="form-control" name="room_number" placeholder="Nomor Kamar" value=" {{ old ('room_number')  }}">
                </div>
                <div class="form-group">
                    <label for="checkin">Tanggal CheckIn</label>
                    <input type="date" class="form-control" name="checkin" placeholder="Tanggal Checkin" value=" {{  old ('checkin') }}">
                </div>
                <div class="form-group">
                    <label for="checkout">Tanggal Check Out</label>
                    <input type="date" class="form-control" name="checkout" placeholder="Tanggal Check Out" value=" {{  old ('checkout') }}">
                </div>
                <div class="form-group">
                    <label for="duration">Durasi Sewa</label>
                    <input type="text" class="form-control" name="duration" placeholder="Durasi" value=" {{  old ('duration') }}">
                </div>
                <div class="form-group">
                    <label for="tagihan">Tagihan</label>
                    <input type="number" class="form-control" name="tagihan" placeholder="Tagihan" value=" {{  old ('tagihan') }}">
                </div>
               
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                            
    </form>
    </div>
</div>


</div>
<!-- /.container-fluid -->

@endsection