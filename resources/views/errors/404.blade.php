@extends('layout')

@section('content')

    <section class="moduler wrapper_404">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <h1>404</h1>
                        <h2>Opps! tienes algun problema</h2>
                        <h3>La pagina a la que estas tratando de ingresar fué eliminada o no éxiste.</h3>
                        <a class="navbar-brand" href="{{ route('inicio') }}">
                            Regresar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop