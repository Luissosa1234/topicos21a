<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;
use App\Http\Requests\StoreVentaPost;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $ventas = Venta::get();
        // $proveedor = Proveedor::all();
        // return view('proveedores.index',['proveedor' => $proveedor]);
        return view('ventas.index',['ventas'=>$ventas]);
        // return view('proveedores.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ventas.create',['venta' => new Venta()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVentaPost $request)
    {
        // echo "hola mundo: ".$request->input('nombre');
        // echo "hola mundo: ".$request->input('cantidad');
        // echo "hola mundo: ".$request->input('precio');
  
        

        Venta::create($request->validated());

        return back()->with('status', 'VENTA REGISTRADA CON EXITO');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ventas = Venta::find($id);
        return view('ventas.show',['ventas' => $ventas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $venta = Venta::find($id);
        return view('ventas.edit',['venta' => $venta]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreVentaPost $request, $id)
    {
        $venta = Venta::find($id);
    
        $venta->update($request->validated());

        return back()->with('status', 'CLIENTE ACTUALIZADO CON EXITO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $venta = Venta::find($id);

        $venta->delete();
        
        return back()->with('status', 'VENTA ELIMINADA CON EXITO');
    }
}
