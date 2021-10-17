<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="py-4 px-2">
        <p>{{$kota}}, {{$tanggal}}</p>

        <p>Kepada Yth., <br>
        Bapak / Ibu Pimpinan <br>
        Campuspedia<br>
        Di Tempat
        </p>

        <p class="mt-5">Dengan Hormat,</p> 
        
        <p class="text-justify" >{{$opening}}</p> 

        <p class="mt-1"> Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{$nama}} <br>
            Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{$alamat}} <br>
            Jabatan&nbsp;&nbsp;&nbsp;&nbsp;: {{$jabatan}} <br>
        </p>

        <p class="text-justify">{{$main}}</p>

        <p class="mt-3 text-justify">{{$closing}}</p>                                  

        <p class="mt-5">Hormat Saya,</p>
        <p class="mt-5">{{$nama}}</p>
    </div>
</body>
</html>