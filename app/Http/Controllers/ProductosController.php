<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Categoria;
use App\Mail\Primero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use PDF;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nombre = $request->nombre;
        $categoria = $request->id;

        //dd($categoria);

        $categorias = Categoria::all();
        //$productos = DB::table('productos')->paginate(8);
        $productos = Producto::orderBy('id','DESC')->nombre($nombre)->categoria($categoria)->paginate(8)->withQueryString();;

        //dd(count($productos));


        return view('catalogo')->with('productos',$productos)->with('categorias',$categorias)->with('nombre',$nombre);
    }

    public function search(Request $request)
    {
        $nombre ->request->name;

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

    public function agregaProducto()
    {
        $categorias = Categoria::all();
        return view('agrega')->with('categorias',$categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Producto;
        $producto->nombre=$request->nombre;
        $producto->descripcion=$request->descripcion;
        $producto->cantidad=$request->cantidad;
        $producto->categoria_id=$request->tipoCategoria;
        $producto->precio=$request->precio;

        $archivo=$request->file('foto');
        
        $path=$request->file('foto')->storeAs(
            'public/imgStore',$archivo->getClientOriginalName().".".$archivo->getClientOriginalExtension());

        $producto->foto = $archivo->getClientOriginalName().".".$archivo->getClientOriginalExtension();
        $producto->save();

        return redirect('/catalogo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);
        $categorias = Categoria::all();
        return view('editar')->with('producto',$producto)->with('categorias',$categorias);
    }

    
    public function guardaCampos(Request $request)
    {
        $producto = Producto::find($request->id);
        
        $producto->nombre = $request->nombre;
        $producto->descripcion=$request->descripcion;
        $producto->cantidad=$request->cantidad;
        $producto->categoria_id=$request->tipoCategoria;

        $producto->precio=$request->precio;


        $archivo=$request->file('foto');

        $path=$request->file('foto')->storeAs(
            'public/imgStore',$archivo->getClientOriginalName().".".$archivo->getClientOriginalExtension());

        $producto->foto = $archivo->getClientOriginalName().".".$archivo->getClientOriginalExtension();

        $producto->save();
    
        return redirect('/catalogo');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        return redirect('/catalogo');
    }


    public function enviaCorreo()
    {
        //Mail::to($request->user())->send(new OrderShipped($order));

        Mail::to("ferbargar99@hotmail.com")->send(new Primero());

        return "exito";
    }
}
