<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" >
    <!-- CSS Assets -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Mulish' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <title>Problem Solver | Home</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                @include('partial/sidebar')
            </div>
    
            <div class="col-10">
                <div class="row ml-5 pl-3 mt-3">
                    <div class="col mx-1 bg-menu kesehatan-jiwa">
                        <div class="row my-2">
                            <div class="col-4 ml-2 py-2 icon border-radius text-center bg-white">
                                <img class="my-3" src="vectors/icon_kesehatan-jiwa3.svg" alt="">
                            </div>
                            <div class="col">
                                <h3 class="">Kesehatan Jiwa</h3>
                                <h4 class=""><?= $jumlah_kesehatan_jiwa ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col mx-1 bg-menu surveilans-1">
                        <div class="row my-2">
                            <div class="col-4 ml-2 py-2 icon border-radius text-center bg-white">
                                <img class="my-3" src="vectors/icon_surveilans2.svg" alt="">
                            </div>
                            <div class="col">
                                <h3 class="">Surveilans 1</h3>
                                <h4 class=""><?= $jumlah_surveilans_1 ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col mx-1 bg-menu surveilans-2">
                        <div class="row my-2">
                            <div class="col-4 ml-2 py-2 icon border-radius text-center bg-white">
                                <img class="my-3" src="vectors/icon_surveilans2.svg" alt="">
                            </div>
                            <div class="col">
                                <h3 class="">Surveilans 2</h3>
                                <h4 class="ml-2"><?= $jumlah_surveilans_2 ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col mx-1 bg-menu perkesmas">
                        <div class="row my-2">
                            <div class="col-4 ml-2 py-2 icon border-radius text-center bg-white">
                                <img class="my-3" src="vectors/icon_perkesmas2.svg" alt="">
                            </div>
                            <div class="col">
                                <h3 class="">Perkesmas</h3>
                                <h4 class="ml-2"><?= $jumlah_perkesmas ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="row ml-5 pl-1">
                    <div class="col-8 content border-warning">
                        <div class="content-body bg-white border-line">
                            <div class="row">
                                <h2 class="col-9 color-neutral-500">Aktivitas</h2>
                                <a class="col-3 color-grey h7 text-right" href="/activity">Lihat Semua</a>
                            </div>
        
                            <div class="content-table mt-4">
                                <table class="table table-bordered rounded">
                                    <thead class="color-neutral-500 bg-neutral-100">
                                        <tr>
                                            <th class="th2" scope="col">No</th>
                                            <th class="th2" scope="col">Tanggal</th>
                                            <th class="th2" scope="col">Nama</th>
                                            <th class="th2" scope="col">Jenis Data</th>
                                            <th class="th2" scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($log_activity->slice(0, 5)  as $key)
            
                                        <tr class="color-neutral-400">
                                            <td class="td2">{{ $loop->iteration }}</td>
                                            <td class="td2">{{ $key->tanggal }}</td>
                                            <td class="td2">{{ $key->nama_pasien }}</td>
                                            <td class="td2">{{ $key->jenis_data }}</td>
                                            <td class="td2">{{ $key->deskripsi }}</td>
                                        </tr>
        
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
        
                        <div class="content-body bg-white border-line">
                            <div class="row">
                                <h2 class="col-9 color-black">Kesehatan Jiwa</h2>
                                <a class="col-3 color-grey h7 text-right" href="/kesehatan_jiwa">Lihat Semua</a>
                            </div>
        
                            <div class="content-table mt-4">
                                <table class="table table-bordered">
                                    <thead class="color-neutral-500 bg-neutral-100">
                                        <tr>
                                            <th class="th2" scope="col">No.</th>
                                            <th class="th2" scope="col">ID. Register</th>
                                            <th class="th2" scope="col">Nama Pasien</th>
                                            <th class="th2" scope="col">Diagnosa</th>
                                            <th class="th2" scope="col">Terapi</th>
                                            <th class="th2" scope="col">Dosis</th>
                                            <th class="th2" scope="col">Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($kesehatan_jiwa->slice(0, 5)  as $key)
        
                                        <tr class="color-neutral-400">
                                            <td  class="td2" scope="col">{{ $loop->iteration }}</td>
                                            <td  class="td2" scope="col">{{ $key->id_register }}</td>
                                            <td  class="td2" scope="col">{{ $key->nama_pasien }}</td>
                                            <td  class="td2" scope="col">{{ $key->diagnosa }}</td>
                                            <td  class="td2" scope="col">{{ $key->terapi }}</td>
                                            <td  class="td2" scope="col">{{ $key->dosis }}</td>
                                            <td  class="td2" scope="col">{{ $key->keterangan }}</td>
                                        </tr>
        
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
        
                        <div class="content-body bg-white border-line">
                            <div class="row">
                                <h2 class="col-9 color-black">Kesehatan Jiwa</h2>
                                <a class="col-3 color-grey h7 text-right" href="/surveilans_1">Lihat Semua</a>
                            </div>
        
                            <div class="content-table mt-4">
                                <table class="table table-bordered">
                                    <thead class="color-neutral-500 bg-neutral-100">
                                        <tr>
                                            <th class="th2" scope="col">No.</th>
                                            <th class="th2" scope="col">ID. Register</th>
                                            <th class="th2" scope="col">Tanggal</th>
                                            <th class="th2" scope="col">Minggu</th>
                                            <th class="th2" scope="col">Nama Pasien</th>
                                            <th class="th2" scope="col">Diagnosa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($surveilans_1->slice(0, 5)  as $key)
        
                                        <tr class="color-neutral-400">
                                            <td class="td2">{{ $loop->iteration }}</td>
                                            <td class="td2">{{ $key->id_register }}</td>
                                            <td class="td2">{{ $key->tanggal }}</td>
                                            <td class="td2">1</td>
                                            <td class="td2">{{ $key->nama_pasien }}</td>
                                            <td class="td2">{{ $key->diagnosa }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="note border-line bg-white">
                            <div class="row">
                                <h2 class="col color-black">Catatan</h2>
                                <a class="col color-grey text-right h7" href="/note">Lihat Semua                            </a>
                            </div>
                            <div class="color-grey border-radius mb-3" style="max-width: 20rem;">
                                @foreach($note->slice(0, 5)  as $key)
                                <div class="card-body bg-grey">
                                    
                                    <div type="button" class="btn btn-purple text-white priority inline">
                                        <h6>{{ $key->status }}</h6>
                                    </div>
                                    <div class="dropdown inline" id="menu">
                                        <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <button class="dropdown-item btn-danger" href="#">Hapus</button>
                                        </div>
                                    </div>
                                    <div class="card-text">
                                        <h7>{{ $key->judul }}</h7>
                                        <h8>{{ $key->deskripsi }}</h8>
                                    </div>
                                </div>
            
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    
    @include('sweetalert::alert')
</body>

</html>