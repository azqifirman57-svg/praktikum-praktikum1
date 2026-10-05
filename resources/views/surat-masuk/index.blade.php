<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Masuk</title>
</head>
<body>

    <h1>Daftar Surat Masuk</h1>
    <table border="1" cellpadding="0">
        <tr>
            <th>No<th>
            </th>Nomor Surat</th>
            <th>Tanggal</th>
            <th>Pengirim</th>
            <th>Perihal</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($suratMasuk as $surat)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$surat["nomor_surat"]}}</td>
                <td>{{$surat["tanggal"]}}</td>
                <td>{{$surat["pengirim"]}}</td>
                <td>{{$surat["perihal"]}}</td>
            </tr>
            @endforeach
    </tbody>
</table>

</body>
</html>