<?php

namespace App\Http\Controllers;

use App\Models\daftarfilm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DaftarFilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftarfilms = Auth::User()->daftarfilm()->get()->map(function($daftarfilm){
            $response['id'] = $daftarfilm->id;
            $response['name'] = $daftarfilm->name;
            $response['username'] = $daftarfilm->user->username;
            return $response;
        });

        return response()->json(['status' => 'success', 'data' => ['daftarfilms' => $daftarfilms]], 200);
    }
}


