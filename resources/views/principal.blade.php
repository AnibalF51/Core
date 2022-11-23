@extends('plantilla')

@section('titulo', 'Inventario')

@section('contenido')
<br>
<section class="content">
    <div class="container-fluid">
        <!-- INICIO CONTENIDO -->

            <form action="{{route('usuario.empresa', auth()->user()->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
                    @csrf
                <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Empresa</h3>
            </div>
                <div class="card-body">
                       
                        <div class="form-group col-sm-12"> 
                            <label for="txEmpresa">Cambiar Empresa:</label>
                            <select name="activa" class="form-control nav-link" id="activa"  placeholder="Seleccione un estado">
                        @foreach ($empresa as $item)
                                    <option value="{{$item->id}}">{{$item->nombreE}}</option>
                        @endforeach           
                                </select>
                        </div>
                        <button type="submit" class="btn btn-primary swalDefaultSuccess"><i
                            class="fas fa-save"></i> Actualizar</button>
                </div>


                </div>
            </form>
        <!-- FIN CONTENIDO -->        
    </div>
</section>

@endsection