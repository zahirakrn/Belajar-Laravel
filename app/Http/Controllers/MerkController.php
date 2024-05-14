<?php

namespace App\Http\Controllers;
use App\Models\Merks;
use Illuminate\Http\Request;

class MerkController extends Controller
{
    public function menampilkan3(){
        $merks = Merks::all();

    return view('merk2\index3', compact('merks'));
    }
    public function show($id){
        $merks= Merks::findOrFail($id);
        return view('merk2\show',compact('merks'));
}
}