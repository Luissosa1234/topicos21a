<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductoPost;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //$clientes = Cliente::all();
        //return view('clientes.index',['clientes' => $clientes]);
        // return view('productos.index');

        $productos = producto::get();
        // $proveedor = Proveedor::all();
        // return view('proveedores.index',['proveedor' => $proveedor]);
        return view('productos.index',['productos'=>$productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create',['producto' => new Producto()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductoPost $request)
    {
        // echo "hola mundo: ".$request->input('nombre');
        // echo "hola mundo: ".$request->input('precio');
        // echo "hola mundo: ".$request->input('cantidad');
        // echo "hola mundo: ".$request->input('departamento');
        // echo "hola mundo: ".$request->input('descripcion');
        

        Producto::create($request->validated());

        return back()->with('status', 'PRODUCTO CON EXITO');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);

        return view('productos.show',['producto' => $producto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        return view('productos.edit',['producto' => $producto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProductoPost $request, $id)
    {
        $producto = Producto::find($id);

    
        $producto->update($request->validated());

        return back()->with('status', 'PRODUCTO ACTUALIZADO CON EXITO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);

        $producto->delete();
        
        return back()->with('status', 'CLIENTE ELIMINADO CON EXITO');
    }
}
