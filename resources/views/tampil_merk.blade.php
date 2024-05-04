<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Merk</title>
</head>
<body>
     <center>
        <h2>Data Table Merk</h2>
    <table border="1" >
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama Merk</th>   
        </tr>
        @php $no = 1; @endphp
        @foreach ($merks as $data1)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data1 ->id}}</td>
                <td>{{ $data1 ->nama_merks}}</td>
            </tr>
        @endforeach
    </table>
    </center>
</body>
</html>