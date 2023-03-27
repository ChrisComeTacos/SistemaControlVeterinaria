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
        return view('create');
    }

    public function store(Request $request)
    { 

        $request->validate([
            'NombreDueno' => 'required',
            'ApellidoP' => 'required',
            'ApellidoM' => 'required',
            'TelefonoDueno' => 'required | numeric | digits:10',
            'FotoMascota' => 'required | image | mimes:jpeg,jpg,png|max:2048',
            'NombreMascota' => 'required',
            'EspecieMascota' => 'required',
            'RazaMascota' => 'required',
            'FechaCita' => 'required | date',
        ]);



        $mascota = new Mascota();

        if( $request->hasFile('FotoMascota')); {
            $file = $request->file('FotoMascota');
            $destinationPath = 'img/FotoMascota/';
            $filename =  time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('FotoMascota')->move($destinationPath, $filename);
            $mascota->FotoMascota = $destinationPath . $filename;
        }

        $mascota->NombreDueno = $request->NombreDueno;
        $mascota->ApellidoP = $request->ApellidoP;
        $mascota->ApellidoM = $request->ApellidoM;
        $mascota->TelefonoDueno = $request->TelefonoDueno;
        $mascota->FotoMascota = $request->FotoMascota;
        $mascota->NombreMascota = $request->NombreMascota;
        $mascota->EspecieMascota = $request->EspecieMascota;
        $mascota->RazaMascota = $request->RazaMascota;
        $mascota->PesoMascota = $request->PesoMascota;
        $mascota->FechaCita = $request->FechaCita;
        $mascota->DiagnosticoMascota = $request->DiagnosticoMascota;

        
        $mascota->save();
        return redirect()->route('mascotas.index')->with('success','Formulario validado');
    }

    public function show($mascota)
    {
        $mascota = Mascota::find($mascota);
        $data = [
            'mascota'=>$mascota,
        ];
        return view('admin.mascotas.show',compact('mascota'));
    }

        public function pdf($mascota) {

        $mascota=Mascota::find($mascota);
        $data = [
            'mascota'=>$mascota,
        ];
        $pdf = PDF::loadView('admin.mascotas.pdf', compact('mascota'));
        return $pdf->stream('');
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
        $mascota->FotoMascota = $request->FotoMascota;
        $mascota->EspecieMascota = $request->EspecieMascota;
        $mascota->RazaMascota = $request->RazaMascota;
        $mascota->PesoMascota = $request->PesoMascota;
        $mascota->AsistenciaStatus = $request->AsistenciaStatus;
        $mascota->DiagnosticoMascota = $request->DiagnosticoMascota;


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
