<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Teste CRUD</title>
    </head>
<body>

<div class="container">
</br>
<h2> CRUD com Laravel - Teste 15/07/2020</h2>
</br>

      <a href="{{url('create')}}">
      <button type="button" class="btn btn-success">Novo</button>
      </a>

<div class="col-8 m-auto">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      <th scope="col">Foto</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>

  @foreach($user as $users)
  <tr>
      <th scope="row">{{$users->id}}</th>
      <td>{{$users->nome}}</td>
      <td>{{$users->email}}</td>
      <td>{{$users->telefone}}</td>
      <td>
      <img src="{{$users->foto}}" width="20%" >
      </td>
      <td>
      <a href="">
      <button type="button" class="btn btn-warning">Editar</button>
      </a>
      <a href="">
      <button type="button" class="btn btn-danger">Excluir</button>
      </a>

      </td>
    </tr>
  @endforeach

  </tbody>
</table>
</div>
</div>

</body>

</html>
