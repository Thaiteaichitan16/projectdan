<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KategoriBukuRelasi extends Model
{
    use HasFactory;
    //set tabel
    protected $table='kategoribuku_relasi';
    
    //set primarykey
    protected $primaryKey = 'KategoriBukuID';


    public $incrementing = false;


    //set data primary key
    protected $keyType = 'integer';

    //string kolom yang dapat diisi secara masal
    protected $guarded = [''];

    public function KategoriBuku(): HasMany{
        return $this->hasMany(KategoriBuku::class,'KategoriID','KategoriID');
    }

    public function Buku(): HasMany{
        return $this->hasMany(Buku::class,'BukuID','BukuID');
    }


}
