<!doctype html>
<html lang="en">

<head>
    <title>Problem Solver | Identitas Jiwa</title>
</head>

<body>
    <div class="container">
        <div class="left">
            @include('partial/sidebar')
        </div>

        <div class="l-right">
            <div class="title">
                <h4 class="text-title color-black lead font-bold">Identitas Jiwa</h4>
                <h1 class="color-neutral-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Porttitor adipiscing in consectetur sem ut netus scelerisque. Viverra urna vitae viverra habitant a magna vitae, fermentum morbi. Magna magna non ridiculus vitae viverra feugiat morbi sed.</h1>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <a href="/identitas_pasien" class="btn btn-purple text-white border-radius px-5 py-3">Kembali</a>
                </div>
            </div>
            <div class="ttable border-line bg-white my-4">
                <div class="p-2 bg-light rounded-bottom-0">
                    <p class="m-3 text-dark">Detail Data</p>
                </div>
                <div class="p-2 text-dark border-top">
                    <form class="ml-3 p-5" method="POST" action="/identitas-pasien">
                        @csrf
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">ID Register</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control color-neutral-400" id="" value="{{ $data->id_register }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Nama Pasien</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control color-neutral-400" id="" value="{{$data->nama_pasien}}" disabled>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control color-neutral-400" id="" value="{{$data->tanggal_lahir}}" disabled>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control color-neutral-400" id="" value="{{$data->jenis_kelamin}}" disabled>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-8">
                                <textarea class="form-control color-neutral-400" id="exampleFormControlTextarea1" rows="3" value="{{$data->alamat}}" disabled>{{$data->alamat}}</textarea>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Kepala Keluarga</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control color-neutral-400" id="" placeholder="" value="{{$data->kepala_keluarga}}" disabled>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">NIK</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control color-neutral-400" id="" value="{{$data->nik}}" disabled>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">No. BPJS</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control color-neutral-400" id="" value="{{$data->no_bpjs}}" disabled>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Pendidikan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control color-neutral-400" id="" value="{{$data->pendidikan}}" disabled>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Pekerjaan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control color-neutral-400" id="" value="{{$data->pekerjaan}}" disabled>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>