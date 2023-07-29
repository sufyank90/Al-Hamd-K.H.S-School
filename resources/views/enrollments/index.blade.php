<!DOCTYPE html>
<html>
<head>
    <title>Enrollments - Al Hamd K.H.S School</title>
</head>
<body>
    <h1>Enrollments</h1>
    <ul>
        @foreach ($enrollments as $enrollment)
            <li>Student ID: {{ $enrollment->student_id }} - Course ID: {{ $enrollment->course_id }}</li>
        @endforeach
    </ul>
</body>
</html>
