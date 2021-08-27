<?php

namespace App\Http\Controllers;

use App\Models\Cotizacione;
use Illuminate\Http\Request;


class CotizacioneController extends Controller
{

    public function index(){ return Cotizacione::orderBy('id','desc')->take(25)->get(); }
    
    public function store(Request $request){
        $cotizacion = new Cotizacione();
        $cotizacion->idc = $request->idc;
        $cotizacion->idv = $request->idv;
        $cotizacion->save();
        return response()->json(['estatus'=>'Aprobado','folio'=>$cotizacion->id], 200);
    }
    
    public function create(){ }

    public function show($id)
    {
        return Cotizacione::orderBy('id','desc')->where('idc','=',$id)->get();
    }
    public function show2($id)
    {
        return Cotizacione::orderBy('id','desc')->where('idv','=',$id)->get();
    }


    public function edit(Cotizacione $cotizacione)
    {
        //
    }


    public function update(Request $request, Cotizacione $cotizacione)
    {
        //
    }


    public function destroy(Cotizacione $cotizacione)
    {
        //
    }
}
