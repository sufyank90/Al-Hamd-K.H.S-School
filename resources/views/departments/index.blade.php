<!DOCTYPE html>
<html>
<head>
    <title>Departments - Al Hamd K.H.S School</title>
</head>
<body>
    <h1>Departments</h1>
    <ul>
        @foreach ($departments as $department)
            <li>{{ $department->name }} - {{ $department->description }}</li>
        @endforeach
    </ul>
</body>
</html>
