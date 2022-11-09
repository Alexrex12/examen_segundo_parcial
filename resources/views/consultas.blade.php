@extends ('plantilla')
@section ('contenido')
<h1 class="mt-4 display-1 text-center">Consultas</h1>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Usuario</th>
      <th scope="col">No. Computadora</th>
      <th scope="col">Tiempo</th>
      <th scope="col">Fecha</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

@stop