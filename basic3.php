<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <form action="" method="post">
            <legend><label for="">Masukan Jumlah</label></legend>
            <input type="number" name="mj" id=""><br>
            <input type="submit" value="Simpan" name = "simpan">
        </form>
        <form action="basic3pro.php" method="post">
            <?php 
                if (isset($_POST['simpan'])) {
                    $mk = $_POST['mj'];
                    for ($i=0; $i < $mk; $i++) { ?>
                      
                        <label for="">Nama : </label>
                        <input type="text" name = "nama[]"><br>
                        <label for="">NIK : </label>
                        <input type="number" name = "nik[]"><br>
                        <label for="">Alamat : </label>
                        <textarea name="alamat[]" cols="20" rows="5"></textarea><br>
                        <label for="">Umur : </label>
                        <input type="number" name = "umur[]"><br><br><br>
                    
                    
            <?php } ?>
                        <input type="submit" value="Simpan" name = "submit">
                        
            <?php } ?>
        </form>
    </fieldset>
</body>
</html>