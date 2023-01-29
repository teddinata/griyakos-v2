<!DOCTYPE html>
<html>
<head>
    <title>Nota</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>

            <a href="" class="">
                <img src="frontend/images/logokosan.png" alt="Logo GriyaKos">
                </a>
                <br>
                <h6><a target="_blank" href="#">www.griyakos.com</a></h6>
                <h5>Nota Bukti Transaksi</h5>

    </center>
<br>
    <h6>Telah Terima dari: {{ $item->name }}</h6>

<div class="container-fluid">




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
                                    <td>{{'Rp ' . number_format($item->tagihan, 0, "kode_unik", "." )}}</td>
                                </tr>

                        </table>
                    </td>
                </tr>
           </table>
        </div>
    </div>


    </div>

</body>
</html>
