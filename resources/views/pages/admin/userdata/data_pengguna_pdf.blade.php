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
                <img src="frontend/images/logokosan.png" alt="Logo GriyaKos">
                </a>
                <br>
                <h5>Laporan Bulanan</h5>
		<h6><a target="_blank" href="#">www.griyakos.com</a></h5>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Nomor KTP</th>
				<th>Nomor HP</th>
				<th>Nomor Kamar</th>
                <th>Tanggal Masuk</th>
                <th>Durasi</th>
                <th>Tagihan</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($items as $item)
			<tr>
				<td>{{ $i++ }}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->identity_card}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->room_number}}</td>
                <td>{{$item->checkin}}</td>
                <td>{{$item->duration}}</td>
                <td>{{$item->tagihan}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>
