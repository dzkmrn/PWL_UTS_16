@extends('mahasiswas.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Data
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>NIP: </b>{{$Mahasiswa->NIP}}</li>
                    <li class="list-group-item"><b>Nama: </b>{{$Mahasiswa->Nama}}</li>
                    <li class="list-group-item"><b>Alamat: </b>{{$Mahasiswa->Alamat}}</li>
                    <li class="list-group-item"><b>Jabatan: </b>{{$Mahasiswa->Jabatan}}</li>
                    <li class="list-group-item"><b>Gaji_pokok: </b>{{$Mahasiswa->Gaji_pokok}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt3" href="{{ route('penggajian.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection