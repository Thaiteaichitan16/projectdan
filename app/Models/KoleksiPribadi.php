<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KoleksiPribadi extends Model
{
    use HasFactory;
    //set tabel
    protected $table='koleksipribadi';
    
    //set primarykey
    protected $primaryKey = 'KoleksiID';


    public $incrementing = false;


    //set data primary key
    protected $keyType = 'integer';

    //string kolom yang dapat diisi secara masal
    protected $guarded = [''];
}
