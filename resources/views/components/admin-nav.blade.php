<nav class="navbar bg-dark navbar-dark navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand" href="/">@auth Bienvenido, {{auth()->user()->name}} @endauth </a>
      <div class="collapse navbar-collapse justify-content-end " id="navbarSupportedContent">
        <ul class="navbar-nav  d-flex">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/register">Register</a>
            </li>
            <li class="nav-item">
              <form method="post" action="/admin/logout">
                @csrf
                <button type="submit" class="nav-link bg-dark text.white border border-dark">
                  <i class="bi bi-door-closed" ></i> Cerrar Sesion
                </button>
              </form>
            </li>
          </ul>
      </div>
    </div>
  </nav>