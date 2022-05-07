<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\DataTrait\SimuladorDataTrait;

class SimuladorController extends Controller
{
    public function simular(Request $request)
    {
        $simulacao = (new SimuladorDataTrait())->simular($request);
        
        return \response()->json($simulacao);
    }
}
