<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftarfilm extends Model
{
    use HasFactory;

    protected $fillable = [
        'Judul', 'Sutradara','Durasi','GenreId'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function daftargenres()
    {
        return $this->belongsToMany(daftargenre::class)->withTimestamps();
    }
}
