<?php

namespace App\Http\Controllers;

use App\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{   
    public function paginaPrincipal(){
        $productos = Productos::all();
        $precio = [];
        $precio_member = [];

        for($i=0;$i<count($productos);$i++){
            $precio[$i] = number_format($productos[$i]->price, 0, ",", ".");
            $precio_member[$i] = number_format($productos[$i]->price_member, 0, ",", ".");
        }

        return view('website.views.pagina_principal',[
            'productos' => $productos,
            'precio' => $precio,
            'precio_member' => $precio_member,
        ]);
    }
    public function verProducto(Request $request){
        $producto = DB::table('productos')->where('id', $request->input('id'))->get();
        $precio = [];
        $precio_member = [];

        for($i=0;$i<count($producto);$i++){
            $precio[$i] = number_format($producto[$i]->price, 0, ",", ".");
            $precio_member[$i] = number_format($producto[$i]->price_member, 0, ",", ".");
        }

        return view('website.views.verProducto',[
            'producto' => $producto,
            'precio' => $precio,
            'precio_member' => $precio_member,
        ]);
    }
    public function modalCuenta(Request $request){
        if($request->input('id') == 1){
            return view('website.views.modal_ingreso');
        }else{
            return view('website.views.modal_registro');
        }
    }
}
