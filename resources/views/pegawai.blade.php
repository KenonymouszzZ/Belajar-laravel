<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>id</td>
                <td>nama</td>
                <td>golongandarah</td>
                <td>alamat</td>
                <td>no_hp</td>
            </tr>
        </thead>

        <tbody>
            @foreach($pegawai as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->golongandarah}}</td>
                <td>{{$data->alamat}}</td>
                <td>{{$data->no_hp}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
</body>
</html>