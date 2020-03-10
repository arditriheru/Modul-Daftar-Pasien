<?php include "views/header.php"; ?>
    <nav>
    <div id="wrapper">
      <?php include "menu.php"; ?>   
        </div><!-- /.navbar-collapse -->
      </nav>
      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h1>Pasien <small>Baru</small></h1>
            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
            </ol>
            <?php include "../notifikasi1.php"?>
          </div>
        </div><!-- /.row -->
        <div class="row">
          <div class="col-lg-12">
          <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped tablesorter">
                <thead>
                    <tr>
                    <th><center>No</th>
                    <th><center>Nomor RM</th>
                    <th><center>Nama</th>
                    <th><center>TTL</th>
                    <th><center>Action</th>
                   </tr>
                </thead>
                <tbody>
              <?php 
                include '../koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi,
                    "SELECT * FROM mr_pasien WHERE aktif=0;");
                while($d = mysqli_fetch_array($data)){
              ?>
                  <tr>
                    <td><center><?php echo $no++; ?></td>
                    <td><center><?php echo $d['id_catatan_medik']; ?></td>
                    <td><center><?php echo $d['nama']; ?></td>
                    <td><center><?php echo $d['tempat']; ?>, <?php echo $d['tgl_lahir']; ?></td>
                    <td>
                      <div align="center">
                        <a href="rm-detail?id=<?php echo $d['id_register']; ?>"
                        <button type="button" class="btn btn-success">Detail</a><br><br>
                      </div>
                    </td>
                  </tr>
                  <?php 
                    }
                    ?>
                    </tbody>
                  </table>
                </div>
          </div>
        </div><!-- /.row -->
      </div><br><br><?php include "../copyright.php";?><br><br><!-- /#page-wrapper -->
    </div><!-- /#wrapper -->
    <?php include "views/footer.php"; ?>