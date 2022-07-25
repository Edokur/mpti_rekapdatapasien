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
                <h4 class="text-title color-black lead font-bold">Edit Penyakit</h4>
                <h1 class="color-neutral-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Porttitor adipiscing in consectetur sem ut netus scelerisque. Viverra urna vitae viverra habitant a magna vitae, fermentum morbi. Magna magna non ridiculus vitae viverra feugiat morbi sed.</h1>
            </div>
            <div class="ttable border-line bg-white mt-4">
                <div class="p-2 bg-light rounded-bottom-0">
                    <p class="m-3 text-dark">Edit Data</p>
                </div>
                @if ($message = Session::get('gagal'))
                    <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div class="text-dark border-top">
                    <form class="ml-5 p-5" method="POST" action="/penyakit/updatePenyakit">
                        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                        <input type="hidden" id="id_identitas_penyakit" name="id_identitas_penyakit" value="{{ $data->id_identitas_penyakit }}" class="form-control select2">
                        
                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">ID Register</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="" value="{{ $data->id_register }}" name="id_register">
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Nama Penyakit</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="" value="{{ $data->nama_penyakit }}" name="nama_penyakit">
                            </div>
                        </div>
                        
                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Tanggal</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="" value="{{ $data->tanggal }}" name="tanggal">
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-8">
                                <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{ $data->deskripsi }}">{{ $data->deskripsi }}</textarea>
                            </div>
                        </div>
                        
                        <div class="form-group row mx-1 py-2">
                            <label for="" class="col-3"></label>
                            <a href="/penyakit" type="button" class="col-4 py-3 mr-1 btn btn-outline-danger  ">Batal</a>
                            <button type="submit" class="col-4 py-3 btn btn-purple text-white ">Simpan</button>
                        </div>
                    </form>
                </div>
            </div> 
        </div>
    </div>        
</body>
</html>