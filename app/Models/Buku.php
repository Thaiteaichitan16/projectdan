<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Buku extends Model
{
    use HasFactory;
    //set tabel
    protected $table='buku';
    
    //set primarykey
    protected $primaryKey = 'BukuID';


    public $incrementing = false;


    //set data primary key
    protected $keyType = 'integer';

    //string kolom yang dapat diisi secara masal
    protected $guarded = [''];

    public function KategoriBuku(): BelongsTo{
        return $this->belongsTo(KategoriBuku::class,'KategoriID','KategoriID');
    }
    public function KategoriBukuRelasi(): BelongsTo{
        return $this->belongsTo(KategoriBukuRelasi::class,'KategoriBukuID','KategoriBukuID');
    }
}
