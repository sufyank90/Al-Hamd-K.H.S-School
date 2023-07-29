<!DOCTYPE html>
<html>
<head>
    <title>Courses - Al Hamd K.H.S School</title>
</head>
<body>
    <h1>Courses</h1>
    <ul>
        @foreach ($courses as $course)
            <li>{{ $course->name }} - {{ $course->description }}</li>
        @endforeach
    </ul>
</body>
</html>
