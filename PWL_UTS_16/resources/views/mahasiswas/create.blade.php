@extends('mahasiswas.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Data
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('penggajian.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="NIM">NIP</label><br>
                        <input type="text" name="NIP" class="formcontrol" id="NIP" aria-describedby="NIP">
                    </div>
                    <div class="form-group">
                        <label for="Nama">Nama</label><br>
                        <input type="Nama" name="Nama" class="formcontrol" id="Nama" aria-describedby="Nama">
                    </div>
                    <div class="form-group">
                        <label for="Alamat">Alamat</label><br>
                        <input type="Alamat" name="Alamat" class="formcontrol" id="Alamat" aria-describedby="password">
                    </div>
                    <div class="form-group">
                        <label for="Jabatan">Jabatan</label><br>
                        <input type="Jabatan" name="Jabatan" class="formcontrol" id="Jabatan" aria-describedby="Jabatan">
                    </div>
                    <div class="form-group">
                        <label for="Gaji_pokok">Gaji_pokok</label><br>
                        <input type="Gaji_pokok" name="Gaji_pokok" class="formcontrol" id="Gaji_pokok" aria-describedby="Gaji_pokok">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection