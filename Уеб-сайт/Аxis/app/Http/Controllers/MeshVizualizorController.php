<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeshVizualizorController extends Controller
{
    //
    public function index()
    {
        return view('mesh-graph');
    }
}
