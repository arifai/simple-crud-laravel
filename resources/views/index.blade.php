<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beasiswa</title>
</head>

<body>
    <center>
        <h3>BEASISWA</h3>
    </center>
    <p>Kumpulan beasiswa</p>

    <table border="1">
        <tr>
            <th>No.</th>
            <th>Nama Beasiswa</th>
            <th>Sumber Beasiswa</th>
            <th>Kuota</th>
            <th>Kriteria 1</th>
            <th>Kriteria 2</th>
            <th>Kriteria 3</th>
            <th>Kriteria 4</th>
            <th>Bentuk Beasiswa</th>
            <th>Tindakan</th>
        </tr>
        @php
        $i = 1;
        @endphp

        @foreach($beasiswa as $d)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $d->nama_beasiswa }}</td>
            <td>{{ $d->sumber_beasiswa }}</td>
            <td>{{ $d->kuota }}</td>
            <td>{{ $d->kriteria_1 }}</td>
            <td>{{ $d->kriteria_2 }}</td>
            <td>{{ $d->kriteria_3 }}</td>
            <td>{{ $d->kriteria_4 }}</td>
            <td>{{ $d->bentuk_beasiswa }}</td>
            <td>
                <a href="/beasiswa/edit/{{ $d->id }}">Edit</a>
                |
                <a href="/beasiswa/del/{{ $d->id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    <a href="/beasiswa/add">+ Tambah</a>
</body>

</html>