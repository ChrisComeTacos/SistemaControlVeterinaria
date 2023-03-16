<?php

namespace App\Http\Controllers;

use App\Models\Medicina;
use Illuminate\Http\Request;

class MedicinaController extends Controller
{
    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $medicinas = Medicina::where('NombreMedicamento', 'LIKE','%'.$busqueda.'%')
                ->orWhere('TipoMedicamento', 'LIKE','%'.$busqueda.'%')
                ->latest('id')
                ->paginate(3);
        $data = [
            'medicinas'=>$medicinas,
            'busqueda' =>$busqueda,
        ];
        return view ('admin.medicinas.index',$data);
    }

    public function create()
    {
        return view('admin.medicinas.create');
    }

    public function store(Request $request)
    {
        $medicina = new Medicina();

        $medicina->NombreMedicamento = $request->NombreMedicamento;
        $medicina->TipoMedicamento = $request->TipoMedicamento;
        $medicina->ContenidoMedicamento = $request->ContenidoMedicamento;
        $medicina->PrecioMedicamento = $request->PrecioMedicamento;
        $medicina->cantidad = $request->cantidad;


        $medicina->save();

        return redirect()->route('medicinas.index');
    }

    public function show($medicina)
    {
        $medicina = Medicina::find($medicina);
        $data = [
            'medicina'=>$medicina,
        ];
        return view('admin.medicinas.show',compact('medicina'));
    }

    public function edit($medicina)
    {
        $medicina = Medicina::find($medicina);
        $data = [
            'medicina'=>$medicina,
        ];
        return view('admin.medicinas.edit',compact('medicina'));
    }

    public function update(Request $request, $medicina)
    {
        $medicina = Medicina::find($medicina);
        $medicina->NombreMedicamento = $request->NombreMedicamento;
        $medicina->TipoMedicamento = $request->TipoMedicamento;
        $medicina->ContenidoMedicamento = $request->ContenidoMedicamento;
        $medicina->PrecioMedicamento = $request->PrecioMedicamento;
        $medicina->cantidad = $request->cantidad;

        $medicina->save();
        return redirect()->route('medicinas.index');
    }

    public function destroy($medicina)
    {
        $medicina = Medicina::find($medicina);
        $medicina->delete();
        return redirect()->route('medicinas.index');
    }
}
