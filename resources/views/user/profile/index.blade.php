@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Menu Principal</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">

                <div class="text-center" style="font-size: 20px">
                    Gracias por utilizar este servicio.<br>
                    Actualmente esta utilizando la primera version de este servicio.<br>
                    En las próximas semanas se realizaran mejoras <strong>con ayuda de las suscripciones</strong> que van desde 1 Euro al mes,
                    continuaremos mejorando y facilitando el proceso de creación de tu cv Digital<br>
                    Si tiene dudas puede contactarnos mediante Facebook<br>
                    <a href="https://www.facebook.com/Digital-CV-113886277069639" target="_blank" rel="noopener noreferrer">Click aquí para dirigirse a nuestro Facebook</a>
                </div>

                <br>
                <br>

                <div class="text-center" style="font-size: 20px">
                    Recomendamos que personalice su cv desde un ordenador
                </div>


            </div>
        </div>

        <div class="box box-primary">
            <div class="box-body">

                <h1>Tu cv digital</h1>
                <h3>El siguiente link redirigirá a tu plantilla por defecto</h3>
                <h4><strong>{{ Auth::user()->getResumeLink() }}</strong></h5>
                <h4>Compártelo con quien quieras que vea tu cv</h4>
                <p>Puedes modificar tu plantilla y seleccionar si tienes múltiples la que se utilizara por defecto<br>Asi podrás cambiar entre diferentes plantillas de manera sencilla</p>
            </div>
        </div>

    </div>
@endsection

