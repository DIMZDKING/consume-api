<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <div class="container my-5">
        <a href="/sewa/create" class="btn btn-success">Tambah Data</a>
        @if (Session::get('success'))
        <div class="alert alert-success mt-2" role="alert">
            {{Session::get('success')}}
        </div>
        @endif
        @if (Session::get('fail'))
        <div class="alert alert-danger" role="alert">
            {{Session::get('fail')}}
        </div>
    @endif
        <table class="table table-bordered table-warning my-3">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tipe</th>
                    <th>Masa Sewa</th>
                    <th>Jam Mulai</th>
                    <th>Supir</th>
                    <th>Tempat Tujuan</th>
                    <th>Riwayat Perjalanan</th>
                    <th>Total Harga</th>
                    <th>Jam Selesai</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rentals  as $value)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $value['nama']}}</td>
                    <td>{{ $value['alamat'] }}</td>
                    <td>{{ $value['type'] }}</td>
                    <td>{{ $value['waktu_jam'] }}</td>
                    <td>{{ $value['jam_mulai'] }}</td>
                    <td>{{ $value['supir'] }}</td>
                    <td>{{ $value['tempat_tujuan'] }}</td>
                    <td>{{ $value['riwayat_perjalanan'] }}</td>
                    <td>{{ $value['total_harga'] }}</td>
                    <td>{{ $value['jam_selesai'] }}</td>
                    <td>{{ $value['status'] }}</td>
                    <td>
                        <a href="/sewa/{{ $value['id'] }}" class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                        <a href="/sewa/edit/{{ $value['id'] }}" class="btn btn-warning"><i class="bi bi-clipboard2-pulse-fill"></i></a>
                        <form action="/sewa/delete/{{ $value['id'] }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                        </form>

        
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
