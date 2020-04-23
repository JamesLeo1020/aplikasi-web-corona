<?php
include 'aset/header.php';
include 'koneksi.php';

$sql = "SELECT * FROM pasien";

$res = mysqli_query($koneksi, $sql);

$pasien = array();

while ($data = mysqli_fetch_assoc($res)) {
  $pasien[] = $data;
}

?>
<style>
thead{
  background-color: #222831;
  color: white;
}
tbody{
  background-color: #342ead;
  color: white;
}
</style>
<div class="container">
  <div class="row mt-5">
    <div class="col-md">
      <div class="card bg-dark">
        <div class="card-header">
          <h2 class="card-title text-white"><i class="fas fa-edit"></i>Tabel Data ODP</h2>
        </div>
        <div class="card-body">
          <table class="table table-striped col-12">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">KTP/KK</th>
                <th scope="col">Nama</th>
                <th scope="col">Tempat tinggal</th>
                <th scope="col">Kelamin</th>
                <th scope="col">Gol darah</th>
                <th scope="col">Tinggi Badan</th>
                <th scope="col">Berat Badan</th>
                <th scope="col">No.Telp</th>
                <th scope="col">Suhu badan hari 1</th>
                <th scope="col">Suhu badan hari 2</th>
                <th scope="col">Suhu badan hari 3</th>
                <th scope="col">Rata-rata</th>
                <th scope="col">Predikat</th>
                <th scope="col">Keterangan</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($pasien as $p ) { ?>
                <tr>
                  <th scope="row"><?= $no ?></th>
                    <td><?= $p['KTP_KK'] ?></td>
                    <td><?= $p['Nama'] ?></td>
                    <td><?= $p['Tempat_tinggal'] ?></td>
                    <td><?= $p['Kelamin'] ?></td>
                    <td><?= $p['Goldarah'] ?></td>
                    <td><?= $p['Tinggi_Badan'] ?></td>
                    <td><?= $p['Berat_Badan'] ?></td>
                    <td><?= $p['NoTelp'] ?></td>
                    <td><?= $p['SH_1'] ?></td>
                    <td><?= $p['SH_2'] ?></td>
                    <td><?= $p['SH_3'] ?></td>
                    <td><?= $p['Rata_Rata'] ?></td>
                    <td><?= $p['Predikat'] ?></td>
                    <td><?= $p['Keterangan'] ?></td>
                  </tr>
                  <?php
                  $no++;
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php
  include 'aset/footer.php';
  ?>