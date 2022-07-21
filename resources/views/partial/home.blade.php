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
    <div class="container">
        <div class="left">
            @include('partial/sidebar')
        </div>

        <div class="center">
            <form class="form-inline my-2 my-lg-0 search bg-white border-line border-radius">
                <div class="dropdown">
                    <button class="btn dropdown-toggle text-muted" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                        Semua Kategori
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
                <div class="line-v"></div>
                <input class="form-control mr-sm-2" type="search" placeholder="Pencarian Data" aria-label="Search">
                <button class="btn my-2 my-sm-0 btn-search" type="submit"><img src="vectors/icon_search.svg" alt=""></button>
            </form>

            <div class="angka">
                <div class="bg-menu kesehatan-jiwa">
                    <div class="icon border-radius bg-white">
                        <img src="vectors/icon_kesehatan-jiwa3.svg" alt="">
                    </div>
                    <div class="pl-5 my-3 ml-5">
                        <h3 class="ml-2">Kesehatan Jiwa</h3>
                        <h4 class="ml-2"><?= $jumlah_kesehatan_jiwa ?></h4>
                    </div>
                </div>
                <div class="bg-menu surveilans-1">
                    <div class="icon border-radius bg-white">
                        <img src="vectors/icon_surveilans2.svg" alt="">
                    </div>
                    <div class="pl-5 my-3 ml-5">
                        <h3 class="ml-2">Surveilans 1</h3>
                        <h4 class="ml-2"><?= $jumlah_surveilans_1 ?></h4>
                    </div>
                </div>
                <div class="bg-menu surveilans-2">
                    <div class="icon border-radius bg-white">
                        <img src="vectors/icon_surveilans2.svg" alt="">
                    </div>
                    <div class="pl-5 my-3 ml-5">
                        <h3 class="ml-2">Surveilans 2</h3>
                        <h4 class="ml-2"><?= $jumlah_surveilans_2 ?></h4>
                    </div>
                </div>
                <div class="bg-menu perkesmas">
                    <div class="icon border-radius bg-white">
                        <img src="vectors/icon_perkesmas2.svg" alt="">
                    </div>
                    <div class="pl-5 my-3 ml-5">
                        <h3 class="ml-2">Perkesmas</h3>
                        <h4 class="ml-2"><?= $jumlah_perkesmas ?></h4>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="content-body bg-white border-line border-radius">
                    <h2 class="color-neutral-500">Aktivitas</h2>
                    <a href="/activity">
                        <h3 class="color-grey">Lihat Semua</h3>
                    </a>

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

                <div class="content-body bg-white border-line border-radius">
                    <h2 class="color-black">Kesehatan Jiwa</h2>
                    <a href="/kesehatan_jiwa">
                        <h3 class="color-grey">Lihat Semua</h3>
                    </a>

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

                <div class="content-body bg-white border-line border-radius">
                    <h2 class="color-black">Surveilans 1</h2>
                    <a href="">
                        <h3 class="color-grey">Lihat Semua</h3>
                    </a>

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
        </div>

        <div class="right">
            <img class="p-profile" src="vectors/profile.svg" alt="">

            <div class="note border-radius border-line bg-white">
                <h2 class="color-black">Catatan</h2>
                <a href="/note">
                    <h3 class="color-grey">Lihat Semua</h3>
                </a>
                <div class="color-grey border-radius mb-3" style="max-width: 20rem;">
                    @foreach($note->slice(0, 5)  as $key)
                    <div class="card-body border-radius bg-neutral-100">
                        
                        <button type="button" class="btn btn-info color-primary priority inline">
                            <h6>{{ $key->status }}</h6>
                        </button>
                        <div class="dropright inline" id="menu">
                            <button class="btn btn-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                </svg>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <button class="dropdown-item" href="#">Edit</button>
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

</body>

</html>