@extends('layouts.app')

@section('title', 'Profil')

@section('content')
<main>
    <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">
                                    Profil Saya
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">

                            <h1>Profil Saya</h1>
                            <div class="col-12 text-center">
                                <img src="{{asset('images/'.$user->avatar)}}" style="object-fit:cover;border:2px solid #E3E3E3;" alt class="rounded-circle" height="250" width="250">
                            </div>

                            <div class="form-group">
                                <label for="username">Username</label>
                                <p>{{$user->username}}</p>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <p>{{$user->name}}</p>
                            </div>
                            <div class="form-group">
                                <label for="e-mail">E-Mail</label>
                                    <p>{{$user->email}}</p>
                            </div>

                            <div class="form-group">
                                <label for="phone">No Hp</label>
                                <p>{{$user->phone}}</p>
                            </div>
                            <div class="form-group">
                                <label class="date" for="birth">Tanggal Lahir</label>
                                <p>{{$user->birth}}</p>
                            </div>
                            <div class="form-group">
                                <label for="gender">Jenis Kelamin</label>
                                <p>{{$user->gender}}</p>

                            </div>
                        </form>
                        </div>
                    </div>

                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2 class="text-center">Menu</h2>
                        <hr>
                        <div class="text-center mt-3">
                            <a href="{{ route('profil') }}" class="edit-profil">
                                Profil Saya
                            </a>
                            </div>
                        <div class="text-center mt-3">
                            <a href="{{ route('editprofil') }}" class="edit-profil">
                                Edit Profil
                            </a>
                            </div>
                            <div class="text-center mt-3">
                                <a href="{{ route('history-order') }}" class="mytransaction">
                                    Transaksi Saya
                                </a>
                            </div>
                            <div class="text-center mt-3">
                                <a href="{{ route('kamar') }}" class="room">
                                    Pilih Kamar
                                </a>
                            </div>
                            <div class="text-center mt-3">
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
            </div>
                </div>



    </section>
</main>
@endsection

@push('addon-script')
<script src="{{ url ('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
<script>


    $('.datepicker').datepicker({
        format: 'dd-mm-yyyy',
        uiLibrary: 'bootstrap4',
        icons:{
            rightIcon: '<img src="{{url ('frontend/images/doe.png') }}" />'
        }
    });
});
</script>
@endpush


