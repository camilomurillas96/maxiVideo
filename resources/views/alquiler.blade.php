@extends('layout')

@section('content')

<section id="alquiler">
<div id="contact-us" class="parallax">
    <div class="container">
        <div class="row">
            <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>¿Qué películas veras hoy?</h2>
            <p>Diviértete eligiendo tu película favorita</p>
            </div>
        <form id="main-contact-form" name="contact-form" method="post" action="{{ route('createClient') }}">
          @csrf
              <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" name="numeroId" class="form-control" placeholder="Numero de identificación" required="required">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Nombre Completo">
                  </div>
                </div>    
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" name="telefono" class="form-control" placeholder="Numero teléfonico">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" name="direccion" class="form-control" placeholder="Direccion de residencia">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Correo electronico">
              </div>
                <hr>
                <br>
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="col-sm-6">
                <input class="form-select" aria-label="select example" list="milist">
                  <datalist id="milist">
                  <option value="">Seleeccione una Pelicula</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </datalist>
                </select>
                <div class="invalid-feedback">Por favor, seleccione una pelicula</div>
                </div>
                </div>
              <div class="form-group">
                <textarea name="message" id="message" class="form-control" rows="4" placeholder="Observación" ></textarea>
              </div>  
              </div>                 
              <div class="form-group">
                <button type="submit" class="btn-submit">Send Now</button>
              </div>
            </form>
    </div>
    </div>
</div>
</section>

@endsection