<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Input Rekam Medis</title>

    <link rel="stylesheet" href="<?php echo base_url("style/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("style/css/dashboard.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("style/css/bootstrap-chosen.css"); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://harvesthq.github.io/chosen/chosen.jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url("style/js/bootstrap.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("style/js/chosen.jquery.js"); ?>"></script>
  </head>

  <body>

  <?php $this->load->view('menu_view'); ?>    
    <div class="container-fluid">
      <div class="row">
        <!-- TAB -->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h4 style="text-align:left">Input Rekam Medis</h4>
        <hr>
          <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a data-toggle="tab" href="#datapasien">Data Pasien</a></li>
            <li role="presentation"><a data-toggle="tab" href="#anamnesis">Anamnesis & Status Praesens</a></li>
            <li role="presentation"><a data-toggle="tab" href="#lab">Pemeriksaan Lab</a></li>
            <li role="presentation"><a data-toggle="tab" href="#diagnosisprognosis">Diagnosis & Prognosis</a></li>
            <li role="presentation"><a data-toggle="tab" href="#obatobatan">Obat-obatan</a></li>
            <li role="presentation"><a data-toggle="tab" href="#tindakan">Tindakan</a></li>
          </ul>
            <form action="<?php echo base_url("index.php/rekammedis/save_data_input_rm");?>" method="POST">
            <div class="tab-content">
              <!-- TAB BAG. DATA PASIEN -->
              <?php $this->load->view('tabdatapasien_view'); ?>
              <!-- TAB BAG. ANAMNESIS -->
              <?php $this->load->view('tabanamnesis_view'); ?>
              <!-- TAB BAG. LAB -->
              <?php $data['data'] = $this->rekammedis_model->get_data_dropdownlab(); $this->load->view('tablab_view', $data); ?>
              <!-- TAB BAG. DIAGNOSIS -->
              <?php $this->load->view('tabdiagnosis_view'); ?>
              <!-- TAB BAG. OBAT -->
              <?php $data['data'] = $this->rekammedis_model->get_data_dropdownobat(); $this->load->view('tabobat_view', $data); ?>
              <!-- TAB BAG. TINDAKAN -->
              <?php $data['data'] = $this->rekammedis_model->get_data_dropdowntindakan(); $this->load->view('tabtindakan_view', $data); ?>
            </div>

            </form>     
            <!-- JS UNTUK TAB --> 
            <script>
              $(document).ready(function(){
                $(".nav-tabs a").click(function(){
                    $(this).tab('show');
                });
              });
            </script>

            <!-- JS UNTUK HIDDEN FORM PADA DROPDOWN PEMERIKSAAN LAB -->
            <!--<script>
              $(function() {
                $('#konsis').hide();
                $('#natif').hide();
                $('#centri').hide();
                $('#reaksi').hide();
                $('#protein').hide();
                $('#sedimen').hide();
                $('#sifat').hide();
                $('#kadar').hide();
                $('#prep').hide();
                $('#pemlab').change(function(){
                showForm($(this).val());
                });
              });
              function showForm(myPemlab){
                  if(myPemlab == 'feses'){
                      $('#konsis').show();
                      $('#natif').show();
                      $('#centri').show();
                      $('#reaksi').hide();
                      $('#protein').hide();
                      $('#sedimen').hide();
                      $('#sifat').hide();
                      $('#kadar').hide();
                      $('#prep').hide();
                  }
                  else if(myPemlab == 'urin'){
                      $('#reaksi').show();
                      $('#protein').show();
                      $('#sedimen').show();
                      $('#konsis').hide();
                      $('#natif').hide();
                      $('#centri').hide();
                      $('#sifat').hide();
                      $('#kadar').hide();
                      $('#prep').hide();
                  }
                  else if(myPemlab == 'hematologi'){
                      $('#sifat').show();
                      $('#kadar').show();
                      $('#prep').show();
                      $('#reaksi').hide();
                      $('#protein').hide();
                      $('#sedimen').hide();
                      $('#konsis').hide();
                      $('#natif').hide();
                      $('#centri').hide();
                  }
                  else if(myPemlab == 'usg', 'rontgen', 'ekg', 'faalorgan', 'kulit', 'alergi', 'lain'){
                      $('#sifat').hide();
                      $('#kadar').hide();
                      $('#prep').hide();
                      $('#reaksi').hide();
                      $('#protein').hide();
                      $('#sedimen').hide();
                      $('#konsis').hide();
                      $('#natif').hide();
                      $('#centri').hide();
                  }
              }
            </script>

            <!-- JS CLONE FORM BAG. LAB -->
            <script>
            var regex = /^(.*)(\d)+$/i;
            var cloneIndex = $(".clonedInput1").length;
            if ($(".clonedInput1").length == 1) {
                $('.buttonlabbatal').hide();
            } else {
                $('.buttonlabbatal').show();
            }

            function clone() {
                $(this).parents(".clonedInput1").clone()
                    .appendTo(".tbodyClone1")
                    .attr("id", "clonedInput1" + cloneIndex)
                    .find("textarea")
                    .val("")
                    .each(function () {
                        var id = this.id || "";
                        var match = id.match(regex) || [];
                        if (match.length == 3) {
                            this.id = match[1] + (cloneIndex);
                        }
                    })
                    .on('click', 'buttonlab', clone)
                    .on('click', 'buttonlabbatal', remove);

                cloneIndex++;

                //se tem só uma linha esconde o delete
                console.log("Total de linhas => " + $(".clonedInput1").length);
              
                if ($(".clonedInput1").length == 1) {
                    $('.buttonlabbatal').hide();
                } else {
                    $('.buttonlabbatal').show();
                }

            }
            function remove() {        
                $(this).parents(".clonedInput1").remove();

                if ($(".clonedInput1").length == 1) {
                    $('.buttonlabbatal').hide();
                } else {
                    $('.buttonlabbatal').show();
                }

            }    
            $(document).on("click", ".buttonlab", clone);
            $(document).on("click", ".buttonlabbatal", remove);
            </script>

            <!-- JS CLONE FORM BAG. DIAGNOSIS -->
            <script>
            var regex = /^(.*)(\d)+$/i;
            var cloneIndex = $(".clonedInput2").length;
            if ($(".clonedInput2").length == 1) {
                $('.buttondiagnosisbatal').hide();
            } else {
                $('.buttondiagnosisbatal').show();
            }

            function clone() {
                $(this).parents(".clonedInput2").clone()
                    .appendTo(".tbodyClone2")
                    .attr("id", "clonedInput2" + cloneIndex)
                    .find("textarea")
                    .val("")
                    .each(function () {
                        var id = this.id || "";
                        var match = id.match(regex) || [];
                        if (match.length == 3) {
                            this.id = match[1] + (cloneIndex);
                        }
                    })
                    .on('click', 'buttondiagnosis', clone)
                    .on('click', 'buttondiagnosisbatal', remove);

                cloneIndex++;

                //se tem só uma linha esconde o delete
                console.log("Total de linhas => " + $(".clonedInput2").length);
              
                if ($(".clonedInput2").length == 1) {
                    $('.buttondiagnosisbatal').hide();
                } else {
                    $('.buttondiagnosisbatal').show();
                }

            }

            function remove() {        
                $(this).parents(".clonedInput2").remove();

                if ($(".clonedInput2").length == 1) {
                    $('.buttondiagnosisbatal').hide();
                } else {
                    $('.buttondiagnosisbatal').show();
                }

            }    
            $(document).on("click", ".buttondiagnosis", clone);
            $(document).on("click", ".buttondiagnosisbatal", remove);
            </script>

            <!-- JS CLONE FORM BAG. OBAT -->
            <script>
            var regex = /^(.*)(\d)+$/i;
            var cloneIndex = $(".clonedInput3").length;
            if ($(".clonedInput3").length == 1) {
                $('.buttonobatbatal').hide();
            } else {
                $('.buttonobatbatal').show();
            }

            function clone() {
                $(this).parents(".clonedInput3").clone()
                    .appendTo(".tbodyClone3")
                    .attr("id", "clonedInput3" + cloneIndex)
                    .find("select, input, textarea")
                    .val("")
                    .each(function () {
                        var id = this.id || "";
                        var match = id.match(regex) || [];
                        if (match.length == 3) {
                            this.id = match[1] + (cloneIndex);
                        }
                    })
                    .on('click', 'buttonobat', clone)
                    .on('click', 'buttonobatbatal', remove);

                cloneIndex++;

                //se tem só uma linha esconde o delete
                console.log("Total de linhas => " + $(".clonedInput3").length);
              
                if ($(".clonedInput3").length == 1) {
                    $('.buttonobatbatal').hide();
                } else {
                    $('.buttonobatbatal').show();
                }

            }
            function remove() {        
                $(this).parents(".clonedInput3").remove();

                if ($(".clonedInput3").length == 1) {
                    $('.buttonobatbatal').hide();
                } else {
                    $('.buttonobatbatal').show();
                }

            }    
            $(document).on("click", ".buttonobat", clone);
            $(document).on("click", ".buttonobatbatal", remove);
            </script>

            <!-- JS CLONE FORM BAG. TINDAKAN -->
            <script>
            var regex = /^(.*)(\d)+$/i;
            var cloneIndex = $(".clonedInput4").length;
            if ($(".clonedInput4").length == 1) {
                $('.buttontindakanbatal').hide();
            } else {
                $('.buttontindakanbatal').show();
            }

            function clone() {
                $(this).parents(".clonedInput4").clone()
                    .appendTo(".tbodyClone4")
                    .attr("id", "clonedInput4" + cloneIndex)
                    .find("input, textarea")
                    .val("")
                    .each(function () {
                        var id = this.id || "";
                        var match = id.match(regex) || [];
                        if (match.length == 3) {
                            this.id = match[1] + (cloneIndex);
                        }
                    })
                    .on('click', 'buttontindakan', clone)
                    .on('click', 'buttontindakanbatal', remove);

                cloneIndex++;

                //se tem só uma linha esconde o delete
                console.log("Total de linhas => " + $(".clonedInput4").length);
              
                if ($(".clonedInput4").length == 1) {
                    $('.buttontindakanbatal').hide();
                } else {
                    $('.buttontindakanbatal').show();
                }

            }
            function remove() {        
                $(this).parents(".clonedInput4").remove();

                if ($(".clonedInput4").length == 1) {
                    $('.buttontindakanbatal').hide();
                } else {
                    $('.buttontindakanbatal').show();
                }

            }    
            $(document).on("click", ".buttontindakan", clone);
            $(document).on("click", ".buttontindakanbatal", remove);
            </script>

            <script type="text/javascript">
                $(".chosen-select").chosen({
                width: "410px",
                enable_search_threshold: 10
            })
            </script>

        </div>
      </div>
    </div>
  </body>
</html>