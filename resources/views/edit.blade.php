<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>

<body>
    <center>
        <h3>EDIT BEASISWA</h3>
    </center>

    @foreach($beasiswa as $d)
    <form action="/beasiswa/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" placeholder="ID" value="{{ $d->id }}">
        <input type="text" name="nama_b" placeholder="Nama beasiswa" value="{{ $d->nama_beasiswa }}"> <br> <br>
        <input type="text" name="sumber_b" placeholder="Sumber beasiswa" value="{{ $d->sumber_beasiswa }}"> <br> <br>
        <input type="text" name="kuota" placeholder="Kuota" value="{{ $d->kuota }}"> <br> <br>
        <textarea name="kriteria_1" id="" cols="30" rows="3" placeholder="Kriteria 1">{{ $d->kriteria_1 }}</textarea> <br> <br>
        <textarea name="kriteria_2" id="" cols="30" rows="3" placeholder="Kriteria 2">{{ $d->kriteria_2 }}</textarea> <br> <br>
        <textarea name="kriteria_3" id="" cols="30" rows="3" placeholder="Kriteria 3">{{ $d->kriteria_3 }}</textarea> <br> <br>
        <textarea name="kriteria_4" id="" cols="30" rows="3" placeholder="Kriteria 4">{{ $d->kriteria_4 }}</textarea> <br> <br>
        <input type="text" name="bentuk" placeholder="Bentuk" value="{{ $d->bentuk_beasiswa }}"> <br> <br>
        <input type="submit" value="Edit">
    </form>
    @endforeach
</body>

</html>