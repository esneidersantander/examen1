<h1>Editar estudiantes</h1>
<form role="form" method="POST" action="{{ route('estudiante.actualizar',[$estudiante->idEstudiante]) }}">
    @csrf
    <div class="box-body">
      <div class="form-group">
        <label for="descripcion">Nombre</label>
        <input type="text" class="form-control" value="{{ $estudiante->nombre }}" name='nombre' id="nombre" placeholder="ingrese un nombre">
      </div>
      <div class="form-group">
        <label for="descripcion">Apellido</label>
        <input type="text" class="form-control" value="{{ $estudiante->apellido }}" name='apellido' id="apellido"
          placeholder="ingrese una apellido">
      </div>
      <div class="form-group">
        <label for="descripcion">Cedula</label>
        <input type="text" class="form-control" value="{{ $estudiante->cedula }}" name='cedula' id="cedula" placeholder="ingrese una cedula">
      </div>
      <div class="form-group">
        <label for="descripcion">Sexo</label>
        <input type="text" class="form-control" value="{{ $estudiante->sexo }}" name='sexo' id="sexo" placeholder="ingrese un sexo">
      </div>
    </div>
    <div class="form-group">
        <label>Seleccione un semestre</label>
        <select class="form-control" name="idSemestre">
          <option value="0">Seleccionar semestre</option>
          @foreach ($semestres as $item)
            <option value="{{ $item->idSemestre }}">{{ $item->semestre }}. Paralelo: {{ $item->paralelo }}</option>
          @endforeach
        </select>
      </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <button type="submit" class="btn btn-primary">actualizar</button>
    </div>
  </form>
<a href="{{ route('estudiante.mostrar') }}">Mostrar tabla de estudiantes</a>




  