<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin - Anak Rimba Adventure</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/admin/assets/css/bootstrap.css');?>" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url('assets/admin/assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/assets/css/zabuto_calendar.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/assets/js/gritter/css/jquery.gritter.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/assets/lineicons/style.css');?>">    
    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/admin/assets/css/style.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/assets/css/style-responsive.css');?>" rel="stylesheet">

    <script src="<?php echo base_url('assets/admin/assets/js/chart-master/Chart.js');?>"></script>

  </head>
<body onLoad="window.print()">
                      <div>
                        <h3>Nota Peminjaman</h3>
                        <table>
                          <?php foreach ($detail as $key) { ?>
                          <tr>
                            <td>Nomor Transaksi</td>
                            <td> :</td>
                            <td> <?= $key['idtrans'];?></td>
                          </tr>
                          <tr>
                            <td>Nama Lengkap</td>
                            <td> :</td>
                            <td> <?= $key['nama'];?></td>
                          </tr>
                          <tr>
                            <td>Alamat</td>
                            <td> :</td>
                            <td> <?= $key['alamat'];?></td>
                          </tr>
                          <tr>
                            <td>Jenis Identitas</td>
                            <td> :</td>
                            <td> <?= $key['jenis_id'];?></td>
                          </tr>
                          <tr>
                            <td>Nomor Identitas</td>
                            <td> :</td>
                            <td> <?= $key['no_id'];?></td>
                          </tr>
                          <tr>
                            <td>Nomor Identitas</td>
                            <td> :</td>
                            <td> <?= $key['no_id'];?></td>
                          </tr>
                          <tr>
                            <td>Tanggal Pinjam</td>
                            <td> :</td>
                            <td> <?= $key['tgl_pinjam'];?></td>
                          </tr>
                          <tr>
                            <td>Tanggal Kembali</td>
                            <td> :</td>
                            <td> <?= $key['tgl_kembali'];?></td>
                          </tr>
                          <tr>
                            <td>Total Harga</td>
                            <td> :</td>
                            <td> <?= $key['total_harga'];?></td>
                          </tr>
                          <tr>
                            <td>Nomor Telepon</td>
                            <td> :</td>
                            <td> <?= $key['phone'];?></td>
                          </tr>
                          <tr><td><h4>Daftar Barang</h4><td></tr>
                        </table>
                        <?php } ?>
                          <table class="table table-bordered">
                              <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Nama Barang</th>
                                  <th>Jumlah</th>
                                  <th>Harga</th>
                              </tr>
                              </thead>
                              <tbody>
                               <?php 
                               $no=1;
                               foreach ($barang as $row) { ?>
                              <tr>
                                <td><?= $no++;?></td>
                                <td><?= $row['nama'];?></td>
                                <td><?= $row['jumlah'];?></td>
                                <td><?= $row['harga'];?></td>
                                <?php } ?>
                              </tr>
                              </tbody>
                          </table>
                      </div>
</body>

</html>