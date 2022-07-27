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
    <title>Setting</title>
</head>

<body>
    <div class="container">
        <div class="left">
            @include('partial/sidebar') 
        </div>

        <div class="l-right mt-3 border">
            <div class="border-line bg-white">
                <div class="p-2 bg-light border-bottom rounded-bottom-0">
                    <div class="m-3 row">
                        <p class="col-6 text-dark">General Account Settings</p>
                    </div>
                </div>
                <div class="text-dark p-5">
                    <form method="POST" action="/settings/updateSettings/" class="ml-5">
                        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                        <input type="hidden" value="{{ $data->id }}" name="id_settings">
                        <div class="form-group row py-2">
                            <label for="" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control color-neutral-400" name="nama" value="{{ $data->name }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control color-neutral-400" name="email" value="{{ $data->email }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control color-neutral-400" name="alamat" value="{{ $data->alamat }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Kontak</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control color-neutral-400" name="no_hp" value="{{ $data->no_hp }}" required>
                            </div>
                        </div>
                        <div class="form-group row mx-1 py-2">
                            <label for="" class="col-3"></label>
                            <a href="/settings" type="button" class="col-4 py-3 mr-1 btn btn-outline-danger ">Batal</a>
                            <button type="submit" class="col-4 py-3 btn btn-purple text-white">Simpan</button>
                        </div>
                    </form>
                </div>
            </div> 
        </div>
    </div>        
</body>
</html>