<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index() {
        $berita = Berita::all();

        return response()->json([
            'status' => true,
            'response_code' => 200,
            'data' => $berita
        ]);
    }

    public function detail($slug) {
        $berita = Berita::where('slug', $slug)->first();

        return response()->json([
            'status' => true,
            'response_code' => 200,
            'data' => $berita
        ]);
    }
}
