<?php

namespace App\Http\Controllers;

use App\Models\Suministro;
use Illuminate\Http\Request;

class SuministroController extends Controller
{
    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $suministros = Suministro::where('NombreSuministro', 'LIKE','%'.$busqueda.'%')
                ->orWhere('AreaSuministro', 'LIKE','%'.$busqueda.'%')
                ->latest('id')
                ->paginate(3);
        $data = [
            'suministros'=>$suministros,
            'busqueda' =>$busqueda,
        ];
        return view ('admin.suministros.index',$data);
    }

    public function create()
    {
        return view('admin.suministros.create');
    }

    public function store(Request $request)
    {
        $suministro = new Suministro();

        $suministro->NombreSuministro = $request->NombreSuministro;
        $suministro->AreaSuministro = $request->AreaSuministro;
        $suministro->PrecioSuministro = $request->PrecioSuministro;
        $suministro->CantidadSuministro = $request->CantidadSuministro;

        $suministro->save();

        return redirect()->route('suministros.index');
    }

    public function show($suministro)
    {
        $suministro = Suministro::find($suministro);
        $data = [
            'suministro'=>$suministro,
        ];
        return view('admin.suministros.show',compact('suministro'));
    }

    public function edit($suministro)
    {
        $suministro = Suministro::find($suministro);
        $data = [
            'suministro'=>$suministro,
        ];
        return view('admin.suministros.edit',compact('suministro'));
    }

    public function update(Request $request, $suministro)
    {
        $suministro = Suministro::find($suministro);
        $suministro->NombreSuministro = $request->NombreSuministro;
        $suministro->AreaSuministro = $request->AreaSuministro;
        $suministro->PrecioSuministro = $request->PrecioSuministro;
        $suministro->CantidadSuministro = $request->CantidadSuministro;

        $suministro->save();
        return redirect()->route('suministros.index');
    }

    public function destroy($suministro)
    {
        $suministro = Suministro::find($suministro);
        $suministro->delete();
        return redirect()->route('suministros.index');
    }
}
