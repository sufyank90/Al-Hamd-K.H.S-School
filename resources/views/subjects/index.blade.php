<!DOCTYPE html>
<html>
<head>
    <title>Subjects - Al Hamd K.H.S School</title>
</head>
<body>
    <h1>Subjects</h1>
    <ul>
        @foreach ($subjects as $subject)
            <li>{{ $subject->name }} - {{ $subject->description }}</li>
        @endforeach
    </ul>
</body>
</html>
