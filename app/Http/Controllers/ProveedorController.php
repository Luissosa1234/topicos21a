<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProveedorPost;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
       
        $proveedores = Proveedor::get();
        // $proveedor = Proveedor::all();
        // return view('proveedores.index',['proveedor' => $proveedor]);
        return view('proveedores.index',['proveedores'=>$proveedores]);
        // return view('proveedores.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedores.create',['proveedor' => new Proveedor()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProveedorPost $request)
    {
        echo "hola mundo: ".$request->input('nombre');
        echo "hola mundo: ".$request->input('correo');
        echo "hola mundo: ".$request->input('telefono');
        echo "hola mundo: ".$request->input('direccion');

        Proveedor::create($request->validated());

        return back()->with('status', 'PROVEEDOR CREADO CON EXITO');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proveedor = Proveedor::find($id);

        return view('proveedores.show',['proveedor' => $proveedor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedor = Proveedor::find($id);
        return view('proveedores.edit',['proveedor' => $proveedor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProveedorPost $request, $id)
    {
        $proveedor = Proveedor::find($id);

    
        $proveedor->update($request->validated());

        return back()->with('status', 'PROVEEDOR ACTUALIZADO CON EXITO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedor = Proveedor::find($id);

        $proveedor->delete();
        
        return back()->with('status', 'PROVEEDOR ELIMINADO CON EXITO');
    }
}
