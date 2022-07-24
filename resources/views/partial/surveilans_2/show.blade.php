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
                        <div class="col-6"><label>Detail Data</label></div>
                        <div class="col-6 text-right"><a href="/surveilans_2/editSurveilans2/{{$data->id_surveilens2}}"><small class="text-dark"> Ubah data</small></a></div>
                    </div>
                </div>
                <div class="text-dark border-top">
                    <form class="mx-5 p-5" method="POST" action="/surveilans_2">
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">ID Register</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="" disabled value="{{$data->id_register}}">
                            </div>
                        </div>
                        
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Jenis Penyakit</label>
                            <div class="col-sm-8">
                                <div class="dropdown"> 
                                <input type="text" class="form-control" id="" disabled value="{{$data->nama_penyakit}}">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Golongan Umur 0-7 Hari</label>
                            <div class="row mx-3">
                                <div class="mr-5">
                                    <label for="">Laki-laki</label>
                                    <input type="text" class="form-control text-center px-4" id="" value="{{$data->lga}}" disabled>
                                </div>
                                <div class="ml-5">
                                    <label for="">Perempuan</label>
                                    <input type="text" class="form-control text-center px-4" id="" value="{{$data->pga}}" disabled>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Golongan Umur 8-28 Hari</label>
                            <div class="row mx-3">
                                <div class="mr-5">
                                    <label for="">Laki-laki</label>
                                    <input type="text" class="form-control text-center px-4" id="" value="{{$data->lgb}}" disabled>
                                </div>
                                <div class="ml-5">
                                    <label for="">Perempuan</label>
                                    <input type="text" class="form-control text-center px-4" id="" value="{{$data->pgb}}" disabled>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Golongan Umur < 1 Tahun</label>
                            <div class="row mx-3">
                                <div class="mr-5">
                                    <label for="">Laki-laki</label>
                                    <input type="text" class="form-control text-center px-4" id="" value="{{$data->lgc}}" disabled>
                                </div>
                                <div class="ml-5">
                                    <label for="">Perempuan</label>
                                    <input type="text" class="form-control text-center px-4" id="" value="{{$data->pgc}}" disabled>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Golongan Umur 1-4 Tahun</label>
                            <div class="row mx-3">
                                <div class="mr-5">
                                    <label for="">Laki-laki</label>
                                    <input type="text" class="form-control text-center px-4" id="" value="{{$data->lgd}}" disabled>
                                </div>
                                <div class="ml-5">
                                    <label for="">Perempuan</label>
                                    <input type="text" class="form-control text-center px-4" id="" value="{{$data->pgd}}" disabled>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Golongan Umur 5-9 Tahun</label>
                            <div class="row mx-3">
                                <div class="mr-5">
                                    <label for="">Laki-laki</label>
                                    <input type="text" class="form-control text-center px-4" id="" value="{{$data->lge}}" disabled>
                                </div>
                                <div class="ml-5">
                                    <label for="">Perempuan</label>
                                    <input type="text" class="form-control text-center px-4" id="" value="{{$data->pge}}" disabled>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Golongan Umur 10-14 Tahun</label>
                            <div class="row mx-3">
                                <div class="mr-5">
                                    <label for="">Laki-laki</label>
                                    <input type="text" class="form-control text-center px-4" id="" value="{{$data->lgf}}" disabled>
                                </div>
                                <div class="ml-5">
                                    <label for="">Perempuan</label>
                                    <input type="text" class="form-control text-center px-4" id="" value="{{$data->pgf}}" disabled>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Golongan Umur 15 - 19 Tahun</label>
                            <div class="row mx-3">
                                <div class="mr-5">
                                    <label for="">Laki-laki</label>
                                    <input type="text" class="form-control text-center px-4" id="" value="{{$data->lgg}}" disabled>
                                </div>
                                <div class="ml-5">
                                    <label for="">Perempuan</label>
                                    <input type="text" class="form-control text-center px-4" id="" value="{{$data->pgg}}" disabled>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Golongan Umur 20 - 44 Tahun</label>
                            <div class="row mx-3">
                                <div class="mr-5">
                                    <label for="">Laki-laki</label>
                                    <input type="text" class="form-control text-center px-4" id="" value="{{$data->lgh}}" disabled>
                                </div>
                                <div class="ml-5">
                                    <label for="">Perempuan</label>
                                    <input type="text" class="form-control text-center px-4" id="" value="{{$data->pgh}}" disabled>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Golongan Umur 45 - 54 Tahun</label>
                            <div class="row mx-3">
                                <div class="mr-5">
                                    <label for="">Laki-laki</label>
                                    <input type="text" class="form-control text-center px-4" id="" value="{{$data->lgi}}" disabled>
                                </div>
                                <div class="ml-5">
                                    <label for="">Perempuan</label>
                                    <input type="text" class="form-control text-center px-4" id="" value="{{$data->pgi}}" disabled>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Golongan Umur 55 - 59 Tahun</label>
                            <div class="row mx-3">
                                <div class="mr-5">
                                    <label for="">Laki-laki</label>
                                    <input type="text" class="form-control text-center px-4" id="" value="{{$data->lgj}}" disabled>
                                </div>
                                <div class="ml-5">
                                    <label for="">Perempuan</label>
                                    <input type="text" class="form-control text-center px-4" id="" value="{{$data->pgj}}" disabled>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Golongan Umur 60 - 69 Tahun</label>
                            <div class="row mx-3">
                                <div class="mr-5">
                                    <label for="">Laki-laki</label>
                                    <input type="text" class="form-control text-center px-4" id="" value="{{$data->lgk}}" disabled>
                                </div>
                                <div class="ml-5">
                                    <label for="">Perempuan</label>
                                    <input type="text" class="form-control text-center px-4" id="" value="{{$data->pgk}}" disabled>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Golongan Umur 70 Tahun</label>
                            <div class="row mx-3">
                                <div class="mr-5">
                                    <label for="">Laki-laki</label>
                                    <input type="text" class="form-control text-center px-4" id="" value="{{$data->lgl}}" disabled>
                                </div>
                                <div class="ml-5">
                                    <label for="">Perempuan</label>
                                    <input type="text" class="form-control text-center px-4" id="" value="{{$data->pgl}}" disabled>
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