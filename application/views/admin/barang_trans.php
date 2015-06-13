<section id="container" >
      <header class="header black-bg">
            <!--logo start-->
            <a href="<?= base_url('admin'); ?>" class="logo"><b>Anak Rimba Adventure</b></a>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?php echo base_url('login_ctr/logout');?>">Logout</a></li>
            	</ul>
            </div>
        </header>
              <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="<?= base_url('admin/profile');?>"><img src="<?php echo base_url('assets/admin/assets/img/ui-sam.jpg');?>" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo $username;?></h5>
              	  	
                  <li class="mt">
                      <a href="<?= base_url('admin'); ?>">
                          <i class="fa fa-user"></i>
                          <span>Pegawai</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="fa fa-database"></i>
                          <span>Barang</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?= base_url('barang/tambah_barang');?>">Tambah Barang</a></li>
                          <li><a  href="<?= base_url('barang');?>">Daftar Barang</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;"  class="active">
                          <i class="fa fa-usd"></i>
                          <span>Transaksi</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?= base_url('transaksi');?>">Daftar Transaksi</a></li>
                          <li><a  href="<?= base_url('transaksi/peminjaman');?>">Peminjaman</a></li>
                          <li><a  href="<?= base_url('transaksi/pengembalian');?>">Pengembalian</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="#" >
                          <i class="fa fa-book"></i>
                          <span>Laporan</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cog"></i>
                          <span>Setting</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?= base_url('admin/profile');?>">Profile</a></li>
                          <li><a  href="<?= base_url('admin/edit_profile');?>">Edit Profile</a></li>
                          <li><a  href="<?= base_url('admin/change_password');?>">Ganti Password</a></li>
                          <li><a  href="<?php echo base_url('login_ctr/logout');?>">Logout</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <section id="main-content">
      	<section class="wrapper">
      		<h3>Detail Transaksi</h3>
      		<div class="row mt">
                  <div class="col-md-12">
                      <div class="form-panel">
                        <form class="form-horizontal style-form" method="POST" action="<?php echo base_url('admin/edit_profile');?>">
                          <?php foreach ($detail as $key) { ?>
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nomor Transaksi</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><b><?= $key['idtrans']; ?></b></p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Peminjam</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><b><?= $key['nama']; ?></b></p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><b><?= $key['alamat']; ?></b></p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jenis Identitas</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><b><?= $key['jenis_id']; ?></b></p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nomor Identitas</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><b><?= $key['no_id']; ?></b></p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Pinjam</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><b><?= $key['tgl_pinjam']; ?></b></p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Kembali</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><b><?= $key['tgl_kembali']; ?></b></p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Total Harga</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><b><?= $key['total_harga']; ?></b></p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nomor Telepon</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><b><?= $key['phone']; ?></b></p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Status</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><b><?= $key['status']; ?></b></p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Pegawai</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><b><?= $key['pegawai']; ?></b></p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"><strong>Daftar Barang</strong></label>
                          </div>

                          
                        </form>
                          <table class="table table-striped table-advance table-hover">
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

                      </div><!-- /content-panel -->
                    </br>
                        <a href="<?= base_url('transaksi/cetak_transaksi');?>?no=<?= $key['idtrans'];?>" class="btn btn-info">Cetak Transaksi</a>
                        <a href="<?= base_url('transaksi'); ?>" class="btn btn-info">Back</a>
                        <?php } ?>
                  </div><!-- /col-md-12 -->

              </div><!-- /row -->
      	</section>
      </section>