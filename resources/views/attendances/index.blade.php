<!DOCTYPE html>
<html>
<head>
    <title>Attendances - Al Hamd K.H.S School</title>
</head>
<body>
    <h1>Attendances</h1>
    <ul>
        @foreach ($attendances as $attendance)
            <li>Enrollment ID: {{ $attendance->enrollment_id }} - Date: {{ $attendance->date }} - Is Present: {{ $attendance->is_present ? 'Yes' : 'No' }}</li>
        @endforeach
    </ul>
</body>
</html>
