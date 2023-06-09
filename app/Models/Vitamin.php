<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vitamin extends Model
{
    use HasFactory;

    protected $table = 'vitamin';

    protected $fillable = ['jenis_vitamin', 'keterangan', 'maksimal_umur_pengguna'];

    public function checkup(){
        return $this->hasMany(Checkup::class);
    }
}
