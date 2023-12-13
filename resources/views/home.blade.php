<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko Durian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1 class="my-3">Agen Durian Unggul</h1>
        <div class="card" style="width: 18rem;">
            <img src="{{asset('assets/img/durian.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Durian Lokal</h5>
                <p class="card-text">Durian lokal, rasanya manis dan ada pait-paitnya, dijamin wueeeenak.</p>
                <form action="/checkout" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="qty" class="form-label">Mau Pesan Berapa?</label>
                        <input type="number" name="qty" class="form-control" id="qty"
                            placeholder="jumlah yang dipesan">
                    </div>
                    <div class="mb-3">
                        <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                        <input type="text" name="nama_pelanggan" class="form-control" id="nama_pelanggan"
                            placeholder="masukan nama anda!">
                    </div>
                    <div class="mb-3">
                        <label for="no_telepon" class="form-label">No Telp</label>
                        <input type="text" name="no_telepon" class="form-control" id="no_telepon"
                            placeholder="masukan no hp!">
                    </div>
                    <div class="mb-3">
                        <label for="alamat_pelanggan" class="form-label">Alamat</label>
                        <textarea name="alamat_pelanggan" class="form-control" id="alamat_pelanggan" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Checkout</button>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
