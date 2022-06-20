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
    <link rel="stylesheet" href="css/style1.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <title>Problem Solver - Surveilans 1</title>
</head>

<body>
    <div class="container">
        <div class="left">
            <div class="side-bar m-3">
                <div class="menu mt-5">
                    <div class="item mx-4"><img src="image/icon_problemsolver.png" alt=""></div>
                    <div class="item mt-5 ml-4"><a href="#"><img src="vectors/icon_dashboard.svg" alt=""></i>Dashboard</a></div>
                    <hr class="mx-4 border-bottom"></hr>
                    
                    <div class="item ml-4">
                        <a class="sub-btn"><i class="fa-solid fa-user"></i>Admin<i class="fas fa-angle-right dropdown"></i></a>
                        <div class="sub-menu">
                            <a href="#" class="sub-item"><img src="vectors/icon_catatan.svg" alt="">Catatan</a>
                            <a href="#" class="sub-item"><img src="vectors/icon_aktivitas.svg" alt="">Aktivitas</a>
                        </div>
                    </div>
                    <div class="item ml-4">
                        <a class="sub-btn"><i class="fa-solid fa-stethoscope"></i>Report Data<i class="fas fa-angle-right dropdown"></i></a>
                        <div class="sub-menu">
                            <a href="#" class="sub-item"><img src="vectors/icon_kesehatan-jiwa.svg" alt="">Kesehatan Jiwa</a>
                            <a href="/surveilans-1" class="list-group-item list-group-item-action"><img src="vectors/icon_surveilans-ungu.svg" alt="">Surveilans 1</a>
                            <a href="#" class="sub-item"><img src="vectors/icon_surveilans.svg" alt="">Surveilans 2</a>
                            <a href="#" class="sub-item"><img src="vectors/icon_perkesmas.svg" alt="">Perkesmas</a>
                            <a href="#" class="sub-item"><img src="vectors/icon_identitas-pasien.svg" alt="">Identitas Pasien</a>
                            <a href="/penyakit" class="sub-item"><img src="vectors/icon_penyakit.svg" alt="">Penyakit</a>
                        </div>
                    </div>
                    <hr class="mx-4 border-bottom"></hr>
                    <div class="item ml-4"><a href="/setting"><img src="vectors/icon_pengaturan.svg" alt=""></i>Pengaturan</a></div>
                    <div class="item ml-4"><a href="#"><img src="vectors/icon_keluar.svg" alt="">Keluar</a></div>
                </div>
            </div>

            <script type="text/javascript">
                $(document).ready(function(){
                    // 
                    $('.sub-btn').click(function(){
                        $(this).next('.sub-menu').slideToggle();
                    });
                });
            </script>
        </div>

        <div class="l-right">
            <div class="title mt-4">
                <h4 class="text-title color-black lead font-bold">Surveilans 1</h4>
                <h1 class="color-neutral-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Porttitor adipiscing in consectetur sem ut netus scelerisque. Viverra urna vitae viverra habitant a magna vitae, fermentum morbi. Magna magna non ridiculus vitae viverra feugiat morbi sed.</h1>
            </div>

            <div class="row mt-5">
                <div class="col">
                <a href="/tambahdata-surveilans1">
                    <button class="tmbl btn-purple text-white border-radius px-4 py-3">
                        + Tambah Data
                    </button>
                </a>
                </div>
                <div class="col text-right">
                    <button class="btn border-success text-success border-radius px-5 py-3">
                        <svg width="16" height="16" class="mr-3" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.125 4.00313V0.5H2.875V4.00313C2.23466 4.03594 1.63134 4.31323 1.18944 4.77781C0.747536 5.24239 0.50076 5.85882 0.5 6.5V12.5H2.625V11.5H1.5V6.5C1.50045 6.10231 1.65863 5.72104 1.93983 5.43983C2.22104 5.15863 2.60231 5.00045 3 5H13C13.3977 5.00045 13.779 5.15863 14.0602 5.43983C14.3414 5.72104 14.4996 6.10231 14.5 6.5V11.5H13.125V12.5H15.5V6.5C15.4992 5.85882 15.2525 5.24239 14.8106 4.77781C14.3687 4.31323 13.7653 4.03594 13.125 4.00313ZM12.125 4H3.875V1.5H12.125V4Z" fill="#28a745"/>
                            <path d="M12.375 6.25H13.375V7.25H12.375V6.25ZM3.625 8.25H2.375V9.25H3.625V15.5H12.125V9.25H13.375V8.25H3.625ZM11.125 14.5H4.625V9.25H11.125V14.5Z" fill="#28a745"/>
                        </svg>Cetak Data
                    </button>
                </div>
            </div>

            <div class="ttable border bg-white border-radius mt-4">
                <div class="p-4">
                    <div class="row px-3">
                        <div class="col p-0">
                            <input class="form-control" type="search" placeholder="" aria-label="Search">
                        </div>
                        <div class="col p-0">
                            <input class="form-control" type="search" placeholder="" aria-label="Search">
                        </div>
                        <div class="col p-0">
                            <input class="form-control" type="search" placeholder="" aria-label="Search">
                        </div>
                        <div class="col p-0">
                            <input class="form-control" type="search" placeholder="" aria-label="Search">
                        </div>
                        <div class="col-2 p-0">
                            <input class="form-control" type="search" placeholder="" aria-label="Search">
                        </div>
                        <div class="col-3 p-0">
                            <input class="form-control" type="search" placeholder="" aria-label="Search">
                        </div>
                        <div class="col-2 p-0">
                            <input class="form-control" type="search" placeholder="" aria-label="Search">
                        </div>
                        
                    </div>
                    
                </div>
                
                <div class="p-4">
                    <table class="table table-bordered rounded">
                        <thead class="bg-grey color-white">
                            <tr>
                                <th class="col-1 head-tbl p-3">No</th>
                                <th class="col-1 head-tbl p-3">ID. Register</th>
                                <th class="col-1 head-tbl p-3">Tanggal</th>
                                <th class="col-1 head-tbl p-3">Minggu</th>
                                <th class="col-2 head-tbl p-3">Nama Pasien</th>
                                <th class="col-3 head-tbl p-3">Diagnosa</th>
                                <th class="col-2 head-tbl p-3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="color-white color-neutral-400">
                            <tr>
                                <td class="col-1 p-3">1.</td>
                                <td class="col-1 p-3">#12345</td>
                                <td class="col-1 p-3">01-01-2022</td>
                                <td class="col-1 p-3">1</td>
                                <td class="col-1 p-3">Putra Dino</td>
                                <td class="col-4 p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque impedit quaerat, cum exercitationem repellendus corrupti molestias veritatis tempora rerum sit cupiditate vitae quibusdam quod dolor quas optio aliquam maxime iusto.</td>
                                <td class="col-2 p-3">
                                    <button class="tmbl">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FF4C4C" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                        </svg>
                                    </button>
                                    <button class="tmbl">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ffc107" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                        </svg>
                                    </button>
                                    <button class="tmbl">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3366FF" class="bi bi-info-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="col-1 p-3">1.</td>
                                <td class="col-1 p-3">#12345</td>
                                <td class="col-1 p-3">01-01-2022</td>
                                <td class="col-1 p-3">1</td>
                                <td class="col-1 p-3">Putra Dino</td>
                                <td class="col-3 p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque impedit quaerat, cum exercitationem repellendus corrupti molestias veritatis tempora rerum sit cupiditate vitae quibusdam quod dolor quas optio aliquam maxime iusto.</td>
                                <td class="col-2 p-3">
                                    <button class="tmbl">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FF4C4C" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                        </svg>
                                    </button>
                                    <button class="tmbl">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ffc107" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                        </svg>
                                    </button>
                                    <button class="tmbl">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3366FF" class="bi bi-info-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



    </div>         
</body>
</html>