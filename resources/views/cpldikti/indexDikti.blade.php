<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SI OBE Kurikulum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <h2 class="text-center mb-5 mt-5">Data CPL SN-DIKTI</h2>

    <div class="container">
        <a href="/tambahcpldikti" class="btn btn-primary mb-3">Tambah +</a>
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="table-responsive">
                <table class="table table-hover rounded">
                  <thead class="table-secondary">
                      <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col">CPL SN-Dikti</th>
                        <th scope="col">CPL Prodi</th>
                        <th scope="col">Kategori CPL</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Dibuat</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                          $no = 1;
                      @endphp
                      @foreach ($data as $index => $dikti)
                      <tr class="text-center">
                          <th scope="row">{{ $index+ $data->firstItem()}}</th> 
                          <td>{{ $dikti->kode_cpl }}</td>
                          <td>{{ $dikti->kode_prodi }}</td>
                          <td>{{ $dikti->kategori_cpl }}</td>
                          <td>{{ $dikti->deskripsi }}</td>
                          <td>{{ $dikti->created_at->format('D M Y') }}</td>
                          <td class="text-center">
                            <a href="/tampilcpldikti/{{ $dikti->id }}" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger delete" data-id="{{ $dikti->id }}">Hapus</a>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
              </div>
              <div class="row">
                <div class="col-10">
                  Showing
                  {{ $data->firstItem() }}
                  to
                  {{ $data->lastItem() }}
                  of
                  {{ $data->total() }}
                  entries
                </div>
                <div class="col">
                  {{ $data->links() }}
                </div> 
            </div>
          </div>
          </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </body>
  <script>

    $('.delete').click(function(){
      var iddikti = $(this).attr('data-id');
      Swal.fire({
      title: 'Yakin ?',
      text: "Kamu akan menghapus data cpl sn-dikti ini! ",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, hapus!'
      }).then((result) => {
      if (result.isConfirmed) {
        window.location = "/delete/"+iddikti+""
        Swal.fire(
            'Terhapus!',
            'Data cpl sn-dikti berhasil dihapus.',
            'success'
          )
        } 
      })
    });
  </script>

  <script>
    @if(Session::has('success'))
      toastr.success("{{ Session::get('success') }}");
    @endif
  </script>
</html>