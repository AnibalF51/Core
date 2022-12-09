@extends('plantilla')

@section('titulo', 'Reportes')

@section('contenido')
    <br>
    <section class="content">
        <div class="container-fluid">
            <!-- INICIO CONTENIDO -->


            <div class="card-body">
                <form action="{{ route('boletas.reportesdia') }}" target="_blank" method="POST" enctype="multipart/form-data" id="todo">

                    @csrf

                    <div class="row">
                        <div class="form-group col-sm-8">
                            <label>Por dia:</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="date" class="form-control datetimepicker-input" name="fecha1"
                                    id="fecha1">

                                <button type="submit" class="btn btn-primary col-sm-4" style="margin-left: 10px"><i
                                        class="fas fa-save"></i>
                                    Generar</button>
                            </div>
                        </div>

                    </div>

                </form>
                <form action="{{ route('boletas.reportesrango') }}" target="_blank" method="POST" enctype="multipart/form-data"
                    id="todo">

                    @csrf
                    <div class="row">
                        <div class="form-group col-sm-8">
                            <label>Rango de fechas:</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="date" class="form-control datetimepicker-input" name="fecha2"
                                    id="fecha2">
                                <input type="date" class="form-control datetimepicker-input" name="fecha3"
                                    id="fecha3" style="margin-left: 10px">

                                <button type="submit" class="btn btn-primary col-sm-4" style="margin-left: 10px"><i
                                        class="fas fa-save"></i>
                                    Generar</button>
                            </div>

                        </div>
                    </div>

                </form>
            </div>


            <!-- FIN CONTENIDO -->
        </div>
    </section>

@endsection
