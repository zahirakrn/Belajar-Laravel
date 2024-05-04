<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaksi</title>
</head>
<body>
    <center>
        <h1>Data Table Transaksi</h1>
    <table border="1" >
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama Barang</th> 
            <th>Jenis Kelamin</th>  
            <th>ID pembeli</th>
            <th>Jumlah</th>
            <th>Tanggal</th>
        </tr>
        @php $no = 1; @endphp
        @foreach ($transaksi as $data1)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data1 ->id}}</td>
                <td>{{ $data1 ->barang2s->nama_barang}}</td>
                <td>{{$data1  ->pembelis->jenis_kelamin}}</td>
                <td>{{ $data1 ->pembelis->nama_pembeli}}</td>
                <td>{{ $data1 ->jumlah}}</td>
                <td>{{ $data1 ->tanggal}}</td>   
            </tr>
        @endforeach
    </table>
    </center>
</body>
</html>