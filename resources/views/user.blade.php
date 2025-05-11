<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<table class=" table-auto w-full border-collapse border border-gray-200">
    <tr>
        <th>Le Nom</th>
        <th>Le Role</th>
    </tr>
@foreach ($users as $role=>$name)
<tr @if($role == 'admin') class="bg-red-100" @endif>
    <td> {{$name}}</td>
    <td>{{$role}}</td>
  </tr>
@endforeach
</table>
</body>
</html>