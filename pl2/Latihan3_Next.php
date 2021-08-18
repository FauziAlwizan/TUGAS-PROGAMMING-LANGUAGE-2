<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'Koneksi.php';
    $id = $_POST['id'];
    $NPM = $_POST['NPM'];
    $NAMA = $_POST['Nama'];

    $data = mysqli_query ($koneksi,"UPDATE tbl_mahasiswa SET NPM='$NPM', Nama='$NAMA' WHERE id='$id'");
    header("location:Latihan1.php");

    ?>
</body>
</html>