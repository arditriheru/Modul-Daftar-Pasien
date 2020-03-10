<?php
session_start();
if (!isset($_SESSION['nama_user'])){
  echo '<script>alert("Login Dulu!");</script>
    <script>window.location.href="login";</script>';
}
?>
<?php include "views/header.php" ?>
    <nav class="navbar navbar-rachmi navbar-fixed-top">
      <div class="col-lg-12">
        <div class="navbar-header">
          <a class="navbar-brand">RSKIA RACHMI</a>
        </div>
    </div>
  </nav>
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
            <div class="row">
              <div class="col-xs-12"><h4 class="bluetext"><b>Identitas Pasien</b></h4>
            <?php
              if(isset($_POST['submit'])){
                // menangkap data yang di kirim dari form
                include '../koneksi.php';
                date_default_timezone_set("Asia/Jakarta");
                $data = mysqli_query($koneksi,
                "SELECT MAX(id_catatan_medik) AS rmmax FROM mr_pasien;");
                while($d = mysqli_fetch_array($data)){
                $id_catatan_medik           = $d['rmmax']+1; }
                $id_register                = '';
                $nama                       = $_POST['nama'];
                $alamat                     = $_POST['alamat'];
                $id_desa                    = $_POST['id_desa'];
                $id_kecamatan               = $_POST['id_kecamatan'];
                $id_kabupaten               = $_POST['id_kabupaten'];
                $id_propinsi                = $_POST['id_propinsi'];
                $sex                        = $_POST['sex'];
                $tanggal                    = date('Y-m-d h:i:s');
                $tgl_lahir                  = $_POST['tgl_lahir'];
                $tempat                     = $_POST['tempat'];
                $id_pasien                  = '';
                $tgl_kunjungan              = date('Y-m-d');
                $jam_kunjungan              = date("h:i:s");
                $poli_inap                  = '';
                $id_unit                    = $_SESSION['id_unit'];
                $id_dokter                  = '';
                $id_pengirim                = '';
                $id_asuransi                = $_POST['id_asuransi'];
                $id_petugas                 = $_SESSION['id_petugas'];
                $id_pendidikan              = $_POST['id_pendidikan'];
                $id_agama                   = $_POST['id_agama'];
                $id_pekerjaan               = $_POST['id_pekerjaan'];
                $nama_ortu                  = $_POST['nama_ortu'];
                $telp                       = $_POST['telp'];
                $no_periksa                 = '';
                $aktif                      = '';
                $kelas                      = '';
                $id_petugas_tpp             = '';
                $tgl_inap                   = '';
                $jam_inap                   = '';
                $tgl_pulang                 = '';
                $jam_pulang                 = '';
                $no_bed                     = '';
                $icd                        = '';
                $kunjungan                  = '';
                $id_keluarga                = $_POST['id_keluarga'];
                $alamat_ortu                = $_POST['alamat_ortu'];
                $id_pekerjaan_ortu          = '';
                $golongan_darah             = $_POST['golongan_darah'];
                $id_kasus_polisi            = '';
                $menikah                    = $_POST['menikah'];
                $id_ppk                     = '2';
                $tanggal_ppk                = date('Y-m-d');
                $no_pendaftaran             = '';
                $id_pangkat                 = '';
                $nip                        = '';
                $nik                        = '';
                $alergi                     = '';
                $error=array();
                if (empty($nama)){
                  $error['nama']='Nama Harus Diisi!!!';
                }if (empty($sex)){
                  $error['sex']='Jenis Kelamin Harus Diisi!!!';
                }if (empty($alamat)){
                  $error['alamat']='Alamat Harus Diisi!!!';
                }if (empty($id_propinsi)){
                  $error['id_propinsi']='Propinsi Harus Diisi!!!';
                }if (empty($id_kabupaten)){
                  $error['id_kabupaten']='Kabupaten Harus Diisi!!!';
                }if (empty($id_kecamatan)){
                  $error['id_kecamatan']='Kecamatan Harus Diisi!!!';
                }if (empty($id_desa)){
                  $error['id_desa']='Desa Harus Diisi!!!';
                }if (empty($menikah)){
                  $error['menikah']='Menikah Harus Diisi!!!';
                }if (empty($golongan_darah)){
                  $error['golongan_darah']='Golongan Darah Harus Diisi!!!';
                }if (empty($tempat)){
                  $error['tempat']='Tempat Lahir Harus Diisi!!!';
                }if (empty($tgl_lahir)){
                  $error['tgl_lahir']='Tanggal Lahir Harus Diisi!!!';
                }if (empty($id_pekerjaan)){
                  $error['id_pekerjaan']='Pekerjaan Harus Diisi!!!';
                }if (empty($id_pendidikan)){
                  $error['id_pendidikan']='Pendidikan Harus Diisi!!!';
                }if (empty($id_agama)){
                  $error['id_agama']='Agama Harus Diisi!!!';
                }if (empty($id_asuransi)){
                  $error['id_asuransi']='Asuransi Harus Diisi!!!';
                }if (empty($id_keluarga)){
                  $error['id_keluarga']='Hubungan Keluarga Harus Diisi!!!';
                }if (empty($nama_ortu)){
                  $error['nama_ortu']='Nama Penanggung Jawab Harus Diisi!!!';
                }if (empty($alamat_ortu)){
                  $error['alamat_ortu']='Alamat Harus Diisi!!!';
                }if (empty($telp)){
                  $error['telp']='Kontak Harus Diisi!!!';
                }if(empty($error)){
                  $simpan=mysqli_query($koneksi,"INSERT INTO mr_pasien (id_catatan_medik, id_register, nama, alamat, id_desa, id_kecamatan, id_kabupaten, id_propinsi, sex, tanggal, tgl_lahir, tempat, id_pasien, tgl_kunjungan, jam_kunjungan, poli_inap, id_unit, id_dokter, id_pengirim, id_asuransi, id_petugas, id_pendidikan, id_agama, id_pekerjaan, nama_ortu, telp, no_periksa, aktif, kelas, id_petugas_tpp, tgl_inap, jam_inap, tgl_pulang, jam_pulang, no_bed, icd, kunjungan, id_keluarga, alamat_ortu, id_pekerjaan_ortu, golongan_darah, id_kasus_polisi, menikah, id_ppk, tanggal_ppk, no_pendaftaran, id_pangkat, nip, nik, alergi) 
                    VALUES ('$id_catatan_medik', '$id_register', '$nama', '$alamat', '$id_desa', 
                    '$id_kecamatan', '$id_kabupaten', '$id_propinsi', 
                    '$sex', '$tanggal', '$tgl_lahir', '$tempat', '$id_pasien', '$tgl_kunjungan', 
                    '$jam_kunjungan', '$poli_inap', '$id_unit', 'id_dokter', 'id_pengirim', 
                    '$id_asuransi', '$id_petugas', '$id_pendidikan', '$id_agama', '$id_pekerjaan', 
                    '$nama_ortu', '$telp', '$no_periksa', '$aktif', '$kelas', '$id_petugas_tpp',
                    '$tgl_inap', '$jam_inap', '$tgl_pulang', '$jam_pulang', '$no_bed', 
                    '$icd', '$kunjungan', '$id_keluarga', '$alamat_ortu', '$id_pekerjaan_ortu', 
                    '$golongan_darah', '$id_kasus_polisi', '$menikah', '$id_ppk', '$tanggal_ppk', 
                    '$no_pendaftaran', '$id_pangkat', '$nip', '$nik', '$alergi')");
                if($simpan){
                echo "<script>alert('Berhasil Mendaftar!');document.location='index'</script>";
                }else{
                echo "<script>alert('Gagal Mendaftar!');document.location='index'</script>";
                  }
                }
              }
            ?>
            <form method="post" action="" role="form">
              <div class="form-group">
                <label>Nama Pasien</label>
                <input class="form-control" type="text" name="nama" placeholder="Masukkan..">
                <p style="color:red;"><?php echo ($error['nama']) ? $error['nama'] : ''; ?></p>
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select id="sex" class="form-control" type="text" name="sex">
                <p style="color:red;"><?php echo ($error['sex']) ? $error['sex'] : ''; ?></p>
                  <option disabled selected>Pilih</option>
                  <?php 
                    include '../koneksi.php';
                    $data = mysqli_query($koneksi,
                      "SELECT * FROM mr_sex;");
                    while($d = mysqli_fetch_array($data)){
                    echo "<option id='sex' value='".$d['id_sex']."'>".$d['nama_sex']."</option>";
                    }
                  ?>
                </select>
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input class="form-control" type="text" name="alamat" placeholder="Masukkan..">
                <p style="color:red;"><?php echo ($error['alamat']) ? $error['alamat'] : ''; ?></p>
              </div>
              <div class="form-group">
                <label>Propinsi</label>
                <select id="propinsi" class="form-control" type="text" name="id_propinsi">
                <p style="color:red;"><?php echo ($error['id_propinsi']) ? $error['id_propinsi'] : ''; ?></p>
                  <option disabled selected>Pilih</option>
                  <?php 
                    include '../koneksi.php';
                    $data = mysqli_query($koneksi,
                      "SELECT * FROM mr_propinsi_bps ORDER BY nama_propinsi;");
                    while($d = mysqli_fetch_array($data)){
                    echo "<option value='".$d['kode_propinsi']."'>".$d['nama_propinsi']."</option>";
                    }
                  ?>
                </select>
              </div>
              <div class="form-group">
                <label>Kabupaten / Kota</label>
                <select id="kabupaten" class="form-control" type="text" name="id_kabupaten">
                <p style="color:red;"><?php echo ($error['id_kabupaten']) ? $error['id_kabupaten'] : ''; ?></p>
                  <option disabled selected>Pilih</option>
                  <?php 
                    include '../koneksi.php';
                    $data = mysqli_query($koneksi,
                      "SELECT * FROM mr_kabupaten_bps ORDER BY nama_kabupaten;");
                    while($d = mysqli_fetch_array($data)){
                    echo "<option value='".$d['kode_kabupaten']."'>".$d['nama_kabupaten']."</option>";
                    }
                  ?>
                </select>
              </div>
              <div class="form-group">
                <label>Kecamatan</label>
                <select id="kecamatan" class="form-control" type="text" name="id_kecamatan">
                <p style="color:red;"><?php echo ($error['id_kecamatan']) ? $error['id_kecamatan'] : ''; ?></p>
                  <option disabled selected>Pilih</option>
                  <?php 
                    include '../koneksi.php';
                    $data = mysqli_query($koneksi,
                      "SELECT * FROM mr_kecamatan_bps ORDER BY nama_kecamatan;");
                    while($d = mysqli_fetch_array($data)){
                    echo "<option value='".$d['kode_kecamatan']."'>".$d['nama_kecamatan']."</option>";
                    }
                  ?>
                </select>
              </div>
             <div class="form-group">
                <label>Desa</label>
                <select id="desa" class="form-control" type="text" name="id_desa">
                <p style="color:red;"><?php echo ($error['id_desa']) ? $error['id_desa'] : ''; ?></p>
                  <option disabled selected>Pilih</option>
                  <?php 
                    include '../koneksi.php';
                    $data = mysqli_query($koneksi,
                      "SELECT * FROM mr_desa_bps ORDER BY nama_desa ASC;");
                    while($d = mysqli_fetch_array($data)){
                    echo "<option id='desa' value='".$d['kode_desa']."'>".$d['nama_desa']."</option>";
                    }
                  ?>
                </select>
              </div>
              <div class="form-group">
                <label>Menikah</label>
                <select class="form-control" type="text" name="menikah">
                <p style="color:red;"><?php echo ($error['menikah']) ? $error['menikah'] : ''; ?></p>
                  <option disabled selected>Pilih</option>
                  <?php 
                    include '../koneksi.php';
                    $data = mysqli_query($koneksi,
                      "SELECT * FROM mr_menikah;");
                    while($d = mysqli_fetch_array($data)){
                    echo "<option value='".$d['id_menikah']."'>".$d['nama_menikah']."</option>";
                    }
                  ?>
                </select>
              </div>
              <div class="form-group">
                <label>Golongan Darah</label>
                <select class="form-control" type="text" name="golongan_darah">
                <p style="color:red;"><?php echo ($error['golongan_darah']) ? $error['golongan_darah'] : ''; ?></p>
                  <option disabled selected>Pilih</option>
                  <?php 
                    include '../koneksi.php';
                    $data = mysqli_query($koneksi,
                      "SELECT * FROM mr_golongan_darah;");
                    while($d = mysqli_fetch_array($data)){
                    echo "<option value='".$d['nama_golongan_darah']."'>".$d['nama_golongan_darah']."</option>";
                    }
                  ?>
                </select>
              </div>
              <div class="form-group">
                <label>Tempat Lahir</label>
                <input class="form-control" type="text" name="tempat" placeholder="Masukkan..">
                <p style="color:red;"><?php echo ($error['tempat']) ? $error['tempat'] : ''; ?></p>
              </div>
              <div class="form-group">
                <label>Tanggal Lahir</label>
                <input class="form-control" type="date" name="tgl_lahir" placeholder="Masukkan..">
                <p style="color:red;"><?php echo ($error['tgl_lahir']) ? $error['tgl_lahir'] : ''; ?></p>
              </div>
              <div class="form-group">
                <label>Pekerjaan</label>
                <select class="form-control" type="text" name="id_pekerjaan">
                <p style="color:red;"><?php echo ($error['id_pekerjaan']) ? $error['id_pekerjaan'] : ''; ?></p>
                  <option disabled selected>Pilih</option>
                  <?php 
                    include '../koneksi.php';
                    $data = mysqli_query($koneksi,
                      "SELECT * FROM mr_pekerjaan ORDER BY nama;");
                    while($d = mysqli_fetch_array($data)){
                    echo "<option value='".$d['id_pekerjaan']."'>".$d['nama']."</option>";
                    }
                  ?>
                </select>
              </div>
              <div class="form-group">
                <label>Pendidikan</label>
                <select class="form-control" type="text" name="id_pendidikan">
                <p style="color:red;"><?php echo ($error['id_pendidikan']) ? $error['id_pendidikan'] : ''; ?></p>
                  <option disabled selected>Pilih</option>
                  <?php 
                    include '../koneksi.php';
                    $data = mysqli_query($koneksi,
                      "SELECT * FROM mr_pendidikan;");
                    while($d = mysqli_fetch_array($data)){
                    echo "<option value='".$d['id_pendidikan']."'>".$d['nama']."</option>";
                    }
                  ?>
                </select>
              </div>
              <div class="form-group">
                <label>Agama</label>
                <select class="form-control" type="text" name="id_agama">
                <p style="color:red;"><?php echo ($error['id_agama']) ? $error['id_agama'] : ''; ?></p>
                  <option disabled selected>Pilih</option>
                  <?php 
                    include '../koneksi.php';
                    $data = mysqli_query($koneksi,
                      "SELECT * FROM mr_agama;");
                    while($d = mysqli_fetch_array($data)){
                    echo "<option value='".$d['id_agama']."'>".$d['nama_agama']."</option>";
                    }
                  ?>
                </select>
              </div>
              <div class="form-group">
                <label>Asuransi</label>
                <select class="form-control" type="text" name="id_asuransi">
                <p style="color:red;"><?php echo ($error['id_asuransi']) ? $error['id_asuransi'] : ''; ?></p>
                  <option disabled selected>Pilih</option>
                  <?php 
                    include '../koneksi.php';
                    $data = mysqli_query($koneksi,
                      "SELECT * FROM mr_asuransi;");
                    while($d = mysqli_fetch_array($data)){
                    echo "<option value='".$d['id_asuransi']."'>".$d['nama']."</option>";
                    }
                  ?>
                </select>
              </div><br><h4 class="bluetext"><b>Penanggung Jawab</b></h4>
              <div class="form-group">
                <label>Nama Penanggung Jawab</label>
                <input class="form-control" type="text" name="nama_ortu" placeholder="Masukkan..">
                <p style="color:red;"><?php echo ($error['nama_ortu']) ? $error['nama_ortu'] : ''; ?></p>
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input class="form-control" type="text" name="alamat_ortu" placeholder="Masukkan..">
                <p style="color:red;"><?php echo ($error['alamat_ortu']) ? $error['alamat_ortu'] : ''; ?></p>
              </div>
              <div class="form-group">
                <label>Kontak</label>
                <input class="form-control" type="text" name="telp" placeholder="Masukkan..">
                <p style="color:red;"><?php echo ($error['telp']) ? $error['telp'] : ''; ?></p>
              </div>
              <div class="form-group">
                <label>Hubungan Keluarga</label>
                <select class="form-control" type="text" name="id_keluarga">
                <p style="color:red;"><?php echo ($error['id_keluarga']) ? $error['id_keluarga'] : ''; ?></p>
                  <option disabled selected>Pilih</option>
                  <?php 
                    include '../koneksi.php';
                    $data = mysqli_query($koneksi,
                      "SELECT * FROM mr_keluarga;");
                    while($d = mysqli_fetch_array($data)){
                    echo "<option value='".$d['id_keluarga']."'>".$d['nama_keluarga']."</option>";
                    }
                  ?>
                </select>
              </div>
              <button type="submit"name="submit" class="btn btn-success">Tambah</button>
              <button type="reset" class="btn btn-warning">Reset</button>  
            </form>
         </div>
           </div>
         </div>
        </div>
      </div>
    <br><br><br><?php include "../copyright.php";?>
    </div><!-- /.row -->
    </div><!-- /#wrapper -->
    <?php include "views/footer.php" ?>