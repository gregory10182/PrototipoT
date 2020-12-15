<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class AgcarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    const PAGINACION= 10; 
    public function index(Request $request)
    {
        
        $agcarrito= $request->get('agca');
        $quicarrito= $request->get('quica');
        if($agcarrito == null and $quicarrito != null){
        
            Producto::where('codigo','Like', $quicarrito )->update(['Carrito'=> 0]);

        }elseif($agcarrito != null and $quicarrito == null){
        Producto::where('codigo','Like', $agcarrito )->update(['Carrito'=> 1]);
        }elseif($quicarrito!= null and $agcarrito != null){

            Producto::where('codigo','Like', $quicarrito )->update(['Carrito'=> 0]);
            Producto::where('codigo','Like', $agcarrito )->update(['Carrito'=> 1]);   

        }elseif($quicarrito == null and $agcarrito == null){

        }
        $producto = Producto::where('Carrito','=','1')->paginate($this::PAGINACION);
        return view('Carrito', compact('producto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
