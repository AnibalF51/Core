@extends('plantilla')

@section('titulo', 'Registro de Empresa')

@section('contenido')
<br>
<section class="content">
    <div class="container-fluid">
        <form action="{{route('boletas.registro')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Datos de la boleta</h3>
                </div>


                <div class="card-body">


                    @error('nBoleta')
                    <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-exclamation-triangle"></i> Alerta!</h5>
                        * {{$message}}
                    </div>
                    @enderror
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="nBoleta">No. Boleta</label>
                            <input type="number" id="nBoleta" name="nBoleta" class="form-control"
                                value="{{old('nBoleta')}}" required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="vBoleta">Valor en la Boleta</label>
                            <input type="number" id="vBoleta" name="vBoleta" class="form-control"
                                value="{{old('vBoleta')}}" required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="fBoleta">Fecha de deposito</label>
                            <input type="date" id="fBoleta" name="fBoleta" class="form-control"
                                value="{{old('fBoleta')}}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="lBoleta">Lugar donde deposito</label>
                            <input type="text" id="lBoleta" name="lBoleta" class="form-control"
                                value="{{old('lBoleta')}}" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="pBoleta">Forma de pago</label>
                            <select name="pBoleta" class="form-control" id="pBoleta" value="{{old('pBoleta')}}"
                                placeholder="Seleccione un estado" required>
                                <option value="Deposito" selected>Deposito</option>
                                <option value="Transferencia">Transferencia</option>
                                <option value="Cheque">Cheque</option>
                                <option value="Otros">Otros</option>
                            </select>
                        </div>

                    </div>
                    <div class="form-group col-sm-12">
                        <label for="bBoleta">Seleccione el banco</label>
                        <select name="bBoleta" class="form-control" id="bBoleta" value="{{old('bBoleta')}}"
                            placeholder="Seleccione un estado">
                            <option value="Banrural" selected>Banrural</option>
                            <option value="Industrial">Industrial</option>
                            <option value="BAM">BAM</option>
                            <option value="Bantrab">Bantrab</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Datos Recibo</h3>
                </div>


                <div class="card-body">
                    @error('nRecibo')
                    <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-exclamation-triangle"></i> Alerta!</h5>
                        * {{$message}}
                    </div>
                    @enderror
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="nRecibo">No. Recibo</label>
                            <input type="number" id="nRecibo" name="nRecibo" class="form-control"
                                value="{{old('nRecibo')}}" required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="mRecibo">Monto en el recibo</label>
                            <input type="number" id="mRecibo" name="mRecibo" class="form-control"
                                value="{{old('mRecibo')}}" required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="fRecibo">Fecha de recepcion de boleta</label>
                            <input type="date" id="fRecibo" name="fRecibo" class="form-control"
                                value="{{old('fRecibo')}}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">

                            <div class="form-group" data-select2-id="133">
                                <label for="tRecibo">Tipo de pago</label>
                                <select class="form-control select2 select2-hidden-accessible" multiple=""
                                    data-placeholder="Select a State" style="width: 100%;" data-select2-id="7"
                                    tabindex="-1" aria-hidden="true" id="tRecibo[]" name="tRecibo[]"
                                    value="{{old('tRecibo[]')}}">
                                    <option value="Plataforma" data-select2-id="Plataforma">Plataforma</option>
                                    <option value="Administrativos" data-select2-id="Administrativos">Administrativos
                                    </option>
                                    <option value="Mora" data-select2-id="Mora">Mora</option>
                                    <option value="Graduacion" data-select2-id="Graduacion">Graduacion</option>
                                </select>
                            </div>

                        </div>






                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="nAlumno">Nombre del alumno</label>
                            <input type="text" id="nAlumno" name="nAlumno" class="form-control"
                                value="{{old('nAlumno')}}" required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="gAlumno">Grado</label>
                            <input type="number" id="gAlumno" name="gAlumno" class="form-control"
                                value="{{old('gAlumno')}}" max="6" min="1" required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="ncAlumno">Nivel/Carrera</label>
                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                                data-select2-id="1" tabindex="-1" aria-hidden="true" id="ncAlumno" name="ncAlumno"
                                value="{{old('ncAlumno')}}">
                                <option selected="selected" value="Seleccione una opcion">Seleccione una opcion
                                </option>
                                <option value="Primaria">Primaria</option>
                                <option value="Computacion">Computacion</option>
                                <option value="Mecanica">Mecanica</option>
                                <option value="Medicina">Medicina</option>
                                <option value="Perito Contador">Perito Contador</option>
                                <option value="Electronica">Electronica</option>
                                <option value="Criminologia">Criminologia</option>
                                <option alue="Secretariado">Secretariado</option>
                                <option value="Juridico">Juridico</option>
                                <option value="Magisterio">Magisterio</option>
                                <option value="Turismo">Turismo</option>
                                <option value="Ciencias y Letra">Ciencias y Letras</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="comentario">Comentarios</label>
                        <textarea rows="5" class="form-control" name="comentario" id="comentario"
                            value="{{old('comentario')}}" placeholder="Observaciones"> </textarea>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary swalDefaultSuccess"><i class="fas fa-save"></i>
                    Registrar</button>
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