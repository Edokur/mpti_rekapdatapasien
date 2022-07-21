<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- CSS Assets -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Mulish' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>

    <title>Problem Solver | Note</title>
</head>

<body>
    <div class="container">
        <div class="left">
            @include('partial/sidebar')
        </div>

        <div class="l-right">
            <div class="title">
                <h4 class="text-title color-black lead font-bold">Catatan</h4>
                <h1 class="color-neutral-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Porttitor adipiscing in consectetur sem ut netus scelerisque. Viverra urna vitae viverra habitant a magna vitae, fermentum morbi. Magna magna non ridiculus vitae viverra feugiat morbi sed.</h1>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <a href="/note" class="btn btn-purple text-white border-radius px-5 py-3">Kembali</a>
                </div>
            </div>
            <div class="ttable border-line bg-white border-radius mt-4">
                <div class="p-2 bg-light rounded-bottom-0">
                    <p class="m-3 text-secondary">Detail Data</p>
                </div>
                <div class="p-2 text-dark border-top">
                    <form method="POST" class="px-3" action="/note">
                        @csrf
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-8">
                                <div class="dropdown">
                                    <input type="text" class="form-control" name="judul" value="{{$data->status}}" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Judul</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="{{$data->judul}}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="{{$data->deskripsi}}" disabled>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>