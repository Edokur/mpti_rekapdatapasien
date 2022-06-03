<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- CSS Assets -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Mulish' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">

    <title>Problem Solver | Note</title>
</head>

<body>
    <div class="container">
        <div class="left">
            <div class="navbar border-radius">
                <img class="watermark" src="image/icon_problemsolver.png">

                <a href="/">
                    <div class="dashboard color-primary">
                        <img src="vectors/icon_dashboard.svg" alt="">
                        <h2>Dashboard</h2>
                    </div>
                </a>

                <div class="line-h"></div>

                <div class="admin">
                    <h1>Admin</h1>
                    <a href="/note">
                        <div class="catatan active">
                            <img src="vectors/icon_catatan2.svg" alt="">
                            <h2>Catatan</h2>
                        </div>
                    </a>
                    <a href="/activity">
                        <div class="aktivitas color-primary">
                            <img src="vectors/icon_aktivitas.svg" alt="">
                            <h2>Aktivitas</h2>
                        </div>
                    </a>
                </div>

                <div class="report-data">
                    <h1>Report Data</h1>
                    <a href="/kesehatan-jiwa">
                        <div class="kesehatan-jiwa color-primary">
                            <img src="vectors/icon_kesehatan-jiwa.svg" alt="">
                            <h2>Kesehatan Jiwa</h2>
                        </div>
                    </a>
                    <a href="#">
                        <div class="surveilans-1 color-primary">
                            <img src="vectors/icon_surveilans.svg" alt="">
                            <h2>Surveilans 1</h2>
                        </div>
                    </a>
                    <a href="/surveilans-2">
                        <div class="surveilans-2 color-primary">
                            <img src="vectors/icon_surveilans.svg" alt="">
                            <h2>Surveilans 2</h2>
                        </div>
                    </a>
                    <a href="/perkesmas">
                        <div class="perkesmas color-primary">
                            <img src="vectors/icon_perkesmas.svg" alt="">
                            <h2>Perkesmas</h2>
                        </div>
                    </a>
                    <a href="/identitas-pasien">
                        <div class="identitas-pasien color-primary">
                            <img src="vectors/icon_identitas-pasien.svg" alt="">
                            <h2>Identitas Pasien</h2>
                        </div>
                    </a>
                    <a href="#">
                        <div class="penyakit color-primary">
                            <img src="vectors/icon_penyakit.svg" alt="">
                            <h2>Penyakit</h2>
                        </div>
                    </a>
                    <a href="#">
                        <div class="pengaturan color-primary">
                            <img src="vectors/icon_pengaturan.svg" alt="">
                            <h2>Pengaturan</h2>
                        </div>
                    </a>
                    <a href="#">
                        <div class="keluar color-primary">
                            <img src="vectors/icon_keluar.svg" alt="">
                            <h2>Keluar</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="l-right">
            <div class="title">
                <h4 class="text-title color-black lead font-bold">Catatan</h4>
                <h1 class="color-neutral-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Porttitor adipiscing in consectetur sem ut netus scelerisque. Viverra urna vitae viverra habitant a magna vitae, fermentum morbi. Magna magna non ridiculus vitae viverra feugiat morbi sed.</h1>
            </div>

            <div class="row mt-5">
                <div class="col">
                <button class="btn btn-purple text-white border-radius px-5 py-3">
                    + Tambah Data
                </button>
                </div>
            </div>

            <div class="ttable border-line bg-grey table-hover border-radius mt-4">
                <div class="mt-2">
                    <table class="table">
                        <thead class="bg-grey color-white">
                            <tr>
                                <th class="col-1">ID</th>
                                <th class="col-1">Status</th>
                                <th class="col-1">Judul</th>
                                <th class="col-1">Deskripsi</th>
                                <th class="col-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="color-white bg-white color-neutral-400">
                            <tr>
                                <th class="col-1">#12345</th>
                                <th class="col-1">Normal</th>
                                <th class="col-1">Lorem ipsum dolor sit amet, consectetur.</th>
                                <th class="col-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum reprehenderit, illo saepe corrupti asperiores qui doloremque aliquid adipisci expedita laudantium maxime aut quis sed rem. Libero optio assumenda molestiae sunt!</th>
                                <th class="col-1">
                                    <button class="btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FF4C4C" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                        </svg>
                                    </button>
                                    <button class="btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ffc107" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                        </svg>
                                    </button>
                                    <button class="btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3366FF" class="bi bi-info-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                        </svg>
                                    </button>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
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