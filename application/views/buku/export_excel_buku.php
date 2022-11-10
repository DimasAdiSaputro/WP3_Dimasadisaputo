<?php
header("Content-Type: application/vnd-ms-excel; charset=utf-8");
header("Content-type: application/x-msexcel; charset=utf-8");
header("Content-Disposition: attachment; filename=$title.xls");
header("Expires: 0");
header("Cache-control: must-revalidate, post-check=0, pre-check=0");
header("Cache-control: private", false);
?>

 <h3><center>Laporan Data Buku Perputakaan Online</center></h3>
 <br/>
 <table class="table-data">
   <thead>
   <tr>
    <th>No</th>
    <th>Judul Buku</th>
    <th>Pengarang</th>
    <th>Terbit</th>
    <th>Tahun Penerbit</th>
    <th>ISBN</th>
    <th>Stok</th>
   </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach($buku as $b){
    ?>
    <tr>
        <th scope="row"><?= $no++; ?></th> 
        <td><?= $b['judul_buku']; ?></td>
        <td><?= $b['pengarang']; ?></td>
        <td><?= $b['penerbit']; ?></td>
        <td><?= $b['tahun_terbit']; ?></td>
        <td><?= $b['isbn']; ?></td>
        <td><?= $b['stok']; ?></td> 
    </tr>
    <?php
  }
  ?>
 </tbody>
</table>
</body>
</html>