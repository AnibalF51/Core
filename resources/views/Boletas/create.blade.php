@extends('plantilla')

@section('titulo', 'Registro de Empresa')

@section('contenido')
<br>
<section class="content">
    <div class="container-fluid">
        <form action="{{route('empresa.registro')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Datos de la boleta</h3>
            </div>
           

                <div class="card-body">
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="txtempresa">No. Boleta</label>
                                <input type="number" id="nEmpresa" name="nEmpresa" class="form-control">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="txtempresa">Valor en la Boleta</label>
                                <input type="number" id="nEmpresa" name="nEmpresa" class="form-control">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="txtempresa">Fecha de deposito</label>
                                <input type="date" id="nEmpresa" name="nEmpresa" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="txtempresa">Lugar donde deposito</label>
                                <input type="number" id="nEmpresa" name="nEmpresa" class="form-control">
                            </div>
                            <div class="form-group col-sm-6"> 
                                <label for="txtestado">Forma de pago</label>
                                    <select name="txtestado" class="form-control" id="txtestado"
                                        placeholder="Seleccione un estado">
                                        <option value="Activo" selected>Deposito</option>
                                        <option value="Inactivo">Transferencia</option>
                                        <option value="Inactivo">Cheque</option>
                                        <option value="Inactivo">Otros</option>
                                    </select>
                            </div>
                            
                        </div>
                        <div class="form-group col-sm-12"> 
                            <label for="txtestado">Seleccione el banco</label>
                                <select name="txtestado" class="form-control" id="txtestado"
                                    placeholder="Seleccione un estado">
                                    <option value="Activo" selected>Banrural</option>
                                    <option value="Inactivo">Industrial</option>
                                    <option value="Inactivo">BAM</option>
                                    <option value="Inactivo">Bantrab</option>
                                </select>
                        </div>
                </div>
        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Datos Recibo</h3>
            </div>
           

                <div class="card-body">
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="txtempresa">No. Recibo</label>
                                <input type="number" id="nEmpresa" name="nEmpresa" class="form-control">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="txtempresa">Monto en el recibo</label>
                                <input type="number" id="nEmpresa" name="nEmpresa" class="form-control">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="txtempresa">Fecha de recepcion de boleta</label>
                                <input type="date" id="nEmpresa" name="nEmpresa" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="txtempresa">Tipo de pago</label>
                                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true"
                                        id="seleccion">
                                        <option selected="selected" value="Seleccione una opcion">Seleccione una opcion
                                        </option>
                                            <option data-select2-id="1" name="nivel" value="Basico">Mensualidad</option>
                                            <option data-select2-id="1" name="nivel" value="Computacion">Plataforma</option>
                                            <option data-select2-id="1" name="nivel" value="Computacion">Administrativos</option>
                                            <option data-select2-id="1" name="nivel" value="Computacion">Mora</option>
                                            <option data-select2-id="1" name="nivel" value="Perito Contador">Graduacion</option>
                                    </select>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="txtempresa">Nombre del alumno</label>
                                <input type="text" id="nEmpresa" name="nEmpresa" class="form-control">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="txtempresa">Grado</label>
                                <input type="number" id="nEmpresa" name="nEmpresa" class="form-control">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="txtempresa">Nivel/Carrera</label>
                                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true"
                                        id="seleccion">
                                        <option selected="selected" value="Seleccione una opcion">Seleccione una opcion
                                        </option>
                                            <option data-select2-id="1" name="nivel" value="Basico">Primaria</option>
                                            <option data-select2-id="1" name="nivel" value="Computacion">Computacion</option>
                                            <option data-select2-id="1" name="nivel" value="Computacion">Mecanica</option>
                                            <option data-select2-id="1" name="nivel" value="Computacion">Medicina</option>
                                            <option data-select2-id="1" name="nivel" value="Perito Contador">Perito Contador</option>
                                            <option data-select2-id="1" name="nivel" value="Electronica">Electronica</option>
                                            <option data-select2-id="1" name="nivel" value="Criminologia">Criminologia</option>
                                            <option data-select2-id="1" name="nivel" value="Secretariado">Secretariado</option>
                                            <option data-select2-id="1" name="nivel" value="Secretariado">Juridico</option>
                                            <option data-select2-id="1" name="nivel" value="Secretariado">Magisterio</option>
                                            <option data-select2-id="1" name="nivel" value="Secretariado">Turismo</option>
                                            <option data-select2-id="1" name="nivel" value="Secretariado">Ciencias y Letras</option>
                                    </select>
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="txtempresa">Comentarios</label>
                            <textarea rows="5" class="form-control" name="observaciones" id="observaciones" placeholder="Observaciones"> </textarea>
                        </div>
                </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary swalDefaultSuccess"><i
                    class="fas fa-save"></i> Registrar</button>
            <a href="{{ route('empresa.lista') }}" class="btn btn-danger">
                <i class="fas fa-ban"></i> Cancelar
            </a>
        </div>
        @if (session('agregar'))
                <div class="alert alert-success mt-3">
                    {{ session('agregar') }}
                </div>
            @endif
    </form>
</section>
<!-- FIN DE PLAN  -->
@endsection