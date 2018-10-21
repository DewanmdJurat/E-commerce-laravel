<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Victory Admin</title>
  <link rel="stylesheet" href="{{asset('public/admin/node_modules/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/admin/node_modules/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('public/admin/node_modules/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/admin/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/admin/css/style.css')}}">
  <link rel="shortcut icon" href="{{asset('public/admin/images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth">
          <div class="row w-100">
            <div class="col-lg-8 mx-auto">
              <div class="row">
                <div class="col-lg-6 bg-white ">
                  <div class="auth-form-light text-left p-5">
                    <h2>Login</h2>
                    <h4 class="font-weight-light">Hello! let's get started</h4>
                    <form class="pt-5" method="post" action="">
                      {{csrf_field()}}
                        <div class="form-group">
                          <label for="exampleInputEmail1">E-mail</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="E-mail">
                          <i class="mdi mdi-account"></i>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" name="password"class="form-control" id="exampleInputPassword1" placeholder="Password">
                          <i class="mdi mdi-eye"></i>
                        </div>
                        <div class="mt-5">
                          <button class="btn btn-block btn-success btn-lg font-weight-medium" >Login</button>
                        </div>
                        <div class="mt-3 text-center">
                          <a href="" class="auth-link text-black">Forgot password?</a>
                        </div>
                                     
                    </form>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{asset('public/admin/node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('public/admin/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('public/admin/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('public/admin/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
  <script src="{{asset('public/admin/js/off-canvas.js')}}"></script>
  <script src="{{asset('public/admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('public/admin/js/misc.js')}}"></script>
  <script src="{{asset('public/admin/js/settings.js')}}"></script>
  <script src="{{asset('public/admin/js/todolist.js')}}"></script>
</body>
</html>
