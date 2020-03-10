<?php $id_register = $_GET['id'];?>
<?php include "views/header.php"; ?>
    <nav>
    <div id="wrapper">
      <?php include "menu.php"; ?>   
        </div><!-- /.navbar-collapse -->
      </nav>
      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h1>Detail <small>Pasien</small></h1>
            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
            </ol>
            <?php include "../notifikasi1.php"?>
          </div>
        </div><!-- /.row -->
        <?php 
          include '../koneksi.php';
          $data = mysqli_query($koneksi,
              "SELECT *
              FROM mr_pasien
              WHERE id_register==$id_register;");
          while($d = mysqli_fetch_array($data)){
        ?>
        <?php
            if(isset($_POST['submit'])){
            // koneksi database
            include '../koneksi.php';
            $id_booking = $_GET['id_booking'];
            // menangkap data yang di kirim dari form
            $id_catatan_medik = $_POST['id_catatan_medik'];
            $nama             = $_POST['nama'];
            $alamat           = $_POST['alamat'];
            $kontak           = $_POST['kontak'];
            $id_dokter        = $_POST['id_dokter'];
            $booking_tanggal  = $_POST['booking_tanggal'];
            $id_sesi          = $_POST['id_sesi'];
            $keterangan       = $_POST['keterangan'];
            // menginput data ke database
            $edit=mysqli_query($koneksi,"UPDATE booking SET nama='$nama',alamat='$alamat',kontak='$kontak',
              keterangan='$keterangan'
              WHERE id_booking='$id_booking'");
            // mengalihkan halaman kembali ke index.php
                if($edit){
                echo "<script>alert('Berhasil Mengubah!!!');
                      document.location='booking-detail?id_booking=$id_booking'</script>";
                }else{
                echo "<script>alert('Gagal Mendaftar! Hilangkan Tanda Petik Pada Nama Pasien!');document.location='booking-edit?id_booking=$id_booking'</script>";
                  }
          }
        ?>
        <div class="row">
          <div class="col-lg-6">
            <form method="post" action="" role="form">
              <div class="form-group">
                <label>No. RM</label>
                <input class="form-control" type="text" name="id_catatan_medik"
                value="<?php echo $d['id_catatan_medik']; ?>" readonly>
              </div>
              <div class="form-group">
                <label>Nama</label>
                <input class="form-control" type="text" name="nama"
                value="<?php echo $d['nama']; ?>" required="">
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input class="form-control" type="text" name="alamat"
                value="<?php echo $d['alamat']; ?>" required="">
              </div>
              <div class="form-group">
                <label>Kontak</label>
                <input class="form-control" type="text" name="kontak"
                value="<?php echo $d['kontak']; ?>" required="">
              </div>
              <div class="form-group">
                <label>Dokter</label>
                <input class="form-control" type="text" name="id_dokter"
                value="<?php echo $d['nama_dokter']; ?>" readonly>
              </div>
              <div class="form-group">
                <label>Untuk Tanggal</label>
                <input class="form-control" type="text" name="booking_tanggal"
                value="<?php echo $d['booking_tanggal']; ?>" readonly>
              </div>
              <div class="form-group">
                <label>Sesi</label>
                <input class="form-control" type="text" name="id_sesi"
                value="<?php echo $d['nama_sesi']; ?>" readonly>
              </div>
              <div class="form-group">
                <label>Keterangan</label>
                <input class="form-control" type="text" name="keterangan"
                value="<?php echo $d['keterangan']; ?>"></input>
              </div>
              <button type="submit" name="submit" class="btn btn-success">Perbarui</button>
              <button type="reset" class="btn btn-warning">Reset</button>  
            </form>
          </div>
        </div><!-- /.row -->
      <?php } ?>
      </div><br><br><?php include "../copyright.php";?><br><br><!-- /#page-wrapper -->
    </div><!-- /#wrapper -->
    <?php include "views/footer.php"; ?>