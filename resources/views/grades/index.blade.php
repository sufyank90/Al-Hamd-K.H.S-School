<!DOCTYPE html>
<html>
<head>
    <title>Grades - Al Hamd K.H.S School</title>
</head>
<body>
    <h1>Grades</h1>
    <ul>
        @foreach ($grades as $grade)
            <li>Enrollment ID: {{ $grade->enrollment_id }} - Marks Obtained: {{ $grade->marks_obtained }} - Total Marks: {{ $grade->total_marks }}</li>
        @endforeach
    </ul>
</body>
</html>
