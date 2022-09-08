<?php

namespace App\Models;

use App\Models\Matkul;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];    

    public function matkul()
    {
        return $this->belongsTo(Matkul::class);
    }
    
}
