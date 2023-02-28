<form action="{{ route('mascotas.store') }}" method="POST">
    @csrf
    <div>
        <label for="">Nombre del dueño</label>
        <input type="text" name="NombreDueno">
    </div>

    <div>
        <label for="">Apellido P.</label>
        <input type="text" name="ApellidoP">
    </div>

    <div>
        <label for="">Apellido M.</label>
        <input type="text" name="ApellidoM">
    </div>

    <div>
        <label for="">Nombre de mascota</label>
        <input type="text" name="NombreMascota">
    </div>

    <div>
        <label for="">Raza de mascota</label>
        <input type="text" name="RazaMascota">
    </div>

    <div>
        <label for="">Diagnóstico</label>
        <input type="text" name="DiagnosticoMascota">
    </div>

    <div>
        <input type="submit" value="Agregar">
    </div>

</form>

{{-- <th>id</th>
<th>Nombre del dueño</th>
<th>Apellido P.</th>
<th>Apellido M.</th>
<th>Nombre de mascota</th>
<th>Raza de mascota</th>
<th>Diagnostico</th> --}}