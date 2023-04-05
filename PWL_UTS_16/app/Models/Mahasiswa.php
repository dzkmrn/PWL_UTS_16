<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    public $table = "mahasiswas";
    use HasFactory;
    protected $guarded = [];

    public $timestamps = false;
    protected $primaryKey = 'NIP'; // Memanggil isi DB Dengan primarykey
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

}
