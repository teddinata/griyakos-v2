@extends('layouts.admin')

@section ('content')
     <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Konfirmasi Pembayaran </h1>

</div>

    <div class="card-shadow">
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Bank</th>
                    <th>Nama</th>
                    <th>Rekening</th>
                    <th>Tanggal Transfer</th>
                    <th>Total</th>
                    <th>Foto</th>

                </tr>
                @forelse ($item as $detail)
                    <tr>
                        <td>{{$detail->id}}</td>
                        <td>{{$detail->bank}}</td>
                        <td>{{$detail->nama}}</td>
                        <td>{{$detail->rekening}}</td>
                        <td>{{$detail->tanggal_transfer}}</td>
                        <td> {{'Rp ' . number_format($detail->total, 0, " ", "." )}}</td>
                       
                        <td> 
                            <img src="{{ asset('images/'.$detail->foto)}}" alt="" style="width: 150px"
                            class="img-thumbnail"/>
                        </td>

                        @empty
                        <tr>
                            <td colspan="7" class="text-center">Anda Belum Melakukan Transaksi</td>
                        </tr>
                @endforelse
            </table>

        </div>
    </div>
    
    
    </div>
    <!-- /.container-fluid -->
    
    @endsection