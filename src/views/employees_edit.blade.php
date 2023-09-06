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
        <h3>Employee edit page.</h3>

        <form method="POST" action="{{route('employees.update', ['id' => $employee->id])}}">
            @csrf
            @method('PUT')
            Name: <input style="margin: 5px" type="text" name="name" placeholder="Full Name" value="{{ $employee->name }}" required autofocus> <br>
            Phone: <input style="margin: 5px" type="text" name="phone" placeholder="Phone" value="{{ $employee->phone }}" required autofocus> <br>
            Email: <input style="margin: 5px" type="text" name="address" placeholder="Address" value="{{ $employee->address }}" required autofocus> <br>
            <a style="text-decoration: none; display: inline-block" href="{{ route('employees.index') }}">
                <button>Back</button>
            </a>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</body>

</html>