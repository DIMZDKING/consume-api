<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Create</title>
</head>
<body>
    <div class="container">
        <div class="card d-block m-auto bg-warning p-4">
       
            <form action="/sewa/store" method="post">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">alamat</label>
                    <input type="text" name="alamat" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">tipe</label>
                    <input type="text" name="type" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">lama sewa</label>
                    <input type="text" name="waktu_jam" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">jam mulai</label>
                    <input type="text" name="jam_mulai" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">supir</label>
                    <input type="text" name="supir" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                
                <div class="mb-3">
                    <label for="status">Status</label>
                    <input type="text" name="status" id="status">
                </div>
                <div class="mb-3 d-flex">
                    <button class="btn btn-primary">Send</button>
                </div>
            </form>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>
