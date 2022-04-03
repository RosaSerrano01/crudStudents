<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Listado de estudiantes.</title>
</head>
<body class="bg-info p-2" style="--bs-bg-opacity: .4;">

    <div id="body" class="bg-dark p-2" style="--bs-bg-opacity: .2;">
<div class="alert alert-info text-center" role="alert">
    <h1>Listado de estudiantes.</h1>
</div>
<br>
<a class="btn btn-primary"  href="{{ url('/student/create') }}" role="button"> + Registrar un nuevo cantante.</a>
<br>
<br>
<table class="table table-primary table-hover table-bordered border-dark text-center">
    <thread>
        <tr>
        <th>#</th>
            <th>Código</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th colspan="2">Acciones</th>
        </tr>
    </thread>
    <tbody>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->code }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->lastname }}</td>
            <td>{{ $student->address }}</td>  
            <td>{{ $student->telephone }}</td>  
            <td>{{ $student->email }}</td>

            <td>
                <a class="btn btn-outline-primary" href="{{ url('/student/' .$student->id. '/edit') }}" role="button">Editar</a>
</td>
<td>
    <form action="{{ url('/student/' .$student->id) }}" method="POST">
        @csrf 
        {{ method_field('DELETE') }}
        <input type="submit" class="btn btn-outline-danger" value="Eliminar"
         onclick="return confirm('¿Realmente desea eliminar el registro?')">
</form>
</td>
</tr>
        @endforeach
</tbody>
</table>
</div>

<style>
#body
{
margin-left:2%;
margin-right:2%;
margin-top:2%;
margin-bottom:2%;
border-radius:0.5em;
}
</style>