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
                          <li><a  href="<?= base_url('barang/tambah_barang');?>">Tambah Barang</a></li>
                          <li><a  href="<?= base_url('barang');?>">Daftar Barang</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" class="active">
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
      		<h3>Daftar Barang Peminjam</h3>
          <div class="col-sm-12">
            <div class="pull-right">
            <a href="<?= base_url('transaksi/simpan');?>?no=<?= $id;?>" class="btn btn-primary">Simpan</a>
            <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
              Tambah Barang
            </button>
            </div>
          <!-- Modal Tambah Barang -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Barang</h4>
                  </div>
                  <div class="modal-body">
                    <form class="form-horizontal style-form" method="POST" action="<?= base_url('transaksi/save_barang');?>" >
                      <input type="hidden" class="form-control" name="id_transaksi" value="<?= $id;?>">
                      <div class="form-group">
                              <label class="col-sm-3 control-label">Pilih Barang</label>
                              <div class="col-sm-7">
                                  <select name="namabarang">
                                    <option value="" selected>Pilih Barang</option>
                                    <?php foreach ($barang as $value) { ?>
                                    <option value="<?= $value['idbar'];?>"><?= $value['nama'];?></option>
                                    <?php }?> 
                                  </select>
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="col-sm-3 control-label">Jumlah</label>
                              <div class="col-sm-6">
                                  <input type="text" class="form-control" name="jumlah" required>
                              </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <input type="submit" class="btn btn-primary" value="SUBMIT">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
      		<div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Nama Barang</th>
                                  <th>Jumlah</th>
                                  <th>Harga</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php 
                                $no = 1;
                                foreach ($transaksi as $row) {
                                  ?>
                              <tr>
                                <td><?= $no++;;?></td>
                                <td><?= $row['nama'];?></td>
                                <td><?= $row['jumlah'];?></td>
                                <td><?= $row['harga'];?></td>
                                <td>
                                  <!-- <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalEdit"><i class="fa fa-pencil "> Edit</i></button> -->
                                  <!-- Modal Edit  -->
                                  <!-- div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                          <h4 class="modal-title" id="myModalLabel">Edit Barang</h4>
                                        </div>
                                        <div class="modal-body">
                                          Edit
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button  " class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div> -->
                                  <a href="<?= base_url('transaksi/hapus_barang');?>?idtrans=<?= $row['idtrans'];?>&&no=<?= $row['id'];?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "> Hapus</i></a>
                                </td>
                                <?php } ?>
                              </tr>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
      	</section>
      </section>