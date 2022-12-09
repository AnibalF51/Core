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
                <div class="form-group col-sm-4">
                            <label for="ID">ID</label>
                            <input type="number" id="ID" name="ID" class="form-control"
                                value="{{$bol->id}}" readonly="readonly">
                        </div>

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
                            <input type="number" id="nBoleta" name="nBoleta" class="form-control" readonly="readonly"
                            value="{{$bol->nBoleta}}" required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="vBoleta">Valor en la Boleta</label>
                            <input type="number" id="vBoleta" name="vBoleta" class="form-control" readonly="readonly"
                            value="{{$bol->vBoleta}}" required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="fBoleta">Fecha de deposito</label>
                            <input type="date" id="fBoleta" name="fBoleta" class="form-control" readonly="readonly"
                            value="{{$bol->fBoleta}}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="lBoleta">Lugar donde deposito</label>
                            <input type="text" id="lBoleta" name="lBoleta" class="form-control" readonly="readonly"
                            value="{{$bol->lBoleta}}" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="pBoleta">Forma de pago</label>
                            <input type="text" id="pBoleta" name="pBoleta" class="form-control" readonly="readonly"
                            value="{{$bol->pBoleta}}" required>
                        </div>
                        

                    </div>
                    <div class="form-group col-sm-12">
                            <label for="bBoleta">Banco</label>
                            <input type="text" id="bBoleta" name="bBoleta" class="form-control" readonly="readonly"
                            value="{{$bol->bBoleta}}" required>
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
                            <input type="number" id="nRecibo" name="nRecibo" class="form-control" readonly="readonly"
                            value="{{$bol->nRecibo}}" required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="mRecibo">Monto en el recibo</label>
                            <input type="number" id="mRecibo" name="mRecibo" class="form-control" readonly="readonly"
                            value="{{$bol->mRecibo}}" required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="fRecibo">Fecha de recepcion de boleta</label>
                            <input type="date" id="fRecibo" name="fRecibo" class="form-control" readonly="readonly"
                            value="{{$bol->fRecibo}}" required>
                        </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-sm-6">
                            <label for="tRecibo">Tipo de pago</label>
                            <input type="text" id="tRecibo" name="tRecibo" class="form-control" readonly="readonly"
                            value="{{$bol->tRecibo}}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="nAlumno">Nombre del alumno</label>
                            <input type="text" id="nAlumno" name="nAlumno" class="form-control" readonly="readonly"
                            value="{{$bol->nAlumno}}" required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="gAlumno">Grado</label>
                            <input type="number" id="gAlumno" name="gAlumno" class="form-control" readonly="readonly"
                            value="{{$bol->gAlumno}}" max="6" min="1" required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="ncAlumno">Nivel/Carrera</label>
                            <input type="text" id="ncAlumno" name="ncAlumno" class="form-control" readonly="readonly"
                            value="{{$bol->ncAlumno}}"  required>
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="comentario">Comentarios</label>
                        <textarea rows="5" class="form-control" name="comentario" id="comentario" readonly="readonly"
                        value="{{$bol->comentario}}" placeholder="Observaciones"> </textarea>
                    </div>
                </div>
            </div>
            <!--  
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
            @endif -->
        </form>
</section>
<!-- FIN DE PLAN  -->
@endsection