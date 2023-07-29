<!DOCTYPE html>
<html>
<head>
    <title>Fees - Al Hamd K.H.S School</title>
</head>
<body>
    <h1>Fees</h1>
    <ul>
        @foreach ($fees as $fee)
            <li>Student ID: {{ $fee->student_id }} - Amount: {{ $fee->amount }} - Due Date: {{ $fee->due_date }} - Status: {{ $fee->status }}</li>
        @endforeach
    </ul>
</body>
</html>
