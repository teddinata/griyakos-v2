<!DOCTYPE html>
<html>
<head>
    <title>Laporan Bulanan</title>

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
                <img src="frontend/images/logokosan2.png" alt="Logo GriyaKos">
                </a>
                <br>
                <h6><a target="_blank" href="#">www.griyakos.com</a></h6>
                <h5>Nota Bukti Transaksi</h5>

    </center>
<br>
    <h6>Telah Terima dari: {{ $item->user->name }}</h6>


    <div class="card-shadow">
        <div class="card-body">
           <table class="table table-bordered">
               <tr>
                   <th>ID Pemesanan</th>
                   <td>{{$item->id}}</td>
               </tr>
               <tr>
                    <th>Pilihan Kamar</th>
                    <td>{{$item->room_package->id}}</td>
                </tr>
                <tr>
                    <th>Pemesan</th>
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


</body>
</html>
