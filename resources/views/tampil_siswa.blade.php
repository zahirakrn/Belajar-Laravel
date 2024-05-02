<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
    <table border="1" >
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Telpon</th>
            <th>Email</th>
        </tr>
        @php $no = 1; @endphp
        @foreach ($data as $data1)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data1 ->id}}</td>
                <td>{{ $data1 ->nama}}</td>
                <td>{{ $data1 ->jenis_kelamin}}</td>
                <td>{{ $data1 ->alamat}}</td>
                <td>{{ $data1 ->agama}}</td>
                <td>{{ $data1 ->telpon}}</td>
                <td>{{ $data1 ->email}}</td>
            </tr>
        @endforeach
    </table>
    </center>
</body>
</html>