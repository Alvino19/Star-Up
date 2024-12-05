<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data Keuangan</title>
  <style>
    .table-data {
      border-collapse: collapse;
      width: 100%;
    }

    .table-data tr th,
    .table-data tr td {
      border: 1px solid black;
      font-size: 11pt;
      padding: 10px 20px;
      text-align: center;
    }

    .table-data tr th {
      background-color: #2c3e50;
      color: white;
    }

    .table-data tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .table-data tr:hover {
      background-color: #f5f5f5;
    }
  </style>
</head>

<body>
  <h3>Data Categories</h3>
  <table class="table-data">
    <thead>
      <tr>
          
      <th>Jumlah Uang</th>
                        <th>Keperluan</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>   
      </tr>
    </thead>
    @foreach($keuangan as $k)
                <tbody>
               <td>{{$k->jumlah_uang}}</td>
               <td>{{$k->keperluan->keperluan}}</td>
               <td>{{$k->tanggal}}</td>
                </tbody>
               @endforeach
</body>

</html>