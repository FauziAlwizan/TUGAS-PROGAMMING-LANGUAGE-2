<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Update Data Mahasiswa</h2>

    <?php
        include 'koneksi.php';
        $id = $_GET["id"];
        $data = mysqli_query ($koneksi,"SELECT * FROM tbl_mahasiswa WHERE id='$id'");
        while($d=mysqli_fetch_array($data)){
    ?>
     <form method = "post" action = "Latihan3_Next.php">
            <table>
                <tr>
                    <td>NPM</td>
                    <td>
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="number" name="NPM" value="<?php echo $d['NPM']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="Nama" value="<?php echo $d['Nama']; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
            <Input type='hidden' name='id' value='<?php echo $d['id']; ?>'></Input>
        </form>

        <?php
        }
        ?>
        <br><button><a href="Latihan1.php?id=<?php ?>">KEMBALI</a></button>
</body>
</html>   
