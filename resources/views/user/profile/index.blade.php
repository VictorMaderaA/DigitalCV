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
                    Actualmete esta utilizando la primera version de este servicio.<br>
                    En las proximas semanas se realizaran mejoras con ayuda de las subscripciones que van desde 1 Euro al mes,
                    continuaremos mejorando y facilitando el proceso de creacion de tu Curriculum Digital
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



            </div>
        </div>

    </div>
@endsection

