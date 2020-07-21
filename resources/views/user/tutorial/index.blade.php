@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1 class="pull-left">Como Empezar</h1>
</section>
<div class="content">
    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body" style="font-size: 18px">
            <div class="row">
                <div class="col-md-6 text-center">
                    <h3>1 - Elegir plantilla</h3>
                    <p>Desde <a href="{{route('my.resumes')}}"><b>Mi Curriculum</b></a> elige una plantilla que deseas y
                        copiala con el boton verde "Copiar"</p>
                    <a href="{{asset('/img/tutorial-01.PNG')}}" target="_blank" rel="noopener noreferrer">
                        <img id="myImg" src="{{asset('/img/tutorial-01.PNG')}}" alt="tutorial-02"
                            style="width:50%;max-height:70%">
                    </a>

                </div>
                <div class="col-md-6 text-center">
                    <h3>2 - Modificar</h3>
                    <p>En <a href="{{route('my.resumes')}}"><b>Mi Curriculum</b></a> encontraras la plantilla
                        seleccionada<br>
                        Presiona el botón para modificarla
                    </p>
                    <a href="{{asset('/img/tutorial-02.PNG')}}" target="_blank" rel="noopener noreferrer">
                        <img id="myImg" src="{{asset('/img/tutorial-02.PNG')}}" alt="tutorial-02"
                            style="width:50%;max-height:70%">
                    </a>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6 text-center">
                    <h3>3 - Descargar Plantilla</h3>
                    <p>Haz click en "Descargar plantilla editable<br>Esto guardara un archivo .html en tu dispositivo
                    </p>
                    <a href="{{asset('/img/tutorial-03.PNG')}}" target="_blank" rel="noopener noreferrer">
                        <img id="myImg" src="{{asset('/img/tutorial-03.PNG')}}" alt="tutorial-03"
                            style="width:50%;max-height:70%">
                    </a>

                </div>
                <div class="col-md-6 text-center">
                    <h3>4 - Como Modifica la Plantilla</h3>
                    <p>
                        Abre el documento con un editor de texto como Bloc de notas,
                        <a href="https://notepad-plus-plus.org/downloads/" target="_blank"
                            rel="noopener noreferrer">Notepad++</a>,
                        <a href="https://code.visualstudio.com/" target="_blank" rel="noopener noreferrer">Visual Studio
                            Code</a>,
                        <a href="https://www.sublimetext.com/" target="_blank" rel="noopener noreferrer">Sublime
                            TExt</a>, o el editor de preferencia
                    </p>
                    <a href="{{asset('/img/tutorial-04.PNG')}}" target="_blank" rel="noopener noreferrer">
                        <img id="myImg" src="{{asset('/img/tutorial-04.PNG')}}" alt="tutorial-04"
                            style="width:50%;max-height:70%">
                    </a>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6 text-center">
                    <h3>5 - Buscar y editar</h3>
                    <p>
                        En el documento busca lo que desead modificar comparando con lo que aparece en el curriculum, de
                        igual manera con los links de imágenes<br>
                        Recomendable utilizar el buscador de palabras si no estas familiarizado con HTML<br>
                        Puedes abrir el buscador en la mayoría de editores presionando<br>
                        Ctrl + F<br>
                        Ctrl + B
                    </p>
                    <a href="{{asset('/img/tutorial-05.PNG')}}" target="_blank" rel="noopener noreferrer">
                        <img id="myImg" src="{{asset('/img/tutorial-05.PNG')}}" alt="tutorial-05"
                            style="width:50%;max-height:70%">
                    </a>

                </div>
                <div class="col-md-6 text-center">
                    <h3>6 - Subir cambios</h3>
                    <p>
                        Una vez realizadas las modificaciones selecciona todo y copia los contenidos del archivo a el
                        campo de texto de la ventana de modificación de la plantilla, luego presiona Guardar<br>
                        Puedes sobrescribir completamente la plantilla original y utilizar una propia personalizada
                    </p>
                    <a href="{{asset('/img/tutorial-08.PNG')}}" target="_blank" rel="noopener noreferrer">
                        <img id="myImg" src="{{asset('/img/tutorial-08.PNG')}}" alt="tutorial-06"
                            style="width:50%;max-height:70%">
                    </a>

                </div>
            </div>
            <div class="row text-center">
                <h3>7 - Visualiza los cambios</h3>
                <p>
                    Al previsualizar veras los cambios realizados aplicados
                </p>
                <a href="{{asset('/img/tutorial-05.PNG')}}" target="_blank" rel="noopener noreferrer">
                    <img id="myImg" src="{{asset('/img/tutorial-05.PNG')}}" alt="tutorial-07"
                        style="width:50%;max-height:70%">
                </a>

            </div>
        </div>
    </div>

    <div class="box box-primary">
        <div class="box-body">
            <div class="row">
                <div class="col-md-6 text-center">
                    <h3>1 - Subir un archivo</h3>
                    <p>Desde <a href="{{route('my.files')}}"><b>Mis Archivos</b></a> selecciona un archivo y presiona
                        Subir Archivo<br>
                        Se recomienda que los archivos no superen 1 mb y se intente reducir su tamaño lo mas posible,
                        esto evitara que su curriculum tarde mas en cargar por archivos demasiado grandes<br>
                        Archivos demasiado grandes pueden llegar a marcar error o fallar al subirlos.
                    </p>
                    <a href="{{asset('/img/tutorial-06.PNG')}}" target="_blank" rel="noopener noreferrer">
                        <img id="myImg" src="{{asset('/img/tutorial-06.PNG')}}" alt="tutorial-06"
                            style="width:50%;max-height:70%">
                    </a>

                </div>
                <div class="col-md-6 text-center">
                    <h3>2 - Utilizar Archivo</h3>
                    <p>
                        Una vez guardado su archivo, puede copiar la url o abrir el archivo y utilizarlo libremente en
                        sus plantillas<br>
                    </p>
                    <a href="{{asset('/img/tutorial-07.PNG')}}" target="_blank" rel="noopener noreferrer">
                        <img id="myImg" src="{{asset('/img/tutorial-07.PNG')}}" alt="tutorial-07"
                            style="width:50%;max-height:70%">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>


</div>
@endsection
