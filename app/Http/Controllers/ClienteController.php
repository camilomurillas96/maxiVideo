<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //
    public function index() {
        $client = Cliente::find(1);

    }

    public function create(Request $request){
        //return $request->all();
        $client = new Cliente();
        $client->identificacion = $request->numeroId;
        $client->save();
        return view('contacto', compact('client'));
    }
}
