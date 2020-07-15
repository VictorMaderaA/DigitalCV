@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Resume
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($resume, ['route' => ['resumes.update', $resume->id], 'method' => 'patch']) !!}

                        @include('resumes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection