<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'NIP' => '2141720076',
                'Nama' => 'Muhammad Dzaka Murran Rusid',
                'Alamat' => 'Jln Cibaduyut',
                'Jabatan' => 'Manajer',
                'Gaji_pokok' => '10.000.000',
            ],
            [
                'NIP' => '2141720638',
                'Nama' => 'Rahayu Ruli',
                'Alamat' => 'Jln Sumatra',
                'Jabatan' => 'Sales',
                'Gaji_pokok' => '6.000.000',
            ],
            [
                'NIP' => '2141720077',
                'Nama' => 'Endar Darma',
                'Alamat' => 'Jln Kalimantan',
                'Jabatan' => 'Sales Supervisor',
                'Gaji_pokok' => '5.500.000',
            ],
            [
                'NIP' => '2141720088',
                'Nama' => 'Izamul Pigri',
                'Alamat' => 'Jln Papua',
                'Jabatan' => 'Karyawan',
                'Gaji_pokok' => '3.500.000',
            ],
            [
                'NIP' => '2141720049',
                'Nama' => 'Rayhan Surya',
                'Alamat' => 'Jln Semeru',
                'Jabatan' => 'Karyawan',
                'Gaji_pokok' => '3.500.000',
            ],
            [
                'NIP' => '2141720010',
                'Nama' => 'Aryani Edi',
                'Alamat' => 'Jln Jlnan',
                'Jabatan' => 'Karyawan',
                'Gaji_pokok' => '3.500.000',
            ],
            [
                'NIP' => '2141520229',
                'Nama' => 'Muhdasitua',
                'Alamat' => 'Jln Keren',
                'Jabatan' => 'Karyawan',
                'Gaji_pokok' => '3.500.000',
            ],
            [
                'NIP' => '2141423129',
                'Nama' => 'Aryane Gandre',
                'Alamat' => 'Jln Ngeri',
                'Jabatan' => 'Karyawan',
                'Gaji_pokok' => '3.500.000',
            ],
            [
                'NIP' => '2141720177',
                'Nama' => 'Mulawarman',
                'Alamat' => 'Jln Julin',
                'Jabatan' => 'Karyawan',
                'Gaji_pokok' => '3.500.000',
            ],
            [
                'NIP' => '2141720423',
                'Nama' => 'Rina Sunarti',
                'Alamat' => 'Jln Mouse',
                'Jabatan' => 'Karyawan',
                'Gaji_pokok' => '3.500.000',
            ],
            [
                'NIP' => '2141720444',
                'Nama' => 'Lyra Sel',
                'Alamat' => 'Jln Pegangsangan',
                'Jabatan' => 'Karyawan',
                'Gaji_pokok' => '3.500.000',
            ],
            [
                'NIP' => '2141720139',
                'Nama' => 'Muran Rusdi',
                'Alamat' => 'Jln Bogor',
                'Jabatan' => 'Karyawan',
                'Gaji_pokok' => '3.500.000',
            ],
            [
                'NIP' => '2141720142',
                'Nama' => 'Rihana Ona',
                'Alamat' => 'Jln Komputer',
                'Jabatan' => 'Karyawan',
                'Gaji_pokok' => '3.500.000',
            ],
            [
                'NIP' => '2141720129',
                'Nama' => 'Rida Suda',
                'Alamat' => 'Jln Panjang',
                'Jabatan' => 'Karyawan',
                'Gaji_pokok' => '3.500.000',
            ],
            [
                'NIP' => '2141724429',
                'Nama' => 'Rika Ruka',
                'Alamat' => 'Jln Pendek',
                'Jabatan' => 'Karyawan',
                'Gaji_pokok' => '3.500.000',
            ],
            [
                'NIP' => '2141723249',
                'Nama' => 'Ruslan Muka',
                'Alamat' => 'Jln Herman',
                'Jabatan' => 'Karyawan',
                'Gaji_pokok' => '3.500.000',
            ],
            [
                'NIP' => '2141723123',
                'Nama' => 'Lima Rusa',
                'Alamat' => 'Jln Rusa',
                'Jabatan' => 'Karyawan',
                'Gaji_pokok' => '3.500.000',
            ],
            [
                'NIP' => '2141720186',
                'Nama' => 'Almarhu',
                'Alamat' => 'Jln Ac',
                'Jabatan' => 'Karyawan',
                'Gaji_pokok' => '3.500.000',
            ],
            [
                'NIP' => '2141720122',
                'Nama' => 'Tisuda',
                'Alamat' => 'Jln Alif',
                'Jabatan' => 'Karyawan',
                'Gaji_pokok' => '3.500.000',
            ],
            [
                'NIP' => '2141720334',
                'Nama' => 'Hakan Alif',
                'Alamat' => 'Jln Renang',
                'Jabatan' => 'Karyawan',
                'Gaji_pokok' => '3.500.000',
            ],
            [
                'NIP' => '2141720300',
                'Nama' => 'Ruslam',
                'Alamat' => 'Jln Segg',
                'Jabatan' => 'Karyawan',
                'Gaji_pokok' => '3.500.000',
            ]
        ];
        DB::table('mahasiswas')->insert($data);
    }
}
