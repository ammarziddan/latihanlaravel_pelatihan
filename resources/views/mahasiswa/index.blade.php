<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        @if (session('success'))
            <div class="col-12 mt-3">
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            </div>
        @endif
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">Tambah Data</a>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Nama Mahasiswa</th>
                        <th>NPM</th>
                        <th>Program Studi</th>
                        <th>Fakultas</th>
                        <th>Aksi</th>
                    </tr>

                    @foreach ($mahasiswa as $key)

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $key->nama_mahasiswa }}</td>
                        <td>{{ $key->npm }}</td>
                        <td>{{ $key->program_studi }}</td>
                        <td>{{ $key->fakultas->nama_fakultas }}</td>
                        <td>
                            <a href="{{ route('mahasiswa.edit', ['id'=>$key->id]) }}" class="btn btn-info">Edit</a>
                            <a href="{{ route('mahasiswa.destroy', ['id'=>$key->id]) }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>

                    @endforeach
                </table>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
