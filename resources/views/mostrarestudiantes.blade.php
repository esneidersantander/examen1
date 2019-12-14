<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Cedula</th>
        <th scope="col">Semestre</th>
        <th scope="col">Paralelo</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($estudiantes as $item)
      <tr>
        <th>{{ $item ->idEstudiante }}</th>
        <td>{{ $item ->nombre }}</td>
        <td>{{ $item ->apellido }}</td>
        <td>{{ $item ->cedula }}</td>
        <td>{{ $item ->semestre }}</td>
        <td>{{ $item ->paralelo }}</td>
        <td><a href="{{ route('estudiante.editar',[$item->idEstudiante]) }}"> Editar </a></td>
        <td><a href="{{ route('estudiante.eliminar',[$item->idEstudiante]) }}"> Eliminar </a></td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <a href="{{ route('estudiante.index') }}"> Regresar a index </a>