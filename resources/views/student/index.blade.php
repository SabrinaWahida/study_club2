<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Angkatan</th>
            <th>Asal</th>
            <th>Alamat</th>
            <th>test</th>
        </tr>

        @foreach ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->nim }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->prodi }}</td>
            <td>{{ $student->angkatan }}</td>
            <td>{{ $student->asal }}</td>
            <td>{{ $student->alamat }}</td>
            <td>
                <form action="{{ route('student.edit', $student->id) }}" method="GET">
                    @csrf
                    @method('EDIT')
                    <button type="submit" class="btn btn-danger btn-sm">Edit</button>
                </form>
                <form action="{{ route('student.destroy', $student->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>