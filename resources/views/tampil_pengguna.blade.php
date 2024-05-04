<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pengguna</title>
</head>
<body>
    <center>
        <h2>Data Table Pengguna</h2>
    <table border="1" >
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama</th>   
        </tr>
        @php $no = 1; @endphp
        @foreach ($pengguna as $data1)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data1 ->id}}</td>
                <td>{{ $data1 ->nama}}</td>
            </tr>
        @endforeach
    </table>
    </center>
</body>
</html>