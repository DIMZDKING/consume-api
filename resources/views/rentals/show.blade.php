<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="d-flex justify-content-center align-items-center container mt-5">
        <form>
            <fieldset disabled>
              <legend>DATA SEWA<legend>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nama</label>
                <input type="text"  class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" value="{{ $item['nama'] }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">alamat</label>
                <input type="text"  class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" value="{{ $item['alamat'] }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">tipe</label>
                <input type="text"  class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" value="{{ $item['type'] }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">lama sewa</label>
                <input type="number"  class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" value="{{ $item['waktu_jam'] }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">jam mulai</label>
                <input type="text"  class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" value="{{ $item['jam_mulai'] }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">supir</label>
                <input type="text"  class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" value="{{ $item['supir'] }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">tempat tujuan</label>
                <input type="text"  class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" value="{{ $item['tempat_tujuan'] }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">riwayat perjalanan</label>
                <input type="text"  class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" value="{{ $item['riwayat_perjalanan'] }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">jam selesai</label>
                <input type="text"  class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" value="{{ $item['jam_selesai'] }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">status</label>
                <input type="text"  class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" value="{{ $item['status'] }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">total harga</label>
                <input type="number"  class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" value="{{ $item['total_harga'] }}">
            </div>
            </fieldset>
            <a href="/sewa" class="btn btn-primary">Back</a>
          </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
