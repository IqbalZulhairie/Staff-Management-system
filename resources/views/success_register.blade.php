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
            <div class="card-header">Success Registration</div>
            <div class="card-body">
                <div class="mb-3" style="text-align:center;">
                    <img src="{{ asset('img/logo.png') }}" style="width:100px;height:auto;">
                </div>
                
                <div class="mb-3">
                    @if(session('success_msg'))
                        <div class="alert alert-success">
                             {{ session('success_msg') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    
  </body>
</html>