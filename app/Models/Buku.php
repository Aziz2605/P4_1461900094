<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';

    public function jenis(){
    	return $this->belongsTo(Jenis_buku::class,'id_jenis','id_jenis');
    }
}
