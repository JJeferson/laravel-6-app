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

<form name="formEdit" id="formEdit" method="post" action="{{url("users/$user->id")}}">
@method('PUT')
@csrf
<div class="form-group">
<input type="name" class="form-control" id="nome" name="nome"  value="{{$user->nome}}" required="requiored">
</div>

<div class="form-group">
<input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" required="requiored">
</div>
<div class="form-group">
<input type="text" class="form-control" onkeyup="somenteNumeros(this);"  id="telefone" name="telefone" value="{{$user->telefone}}" required="requiored">
</div>
<div class="form-group">
<input type="password" class="form-control" id="senha" name="senha" value="{{$user->senha}}" required="requiored">
</div>
<div class="form-group">
<input type="text" class="form-control" id="foto" name="foto" value="{{$user->foto}}" required="requiored">
</div>

<button type="submit" class="btn btn-success form-control">Gravar alterações</button>
</form>

</body>

</html>
