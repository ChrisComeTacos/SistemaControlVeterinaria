<?php

namespace App\Http\Controllers;

use App\Models\Especie;
use Illuminate\Http\Request;

class EspecieController extends Controller
{
    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $especies = Especie::where('NombreEspecie', 'LIKE','%'.$busqueda.'%')
                ->paginate(4);
        $data = [
            'especies'=>$especies,
            'busqueda' =>$busqueda,
        ];
        return view ('admin.especies.index',$data);
    }

    public function create()
    {
        return view('admin.especies.create');
    }

    public function store(Request $request)
    { 

        $request->validate([
            'NombreEspecie' => 'required',
        ]);



        $especie = new Especie();

        $especie->NombreEspecie = $request->NombreEspecie;

        
        $especie->save();
        return redirect()->route('especies.index')->with('success','Formulario validado');
    }

    public function show($especie)
    {
        $especie = Especie::find($especie);
        $data = [
            'especie'=>$especie,
        ];
        return view('admin.especies.show',compact('especie'));
    }

    public function edit($especie)
    {
        $especie = Especie::find($especie);
        $data = [
            'especie'=>$especie,
        ];
        return view('admin.especies.edit',compact('especie'));
    }

    public function update(Request $request, $especie)
    {
        $especie = Especie::find($especie);
        $especie->NombreEspecie = $request->NombreEspecie;


        $especie->save();
        return redirect()->route('especies.index');
    }

    public function destroy($especie)
    {
        $especie = Especie::find($especie);
        $especie->delete();
        return redirect()->route('especies.index');
    }
}
