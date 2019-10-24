<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah</title>
</head>

<body>
    <center>
        <h3>TAMBAH BEASISWA</h3>
    </center>

    <form action="/beasiswa/tambah" method="post">
        {{ csrf_field() }}
        <input type="text" name="nama_b" placeholder="Nama beasiswa"> <br> <br>
        <input type="text" name="sumber_b" placeholder="Sumber beasiswa"> <br> <br>
        <input type="text" name="kuota" placeholder="Kuota"> <br> <br>
        <textarea name="kriteria_1" id="" cols="30" rows="3" placeholder="Kriteria 1"></textarea> <br> <br>
        <textarea name="kriteria_2" id="" cols="30" rows="3" placeholder="Kriteria 2"></textarea> <br> <br>
        <textarea name="kriteria_3" id="" cols="30" rows="3" placeholder="Kriteria 3"></textarea> <br> <br>
        <textarea name="kriteria_4" id="" cols="30" rows="3" placeholder="Kriteria 4"></textarea> <br> <br>
        <input type="text" name="bentuk" placeholder="Bentuk"> <br> <br>
        <input type="submit" value="Tambah">
    </form>
</body>

</html>