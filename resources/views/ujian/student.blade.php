<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($students as $student)
        <p>ID: {{ $student->id}}</p>
        <p>Nim: {{ $student->nim }}</p> 
        <p>Name: {{ $student->name }}</p>
        <p>Prodi: {{ $student->prodi }}</p>
        <p>Angkatan: {{ $student->angkatan }}</p>
        <p>Asal: {{ $student->asal }}</p>
        <p>Alamat: {{ $student->alamat }}</p>
    @endforeach
</body>
</html>