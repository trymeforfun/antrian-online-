<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Antrian Online Sitanala</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="black" style=""></div>
    <div class="background-hero">
        <img src="{{url('assets/img/rsstnl.jpg')}}" alt="">
    </div>
        <div class="content">
            <div class="card shadow p-5">
                <div class="card-header  bg-transparent">
                    <img src="{{url('assets/img/sitanala-logo.jpeg')}}" alt="">
                </div>
                <form action="{{url('/guest/login')}}" method="POST">
                @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">No. Rekam Medis</label>
                    <input type="number" style="border: none" name="no_rekam_medis" class="form-control" placeholder="masukkan no rekam medis" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">NIK</label>
                    <input type="text" style="border: none" name="nik" class="form-control" placeholder="masukkan nik" id="exampleInputPassword1">
                  </div>
                  <button type="submit" class="btn btn-success">masuk</button>
                </form>
                  <div class="mt-3 justify-content-between">
                      <div class="row">
                          <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                            <p>belum pernah daftar?</p>
                          </div>
                          <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                            <a href="{{url('/register')}}">daftar</a>
                          </div>
                      </div>
                  </div>
            </div>
        </div>
</body>
</html>