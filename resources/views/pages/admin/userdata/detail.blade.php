@extends('layouts.admin')

@section ('content')
     <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Detail Pengguna {{ $item->name }}</h1>
  
</div>


<div class="card-shadow">
    <div class="card-body">
       <table class="table table-bordered">
           <tr>
               <th>Nomor Nota</th>
               <td>{{$item->id}}</td>
           </tr>
           <tr>
                <th>Nama</th>
                <td>{{$item->name}}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{$item->alamat}}</td>
            </tr>
            <tr>
                <th>RT / RW</th>
            <td>{{$item->RT}} / {{$item->RW}}</td>
            </tr>
            <tr>
                <th>Kelurahan, Kecamatan, Kabupaten, Provinsi, Negara</th>
                <td>{{$item->kelurahan}}, {{$item->kecamatan}}, {{$item->kabupaten}}, {{$item->provinsi}}, 
                    {{$item->negara}}</td>
            </tr>
            <tr>
                <th>Total Transaksi</th>
                <td>{{'Rp ' . number_format($item->tagihan, 0, "kode_unik", "." )}}</td>
            </tr>
           
            <tr>
                <th>Pemesanan</th>
                <td>
                    <table class="table table-bordered">
                        <tr>
                            
                                <th>Nama</th>
                               
                                <th>Nomor HP</th>
                                <th>Nomor Kamar</th>
                                <th>Tanggal Masuk</th>
                                <th>Tanggal Keluar</th>
                                <th>Durasi</th>
                                <th>Tagihan</th>

                        </tr>
                       
                            <tr>
                                <td>{{$item->name}}</td>
                                
                                <td>{{$item->phone}}</td>
                                <td>{{$item->room_number}}</td>
                                <td>{{$item->checkin}}</td>
                                <td>{{$item->checkout}}</td>
                                <td>{{$item->duration}}</td>
                                <td>{{$item->tagihan}}</td>
                            </tr>
                       
                    </table>
                </td>
            </tr>
       </table>
    </div>
</div>


</div>
<!-- /.container-fluid -->

@endsection