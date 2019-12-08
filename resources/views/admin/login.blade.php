<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hamro Marmat Sewa || Admin - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{URL::to('/')}}/public/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
      href="{{URL::to('/')}}/public/admin/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{URL::to('/')}}/public/admin/css/sb-admin-2.min.css" rel="stylesheet">

  </head>

  <body class="bg-gradient-primary">

    <div class="container">

      <!-- Outer Row -->
      <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-8">

          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">

                <div class="col-lg-6 offset-3">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Welcome Administrator!</h1>
                    </div>
                    @include('includes.flash_messages')
                    <form method="POST" action="{{ route('admin.validate') }}">
                      {{ csrf_field() }}
                   
                      <div class="form-group">
                        <input id="email" type="email" name="email" class="form-control" required autocomplete="email"
                          placeholder="Enter your email">
                      </div>
                      <div class="form-group">
                        <input id="password" type="password" name="password" class="form-control" required
                          placeholder="Password">
                      </div>
                      <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    <hr>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{URL::to('/')}}/public/admin/vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{URL::to('/')}}/public/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{URL::to('/')}}/public/admin/js/sb-admin-2.min.js"></script>

  </body>

</html>