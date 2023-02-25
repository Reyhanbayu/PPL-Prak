<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SI OBE Kurikulum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h2 class="text-center mb-5 mt-5">Tambah Data CPL SN-DIKTI</h2>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
              <div class="card">
                <div class="card-body">
                  <form action="/insertcpldikti" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="inputPassword5" class="form-label">Kode CPL <SN-Dikti></SN-Dikti></label>
                      <input type="text" name="kode_cpl" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                    </div>
                    <div class="mb-3">
                      <label for="inputPassword5" class="form-label">Kode CPL Prodi</label>
                      <input type="text" name="kode_prodi" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                    </div>
                    <div class="mb-3">
                      <label for="inputPassword5" class="form-label">Kategori CPL</label>
                      <select class="form-select" name="kategori_cpl" aria-label="Default select example">
                        <option selected>Pilih Kategori CPL SN-Dikti</option>
                        <option value="Sikap (S)">Sikap</option>
                        <option value="Keterampilan Umum (KU)">Keterampilan Umum</option>
                        <option value="Keteampilan Khusus (KK)">Keterampilan Khusus</option>
                        <option value="Pengetahuan">Pengetahuan</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="inputPassword5" class="form-label">Deskripsi</label>
                      <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>