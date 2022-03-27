<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
          <form action="{{ url('pegawai/'.$model->id)}}" method="POST" class="d-block">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <div class="form-group">
                <label >Nama :</label>
                <input type="text" name="nama" value="{{ $model->nama}}"/>
            </div>
            <div class="form-group">
                <label >Alamat :</label>
                <input type="text" name="alamat"  value="{{ $model->alamat}}"/>
            </div>
                <div class="form-group">
                <label >Tanggal Lahir :</label>
                <input type="text" name="tgllahir"  value="{{ $model->tgllahir}}"/>
            </div>
                <div class="form-group">
                <label >Golongan :</label>
            <input type="text" name="golongan"  value="{{ $model->golongan}}"/>
            </div>
            
            <button type="submit"> Simpan </button>
        </form>

    </div>
  
</body>
</html>