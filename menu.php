<!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">SIMETRIS</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="booking-cek"><i class="fa fa-check-square-o"></i> Hari Ini</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              	<i class="fa fa-check-square-o"></i> Booking <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="booking-filter">Lihat</a></li>
                <li><a href="booking-tambah">Tambah</a></li>
              </ul>
            </li>
            <li><a href="laporan-per-dokter"><i class="fa fa-check-square-o"></i> Pencarian</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="divider"></li>
                <li><a href="../dokumentasi-tampil?id_buku=48">
                  <i class="fa fa-book"></i> Dokumentasi</a>
                </li>
                <li>
                  <a href="../"><i class="fa fa-power-off">
                  </i> Log Out</a>
                </li>
              </ul>
            </li>
          </ul>