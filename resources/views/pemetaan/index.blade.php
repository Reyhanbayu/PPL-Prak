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
    <h2 class="text-center mb-5 mt-5">Data Pemetaan CPL-BK-MK</h2>

    <div class="container">
      <table class="table table-hover rounded">
        <thead class="table-secondary">
          <tr class="text-center">
            <th scope="col"></th>
            @foreach($data2 as $bk)
                <th scope="col">{{ $bk->kode_bk}}</th>
            @endforeach
          </tr>
        </thead>
        <tbody>
          @foreach ($data1 as $cpl)
          <tr class="text-center">
              <th scope="row">{{$cpl->kode_cpl}}</th> 
                @foreach($data2 as $bk)
                <td>
                  @foreach($data3 as $pemetaan)
                    @foreach($data4 as $pemetaancpl)
                      @if($pemetaan->kode_bk == $bk->kode_bk)
                        @if($pemetaancpl->kode_bk == $pemetaan->kode_bk)
                          {{ $pemetaan->kode_mk, }}
                          @break
                        @endif 
                      @endif
                    @endforeach
                @endforeach
              </td>
              @endforeach
            </tr>
          @endforeach
        </tbody>
    </table>
  </div>
</html>