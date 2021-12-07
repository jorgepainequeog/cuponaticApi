<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    public function index(){
        $productos = Producto::orderBy('titulo')->get();
        return $productos;
        /* return response()->json(['productos' => $productos], 200); */
    }

    public function listarPorOrden($orden){
        if ($orden == "asc"){
            $productos = Producto::orderBy('fecha_inicio', 'asc')->get();
            return response()->json(['success' => true, 'Listado de productos' => $productos], 200);
        }else{
            $productos = Producto::orderBy('fecha_inicio', 'desc')->get();
            return response()->json(['success' => true, 'Listado de productos' => $productos], 200);
        }
    }

    
    
}
