@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Template View History
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($templateViewHistory, ['route' => ['templateViewHistories.update', $templateViewHistory->id], 'method' => 'patch']) !!}

                        @include('template_view_histories.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection