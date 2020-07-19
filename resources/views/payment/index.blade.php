@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1 class="pull-left">Payments and Subscriptions</h1>
</section>
<div class="content">
    <div class="clearfix"></div>

    @include('flash::message')

    <div class="clearfix"></div>

    <div class="container">
        <div class="row align-content-center">
            <div class="col-6">

                @if ($user->hasPaymentMethod())
                <div class="notice notice-primary alert show" role="alert">
                    <strong>Modificar Metodo forma de Pago:</strong>
                    <br>
                    <button type="button" class="btn btn-primary"
                        onclick="window.location.href='{{ route('payment.billingPortal')}}'">Agregar y Modificar Metodo
                        de Pago</button>
                </div>
                @else
                <div class="notice notice-warning alert show" role="alert">
                    <strong>No tiene un metodo de pago registrado!</strong>
                    <br>
                    Puede agregar un metodo desde el
                    <a href="{{ route('payment.billingPortal')}}" style="color: black">
                        Panel de Facturacion
                    </a>
                    <br>
                    <button type="button" class="btn btn-primary"
                        onclick="window.location.href='{{ route('payment.billingPortal')}}'">Agregar Metodo de
                        Pago</button>
                    <br>
                    No se realizara ningun cobro hasta que elija un plan.
                    <br>
                </div>
                @endif

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @if (count($user->getSubscriptions()) > 0)
            <div class="notice notice-primary alert show" role="alert">
                <strong>Modificar Plan:</strong>
                <br>
                <button type="button" class="btn btn-primary"
                    onclick="window.location.href='{{ route('payment.billingPortal')}}'">Modificar Plan</button>
            </div>
            @endif
        </div>
    </div>
    @if (count($user->getSubscriptions()) <= 0)
    <div class="row align-content-center align-items-center">
        <div class="col-md-offset-1 col-md-3">
            <div class="well">
                <h2 class="muted">LITE</h2>
                <p><span class="label label-success">POPULAR</span></p>
                <ul>
                    <li><span>Perfil propio</span></li>
                    <li><span>CV apartir de plantilla html</span></li>
                    <li><span>Guarda tu documento CV</span></li>
                    <li><span>Permite que descarguen tu CV</span></li>
                    <li><span>Comparte tu Perfil con otros</span></li>
                    <li><span>Utiliza 1 plantilla con tu cuenta</span></li>

                </ul>
                <hr>
                <h3>€1 / month</h3>
                <hr>
                <p><a class="btn btn-success btn-large" href="{{ route('payment.subscribe', 'lite') }}"><i
                            class="icon-ok"></i> Select plan</a></p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="well">
                <h2 class="text-warning">LITEPLUS</h2>
                <p><span class="label label-success">POPULAR</span></p>
                <ul>
                    <li><span>Perfil propio</span></li>
                    <li><span>CV apartir de plantilla html</span></li>
                    <li><span>Guarda tu documento CV</span></li>
                    <li><span>Permite que descarguen tu CV</span></li>
                    <li><span>Comparte tu Perfil con otros</span></li>
                    <li><span>Almacena las imagens y videos de tu CV con nosotros</span></li>
                    <li><span>Utiliza hasta 3 plantilla simultaneas con tu cuenta</span></li>
                </ul>
                <hr>
                <h3>€2 / month</h3>
                <hr>
                <p><a class="btn btn-success btn-large" href="{{ route('payment.subscribe', 'lite-plus') }}"><i
                            class="icon-ok"></i> Select plan</a></p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="well">
                <h2 class="text-info">BASIC</h2>
                <ul>
                    <li><span>Perfil propio</span></li>
                    <li><span>CV apartir de plantilla html</span></li>
                    <li><span>Guarda tu documento CV</span></li>
                    <li><span>Permite que descarguen tu CV</span></li>
                    <li><span>Comparte tu Perfil con otros</span></li>
                    <li><span>Almacena las imagens y videos de tu CV con nosotros</span></li>
                    <li><span>Formularios de contacto ligados a tu perfil</span></li>
                    <li><span>Almacenamos los mensajes que te lleguen</span></li>
                    <li><span>Utiliza hasta 5 plantilla simultaneas con tu cuenta</span></li>
                </ul>
                <hr>
                <h3>€3 / month</h3>
                <hr>
                <p><a class="btn btn-success btn-large" href="{{ route('payment.subscribe', 'basic') }}"><i
                            class="icon-ok"></i> Select plan</a></p>
            </div>
        </div>

    </div>
    @endif



</div>
@endsection

@section('css')

<style>
    .notice {
        font-size: 1.2vw;
        padding: 15px;
        background-color: #fafafa;
        margin-bottom: 10px;
        -webkit-box-shadow: 0 5px 8px -6px rgba(0, 0, 0, .2);
        -moz-box-shadow: 0 5px 8px -6px rgba(0, 0, 0, .2);
        box-shadow: 0 5px 8px -6px rgba(0, 0, 0, .2);
    }

    .notice-sm {
        padding: 10px;
        font-size: 80%;
    }

    .notice-lg {
        padding: 35px;
        font-size: large;
    }

    /* Primary */
    .notice-primary {
        border-left: 6px solid #cce5ff !important;
    }

    .notice-primary>strong {
        color: #004085;
    }

    /* Secondary */
    .notice-secondary {
        border-left: 6px solid #e2e3e5 !important;
    }

    .notice-secondary>strong {
        color: #383d41;
    }

    /* Success */
    .notice-success {
        border-left: 6px solid #d4edda !important;
    }

    .notice-success>strong {
        color: #155724;
    }

    /* Information */
    .notice-info {
        border-left: 6px solid #d1ecf1 !important;
    }

    .notice-info>strong {
        color: #0c5460;
    }

    /* Warning */
    .notice-warning {
        border-left: 6px solid #fff3cd !important;
    }

    .notice-warning>strong {
        color: #856404;
    }

    /* Danger */
    .notice-danger {
        border-left: 6px solid #f8d7da !important;
    }

    .notice-danger>strong {
        color: #721c24;
    }

</style>

@endsection


@section('scripts')

@endsection
