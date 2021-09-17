<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function index(){ return Producto::orderBy('id','desc')->take(15)->get(); }

    public function store(Request $request){
        if(Producto::where('nombre','=',$request->nombre)->
                     where('idv','=',$request->idv)->first()){ 
            return response()->json(['estatus'=>'Rechazado','info'=>'Producto existente:'
            .$request->nombre], 400);
        }
        else{
            $producto = new Producto();
            $producto->nombre = $request->nombre;
            $producto->descripcion = $request->descripcion;
            $producto->pu = $request->pu;
            $producto->pe = $request->pe;
            $producto->cpe = $request->cpe;
            $producto->disp = $request->disp;
            $producto->idv= $request->idv;
            $producto->save();

            return response()->json(['estatus'=>'Aprobado','info'=>'se registro:'.$request->nombre], 200);
        }
    }
    
    public function productoprovedor(Request $request){
        $listaproductos=Producto::where('idv','=',$request->idv)->get();
        return response($listaproductos, 200);
    }

    //public function venderproductos($id){ //otra manera de haberlo hecho ver productos de provedor
    //    $listaproductos=Producto::where('idprovedor','=',$id)->get();
    //    return response($listaproductos, 200);//IGUAL QUE ARRIBA
    //}


    //public function create(){ }
    public function show($id){
        $producto=Producto::find($id);
        return response($producto, 200);
    }
    //public function edit(producto $producto){  }
    public function update(Request $request){
        $producto=Producto::find($request->id);
        if(is_null($producto)){ return response()->json(['message'=>'Producto Not Found'], 404); }
        $producto->update($request->all());
        return response($producto, 200);
    }
    public function destroy($id){
        $producto=Producto::find($id);
        if(is_null($producto)){ return response()->json(['message'=>'Producto Not Found'], 404); }
        $producto->delete();
        return response()->json(['message'=>'borrado'], 204);
    }
}
