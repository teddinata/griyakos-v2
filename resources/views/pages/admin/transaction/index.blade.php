@extends('layouts.admin')

@section ('content')
     <!-- Begin Page Content -->
 {{-- <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>

</div>

<div class="row">
    <div class="card-body">
        <div class="table-responsive">

            <table class="table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kamar</th>
                        <th>User</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($items as $items)
                        <tr>
                            <td>{{ $items->id}}</td>
                            <td>{{ $items->room_package->title}}</td>
                            <td>{{ $items->user->name}}</td>
                            <td>{{'Rp ' . number_format($items->transaction_total+$items->kode_unik, 0, "kode_unik", "." )}}</td>
                            <td>{{ $items->transaction_status}}</td>
                            <td>
                                    <a href="{{ route('transaction.show', $items ->id) }}" class="btn btn-primary">
                                            <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ route('pembayaran.index', $items->id) }}" class="btn btn-info">
                                        <i class="fas fa-file-upload"></i>
                                        </a>
                                <a href="{{ route('transaction.edit', $items ->id) }}" class="btn btn-info">
                                <i class="fa fa-pencil-alt"></i>
                                </a>

                                <form action="{{ route('transaction.destroy', $items ->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{ route('transaction.cetak_pdf', ['id' => $items->id]) }}" class="btn btn-success">
                                    <i class="fas fa-print"></i>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Data Kosong</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>


</div> --}}
<!-- /.container-fluid -->


 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kamar</th>
                            <th>User</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Kamar</th>
                            <th>User</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        @forelse ($items as $items)
                        <tr>
                            <td>{{ $items->id}}</td>
                            <td>{{ $items->room_package->title}}</td>
                            <td>{{ $items->user->name}}</td>
                            <td>{{'Rp ' . number_format($items->transaction_total+$items->kode_unik, 0, "kode_unik", "." )}}</td>
                            <td>{{ $items->transaction_status}}</td>
                            <td>
                                    <a href="{{ route('transaction.show', $items ->id) }}" class="btn btn-primary">
                                            <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ route('pembayaran.index', $items->id) }}" class="btn btn-info">
                                        <i class="fas fa-file-upload"></i>
                                        </a>
                                <a href="{{ route('transaction.edit', $items ->id) }}" class="btn btn-info">
                                <i class="fa fa-pencil-alt"></i>
                                </a>

                                <form action="{{ route('transaction.destroy', $items ->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{ route('transaction.cetak_pdf', ['id' => $items->id]) }}" class="btn btn-success">
                                    <i class="fas fa-print"></i>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Data Kosong</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection

@push('prepend-style')
  <!-- Custom styles for this page -->
  <link href="{{ url('backend/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@push('addon-script')
   <!-- Page level plugins -->


   <!-- Page level custom scripts -->
   <script>
        $(document).ready(function() {
        $('#dataTable').DataTable();
        });
    </script>
@endpush
