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

    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Kd_brg</th>
          <th scope="col">Nama_brg</th>
          <th scope="col">Satuan</th>
          <th scope="col">Jumlah</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include('fbarang.php');
        $fbarang = new fbarang();  
        $dataku = $fbarang->tampil_data();
$no=0;

        // Use a foreach loop to iterate over the data and generate table rows
        foreach ($dataku as $row) {
            $no++;
          echo "<tr>";
          echo "<th scope='row'>" . $no . "</th>";
          echo "<td>" . $row['kd_brg'] . "</td>";
          echo "<td>" . $row['nm_brg'] . "</td>";
          echo "<td>" . $row['satuan'] . "</td>";
          echo "<td>" . $row['jumlah'] . "</td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </body>
</html>
