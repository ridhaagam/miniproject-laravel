<?php

namespace App\Models;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matkul extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function mahasiswas()
    {
        return $this->hasMany(User::class);
    }
}
