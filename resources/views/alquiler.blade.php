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