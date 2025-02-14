<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('student.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" value="{{ $student->nim }}">
        <br><br>
        
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $student->name }}">
        <br><br>

        <label for="prodi">Prodi:</label>
        <input type="text" id="prodi" name="prodi" value="{{ $student->prodi }}">
        <br><br>

        <label for="angkatan">Angkatan:</label>
        <input type="number" id="angkatan" name="angkatan" value="{{ $student->angkatan }}">
        <br><br>

        <label for="asal">Asal:</label>
        <input type="text" id="asal" name="asal" value="{{ $student->asal }}">
        <br><br>

        <label for="alamat">Alamat:</label>
        <textarea type="alamat" id="alamat" name="alamat" value="{{ $student->alamat }}"></textarea>
        <br><br>

        <button type="submit">Submit</button>
</body>
</html>