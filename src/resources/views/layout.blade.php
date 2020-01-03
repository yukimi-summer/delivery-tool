<head>
  <title>Delivery Tool | @yield('title')</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<nav class="navbar navbar-expand navbar-dark fixed-top bg-dark shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0">Delivery Tool</a>
  <ul class="navbar-nav ml-md-auto mr-5">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">ユーザー名</a>
        <div class="dropdown-menu shadow">
          <a class="dropdown-item">マイページ</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item">ログアウト</a>
        </div>
    </li>
  </ul>
</nav>
<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <ul class="nav flex-column">
        <li class="nav-item"><a href="#" class="nav-link active"><i class="far fa-sticky-note"></i> メッセージ一覧</a></li>
      </ul>
    </nav>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-5">
      @yield('content')
    </main>
  </div>
</div>
</body>