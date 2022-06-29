@extends('plantilla')

@section('titulo', 'Registro de Empresa')

@section('contenido')
<br>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">


        <!-- Aqui va todo lo del Contenido a mostrar -->
        <!-- Datos del Paciente -->
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Registro de empresas</h3>
            </div>
            <!-- /.card-header -->

            <!-- form start -->




            <form action="{{route('empresa.registro')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                        <div class="form-group col-sm-12">
                            <label for="txtempresa">Nombre de la empresa</label>
                            <input type="text" id="nEmpresa" name="nEmpresa" class="form-control">
                        </div>
                        
                        <div class="form-group col-sm-12">
                            <label for="txtdescripcion">Descripcion de la empresa</label>
                            <textarea type="text" name="descripcion" class="form-control" id="descripcion"
                                placeholder="Ingrese la descripcion de la empresa"></textarea>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="txtnit">NIT del propietario</label>
                                <input type="text" id="nit" name="nit" class="form-control">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="txtnombre">Nombre del propietario</label>
                                <input type="text" id="nombre" name="nombre" class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-sm-12"> 
                            <label for="txtestado">Seleccione estado de la empresa</label>
                                <select name="txtestado" class="form-control" id="txtestado"
                                    placeholder="Seleccione un estado">
                                    <option value="Activo" selected>Activo</option>
                                    <option value="Inactivo">Inactivo</option>
                                </select>
                        </div>

                </div>


                <div class="card-footer">
                    <button type="submit" class="btn btn-primary swalDefaultSuccess"><i
                            class="fas fa-save"></i> Registrar</button>
                    <a href="{{ route('empresa.lista') }}" class="btn btn-danger">
                        <i class="fas fa-ban"></i> Cancelar
                    </a>
                </div>
            </form>

            <!-- CONTENIDO -->

            @if (session('agregar'))
                <div class="alert alert-success mt-3">
                    {{ session('agregar') }}
                </div>
            @endif

        </div>
</section>
<!-- FIN DE PLAN  -->
@endsection