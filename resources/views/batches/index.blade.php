<!DOCTYPE html>
<html>
<head>
    <title>Batches - Al Hamd K.H.S School</title>
</head>
<body>
    <h1>Batches</h1>
    <ul>
        @foreach ($batches as $batch)
            <li>{{ $batch->name }} - {{ $batch->start_year }} to {{ $batch->end_year }}</li>
        @endforeach
    </ul>
</body>
</html>
