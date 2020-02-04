<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>BeeSoft</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">

</head>

<body id="page-top">

  

  

  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">log in</h2>
          
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12" >
          <form name="sentMessage" novalidate="novalidate" method="POST" action="{{ route('login')}}">
            {{ csrf_field() }}
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <div class="form-group" {{$errors->has('usuario' ? 'is-invalid' : '')}}">
                  <input class="form-control" value="{{old('usuario')}}" id="usuario" name="usuario" type="text" placeholder="Username *" required="required" data-validation-required-message="Please enter your username.">
                  {!!$errors->first('usuario','<span class="invalid-feedback">:message</span>')!!}
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group" {{$errors->has('password' ? 'is-invalid' : '')}}">
                  <input class="form-control" id="password" name="password" type="password" placeholder="Password *" required="required" data-validation-required-message="Please enter your password.">
                  {!!$errors->first('password','<span class="invalid-feedback">:message</span>')!!}
                  <p class="help-block text-danger"></p>
                </div>
               
              </div>
              <div class="col-md-3"></div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div></div>
                <button class="btn btn-primary btn-xl text-uppercase" type="submit">submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>

</html>




