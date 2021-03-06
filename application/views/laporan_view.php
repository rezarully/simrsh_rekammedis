<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RSH Prof. Soeparwi | Laporan</title>

    <link rel="stylesheet" href="<?php echo base_url("style/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("style/css/dashboard.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("style/css/daterangepicker-bs3.css"); ?>">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url("style/js/bootstrap.min.js"); ?>"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url("style/js/moment.js"); ?>"></script>  
    <script type="text/javascript" src="<?php echo base_url("style/js/daterangepicker.js"); ?>"></script>

  </head>

  <body>

  <?php $this->load->view('menu_view'); ?>
    <!-- RIWAYAT PASIEN BAG. TABEL -->
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h4 style="text-align:left">Laporan</h4>
      <hr>
      <!--PILIH TANGGAL -->
      <form action="<?php echo base_url("index.php/rekammedis/export");?>" method="POST">
      <div class="col-md-12">
        <div class="form-horizontal">
          <div class="form-group">
            <label class="col-md-2">Rekap rekam medis</label>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <input id="reportrange" class="form-control" name="reportrange" placeholder="Pilih Tanggal" style="outline:none;">
            </div>
            <button class="btn btn-primary" type="submit" name="submit" value="submit">Export</button>
          </div>
          <div class="form-group">
            <label class="col-md-2">Rekap inap</label>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <input id="reportrange2" class="form-control" name="reportrange2" placeholder="Pilih Tanggal" style="outline:none;">
            </div>
            <button class="btn btn-primary" type="submit" name="submit" value="submit">Export</button>
          </div>
        </div>
            <!-- <i class="glyphicon glyphicon-calendar icon-calendar icon-large"></i>
            <span></span> -->
          <!-- </input> -->

          <!-- JS UNTUK DATEPICKER -->
          <script type="text/javascript">
            /*var base_url = $('#baseurl').val();*/
            var startDate;
            var endDate;

            $(document).ready(function() {
              $('#reportrange').daterangepicker(
                 {
                    startDate: moment().subtract('days', 29),
                    endDate: moment(),
                    minDate: '01/01/2012',
                    maxDate: '12/31/2014',
                    dateLimit: { days: 60 },
                    showDropdowns: true,
                    showWeekNumbers: true,
                    timePicker: false,
                    timePickerIncrement: 1,
                    timePicker12Hour: true,
                    ranges: {
                       'Today': [moment(), moment()],
                       'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                       'Last 7 Days': [moment().subtract('days', 6), moment()],
                       'Last 30 Days': [moment().subtract('days', 29), moment()],
                       'This Month': [moment().startOf('month'), moment().endOf('month')],
                       'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                    },
                    opens: 'center',
                    buttonClasses: ['btn btn-default'],
                    applyClass: 'btn-small btn-primary',
                    cancelClass: 'btn-small',
                    format: 'DD-MM-YYYY',
                    separator: ' to ',
                    locale: {
                        applyLabel: 'Submit',
                        fromLabel: 'From',
                        toLabel: 'To',
                        customRangeLabel: 'Custom Range',
                        daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
                        monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                        firstDay: 1
                    }
                 },
                 function(start, end) {
                  console.log("Callback has been called!");
                  $('#reportrange span').html(start.format('D MMMM YYYY') + ' - ' + end.format('D MMMM YYYY'));
                  startDate = start;
                  endDate = end; 
                  console.log(startDate.format('D MMMM YYYY') + ' - ' + endDate.format('D MMMM YYYY'));   

                 }
              );
              //Set the initial state of the picker label
              $('#reportrange span').html(moment().subtract('days', 29).format('D MMMM YYYY') + ' - ' + moment().format('D MMMM YYYY'));

              $('#saveBtn').click(function(){
                  console.log(startDate.format('D MMMM YYYY') + ' - ' + endDate.format('D MMMM YYYY'));
              });
            });
            
            /*$.ajax({
                url: base_url + "rekammedis/export",  // define here controller then function name
                method: 'POST',
                data: { "prom": startDate , "two": endDate },   // pass here your date variable into controller
                success:function(data) { // alert your date variable value here
                }
            });*/
          </script>

          <script type="text/javascript">
            /*var base_url = $('#baseurl').val();*/
            var startDate;
            var endDate;

            $(document).ready(function() {
              $('#reportrange2').daterangepicker(
                 {
                    startDate: moment().subtract('days', 29),
                    endDate: moment(),
                    minDate: '01/01/2012',
                    maxDate: '12/31/2014',
                    dateLimit: { days: 60 },
                    showDropdowns: true,
                    showWeekNumbers: true,
                    timePicker: false,
                    timePickerIncrement: 1,
                    timePicker12Hour: true,
                    ranges: {
                       'Today': [moment(), moment()],
                       'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                       'Last 7 Days': [moment().subtract('days', 6), moment()],
                       'Last 30 Days': [moment().subtract('days', 29), moment()],
                       'This Month': [moment().startOf('month'), moment().endOf('month')],
                       'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                    },
                    opens: 'center',
                    buttonClasses: ['btn btn-default'],
                    applyClass: 'btn-small btn-primary',
                    cancelClass: 'btn-small',
                    format: 'DD-MM-YYYY',
                    separator: ' to ',
                    locale: {
                        applyLabel: 'Submit',
                        fromLabel: 'From',
                        toLabel: 'To',
                        customRangeLabel: 'Custom Range',
                        daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
                        monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                        firstDay: 1
                    }
                 },
                 function(start, end) {
                  console.log("Callback has been called!");
                  $('#reportrange2 span').html(start.format('D MMMM YYYY') + ' - ' + end.format('D MMMM YYYY'));
                  startDate = start;
                  endDate = end; 
                  console.log(startDate.format('D MMMM YYYY') + ' - ' + endDate.format('D MMMM YYYY'));   

                 }
              );
              //Set the initial state of the picker label
              $('#reportrange2 span').html(moment().subtract('days', 29).format('D MMMM YYYY') + ' - ' + moment().format('D MMMM YYYY'));

              $('#saveBtn').click(function(){
                  console.log(startDate.format('D MMMM YYYY') + ' - ' + endDate.format('D MMMM YYYY'));
              });
            });
            
            /*$.ajax({
                url: base_url + "rekammedis/export",  // define here controller then function name
                method: 'POST',
                data: { "prom": startDate , "two": endDate },   // pass here your date variable into controller
                success:function(data) { // alert your date variable value here
                }
            });*/
          </script>

      </div>
      </form>

    </div>
  </body>
</html>