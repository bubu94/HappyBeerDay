<!doctype html>
<html>
<head>
  <title>HappyBeerDay</title>
    @include('includes.css')
</head>



<style>
.block {
  display: block;
  width: 40%;
  border: none;
  background-color: #949200;
  padding: 14px 14px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;

.lead.text-muted {
  margin-top:6% !important;
}
.sweet-overlay{
  z-index:999999 !important;
}
.sweet-alert{
  z-index:999999 !important;
}
</style>
<?php

  $error = false;
  $errori_label = "";

  if(\Session::get('error')){

    // var_dump(\Session::get('error'));
    // die;
    //
    $error = true;
    if(is_array(\Session::get('error'))){
      foreach(\Session::get('error') as $this_error){
        $errori_label .= $this_error."<br>";
      }
    }else{
      $errori_label .= \Session::get('error');
    }
  }

?>


  <body>

    <div id="wrapper">
      @include('includes.header')


      <div class="clearfix"></div>
        <div class="content-wrapper">
          <div class="container-fluid" style="padding:0px">
            @yield('content')
          </div>
        </div>
      </div>
    </div>




    @include('includes.footer')
    @yield('footer_script_init')

      <script>


        <?php if($error){ ?>
          swal({
            title: "Warning",
            html: true,
            text: "<?= $errori_label ?>",
            confirmButtonText: "Indietro",
            allowOutsideClick: "true",
            type: 'error'
          });
        <?php } ?>


        <?php if(\Session::get('success')){ ?>
          swal({
            title: "",
            html: true,
            text: "<?= \Session::get('success') ?>",
            confirmButtonText: "OK",
            allowOutsideClick: "true",
            type: 'success'
          });
        <?php } ?>

      </script>

  </body>
</html>
