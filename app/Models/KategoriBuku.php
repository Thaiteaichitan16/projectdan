<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KategoriBuku extends Model
{
    use HasFactory;
    //set tabel
    protected $table='kategoribuku';
    
    //set primarykey
    protected $primaryKey = 'KategoriID';


    public $incrementing = false;


    //set data primary key
    protected $keyType = 'integer';

    //string kolom yang dapat diisi secara masal
    protected $guarded = [''];
    

    public function Buku(): HasMany{
        return $this->hasMany(Buku::class,'BukuID','BukuID');
    }
    
    public function KategoriBukuRelasi(): BelongsTo{
        return $this->belongsTo(KategoriBukuRelasi::class,'KategoriBukuID','KategoriBukuID');
    }
}
