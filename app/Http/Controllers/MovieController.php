<?php

namespace App\Http\Controllers;

use App\Models\daftarfilm;
use App\Models\daftargenre;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(daftarfilm $daftarfilm)
    {
        $this->authorize('viewGenre', $daftarfilm);
        return response()->json(['status' => 'success', 'data' => ['daftargenres' => $daftarfilm->daftargenres()->get(['daftarfilms.id', 'Judul', 'Sutradara', 'Durasi'])]]);
    }
}
