@extends('layouts.transaksi')

@section('title')
    Detail Riwayat Transaksi
@endsection
@section ('content')
     <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Detail Transaksi {{ $item->room_package->title }}</h1>
  
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
       <table class="table table-bordered">
           <tr>
               <th>ID Pemesanan</th>
               <td>GK0000{{$item->id}}</td>
           </tr>
           <tr>
                <th>Pilihan Kamar</th>
                <td>{{$item->room_package->id}}</td>
            </tr>
            <tr>
                <th>Pembeli</th>
                <td>{{$item->user->name}}</td>
            </tr>
            <tr>
                <th>Total Transaksi</th>
                <td>{{'Rp ' . number_format($item->transaction_total+$item->kode_unik, 0, "kode_unik", "." )}}</td>
            </tr>
            <tr>
                    <th>Status Transaksi</th>
                    <td>{{$item->transaction_status}}</td>
                </tr>
            <tr>
                <th>Pemesanan</th>
                <td>
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Nationality</th>
                            <th>Pekerjaan</th>
                            <th>Checkin</th>

                        </tr>
                        @foreach ($item->details as $detail)
                            <tr>
                                <td>{{$detail->id}}</td>
                                <td>{{$detail->username}}</td>
                                <td>{{$detail->nationality}}</td>
                                <td>{{$detail->job}}</td>
                                <td>{{$detail->checkin}}</td>

                        @endforeach
                    </table>
                </td>
            </tr>
       </table>
    </div>
</div>


</div>
<!-- /.container-fluid -->

@endsection