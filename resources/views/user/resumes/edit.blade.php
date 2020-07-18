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
                   {!! Form::model($resume, ['route' => ['my.resumes.update', $resume->id], 'method' => 'put']) !!}

                        @include('user.resumes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
