<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div style="width: 550px; margin: auto">
        <h3>Employee show page</h3>

        Name: {{ $employee->name }} <br>
        Phone: {{ $employee->phone }} <br>
        Address: {{ $employee->address }} <br>
        <a href="{{ route('employees.edit', ['id' => $employee->id]) }}">
            <button>Edit</button>
        </a>
    </div>
</body>

</html>