<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>merk</title>
  </head>
  <body>

    {{-- NAVBAR --}}
    @include('layouts.navbar')
    {{-- /NAVBAR --}}

    {{-- CONTENT --}}
    <div class="section">
        <div class="container">
            {{-- row 1 --}}
            <div class="row mt-5">
                <center><h2>List Merk</h2></center>
            </div>
            {{-- row 2 --}}
            <div class="row mt-5">
                @foreach ($merks as $data1)
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="https://cdn1-production-images-kly.akamaized.net/-45YCLtjoREsAnRORaqLLizXm0c=/800x1066/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4429148/original/097986100_1684206200-00851R6Qgy1hdz9msx5h3j30qo0zkgsi.jpg" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{ $data1 ->nama_merks}}</h5>
                          {{-- <p class="card-text">{{ $data1 ->jumlah}}</p>
                          <p class="card-text">{{ $data1 ->tanggal_produksi}}</p>
                          <p class="card-text">{{ $data1 ->merks ->nama_merks}}</p> --}}
                          <a href="/merks2/{{$data1->id}}" class="btn btn-primary">Liat Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div> 
    {{-- /CONTENT --}}

    {{-- FOOTER --}}
    @include('layouts.footer')
    {{-- /FOOTER --}}
    

    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>