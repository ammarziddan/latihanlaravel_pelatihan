<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <h2 class="border-bottom">Tambah Data Mahasiswa</h2>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('mahasiswa.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Mahasiswa</label>
                        <input type="text" class="form-control" name="nama_mahasiswa" placeholder="Masukkan Nama Mahasiswa">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">NPM</label>
                        <input type="text" class="form-control" name="npm" placeholder="Masukkan NPM">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Program Studi</label>
                        <input type="text" class="form-control" name="program_studi" placeholder="Masukkan Program Studi">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Pilih Fakultas</label>
                        <select name="fakultas_id" class="form-select" aria-label="Default select example">
                            <option selected>Pilih Fakultas</option>
                            @foreach ($fakultas as $key)
                                <option value="{{ $key->id }}">{{ $key->nama_fakultas }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-success" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
