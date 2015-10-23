<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="{!!asset('css/bootstrap.css')!!}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{!!asset('css/admin.css')!!}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
    

      {!!Form::open(['route'=>'log.store','method'=>'POST'])!!}
        <h2 class="form-signin-heading">Por Favor Ingresar</h2>
        <div class="form-group">
        {!!Form::label('correo','Correo:')!!}
        {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingresa tu correo'])!!}
        </div>
         <div class="form-group">
        {!!Form::label('password','Contrasena:')!!}
        {!!Form::password('password',null,['class'=>'form-control','placeholder'=>'Ingresa tu contrasena'])!!}
        </div>
    
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        {!!Form::submit('Iniciar',['class'=>'btn btn-primary'])!!}
     {!!Form::close()!!}

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
