<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produk</title>
</head>
<body>
        <center>
        <h2>Data Table Produk</h2>
    <table border="1" >
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama Produk</th> 
            <th>Jumlah</th>  
            <th>Tanggal Produksi</th>
            <th>ID Merk</th>
        </tr>
        @php $no = 1; @endphp
        @foreach ($produk as $data1)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data1 ->id}}</td>
                <td>{{ $data1 ->nama_produk}}</td>
                <td>{{ $data1 ->jumlah}}</td>
                <td>{{ $data1 ->tanggal_produksi}}</td>
                <td>{{ $data1 ->merks ->nama_merks}}</td>
            </tr>
        @endforeach
    </table>
    </center>
</body>
</html>