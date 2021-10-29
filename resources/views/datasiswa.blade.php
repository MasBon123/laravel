<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($data as $data2)
    Nis        :{{$data2['Nis']}}<br>
    nama       :{{$data2['nama']}}<br>
    jk         :{{$data2['jk']}}<br>
    jurusan    :{{$data2['jurusan']}}<br>
    kelas      :{{$data2['kelas']}}<br>
    wali kelas :{{$data2['wali kelas']}}<br>
    <hr>
     @endforeach
</body>
</html>