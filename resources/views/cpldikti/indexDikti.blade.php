@extends('layouts.main')

@section('container')
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
                    <form action="/cpldikti" method="get">
                      @csrf
                      <div class="row mb-3">
                        <div class="col-sm-3">
                          <label for="" class="form-label">Kategori</label>
                          <div class="d-flex align-items-center">
                          <select name="kategori_cpl" class="form-select" style="margin-right: 7pt; height:100%">
                            <option value="Sikap (S)" selected="{{isset($_GET['kategori_cpl']) && $_GET['kategori_cpl'] == 'Sikap (S)'}}">Sikap</option>
                              <option value="Keterampilan Umum (KU)" selected="{{isset($_GET['kategori_cpl']) && $_GET['kategori_cpl'] == 'Keterampilan Umum (KU)'}}">Keterampilan Umum</option>
                              <option value="Keterampilan Khusus (KK)" selected="{{isset($_GET['kategori_cpl']) && $_GET['kategori_cpl'] == 'Keterampilan Khusus (KK)'}}">Keterampilan Khusus</option>
                              <option value="Pengetahuan" selected="{{isset($_GET['kategori_cpl']) && $_GET['kategori_cpl'] == 'Pengetahuan'}}">Pengetahuan</option>
                          </select>
                          <button type="submit" class="btn btn-primary" style="height:100%">Search</button>
                      </div>
                      </div>
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
                          <td class="text-center " >
                            <div class="d-flex" >
                              <a href="/tampilcpldikti/{{ $dikti->id }}" class="btn btn-warning w-100" style="margin-right:7pt">Edit</a>
                              <a href="#" class="btn btn-danger delete w-100" data-id="{{ $dikti->id }}">Hapus</a>
                            </div>
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

  @endsection
