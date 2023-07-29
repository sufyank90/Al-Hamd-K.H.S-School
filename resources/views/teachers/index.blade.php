<!DOCTYPE html>
<html>
<head>
    <title>Teachers - Al Hamd K.H.S School</title>
</head>
<body>
    <h1>Teachers</h1>
    <ul>
        @foreach ($teachers as $teacher)
            <li>{{ $teacher->name }} - {{ $teacher->email }} - {{ $teacher->phone }}</li>
        @endforeach
    </ul>
</body>
</html>
