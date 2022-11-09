@extends ('plantilla')
@section ('contenido')

@if (session()->has('confirmacion'))
    {!! "<script> Swal.fire('Listooooooo','La informacion ingresada con exito','success')</script>"!!}
    <div class="alert alert-primary alert-dimissible fade show text-center" role="alert">
        <strong>{{session('confirmacion')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<h1 class="mt-4 display-1 text-center">Formulario</h1>
<br>
<div class="container mt-5 col-md-6">
    <div>
        <div class="text-center">
            Bienvenido a El Cyber<i class="bi bi-wechat"></i>
        </div>

    @if($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-primary alert-dimissible fade show text-center" role="alert">
            <strong>Formulario Incompleto!</strong>{{$error}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        @endforeach

    @endif
    <div class="text-center">
        <form method="post" action="guardarRecuerdos">
            @csrf
            <div>
                <label class="form-label" name="labelUsuario">Usuario: </label>
                <input type="text" class="form-control" name="txtUsuario" value="{{old('txtUsuario')}}">
                <p class="fw-bold text-danger">{{$errors->first('txtUsuario')}}</p>
            </div>

            <div>
                <label class="form-label" name="labelNo_computadora">No_computadora: </label>
                <input type="text" class="form-control" name="txtNo_computadora" value="{{old('txtNo_computadora')}}">
                <p class="fw-bold text-danger">{{$errors->first('txtNo_computadora')}}</p>
            </div>

            <div>
                <label class="form-label" name="labelTiempo">Tiempo: </label>
                <input type="text" class="form-control" name="txtTiempo" value="{{old('txtTiempo')}}">
                <p class="fw-bold text-danger">{{$errors->first('txtTiempo')}}</p>
            </div>

            <div>
                <label class="form-label" name="labelFecha">Fecha: </label>
                <input type="text" class="form-control" name="txtFecha" value="{{old('txtFecha')}}">
                <p class="fw-bold text-danger">{{$errors->first('txtFecha')}}</p>
            </div>



    </div>
    <div>
        <button type="submit" name="btnGuardar">Guardar</button>
        </form>
    </div>
</div>

@stop