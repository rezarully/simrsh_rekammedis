    <!-- NAVBAR -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">SIMRSH Prof. Soeparwi</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php $username = $this->session->userdata('username'); echo $username;?> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <!-- <li><a href="<?php echo base_url();?>index.php/rekammedis/ubahpassword">Ubah Password</a></li> -->
                <li><a href="<?php echo base_url();?>index.php/rekammedis/logout">Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <!-- SIDEBAR -->
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="<?php echo base_url();?>index.php/rekammedis/index">Daftar Antrian</a></li>
            <!-- <li><a href="<?php echo base_url();?>index.php/rekammedis/input_rm">Input Rekam Medis</a></li> -->
            <li><a href="<?php echo base_url();?>index.php/rekammedis/daftar_rm">Daftar Rekam Medis</a></li>
            <li><a href="<?php echo base_url();?>index.php/rekammedis/daftar_inap">Daftar Inap</a></li>
            <li><a href="<?php echo base_url();?>index.php/rekammedis/laporan">Laporan</a></li>
          </ul>
        </div>