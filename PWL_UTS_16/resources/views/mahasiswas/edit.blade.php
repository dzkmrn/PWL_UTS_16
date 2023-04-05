@extends('mahasiswas.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Data
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your i
                    nput.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('penggajian.update', $Mahasiswa->NIP) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="NIP">NIP</label>
                        <input type="text" name="NIP" class="formcontrol" id="NIP" value="{{ $Mahasiswa->NIP }}" ariadescribedby="NIM">
                    </div>
                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="text" name="Nama" class="formcontrol" id="Nama" value="{{ $Mahasiswa->Nama }}" ariadescribedby="Nama">
                    </div>
                    <div class="form-group">
                        <label for="Alamat">Alamat</label>
                        <input type="Alamat" name="Alamat" class="formcontrol" id="Alamat" value="{{ $Mahasiswa->Alamat }}" ariadescribedby="Alamat">
                    </div>
                    <div class="form-group">
                        <label for="Jabatan">Jabatan</label>
                        <input type="Jabatan" name="Jabatan" class="formcontrol" id="Jabatan" value="{{ $Mahasiswa->Jabatan }}" ariadescribedby="Jabatan">
                    </div>
                    <div class="form-group">
                        <label for="Gaji_pokok">Gaji_pokok</label>

                        <input type="Gaji_pokok" name="Gaji_pokok" class="formcontrol" id="Gaji_pokok" value="{{ $Mahasiswa->Gaji_pokok }}" ariadescribedby="Gaji_pokok">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection