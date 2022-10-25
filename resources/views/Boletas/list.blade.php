@extends('plantilla')

@section('titulo', 'Lista de Boletas')

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
                                    <th>No Boleta / Valor</th>
                                    <th>No Recibo / Valor</th>
                                    <th>Nombre</th>
                                    <th>Fecha de Registro</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>                                                                                         
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($boletas as $item)
                                    <tr>     
                                        <td>{{$item->id}}</td>                                           
                                        <td>{{$item->nBoleta}} / Q {{$item->vBoleta}}</td>
                                        <td>{{$item->nRecibo}} / Q {{$item->mRecibo}}</td>
                                        <td>{{$item->nAlumno}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <?php  
                                        if($item->estado=="Pendiente"){
                                              ?>
                                              <td>  <center><h5><span class="badge bg-warning">{{$item->estado}}</span></h5></center> </td>
                                              <?php
                                        }
                                        ?>
                                        <?php  
                                        if($item->estado=="Revisado"){
                                              ?>
                                              <td>  <center><h5><span class="badge bg-success">{{$item->estado}}</span></h5></center> </td>
                                              <?php
                                        }
                                        ?>
                                        <?php  
                                        if($item->estado=="Alerta"){
                                              ?>
                                              <td>  <center><h5><span class="badge bg-danger">{{$item->estado}}</span></h5></center> </td>
                                              <?php
                                        }
                                        ?>
                                        <td>
                                            <a href="#" class="btn btn-info"><i class="fas fa-user-edit" title="Editar Datos"></i></a>
                                            <a href="#" class="btn btn-warning"><i class="fas fa-undo-alt" title="Cambiar a Revisado"></i></a>
                                            <a href="#" class="btn btn-info"><i class="fas fa-eye" title="Ver detalles"></i></a>                                      
                                        </td>
                                                                                           
                                    </tr>
                                @endforeach                                      
                            </tbody>
                            <tfoot>
                                <tr>
                                <th>ID</th>
                                    <th>No Boleta / Valor</th>
                                    <th>No Recibo / Valor</th>
                                    <th>Nombre</th>
                                    <th>Fecha de Registro</th>
                                    <th>Estado</th>
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