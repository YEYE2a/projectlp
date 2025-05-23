<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear Proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
              </ul>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </div>

    <div class="container-fluid mt-3">
      <div class="row">
        <div class="col-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
          </ul>
        </div>

        <div class="col-9">
          <div class="p-4 bg-light rounded shadow-sm">
            <h2>Crear nuevo proyecto</h2>
            <form action="{{ route('proyectos.store') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" name="titulo" class="form-control" id="titulo" required>
              </div>

              <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea name="descripcion" class="form-control" id="descripcion" rows="4" required></textarea>
              </div>

              <button type="submit" class="btn btn-success">Guardar Proyecto</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

    <footer class="py-5 bg-dark text-white">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md">
            <svg class="mb-2" width="40" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Bootstrap">
              <rect width="100%" height="100%" fill="#563d7c"/>
              <text x="50%" y="50%" fill="#fff" dy=".3em" text-anchor="middle" font-size="18">B</text>
            </svg>
            <small class="d-block mb-3 text-muted">&copy; 2025</small>
          </div>
          <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="link-light" href="#">Cool stuff</a></li>
              <li><a class="link-light" href="#">Random feature</a></li>
              <li><a class="link-light" href="#">Team feature</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="link-light" href="#">Resource</a></li>
              <li><a class="link-light" href="#">Resource name</a></li>
              <li><a class="link-light" href="#">Another resource</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="link-light" href="#">Team</a></li>
              <li><a class="link-light" href="#">Locations</a></li>
              <li><a class="link-light" href="#">Privacy</a></li>
              <li><a class="link-light" href="#">Terms</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
