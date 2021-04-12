<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://cdn/jsdelivr.net/npm/bootstarp@4.6.0/dist/css/bootstarp.min.css">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center">DATA BUKU</h1>
    <p class="text-center">Laporan Data Buku Tahun 2021</p>
    <br/>
    <table id="table-data" class="table table-bordered">
    <thead>
    <tr>
    <th>NO</th>
    <th>JUDUL</th>
    <th>PENULIS</th>
    <th>TAHUN</th>
    <th>PENERBIT</th>
    <th>COVER</th>
    </tr>
    </thead>
    <tbody>
    @php $no=1; @endphp
    @foreach($books as $book)
    <tr>
    <td>{{ $no++ }}</td>
    <td>{{ $book->judul }}</td>
    <td>{{ $book->penulis }}</td>
    <td>{{ $book->tahun }}</td>
    <td>{{ $book->penerbit }}</td>
    <td>
    @if($book->cover !== null)
    <img src="{{public_path('storage/cover_buku/'.$book->cover) }}" width="80px"/>
    @else
    [Gambar Tidak Tersedia]
    @endif
    </td>
    </tr>
    @endforeach
    </tbody>
    </table>
</body>
</html>