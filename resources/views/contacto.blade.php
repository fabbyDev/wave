@extends('templates/layout')

@section('main-content')
<main class="">
    <div class="d-flex justify-content-center align-items-center" style="height: 250px; background: url('http://musicplace.themerex.net/wp-content/uploads/2016/07/bg-about-1.jpg');background-position: center;     background-repeat: no-repeat; background-size: cover;">
    <h1 class="fw-bold text-light" >CONTACTO</h1>
    </div>

    <article class="container  p-4">
        <h1 class="text-center fw-bold">ENVIANOS UN MENSAJE</h1>
        
        <form class="row my-4">
            <div class="col-sm-6 my-2 my-sm-0">
            <input type="text" class="form-control p-2" placeholder="Tu Nombre" aria-label="First name">
            </div>
            <div class="col-sm-6 my-2 my-sm-0">
            <input type="email" class="form-control p-2" placeholder="tu correo" aria-label="Last name">
            </div>
            
            <div class="mb-3 my-4">
                <textarea class="form-control p-2" id="message" placeholder="Tu Mensaje" rows="3"></textarea>
            </div>

            <button class="btn btn-success" type="submit">ENVIAR</button>
        </form>
    </article>
</main>
@endsection