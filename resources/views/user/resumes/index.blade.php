@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Mi CV</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                @if (count($resumes) <= 0)
                    <p style="font-size: 1.5vw;">
                        Copie una plantilla para empezar a crear su Curriculum Digital
                    </p>
                @else
                    @include('user.resumes.resumes-table')
                @endif
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>

    <section class="content-header">
        <h1 class="pull-left">Plantillas Disponibles</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <div class="text-center">
                    {{ $templates->links() }}
                </div>
                @include('user.resumes.templates-table')
                <div class="text-center">
                    {{ $templates->links() }}
                </div>
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection

