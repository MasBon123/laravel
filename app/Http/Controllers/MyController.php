<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function tampilkan(){
        $nama = "jojo";
        $umur = "10 tahun";
        $status = "pelajar";
        return view('sample', compact ('nama', 'umur', 'status'));
    }
}
