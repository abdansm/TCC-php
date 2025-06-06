<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Halaman Login</title>
</head>
<style>
body{
    background-image:
    linear-gradient(
      rgba(0, 0, 0, 0.45), 
      rgba(0, 0, 0, 0.45)
    ), url(si-bg-login.jpg);
    background-size: cover;
}

</style>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    
    
    <!-- cek pesan notifikasi -->
    <?php 
    
		if(isset($_GET['pesan']))
		{
			if($_GET['pesan'] == "gagal")
			{
			$pesan = "Login gagal! username dan password salah!";
			}else if($_GET['pesan'] == "logout")          {
                $pesan = "Anda telah berhasil Keluar";
                }else if($_GET['pesan'] == "belum_login")
                {
                    $pesan = "Harap login terlebih dahulu!";
                }
                else if($_GET['pesan'] == "sukses")
                {
                    $pesan = "Berhasil menambahkan akun, silahkan login";
                }
             }
           ?>
    
   
        
    <div class="container-fluid vh-100" style="margin-top:200px">
            <div class="" style="margin-top:200px">
                <div class="d-flex justify-content-center">
                    <div class="col-md-4 col-sm-12 p-5 bg-white">
        <div class="p-3 text-center">
        <h2 class="fw-bold">Login</h2> 
    </div>

    <?php
    if(isset($_GET['pesan'])){ ?>
<div class="mb-3 text-center ">
    <?php echo $pesan; ?>
</div>

<?php } ?>
    <form method="POST" action="si-cek_login.php">
   
    <div class="mb-2">
  <input type="text" class="form-control" placeholder="Nama Pengguna" name="username">

        </div>
<div class="mb-2">
<input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="passwordHelpBlock">
</div>

    <div class="mb-2 d-grid">
    <button type="submit" name="submit" class="btn btn-primary">Masuk</button>
</div>
<div class="mb-2 text-center">
    <p>Belum punya akun? silahkan <a href="si-daftar.php">Daftar</a></p>
</div>
       
    </form>
    </div>
    </div>
    </div>
    </div>    
</body>

</html>