<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>barang2</title>
</head>
<body>
    <center>
        <h2>Data Table Barang2</h2>
    <table border="1" >
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama Barang</th>   
            <th>Harga</th>
            <th>Stok</th>
        </tr>
        @php $no = 1; @endphp
        @foreach ($barang2 as $data1)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data1 ->id}}</td>
                <td>{{ $data1 ->nama_barang}}</td>
                <td>{{ $data1 ->harga}}</td>
                <td>{{ $data1 ->stok}}</td>
            </tr>
        @endforeach
    </table>
    </center>
</body>
</html>