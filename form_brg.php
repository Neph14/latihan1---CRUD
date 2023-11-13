<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <form action="input_brg.php" method="post">
  <div class="mb-3">
    <label for="kd_brg" class="form-label">Kode brg</label>
    <input type="text" class="form-control" name="kd_brg">
  </div>
  <div class="mb-3">
    <label for="nm_brg" class="form-label">Nama brg</label>
    <input type="text" class="form-control" name="nm_brg">
  </div>
  <div class="mb-3">
    <label for="satuan" class="form-label">Satuan</label>
    <input type="text" class="form-control" name="satuan">
  </div>
  <div class="mb-3">
    <label for="jumlah" class="form-label">Jumlah</label>
    <input type="text" class="form-control" name="jumlah">
  </div>

  <button type="submit" class="btn btn-primary">Simpan</button>
</form>

  </body>
</html>