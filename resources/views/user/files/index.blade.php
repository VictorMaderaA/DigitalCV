@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Mis Archivos</h1>
    </section>

        <div class="clearfix"></div>

        <div class="box-body">
            <div class="row">
                {!! Form::open(['route' => 'my.files.store', 'enctype' => 'multipart/form-data']) !!}

                    @include('user.files.fields')

                {!! Form::close() !!}
            </div>
        </div>

    <div class="content">

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                {{ $files->links() }}
                @include('user.files.table')
                {{ $files->links() }}
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection

