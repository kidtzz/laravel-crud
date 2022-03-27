<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
 
    <div class="container mb-5 mt-5">
         <h1 class="text-center">CRUD LARAVEL </h1>
         <a class=" btn btn-primary" href="{{ url('pegawai/create')}}">Tambah</a>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">tanggal lahir</th>
                <th scope="col">Golongan</th>
                <th colspan="2" class="text-center">Action</th>
                
                
            </tr>
            </thead>
            @foreach ($datap as $key=>$value)
            <tr>
                <td>{{ $value->nama}}</td>
                <td>{{ $value->alamat}}</td>
                <td>{{ $value->tgllahir}}</td>
                <td>{{ $value->golongan}}</td>
                <td><a class="btn btn-warning" href="{{ url('pegawai/'.$value->id.'/edit') }}">update</a></td>
                <td>
                    <form action="{{url('pegawai/'.$value->id)}}" method="POST">
                    @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger" type="submit">DELETE</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>