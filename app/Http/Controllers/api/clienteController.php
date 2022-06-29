<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;

class clienteController extends Controller{
  
    public function index(){
        $clientes = Cliente::all();
        return $clientes;
    }

    public function store(Request $request){
        $cliente = new Cliente();
        $cliente -> name = $request-> name;
        $cliente -> cellphone = $request-> cellphone;
        $cliente -> email = $request-> email;
        $cliente -> address = $request-> address;

        $cliente -> save();
    }

    public function show($id){
        $cliente = Cliente::find($id);
        return $cliente;
    }

    public function update(Request $request, $id){
        $cliente = Cliente::findOrFail($request->id);
        
        $cliente -> name = $request-> name;
        $cliente -> cellphone = $request-> cellphone;
        $cliente -> email = $request-> email;
        $cliente -> address = $request-> address;

        $cliente -> save();
        return $cliente;
    }

    public function destroy($id){
        $cliente = Cliente::destroy($id);
        return $cliente;
    }
}
