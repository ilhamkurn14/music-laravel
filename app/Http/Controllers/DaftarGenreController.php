<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\daftargenre;

class DaftarGenreController extends Controller
{
    public function index()
    {   
        $daftargenres = daftargenre::all(["id", 'Jenis']);
        return response()->json(["status" => "success", "data" => ["daftargenres" => $daftargenres]], 200);
    }
}