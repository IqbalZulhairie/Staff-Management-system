<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    
    <title>Staff Management System</title>
  </head>
  <body>
    <div class="mx-auto" style="width:300px;margin-top:30px;">
        <div class="card">
            <div class="card-header">New Registration</div>
            <div class="card-body">
                <div class="mb-3" style="text-align:center;">
                    <img src="{{ asset('img/logo.png') }}" style="width:100px;height:auto;">
                </div>

                <form action="signup_proccess" method="post">

                    <div class="mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Full Name" autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" name="username" placeholder="Username" autocomplete="off">
                    </div>
                    
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>

                    <div class="mb-3">
                        <input type="hidden" name="_token" value=" {{ csrf_token() }}">
                        <input type="submit" value="Sign In" class="btn btn-primary">
                    </div>

                    <div class="mb-3">
                        @if(session('error_msg'))
                            <div class="alert alert-danger">
                                {{ session('error_msg') }}
                            </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
    
  </body>
</html>