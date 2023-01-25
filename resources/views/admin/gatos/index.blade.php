@extends('adminlte::page')

@section('title', 'Laracats')

@section('content_header')
    <h1>Lista de Gatos
        <a href="" data-target="#modal-create" data-toggle="modal" >
            <button class="btn btn-success">Nuevo</button>
        </a>
        
        
    </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table id="gato" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Nacimiento</th>
                        <th>Genero</th>
                        <th>Foto</th>
                        {{--<th>Imagen</th>--}}
                        <th>Raza</th>
                        <th>Operaciones</th>

                        
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($gatos as $gato)
                        <tr>
                            <td>{{$gato->id}}</td>
                            <td>{{$gato->name}}r</td>
                            <td>{{$gato->date_of_birth}}</td>
                            <td>{{$gato->gender}}</td>
                            <td>{{$gato->photo}}</td>
                            {{--<td><img src="{{$gato->photo}}" class="img-responsive"></td>--}}
                            <td>{{$gato->raza->name}}-{{$gato->raza->id}}</td>
                            <td>
                                <a href="" data-target="#modal-show-{{$gato->id}}" data-toggle="modal" >
                                    <button class="btn btn-primary" title="Ver">
                                        <span style="font-size:1em;color:white">
                                            <i class="fas fa-eye" ></i>

                                        </span>
                                    </button>
                                </a>
                                <a href="" data-target="#modal-edit-{{$gato->id}}" data-toggle="modal">
                                    <button class="btn btn-secondary" title="Editar">
                                        <span style="font-size:1em;color:white">
                                            <i class="fas fa-edit" ></i>

                                        </span>
                                    </button>
                                </a>
                                <a href="" data-target="#modal-delete-{{$gato->id}}" data-toggle="modal" >
                                    <button class="btn btn-danger" title="Eliminar">
                                        <span style="font-size:1em;color:white">
                                            <i class="fas fa-trash" ></i>

                                        </span>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @include('admin.gatos.delete')
                    @include('admin.gatos.show')
                    @include('admin.gatos.edit')
                    @endforeach
                        
                           
                </tbody>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Nacimiento</th>
                        <th>Genero</th>
                        <th>Foto</th>
                        {{--<th>Imagen</th>--}}
                        <th>Raza</th>
                        <th>Operaciones</th>
                        
                    </tr>
                </tfoot>
            </table>
        </div>    
    </div>    

    @include('admin.gatos.create')




@stop

@section('css')
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">

@stop

@section('js')
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"> </script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script> 
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"> </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"> </script>
    <script>
        $('#gato').DataTable({
            responsive: true,
            autowith: false,

            "language":{
                "processing": "Procesando...",
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "emptyTable": "Ningún dato disponible en esta tabla",
            "info": "Mostrar pagina _PAGE_ de _PAGES_",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "infoThousands": ",",
            "loadingRecords": "Cargando...",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
                        }
                     }
    

        });
    </script>
    @if (session('info'))
        <script>
            Swal.fire(
            'Completado',
            '{{session('info')}} ',
            'success'
                )
        </script>
        
    @endif
@stop 