<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    
    <title>Staff Management System</title>
    <script>
      function del(route,token,redirect)
      {
        var conf=confirm('Are you sure to delete the data?');
        if(conf)
        {
          $.post('/'+route,'_method=delete&_token='+token,function(){
            window.location='/'+redirect;
          });
        }
      }
    </script>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="{{ asset('img/logo.png') }}" style="height:50px;width:auto;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/clerk">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="/logout">logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container" style="margin-top:20px;">