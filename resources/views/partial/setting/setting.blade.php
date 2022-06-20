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
    <title>Setting</title>
</head>

<body>
    <div class="container">
        <div class="left ml-2">
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
                            <a href="/surveilans-1" class="sub-item"><img src="vectors/icon_surveilans.svg" alt="">Surveilans 1</a>
                            <a href="#" class="sub-item"><img src="vectors/icon_surveilans.svg" alt="">Surveilans 2</a>
                            <a href="#" class="sub-item"><img src="vectors/icon_perkesmas.svg" alt="">Perkesmas</a>
                            <a href="#" class="sub-item"><img src="vectors/icon_identitas-pasien.svg" alt="">Identitas Pasien</a>
                            <a href="/penyakit" class="sub-item"><img src="vectors/icon_penyakit.svg" alt="">Penyakit</a>
                        </div>
                    </div>
                    <hr class="mx-4 border-bottom"></hr>
                    <div class="item ml-4">
                        <a href="/setting" class="list-group-item list-group-item-action">
                        <img src="vectors/icon_pengaturan-ungu.svg" ></i>Pengaturan</a>
                    </div>
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

        <div class="l-right ml-4">
            <div class="title mt-4">
                <h4 class="text-title color-black lead font-bold">Setting</h4>
            </div>
            
            <div class="content mb-4">
                <div class="content-body border">
                    <table class="table table-borderless">
                        <thead class="color-neutral-500 bg-neutral-100">
                            <tr class="border-#f6f6f6 border-bottom">
                                <th scope="col">General Account Setting</th>
                                <td scope="col"><a href="/edit" class="text-secondary">Edit</a></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="color-neutral-500">
                                <td>Nama</td>
                                <td>Karoni Marliani</td>
                            </tr>
                            <tr class="color-neutral-500">
                                <td>Username</td>
                                <td>Admin123</td>
                            </tr>
                            <tr class="color-neutral-500">
                                <td>Email</td>
                                <td>Admin123@gmail.com</td>
                            </tr>
                            <tr class="color-neutral-500">
                                <td>Alamat</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At placerat pellentesque fusce felis at ultricies.</td>
                            </tr>
                            <tr class="color-neutral-500">
                                <td>Kontak</td>
                                <td>081234567890</td>
                            </tr>
                        </tbody>
                    </table>      
                </div><br>
                <div class="content-body border">
                    <table class="table table-borderless">
                        <thead class="color-neutral-500 bg-neutral-100">
                            <tr class="border-#f6f6f6 border-bottom">
                                <th scope="col" colspan="3">Security</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="color-neutral-500 border-#f6f6f6 border-bottom">
                                <td class="pt-4 ">Ubah Kata Sandi</td>
                                <td class="pl-5 pt-4"><p class="td-saran">Sebaiknya gunakan kata sandi yang kuat yang tidak Anda gunakan di tempat lain</p> </td>
                            </tr>
                            <tr class="color-neutral-500">
                                <td>Kata Sandi Sebelumnya</td>
                                <td><input type="password" class="td-group"></td>
                            </tr>
                            <tr class="color-neutral-500">
                                <td>Kata Sandi Baru</td>
                                <td><input type="password" class="td-group"></td>
                            </tr>
                            <tr class="color-neutral-500">
                                <td>Konfirmasi Kata Sandi Baru</td>
                                <td><input type="password" class="td-group"></td>
                            </tr>
                        </tbody>
                    </table>   
                    <div class="mx-5 mb-5 form-group row">
                        <a href="/resetpw" class="text-secondary lupa">Forgot password? </a>
                    </div>  
                    <div class="row mb-4">
                        <div class="col">
                        </div>
                        <div class="col mr-5">
                            <button class="btn btn-outline-danger" type="button">Reset</button>
                        </div>
                        <div class="col mr-5">
                            <button class="btn-simpan" type="button">Simpan</button>
                        </div>
                    </div> 
                </div> 
            </div>
        </div>
    </div>  
         
</body>
</html>