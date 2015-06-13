<section id="container" >
      <header class="header black-bg">
            <!--logo start-->
            <a href="<?= base_url('admin');?>" class="logo"><b>Anak Rimba Adventure</b></a>
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
                      <a class="active" href="<?= base_url('admin');?>">
                          <i class="fa fa-user"></i>
                          <span>Pegawai</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-database"></i>
                          <span>Barang</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?= base_url('barang/tambah_barang');?>">Tambah Barang</a></li>
                          <li><a  href="<?= base_url('barang');?>">Daftar Barang</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
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
                          <li><a  href="<?= base_url('admin/profile'); ?>">Profile</a></li>
                          <li><a  href="<?= base_url('admin/edit_profile'); ?>">Edit Profile</a></li>
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
      		<h3>Data Pegawai</h3>
           
          <?= $pesan; ?>
          <!-- alert -->
         <!-- <div class="showback">
            <div class="alert alert-success"><b><?php echo $this->session->flashdata('message'); ?></b></div>  
          </div> -->
           


          <div class="col-sm-12">
          <a class="btn btn-primary btn-lg pull-right" href="<?php echo base_url('admin/tambah_pegawai');?>"><i class="fa fa-cog"> Tambah Pegawai</i></a>
          </div>
      		<div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>Jenis Kelamin</th>
                                  <th>Tempat Lahir</th>
                                  <th>Tanggal Lahir</th>
                                  <th>Alamat</th>
                                  <th>Nomor Telepon</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php foreach ($data as $row) {
                                  ?>
                              <tr>
                                <td><?= $row['first'];?></td>
                                <td><?= $row['last'];?></td>
                                <td><?= $row['sex'];?></td>
                                <td><?= $row['tempat'];?></td>
                                <td><?= $row['tgl'];?></td>
                                <td><?= $row['alamat'];?></td>
                                <td><?= $row['phone'];?></td>
                                <td>
                                  <a href="<?= base_url('admin/hapus_pegawai');?>?no=<?= $row['idpeg'];?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "> Hapus</i></a>
                                </td>
                                  <?php } ?>
                              </tr>
                              </tbody>
                          </table>
                      </div><!-- /content-panel
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
      	</section>
      </section>