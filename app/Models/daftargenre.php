<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftargenre extends Model
{
    use HasFactory;
    protected $fillable = [
        'Jenis'
    ];

    public function daftarfilms()
    {
        return $this->belongsToMany(daftarfilm::class)->withTimestamps();
    }
}