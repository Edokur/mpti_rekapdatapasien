<!doctype html>
<html lang="en">

<head>
    <title>Problem Solver | Perkesmas</title>
</head>

<body>
    <div class="container">
        <div class="left">
            @include('partial/sidebar')
        </div>

        <div class="l-right">
            <div class="title">
                <h4 class="text-title color-black lead font-bold">Perkesmas</h4>
                <h1 class="color-neutral-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Porttitor adipiscing in consectetur sem ut netus scelerisque. Viverra urna vitae viverra habitant a magna vitae, fermentum morbi. Magna magna non ridiculus vitae viverra feugiat morbi sed.</h1>
            </div>
            
            <div class="ttable border-line bg-white border-radius my-4">
                <div class="p-2 bg-light rounded-bottom-0">
                    <p class="m-3 text-dark">Edit Data</p>
                </div>

                <div class="p-2 text-dark border-top">
                    <form class="ml-5 p-5" action="/perkesmas/updatePerkesmas/" method="POST">
                        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                        <input type="hidden" id="id_perkesmas" name="id_perkesmas" value="{{ $data->id_perkesmas }}" class="form-control select2">

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

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Kunjungan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="kunjungan" id="" value="{{ $data->kunjungan }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Intervensi Keperawatan</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="intervensi_keperawatan" rows="3">{{ $data->intervensi_keperawatan }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Diagnosa Keperawatan</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="diagnosa_keperawatan" rows="3">{{ $data->diagnosa_keperawatan }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Implementasi Keperawatan</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="implementasi_keperawatan" rows="3">{{ $data->implementasi_keperawatan }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Keterangan</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="keterangan" rows="3">{{ $data->keterangan }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row mx-1 py-2">
                            <label for="" class="col-3"></label>
                            <a href="/perkesmas" class="col-4 py-3 mr-1 btn btn-outline-danger">Batal</a>
                            <button type="submit" class="col-4 py-3 btn btn-purple text-white ">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
    </script>
</body>

</html>