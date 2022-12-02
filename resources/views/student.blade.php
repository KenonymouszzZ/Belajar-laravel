<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>id</td>
                <td>nama</td>
                <td>nis</td>
                <td>umur</td>
                <td>jenis kelamin</td>
                <td>alamat</td>
                <td>Kelas</td>
            </tr>
        </thead>

        <tbody>
            @foreach($datastudent as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->nis}}</td>
                <td>{{$item->umur}}</td>
                <td>{{$item->jeniskelamin}}</td>
                <td>{{$item->alamat}}</td>

                <td>{{$item->class->name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>