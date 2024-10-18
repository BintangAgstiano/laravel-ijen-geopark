<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    public function index() {
        $destinasi = Destinasi::all();

        return response()->json([
            'status' => true,
            'response_code' => 200,
            'data'=> $destinasi
        ]);
    }

    public function detail($slug) {
        $destinasi = Destinasi::where('slug', $slug)->first();

        return response()->json([
            'status' => true,
            'response_code' => 200,
            'data'=> $destinasi
        ]);
    }
}
