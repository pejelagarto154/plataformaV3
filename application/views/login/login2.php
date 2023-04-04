<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  
  <!-- Font Awesome -->

  <script src="https://kit.fontawesome.com/b336ce73af.js" crossorigin="anonymous"></script>
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
<div align="center">
    <img class="mb-4" src="<?php echo base_url()?>assets/img/logo.png" alt="" width="172" height="157">
</div>
  <div class="login-logo">
    <a href="<?php echo base_url()?>assets/img/logo.png">Fondo Ahorro Habitacional <b>B2</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Ingresa tus datos</p>

      <?php	echo form_open( 'login/ajax_attempt_login', ['class' => 'std-form'] );?>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Correo o Nombre de Usuario" autocomplete="off" name="login_string" id="login_string">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" autocomplete="off" name="login_pass" id="login_pass">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col align-self-center">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url()?>assets/js/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>assets/js/jquery/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/js/jquery/adminlte.min.js"></script>
</body>
<script>
	$(document).ready(function () {
        $(document).on('submit', 'form', function (e) {
					//console.log("ddd");
            $.ajax({
                type: 'post',
                cache: false,
                url: '<?php echo base_url() ?>login/ajax_attempt_login',
                data: {
                    'login_string': $('[name="login_string"]').val(),
                    'login_pass': $('[name="login_pass"]').val(),
                    'loginToken': $('[name="token"]').val()
                },
                dataType: 'json',
                success: function (response) {
                    $('[name="loginToken"]').val(response.token);
                    console.log(response);
                    if (response.status == 1) {
                        window.location.href = '<?php echo base_url() ?>login/res';
                    } else if (response.status == 0 && response.on_hold) {
                        $('form').hide();
                        $('#on-hold-message').show();
                        alert('Intentos de inicio de sesión excesivos.');
                    } else if (response.status == 0 && response.count) {
                        alert('Login fallido', 'Login fallido ' + response.count + ' de ' + $('#max_allowed_attempts').val(), 'error');
                    }
                }
            });
            return false;
        });
    });
</script>
</html>
