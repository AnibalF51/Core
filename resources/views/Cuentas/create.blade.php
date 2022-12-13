@extends('plantilla')

@section('titulo', 'Registro de cuenta')

@section('contenido')
<br>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">


        <!-- Aqui va todo lo del Contenido a mostrar -->
        <!-- Datos del Paciente -->
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Registro de cuenta</h3>
            </div>
            <!-- /.card-header -->

            <!-- form start -->

            <form action="{{route('empresa.registro')}}" method="POST" enctype="multipart/form-data" name="Datos">
                @csrf

                <div class="card-body">
                        <div class="form-group col-sm-12">
                            <label for="txtempresa">Nombre de la cuenta</label>
                            <input type="text" id="nombre" name="nombre" class="form-control">
                        </div>

                        <div class="form-group col-sm-12"> 
                            <label for="txtclase">Seleccione estado de la empresa</label>
                                <select name="txtclases" class="form-control" id="txtclases" placeholder="Seleccione una clase" onchange="cambia()">
                                    <option value="0">Seleccione una opcion</option>
                                    <option value="1">Estados de Costo de Produccion</option>
                                    <option value="2">Estado de resultados</option>
                                    <option value="3">Estado de situacion financiera</option>
                                </select>
                        </div>
                        
                        <div class="form-group col-sm-12"> 
                            <label for="txttipo">Seleccione estado de la empresa</label>
                                <select name="opt" class="form-control" id="txttipos" placeholder="Seleccione un tipo">
                                    <option value="-">-</option>
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
        <script type="text/javascript">
            var opt_1 = new Array ("-","Debe", "Haber");
            var opt_2 = new Array ("-","Perdida", "Ganancia");
            var opt_3 = new Array ("-","Activo", "Pasivo");


            function cambia(){
				var cosa;
				//Se toma el vamor de la "cosa seleccionada"
				cosa = document.Datos.txtclases[document.Datos.txtclases.selectedIndex].value;
				//se chequea si la "cosa" esta definida
				if(cosa!=0){
					//selecionamos las cosas Correctas
					mis_opts=eval("opt_" + cosa);
					//se calcula el numero de cosas
					num_opts=mis_opts.length;
					//marco el numero de opt en el select
					document.Datos.opt.length = num_opts;
					//para cada opt del array, la pongo en el select
					for(i=0; i<num_opts; i++){
						document.Datos.opt.options[i].value=mis_opts[i];
						document.Datos.opt.options[i].text=mis_opts[i];
					}
					}else{
						//si no habia ninguna opt seleccionada, elimino las cosas del select
						document.Datos.opt.length = 1;
						//ponemos un guion en la unica opt que he dejado
						document.Datos.opt.options[0].value="-";
						document.Datos.opt.options[0].text="-";
					}
					//hacer un reset de las opts
					document.Datos.opt.options[0].selected = true;
					
				}
        </script>
</section>
<!-- FIN DE PLAN  -->
@endsection