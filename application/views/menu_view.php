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
          <a class="navbar-brand" href="#">SIMRSH</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Super Admin</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <!-- SIDEBAR -->
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="<?php echo base_url();?>index.php/antrian">Daftar Antrian</a></li>
            <li><a href="<?php echo base_url();?>index.php/tindakan">Input Rekam Medis</a></li>
            <li><a href="<?php echo base_url();?>index.php/riwayat">Daftar Rekam Medis</a></li>
            <li><a href="<?php echo base_url();?>index.php/daftarinap">Daftar Inap</a></li>
            <li><a href="<?php echo base_url();?>index.php/laporan">Laporan</a></li>
          </ul>
        </div>