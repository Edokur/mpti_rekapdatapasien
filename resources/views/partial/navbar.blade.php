<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" >
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <title>Sidebar</title>
  </head>
  <body>
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
                    <a href="#" class="sub-item"><img src="vectors/icon_surveilans.svg" alt="">Surveilans 1</a>
                    <a href="#" class="sub-item"><img src="vectors/icon_surveilans.svg" alt="">Surveilans 2</a>
                    <a href="#" class="sub-item"><img src="vectors/icon_perkesmas.svg" alt="">Perkesmas</a>
                    <a href="#" class="sub-item"><img src="vectors/icon_identitas-pasien.svg" alt="">Identitas Pasien</a>
                    <a href="#" class="sub-item"><img src="vectors/icon_penyakit.svg" alt="">Penyakit</a>
                </div>
            </div>
            <hr class="mx-4 border-bottom"></hr>
            <div class="item ml-4"><a href="#"><img src="vectors/icon_pengaturan.svg" alt=""></i>Pengaturan</a></div>
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

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>