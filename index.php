

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran siswa baru | smk koding</title>
</head>
<body>
<header>
<h3>pendaftaran siswa Baru</h3>
<h1>SMk Koding.</h1>
</header>

<h4>Menu</h4>
<nav>
<ul>
<li><a href="form-daftar.php">Daftar Baru</a></li>
<li><a href="list-siswa.php">pendaftaran</a></li>
</ul>
</nav>

<?php if(isset($_GET['status'])):?>
    <p>
        <?php 
        if($_GET['status'] == 'sukses'){
            echo "Pendaftaran siswa baru berhasil!";
        }else{
            echo "Pendaftaran gagal!";
        }
        ?>
    </p>
    <?php endif; ?>
    
</body>
</html>