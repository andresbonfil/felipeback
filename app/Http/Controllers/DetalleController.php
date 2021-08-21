<?php

namespace App\Http\Controllers;

use App\Models\detalle;
use Illuminate\Http\Request;

class DetalleController extends Controller{

    public function index(){ return Detalle::orderBy('id','desc')->take(25)->get();  }
    public function show($folio){  return Detalle::Where('folio',$folio)->get();  }
    public function store(Request $request){ 
        $detalle = new Detalle();
        $detalle->cant = $request->cant;
        $detalle->producto = $request->producto;
        $detalle->precio = $request->precio;
        $detalle->importe = $request->importe;
        $detalle->folio = $request->folio;
        $detalle->save();
        return response()->json(['estatus'=>'Aprobado','folio'=>$detalle->folio], 200);
     }

    public function create(){  }
    public function edit(detalle $detalle){  }
    public function update(Request $request, detalle $detalle){  }
    public function destroy(detalle $detalle){  }
}
