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
                      <a href="<?= base_url('admin');?>">
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
                          <li><a  href="<?= base_url('barang/tambah_barang'); ?>">Tambah Barang</a></li>
                          <li><a  href="<?= base_url('barang'); ?>">Daftar Barang</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-usd"></i>
                          <span>Transaksi</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?= base_url('transaksi');?> ">Daftar Transaksi</a></li>
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
                      <a href="javascript:;" class="active" >
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
    <h3>User Profile</h3>
    <?= $pesan;?>
        <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Profile</h4>
                      
                        
                      <?php foreach ($profile as $key) { ?>
                      <form class="form-horizontal style-form" method="POST" action="<?php echo base_url('admin/edit_profile');?>">

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Depan</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><b><?= $key['first']; ?></b></p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Belakang</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><b><?= $key['last']; ?></b></p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><b><?= $key['sex']; ?></b></p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tempat Lahir</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><b><?= $key['tempat']; ?></b></p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><b><?= $key['tanggal']; ?></b></p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><b><?= $key['alamat']; ?></b></p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nomor Telepon</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><b><?= $key['phone']; ?></b></p>
                              </div>
                          </div>

                          <?php } ?>

                          <input type="submit" class="btn btn-primary" value="EDIT PROFILE">
                      </form>
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->
            
  </section>
</section>