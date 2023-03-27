<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\PDF;
use App\Models\Consulta;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $consultas = Consulta::where('NombreDueno', 'LIKE','%'.$busqueda.'%')
                ->orWhere('ApellidoP', 'LIKE','%'.$busqueda.'%')
                ->orWhere('ApellidoM', 'LIKE','%'.$busqueda.'%')
                ->orWhere('NombreMascota', 'LIKE','%'.$busqueda.'%')
                ->orWhere('EspecieMascota', 'LIKE','%'.$busqueda.'%')
                ->orWhere('RazaMascota', 'LIKE','%'.$busqueda.'%')
                ->latest('id')
                ->paginate(3);
        $data = [
            'consultas'=>$consultas,
            'busqueda' =>$busqueda,
        ];
        return view ('admin.consultas.index',$data);
    }

    public function create()
    {
        return view('citas');
    }

    public function store(Request $request)
    { 

        $request->validate([
            'NombreDueno' => 'required',
            'ApellidoP' => 'required',
            'ApellidoM' => 'required',
            'TelefonoDueno' => 'required | numeric | digits:10',
            'NombreMascota' => 'required',
            'EspecieMascota' => 'required',
            'RazaMascota' => 'required',
            'FechaCita' => 'required | date',
        ]);



        $consulta = new Consulta();

        $consulta->NombreDueno = $request->NombreDueno;
        $consulta->ApellidoP = $request->ApellidoP;
        $consulta->ApellidoM = $request->ApellidoM;
        $consulta->TelefonoDueno = $request->TelefonoDueno;
        $consulta->NombreMascota = $request->NombreMascota;
        $consulta->EspecieMascota = $request->EspecieMascota;
        $consulta->RazaMascota = $request->RazaMascota;
        $consulta->PesoMascota = $request->PesoMascota;
        $consulta->FechaCita = $request->FechaCita;
        $consulta->DiagnosticoMascota = $request->DiagnosticoMascota;

        
        $consulta->save();
        return redirect()->route('consultas.index');
    }

    public function show($consulta)
    {
        $consulta = Consulta::find($consulta);
        $data = [
            'consulta'=>$consulta,
        ];
        return view('admin.consultas.show',compact('consulta'));
    }

        public function pdf($consulta) {

        $consulta=Consulta::find($consulta);
        $data = [
            'consulta'=>$consulta,
        ];
        $pdf = PDF::loadView('admin.consultas.pdf', compact('consulta'));
        return $pdf->stream('');
    }

    public function edit($consulta)
    {
        $consulta = Consulta::find($consulta);
        $data = [
            'consulta'=>$consulta,
        ];
        return view('admin.consultas.edit',compact('consulta'));
    }

    public function update(Request $request, $consulta)
    {
        $consulta = Consulta::find($consulta);
        $consulta->EspecieMascota = $request->EspecieMascota;
        $consulta->RazaMascota = $request->RazaMascota;
        $consulta->PesoMascota = $request->PesoMascota;
        $consulta->AsistenciaStatus = $request->AsistenciaStatus;
        $consulta->DiagnosticoMascota = $request->DiagnosticoMascota;


        $consulta->save();
        return redirect()->route('consultas.index');
    }

    public function destroy($consulta)
    {
        $consulta = Consulta::find($consulta);
        $consulta->delete();
        return redirect()->route('consultas.index');
    }
}
