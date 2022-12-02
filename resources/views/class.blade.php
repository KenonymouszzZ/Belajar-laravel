<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table table-dark">
        <tbody>
            <tr>
                <td>id</td>
                <td>name</td>
                <td>student</td>
                
            </tr>

            @foreach ($class as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->student}}<br></td> 
            </tr>

            @endforeach
        </tbody>
    </table>

</body>
</html>
   