<nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg "  color-on-scroll="100"  id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="/"><img style="width: 50%;margin-top: -14%;" src="/img/logo.png" alt="QXM"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" style="display:block;">
            <ul class="navbar-nav ml-auto">
              @auth
                <li class="dropdown nav-item">
                  <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
                      <i class="material-icons">list</i> Proyectos
                  </a>
                  <div class="dropdown-menu dropdown-with-icons">
                    <a href="/project/create" class="dropdown-item">
                        <i class="material-icons">add</i> Crear proyecto
                    </a>

                    <a href="/profile/projects" class="dropdown-item">
                        <i class="material-icons">list</i> Mis Proyectos
                    </a>

                    <a href="/profile/projects" class="dropdown-item">
                        <i class="material-icons">search</i> Buscar Proyectos
                    </a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="material-icons">exit_to_app</i> Salir
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </li>
              @endauth
              @guest
                <li class="nav-item">
                  <a class="nav-link" href="/login">
                    <i class="material-icons">input</i> Entrar
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="/register">
                    <i class="material-icons">extension</i> Quiero ser parte
                  </a>
                </li>

              @endguest

          <li class="nav-item">
            <a class="nav-link" href="https://twitter.com/CreativeTim" target="_blank">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.facebook.com/CreativeTim" target="_blank">
              <i class="fa fa-facebook-square"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
            </ul>
        </div>
    </div>
</nav>
