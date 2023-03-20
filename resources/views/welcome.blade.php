{{-- INICIO--}}

@extends('layouts.app')

@section('CuerpoInicio')
  <section>
    <img src="img/parallax/edificios.svg" alt="fondo" id="edificios">
    <h2 id="slogan">Bienvenido a nuestra veterinaria</h2>
    <a href="{{ route('AgendarCita')}}" id="btn">Agendar cita</a>
    <img src="img/parallax/fondovet.svg" alt="fondo" id="fondovet">
    <img src="img/parallax/persona1.svg" alt="viento" id="persona1">
    <img src="img/parallax/gato.svg" alt="fondo_transparente" id="gato">
    <img src="img/parallax/persona2.svg" alt="persona" id="persona2">
    <img src="img/parallax/bush1.svg" alt="nube1" id="bush1">
  </section>

<div class="sec">
    <h2>SOBRE NOSOTROS</h2>
    <h3>Nuestra historia en Campeche</h3>
    <br>
    <p>En UNIDAD VETERINARIA CAMPECHE atendemos a sus mascotas de forma integral con el apoyo de un experimentado médico veterinario de perros y gatos en Campeche, Campeche, para brindarles los tratamientos y cuidados que merecen.
    <br><br>
    Desde hace más de 10 años contamos con instalaciones preparadas para ofrecer servicios de cirugía, consulta, aplicación de vacunas y estética para mascotas, con un trato amable y humano para evitar el estrés de sus animalitos; disponemos de las mejores opciones en productos y accesorios para mascotas que le brinden la nutrición y entretenimiento que les permita tener una vida sana y feliz.
    <br><br>
    Visítenos o contáctenos para contar con la mejor atención entre las clínicas veterinarias en Campeche, con la mejor opción en servicios y productos para mascotas.
    <br><br>     
    Ofrecemos los mejores cuidados veterinarios con atención personalizada para el cuidado de sus mejores amigos.
    <br><br>  
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores, vel quasi possimus nemo consequuntur illo, iste earum alias iusto, deserunt expedita? Nobis voluptatum fugit quidem saepe dignissimos, assumenda doloremque laudantium ullam harum perspiciatis quod ab eum enim eveniet? Optio, vero. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores, vel quasi possimus nemo consequuntur illo, iste earum alias iusto, deserunt expedita? Nobis voluptatum fugit quidem saepe dignissimos, assumenda doloremque laudantium ullam harum perspiciatis quod ab eum enim eveniet? Optio, vero.
    <br><br>
      
    </p>
</div>

@endsection