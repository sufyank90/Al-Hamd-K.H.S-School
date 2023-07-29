<!DOCTYPE html>
<html>
<head>
    <title>Students - Al Hamd K.H.S School</title>
</head>
<body>
    <h1>Students</h1>
    <ul>
        @foreach ($students as $student)
            <li>{{ $student->name }} - {{ $student->email }} - {{ $student->phone }}</li>
        @endforeach
    </ul>
</body>
</html>
