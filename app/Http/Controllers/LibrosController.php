<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libros;

class LibrosController extends Controller
{

    public function Iniciar()
    {
        return view('Inicio');
    }

    public function index()
    {
        $data = Libros::where('estado',1)->get();
        return view('Tabla', compact('data'));
    }

    public function Save(Request $request)
    {

        $libro =  new Libros();
        $libro->nombre = $request->name;
        $libro->year = $request->year;
        $libro->autor= $request->author;
        $libro->estado=true;
        $libro->save();
        return back();

    }

    public function delete($id)
    {
        $librose = Libros::find($id);
        if($librose)
        {
            $librose->estado = false;
            $librose->save();
            return back();

        }
    }

}
