<!doctype html>
<html lang="en">

<head>
    <title>Problem Solver | Penyakit</title>
</head>

<body>
    <div class="container">
        <div class="left">
            @include('partial/sidebar')
        </div>
        <div class="l-right mt-4">
            <div class="title mb-5">
                <h4 class="text-title color-black lead font-bold">Penyakit</h4>
                <h1 class="color-neutral-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Porttitor adipiscing in consectetur sem ut netus scelerisque. Viverra urna vitae viverra habitant a magna vitae, fermentum morbi. Magna magna non ridiculus vitae viverra feugiat morbi sed.</h1>
            </div>

            <div class="row mt-5">
                <div class="col">
                    <a href="/penyakit" class="btn btn-purple text-white px-5 py-3">Kembali</a>
                </div>
            </div>

            <div class="ttable border-line bg-white mt-4">
                <div class="p-2 bg-light rounded-bottom-0">
                    <p class="m-3 text-dark">Detail Penyakit</p>
                </div>
                <div class="text-dark border-top">
                    <form class="ml-5 p-5" method="POST" action="/surveilans_1">
                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">ID Register</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="" disabled value="{{$data->id_register}}">
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Nama Penyakit</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="" disabled value="{{$data->nama_penyakit}}">
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Tanggal</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="" disabled value="{{$data->tanggal}}">
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled>{{$data->deskripsi}}</textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>