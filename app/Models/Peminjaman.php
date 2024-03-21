<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    //set tabel
    protected $table='peminjaman';
    
    //set primarykey
    protected $primaryKey = 'PeminjamanID';


    public $incrementing = false;


    //set data primary key
    protected $keyType = 'integer';

    //string kolom yang dapat diisi secara masal
    protected $guarded = [''];
}
