<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <script>
        function somenteNumeros(num) {
        var er = /[^0-9.]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
        }
        }
      </script>

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

<form name="formCad" id="formCad" method="post" action="{{url('UserController')}}">
@csrf
<div class="form-group">
<input type="name" class="form-control" id="nome" name="nome" placeholder=" Digite teu nome" required="requiored">
</div>

<div class="form-group">
<input type="email" class="form-control" id="email" name="email" placeholder="Email" required="requiored">
</div>
<div class="form-group">
<input type="text" class="form-control" onkeyup="somenteNumeros(this);"  id="telefone" name="telefone" placeholder="Telefone" required="requiored">
</div>
<div class="form-group">
<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="requiored">
</div>
<div class="form-group">
<input type="text" class="form-control" id="foto" name="foto" placeholder="Caminho para foto" required="requiored">
</div>

<button type="submit" class="btn btn-success form-control">Inscreva-se</button>
</form>


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
