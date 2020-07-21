@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Template View History
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('template_view_histories.show_fields')
                    <a href="{{ route('templateViewHistories.index') }}" class="btn btn-default">Regresar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
