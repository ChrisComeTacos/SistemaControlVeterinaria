<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\PDF;
use App\Models\Mascota;
use Illuminate\Http\Request;


class MascotaController extends Controller
{
    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $mascotas = Mascota::where('NombreDueno', 'LIKE','%'.$busqueda.'%')
                ->orWhere('ApellidoP', 'LIKE','%'.$busqueda.'%')
                ->orWhere('ApellidoM', 'LIKE','%'.$busqueda.'%')
                ->orWhere('NombreMascota', 'LIKE','%'.$busqueda.'%')
                ->orWhere('EspecieMascota', 'LIKE','%'.$busqueda.'%')
                ->orWhere('RazaMascota', 'LIKE','%'.$busqueda.'%')
                ->latest('id')
                ->paginate(3);
        $data = [
            'mascotas'=>$mascotas,
            'busqueda' =>$busqueda,
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
        $mascota->EspecieMascota = $request->EspecieMascota;
        $mascota->RazaMascota = $request->RazaMascota;
        $mascota->PesoMascota = $request->PesoMascota;

        $mascota->save();

        return redirect()->route('mascotas.index');
    }

    public function show($mascota)
    {
        $mascota = Mascota::find($mascota);
        $data = [
            'mascota'=>$mascota,
        ];
        return view('admin.mascotas.show',compact('mascota'));
    }

        public function pdf() {

        $mascota=Mascota::all();
        $pdf = PDF::loadView('admin.mascotas.pdf', \compact('mascota'));
        return $pdf->stream();
    }

    public function edit($mascota)
    {
        $mascota = Mascota::find($mascota);
        $data = [
            'mascota'=>$mascota,
        ];
        return view('admin.mascotas.edit',compact('mascota'));
    }

    public function update(Request $request, $mascota)
    {
        $mascota = Mascota::find($mascota);
        $mascota->NombreDueno = $request->NombreDueno;
        $mascota->ApellidoP = $request->ApellidoP;
        $mascota->ApellidoM = $request->ApellidoM;
        $mascota->NombreMascota = $request->NombreMascota;
        $mascota->EspecieMascota = $request->EspecieMascota;
        $mascota->RazaMascota = $request->RazaMascota;
        $mascota->PesoMascota = $request->PesoMascota;

        $mascota->save();
        return redirect()->route('mascotas.index');
    }

    public function destroy($mascota)
    {
        $mascota = Mascota::find($mascota);
        $mascota->delete();
        return redirect()->route('mascotas.index');
    }
}
