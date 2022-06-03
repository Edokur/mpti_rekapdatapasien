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
</body>
