<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function index(){ return Producto::orderBy('id','desc')->take(15)->get(); }

    public function store(Request $request){
        if(Producto::where('nombre','=',$request->nombre)->
                     where('idprovedor','=',$request->idprovedor)->first()){ 
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
            $producto->disponible = $request->disponible;
            $producto->idprovedor= $request->idprovedor;
            $producto->save();

            return response()->json(['estatus'=>'Aprobado','info'=>'se registro:'.$request->nombre], 200);
        }
        //if(Producto::where('email','=',$request->txtEmail)->first()){ 
        //    return response()->json(['estatus'=>'Rechazado','info'=>$request->txtEmail], 400);
        //}
    }
    
    public function productoprovedor(Request $request){
        $listaproductos=Producto::where('idprovedor','=',$request->idprovedor)->get();
        return response($listaproductos, 200);
    }

    //public function venderproductos($id){ //otra manera de haberlo hecho ver productos de provedor
    //    $listaproductos=Producto::where('idprovedor','=',$id)->get();
    //    return response($listaproductos, 200);//IGUAL QUE ARRIBA
    //}


    //public function create(){ }
    //public function show(producto $producto){  }
    //public function edit(producto $producto){  }
    //public function update(Request $request, producto $producto){  }
    //public function destroy(producto $producto){  }
}
