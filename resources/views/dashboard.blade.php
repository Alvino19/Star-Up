
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Startup Dashboard</title>
  <link rel="stylesheet" href="{{ asset('/dashboard.css') }}">
</head>
<body>
  <div class="container">
    <aside class="sidebar">
      <h1>Star up</h1>
      <nav>
        <ul>
          <li>Beranda</li>
          <a href="/keuangan/tambah">
          <li>Laporan</li>
          </a>
         <a href="/keperluan/tambah">
            <li>Keperluan</li>
        </a> 
        </ul>
      </nav>
    </aside>
    <main class="content">
      <div class="graphs">
        <div class="graph">
          <h2>Laporan Keuangan</h2>
          <h2>{{$laporan}}</h2>
          
        </div>
        <div class="graph">
          <h2>Keperluan</h2>
          <h2>9</h2>
        
        </div>
      </div>
      <a href="/cetak">
        <button>Cetak</button>
      </a>
      <table>
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
               <td><a href="delete/{{$k->id}}">
                <button>Delete</button>
               </a></td>
                </tbody>
               @endforeach

            </table>
    </main>
  </div>
</body>
</html>
