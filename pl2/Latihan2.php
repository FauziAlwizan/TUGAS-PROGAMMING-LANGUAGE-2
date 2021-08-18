<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input Mahasiswa</h2>

    <?php
        include 'koneksi.php';
        if(isset($_POST['proses']))
            {
                $data=mysqli_query($koneksi,"insert into tbl_mahasiswa values(
                    '".$_POST['id']."',
                    '".$_POST['NPM']."',
                    '".$_POST['Nama']."')");
                header('location:Latihan1.php');
            }
    ?>
    <form action ="" method="POST">
    <p>NPM</p>
    <input type ="text" name="NPM">
    <p>Nama</p>
    <input type ="text" name="Nama">
    <input type ="submit" name="proses" value="Simpan">
</form>