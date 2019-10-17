<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="basic2pro.php" method="post">
        <label for=""> Nama : </label>
        <input type="text" name = "nama"><br>
        <label for=""> NIP : </label>
        <input type="number" name = "nip"><br>
        <label for=""> Alamat : </label>
        <input type="text" name = "alamat"><br>
        <label for=""> Hari Kerja : </label>
        <input type="number" name = "hk" max = 30><br>
        <input type="submit" value="Simpan" name = "simpan">
    </form>
</body>
</html>