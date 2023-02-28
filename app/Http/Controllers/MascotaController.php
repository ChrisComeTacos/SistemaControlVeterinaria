<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    public function index()
    {
        $mascotas = Mascota::all();
        $data = [
            'mascotas'=>$mascotas,
        ];
        return view ('admin.mascotas.index',$data);
    }

    public function create()
    {
        return view('admin.mascotas.create');
    }

    public function store(Request $request)
    {
        $mascota = new Mascota();

        $mascota->NombreDueno = $request->NombreDueno;
        $mascota->ApellidoP = $request->ApellidoP;
        $mascota->ApellidoM = $request->ApellidoM;
        $mascota->NombreMascota = $request->NombreMascota;
        $mascota->RazaMascota = $request->RazaMascota;
        $mascota->DiagnosticoMascota = $request->DiagnosticoMascota;

        $mascota->save();

        return redirect()->route('mascotas.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return $id;
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        return 'Eliminando'. $id;
    }
}
