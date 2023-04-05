@extends('mahasiswas.layout')
@section('content')


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>ADMIN PENGGAJIAN</h2>
        </div>
        <form class="row mb-3 mt-5" action="{{ route('find') }}" method="POST">
            @csrf
            <div class="col-md-5">
                <div class="d-flex flex-row">
                    <input type="text" value="{{ (request()->findMhs) ? request()-> findMhs : '' }}" name="findMhs" class="form-control" placeholder="Cari Data">
                    <button type="submit" class="btn btn-primary ml-3">Cari</button>
                </div>
            </div>
        </form>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('penggajian.create') }}"> Input Data Gaji</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered">
    <tr>
        <th>NIP</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jabatan</th>
        <th>Gaji_pokok</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($mahasiswas as $Mahasiswa)
    <tr>

        <td>{{ $Mahasiswa->NIP }}</td>
        <td>{{ $Mahasiswa->Nama }}</td>
        <td>{{ $Mahasiswa->Alamat }}</td>
        <td>{{ $Mahasiswa->Jabatan }}</td>
        <td>{{ $Mahasiswa->Gaji_pokok }}</td>
        <td>
            <form action="{{ route('penggajian.destroy',$Mahasiswa->NIP) }}" method="POST">

                <a class="btn btn-info" href="{{ route('penggajian.show',$Mahasiswa->NIP) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('penggajian.edit',$Mahasiswa->NIP) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

<div class="col-md-12">
    {{$mahasiswas->links()}}
</div>

<footer class="main-footer">
      <strong>Copyright &copy; 2023 <a href="#">Z</a>.</strong>
      All rights reserved.
    </footer>

@endsection