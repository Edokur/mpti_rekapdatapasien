<!doctype html>
<html lang="en">

<head>
    <title>Problem Solver | Kesehatan Jiwa</title>
</head>

<body>
    <div class="container">
        <div class="left">
            @include('partial/sidebar')
        </div>

        <div class="l-right">
            <div class="title">
                <h4 class="text-title color-black lead font-bold">Kesehatan Jiwa</h4>
                <h1 class="color-neutral-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Porttitor adipiscing in consectetur sem ut netus scelerisque. Viverra urna vitae viverra habitant a magna vitae, fermentum morbi. Magna magna non ridiculus vitae viverra feugiat morbi sed.</h1>
            </div>

            <div class="ttable border-line bg-white border-radius mt-4">
                <div class="p-2 bg-light rounded-bottom-0">
                    <p class="m-3 text-dark">Edit Data</p>
                </div>
                <div class="text-dark border-top">
                    <form class="ml-5 p-5" method="POST" action="/kesehatan_jiwa/updateKJiwa">
                        @csrf
                        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                        <input type="hidden" id="id_kesehatan_jiwa" name="id_kesehatan_jiwa" value="{{ $data->id_kesehatan_jiwa }}" class="form-control select2">
                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">ID Register</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="{{ $data->id_register}}" name="id_register" id="" disabled>
                            </div>
                        </div>
                        
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Nama Pasien</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama_pasien" id="" value="{{ $data->nama_pasien }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="" name="tanggal_lahir" value="{{ $data->tanggal_lahir }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="" name="jenis_kelamin" value="{{ $data->jenis_kelamin }}" readonly>
                            </div>
                        </div>
                        
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" rows="3" readonly>{{ $data->alamat }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Kepala Keluarga</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="kepala_keluarga" id="" value="{{ $data->kepala_keluarga }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Kunjungan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="kunjungan" id="" value="{{ $data->kunjungan }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">NIK</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="nik" id="" value="{{ $data->nik }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">No. BPJS</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="" name="no_bpjs" value="{{ $data->no_bpjs }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Pendidikan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="" name="pendidikan" value="{{ $data->pendidikan }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Pekerjaan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="pekerjaan" id="" value="{{ $data->pekerjaan }}"  readonly>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Tanggal Kunjungan</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="tanggal_kunjungan" id="" value="{{ $data->tanggal_kunjungan }}" readonly>
                            </div>
                        </div>
                        
                        
                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Diagnosa</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="diagnosa" rows="3">{{ $data->diagnosa}}</textarea>
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Terapi</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="terapi" rows="3">{{ $data->terapi}}</textarea>
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Dosis</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="dosis" rows="3">{{ $data->dosis}}</textarea>
                            </div>
                        </div>

                        <div class="form-group py-2 row">
                            <label for="" class="col-sm-3 col-form-label">Keterangan</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="keterangan" rows="3">{{ $data->keterangan}}</textarea>
                            </div>
                        </div>
                        
                        <div class="form-group row mx-1 py-2">
                            <label for="" class="col-3"></label>
                            <a href="/kesehatan_jiwa" type="button" class="col-4 py-3 mr-1 btn btn-outline-danger">Batal</a>
                            <button type="submit" class="col-4 py-3 btn btn-purple text-white ">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>