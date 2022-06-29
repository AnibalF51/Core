@extends('plantilla')

@section('titulo', 'Lista de Empresas')

@section('contenido')
<br>
<section class="content">
    <div class="container-fluid">
        <!-- INICIO CONTENIDO -->

        <div class="row">
            <div class="col-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Datos de las empresas</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Empresa</th>
                                    <th>Propietario</th>
                                    <th>Estado</th>
                                    <th>Fecha de Registro</th>
                                    <th>Fecha de Actualizacion</th> 
                                    <th>Acciones</th>                                                                                         
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($empresas as $item)
                                    <tr>     
                                        <td>{{$item->id}}</td>                                           
                                        <td>{{$item->nombreE}}</td>
                                        <td>{{$item->nombreP}}</td>
                                        <td>{{$item->estado}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>{{$item->updated_at}}</td>
                                       
                                        <td>
                                            <a href="#" class="btn btn-warning"><i class="fas fa-user-edit" title="Editar Datos: {{ $item->nombreE }}"></i></a>                                     
                                        </td>
                                                                                           
                                    </tr>
                                @endforeach                                      
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Empresa</th>
                                    <th>Propietario</th>
                                    <th>Estado</th>
                                    <th>Fecha de Registro</th>
                                    <th>Fecha de Actualizacion</th> 
                                    <th>Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- FIN CONTENIDO -->        
    </div>
</section>

@endsection