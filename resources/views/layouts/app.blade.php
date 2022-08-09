<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/css/app.base.css" rel="stylesheet" />
    <link href="/css/sweetalert2.min.css" rel="stylesheet" />
    <script src="/js/feather.js"></script>
    <livewire:styles />
</head>
<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Company name</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
          <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="#">Sair</a>
          </div>
        </div>
      </header>
      <div class="container-fluid">
        <div class="row">
          <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3 sidebar-sticky">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="/">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/task">
                    <span data-feather="file" class="align-text-bottom"></span>
                    Task
                  </a>
                </li>
              </ul>
            </div>
          </nav>
          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            {{$slot}}
          </main>
        </div>
      </div>
    <livewire:scripts />
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/feather.js"></script>
    <script src="/js/dashboard.js"></script>
    <script src="/js/sweetalert2.all.min.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>
