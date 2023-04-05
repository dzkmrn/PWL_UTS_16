<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fungsi eloquent menampilkan data menggunakan pagination
        $mahasiswas = Mahasiswa::paginate(5); // Mengambil semua isi tabel
        $posts = Mahasiswa::orderBy('NIP', 'desc')->paginate(6);
        return view('mahasiswas.index', compact('mahasiswas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('mahasiswas.create');
    }
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'NIP' => 'required',
            'Nama' => 'required',
            'Alamat' => 'required',
            'Jabatan' => 'required',
            'Gaji_pokok' => 'required',
        ]);
        //fungsi eloquent untuk menambah data
        Mahasiswa::create($request->all());
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('mahasiswas.index')->with('success', 'Data Berhasil Ditambahkan');
    }
    public function show($NIP)
    {
        //menampilkan detail data dengan menemukan/berdasarkan NIP Mahasiswa
        $Mahasiswa = Mahasiswa::find($NIP);
        return view('mahasiswas.detail', compact('Mahasiswa'));
    }
    public function edit($NIP)
    {
        //menampilkan detail data dengan menemukan berdasarkan NIP Mahasiswa untuk
        $Mahasiswa = Mahasiswa::find($NIP);
        return view('mahasiswas.edit', compact('Mahasiswa'));
    }
    public function update(Request $request, $NIP)
    {
        //melakukan validasi data
        $request->validate([
            'NIP' => 'required',
            'Nama' => 'required',
            'Alamat' => 'required',
            'Jabatan' => 'required',
            'Gaji_pokok' => 'required',
        ]);
        //fungsi eloquent untuk mengupdate data inputan kita
        Mahasiswa::find($NIP)->update($request->all());
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('mahasiswas.index')->with('success', 'Data Berhasil Diupdate');
    }
    public function destroy($NIP)
    {
        //fungsi eloquent untuk menghapus data
        Mahasiswa::find($NIP)->delete();
        return redirect()->route('mahasiswas.index')->with('success', 'Data Berhasil Dihapus');
    }

    public function find(Request $request){
        $findMhs = $request->findMhs;
        $mahasiswas = Mahasiswa::where('Nama', 'like', '%'.$findMhs.'%')->orWhere('NIP', 'like', '%'.$findMhs.'%')->orWhere('Jabatan', 'like', '%'.$findMhs.'%')->paginate(5);
        return view('mahasiswas.index', compact('mahasiswas'));
    }

};
