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
                      <a class="" href="<?= base_url('admin');?>">
                          <i class="fa fa-user"></i>
                          <span>Pegawai</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" class="active">
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
		<h3>Tambah Barang</h3>
    <?= $pesan;?>
		    <div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Data Barang</h4>
                      <form class="form-horizontal style-form" method="POST" action="<?php echo base_url('barang/add_barang');?>" enctype="multipart/form-data">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Barang</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="nama_barang" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jenis Barang</label>
                              <div class="col-sm-10">
                                  <select name="id_jbarang"> 
                                  	<option value="" selected>Jenis Barang</option>
                                  	<option value="1">Tas</option>
                                  	<option value="2">Tenda</option>
                                    <option value="3">Peralatan Tidur</option>
                                    <option value="4">Alat Komukasi</option>
                                    <option value="5">Alat Penerangan</option>
                                    <option value="6">Peralatan Masak</option>
                                    <option value="8">Caving</option>
                                    <option value="7">Lain-lain</option>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Keterangan</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="keterangan">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jumlah</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="jumlah">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Stok</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="stok">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Harga</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="harga">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Gambar</label>
                              <div class="col-sm-10">
                                  <input type="file" class="form-control" name="userfile">
                              </div>
                          </div>
                          <input type="submit" class="btn btn-primary" value="SUBMIT">
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          	
	</section>
</section>