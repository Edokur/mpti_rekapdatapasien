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
                                    <td class="td2">Surveilans 1</td>
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

            <div class="kalender bg-white color-black border-line border-radius">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <td colspan="5">
                                <h5>Jan 2022</h5>
                            </td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                </svg>
                            </td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </td>
                        </tr>
                        <tr>
                            <th class="th2">SEN</th>
                            <th class="th2">SEL</th>
                            <th class="th2">RAB</th>
                            <th class="th2">KAM</th>
                            <th class="th2">JUM</th>
                            <th class="th2">SAB</th>
                            <th class="th2">MIN</th>
                        </tr>
                    </thead>
                    <tbody class="tanggal">
                        <tr>
                            <td class="td2">01</td>
                            <td class="td2">02</td>
                            <td class="td2">03</td>
                            <td class="td2">04</td>
                            <td class="td2">05</td>
                            <td class="td2">06</td>
                            <td class="td2">07</td>
                        </tr>
                        <tr>
                            <td class="td2">08</td>
                            <td class="td2">09</td>
                            <td class="td2">10</td>
                            <td class="td2">11</td>
                            <td class="td2">12</td>
                            <td class="td2">13</td>
                            <td class="td2">14</td>
                        </tr>
                        <tr>
                            <td class="td2">15</td>
                            <td class="td2">16</td>
                            <td class="td2">17</td>
                            <td class="td2">18</td>
                            <td class="td2">19</td>
                            <td class="td2">20</td>
                            <td class="td2">21</td>
                        </tr>
                        <tr>
                            <td class="td2">22</td>
                            <td class="td2">23</td>
                            <td class="td2">24</td>
                            <td class="td2">25</td>
                            <td class="td2">26</td>
                            <td class="td2">27</td>
                            <td class="td2">28</td>
                        </tr>
                        <tr>
                            <td class="td2">29</td>
                            <td class="td2">30</td>
                            <td class="td2">31</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="note border-radius border-line bg-white">
                <h2 class="color-black">Catatan</h2>
                <a href="/note">
                    <h3 class="color-grey">Lihat Semua</h3>
                </a>
                <div class="color-grey border-radius mb-3" style="max-width: 20rem;">
                    @foreach($note->slice(0, 5)  as $key)
                    <div class="card-body border-radius bg-neutral-100">
                        
                        <button type="button" class="btn btn-primary color-primary priority inline">
                            <h6>{{ $key->status }}</h6>
                        </button>
                        <div class="dropright  inline" id="menu">
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

                    <div class="card-body border-radius bg-neutral-100">
                        <button type="button" class="btn btn-warning priority inline text-white">
                            <h6>Menengah</h6>
                        </button>
                        <div class="dropright  inline" id="menu">
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
                            <h7>Lorem ipsum dolor sit amet, consectetur.</h7>
                            <h8>Lorem ipsum dolor sit amet, consectetur. Some quick example text to build on the card title and make up the bulk of the card's content.</h8>
                        </div>
                    </div>

                    <div class="card-body border-radius bg-neutral-100">
                        <button type="button" class="btn btn-danger text-white priority inline">
                            <h6>Penting</h6>
                        </button>
                        <div class="dropright  inline" id="menu">
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
                            <h7>Lorem ipsum dolor sit amet, consectetur.</h7>
                            <h8>Some quick example text to build on the card title and make up the bulk of the card's content.</h8>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!-- <script src="js/script.js"></script> -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>