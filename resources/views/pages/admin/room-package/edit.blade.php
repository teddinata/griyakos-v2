@extends('layouts.admin')

@section ('content')
     <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Edit Data Kamar {{ $item->title }}</h1>

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
       <form action="{{ route('room-package.update', $item->id)  }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
        <input type="text" class="form-control" name="title" placeholder="Title" value=" {{ $item->title }}">
        </div>
        <div class="form-group">
                <label for="title">Location</label>
            <input type="text" class="form-control" name="location" placeholder="location" value=" {{ $item->location }}">
            </div>
            <div class="form-group">
                <label for="title">Deskripsi Kos</label>
                <textarea name="about" id="editor"
                class="form-control" required cols="30" rows="10" value={!! $item->about !!}></textarea>
            </div>

                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" name="type" placeholder="Kamar Tersedia" value=" {{ $item->type }}">
                </div>
                <div class="form-group">
                    <label for="price">Harga</label>
                    <input type="number" class="form-control" name="price" placeholder="Price" value=" {{ $item->price }}">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Ubah</button>

    </form>
    </div>
</div>


</div>
<!-- /.container-fluid -->

@endsection

@push('addon-script')

    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
@endpush
