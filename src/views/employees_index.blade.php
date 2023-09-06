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
        <h3>Employee list page</h3>

        @foreach ($employees as $employee)
        <li style="margin: 5px">
            <a style="text-decoration: none" href="{{ route('employees.show', ['id' => $employee->id]) }}">
                {{ $employee->name }}
            </a>

            <a style="text-decoration: none" href="{{ route('employees.edit', ['id' => $employee->id]) }}">
                <button>Edit</button>
            </a>

            <form style="display: inline-block" method="POST" action="{{route('employees.destroy', ['id' => $employee->id])}}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
        @endforeach
    </div>
</body>

</html>