<!doctype html>
<html lang="en">

<head>
    <title>Problem Solver | Surveilans 2</title>
</head>

<body>
    <div class="container">
        <div class="left">
            @include('partial/sidebar')
        </div>

        <div class="l-right">
            <div class="title">
                <h4 class="text-title color-black lead font-bold">Surveilans 2</h4>
                <h1 class="color-neutral-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Porttitor adipiscing in consectetur sem ut netus scelerisque. Viverra urna vitae viverra habitant a magna vitae, fermentum morbi. Magna magna non ridiculus vitae viverra feugiat morbi sed.</h1>
            </div>

            <div class="ttable border-line bg-white border-radius my-4">
                <div class="p-2 text-dark bg-light rounded-bottom-0">
                    <div class="m-3 row">
                        <div class="col-6"><label>Edit Data</label></div>
                    </div>
                </div>
                <div class="text-dark border-top">
                    <form class="mx-5 p-5" method="POST" action="/surveilans_2/updateSurveilans2">
                    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                    <input type="hidden" id="id_surveilens2" name="id_surveilens2" value="{{ $data->id_surveilens2 }}" class="form-control select2">
                    <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">ID Register</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="" value="{{$data->id_register}}" disabled>
                            </div>
                        </div>
                        
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Jenis Penyakit</label>
                            <div class="col-sm-8">
                                <div class="dropdown"> 
                                <input type="text" class="form-control" id="" value="{{$data->nama_penyakit}}" disabled>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Golongan Umur 0-7 Hari</label>
                            <div class="row mx-3">
                                <div class="mr-5">
                                    <label for="">Laki-laki</label>
                                    <input type="text" name="lga" name="lga" class="form-control text-center px-4" id="" value="{{$data->lga}}">
                                </div>
                                <div class="ml-5">
                                    <label for="">Perempuan</label>
                                    <input type="text" name="pga" class="form-control text-center px-4" id="" value="{{$data->pga}}">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Golongan Umur 8-28 Hari</label>
                            <div class="row mx-3">
                                <div class="mr-5">
                                    <label for="">Laki-laki</label>
                                    <input type="text" name="lgb" class="form-control text-center px-4" id="" value="{{$data->lgb}}">
                                </div>
                                <div class="ml-5">
                                    <label for="">Perempuan</label>
                                    <input type="text" name="pgb" class="form-control text-center px-4" id="" value="{{$data->pgb}}">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Golongan Umur < 1 Tahun</label>
                            <div class="row mx-3">
                                <div class="mr-5">
                                    <label for="">Laki-laki</label>
                                    <input type="text" name="lgc" class="form-control text-center px-4" id="" value="{{$data->lgc}}">
                                </div>
                                <div class="ml-5">
                                    <label for="">Perempuan</label>
                                    <input type="text" name="pgc" class="form-control text-center px-4" id="" value="{{$data->pgc}}">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Golongan Umur 1-4 Tahun</label>
                            <div class="row mx-3">
                                <div class="mr-5">
                                    <label for="">Laki-laki</label>
                                    <input type="text" name="lgd" class="form-control text-center px-4" id="" value="{{$data->lgd}}">
                                </div>
                                <div class="ml-5">
                                    <label for="">Perempuan</label>
                                    <input type="text" name="pgd" class="form-control text-center px-4" id="" value="{{$data->pgd}}">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Golongan Umur 5-9 Tahun</label>
                            <div class="row mx-3">
                                <div class="mr-5">
                                    <label for="">Laki-laki</label>
                                    <input type="text" name="lge" class="form-control text-center px-4" id="" value="{{$data->lge}}">
                                </div>
                                <div class="ml-5">
                                    <label for="">Perempuan</label>
                                    <input type="text" name="pge" class="form-control text-center px-4" id="" value="{{$data->pge}}">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Golongan Umur 10-14 Tahun</label>
                            <div class="row mx-3">
                                <div class="mr-5">
                                    <label for="">Laki-laki</label>
                                    <input type="text" name="lgf" class="form-control text-center px-4" id="" value="{{$data->lgf}}">
                                </div>
                                <div class="ml-5">
                                    <label for="">Perempuan</label>
                                    <input type="text" name="pgf" class="form-control text-center px-4" id="" value="{{$data->pgf}}">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Golongan Umur 15 - 19 Tahun</label>
                            <div class="row mx-3">
                                <div class="mr-5">
                                    <label for="">Laki-laki</label>
                                    <input type="text" name="lgg" class="form-control text-center px-4" id="" value="{{$data->lgg}}">
                                </div>
                                <div class="ml-5">
                                    <label for="">Perempuan</label>
                                    <input type="text" name="pgg" class="form-control text-center px-4" id="" value="{{$data->pgg}}">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Golongan Umur 20 - 44 Tahun</label>
                            <div class="row mx-3">
                                <div class="mr-5">
                                    <label for="">Laki-laki</label>
                                    <input type="text" name="lgh" class="form-control text-center px-4" id="" value="{{$data->lgh}}">
                                </div>
                                <div class="ml-5">
                                    <label for="">Perempuan</label>
                                    <input type="text" name="pgh" class="form-control text-center px-4" id="" value="{{$data->pgh}}">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Golongan Umur 45 - 54 Tahun</label>
                            <div class="row mx-3">
                                <div class="mr-5">
                                    <label for="">Laki-laki</label>
                                    <input type="text" name="lgi" class="form-control text-center px-4" id="" value="{{$data->lgi}}">
                                </div>
                                <div class="ml-5">
                                    <label for="">Perempuan</label>
                                    <input type="text" name="pgi" class="form-control text-center px-4" id="" value="{{$data->pgi}}">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Golongan Umur 55 - 59 Tahun</label>
                            <div class="row mx-3">
                                <div class="mr-5">
                                    <label for="">Laki-laki</label>
                                    <input type="text" name="lgj" class="form-control text-center px-4" id="" value="{{$data->lgj}}">
                                </div>
                                <div class="ml-5">
                                    <label for="">Perempuan</label>
                                    <input type="text" name="pgj" class="form-control text-center px-4" id="" value="{{$data->pgj}}">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Golongan Umur 60 - 69 Tahun</label>
                            <div class="row mx-3">
                                <div class="mr-5">
                                    <label for="">Laki-laki</label>
                                    <input type="text" name="lgk" class="form-control text-center px-4" id="" value="{{$data->lgk}}">
                                </div>
                                <div class="ml-5">
                                    <label for="">Perempuan</label>
                                    <input type="text" name="pgk" class="form-control text-center px-4" id="" value="{{$data->pgk}}">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Golongan Umur 70 Tahun</label>
                            <div class="row mx-3">
                                <div class="mr-5">
                                    <label for="">Laki-laki</label>
                                    <input type="text" name="lgl" class="form-control text-center px-4" id="" value="{{$data->lgl}}">
                                </div>
                                <div class="ml-5">
                                    <label for="">Perempuan</label>
                                    <input type="text" name="pgl" class="form-control text-center px-4" id="" value="{{$data->pgl}}">
                                </div>
                            </div>
                        </div>

                        <!-- <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Total Kasus</label>
                            <div class="row mx-3">
                                <div class="mr-5">
                                    <label for="">Laki-laki</label>
                                    <input type="text" class="form-control text-center px-4" id="" value="{{$data->lakilaki}}" disabled>
                                </div>
                                <div class="ml-5">
                                    <label for="">Perempuan</label>
                                    <input type="text" class="form-control text-center px-4" id="" value="{{$data->perempuan}}" disabled>
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group row py-5 border-top">
                            <div class="col-6"><h1>Total Kunjungan : </h1></div>
                            <div class="col-5 text-right"><h4>{{$data->total_kunjungan}}</h4></div>
                        </div>

                        <div class="form-group row py-2">
                            <div class="col-5 mr-5">
                                <button type="submit" class="btn btn-purple text-white form-control">Simpan</button>
                            </div>
                            <div class="col-5 ml-5">
                                <button type="button" class="btn btn-outline-danger form-control ">Batal</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="js/script.js"></script>
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>