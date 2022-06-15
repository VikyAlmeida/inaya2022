        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
              <a href="index.html" class="app-brand-link">
                <span class="app-brand-text demo menu-text fw-bolder ms-2">Inaya</span>
              </a>
  
              <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
              </a>
            </div>
  
            <div class="menu-inner-shadow"></div>
  
            <ul class="menu-inner py-1">
              <!-- Dashboard -->
              <li class="menu-item">
                <a href="{{ url('/') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-home-circle"></i>
                  <div data-i18n="Analytics">Home</div>
                </a>
              </li>
              <li class="menu-item active">
                <a href="{{ url('/admin') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-home-circle"></i>
                  <div data-i18n="Analytics">Home administrativo</div>
                </a>
              </li>
              <!-- Usuarios -->
              <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Administracion</span>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-user"></i>
                  <div data-i18n="Layouts">Usuarios</div>
                </a>
  
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{url('/admin/clientes')}}" class="menu-link">
                      <div data-i18n="Without navbar">Clientes</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{url('/admin/solicitudes')}}" class="menu-link">
                      <div data-i18n="Without menu">
                        Solicitudes
                        <span style="margin-left:1em" class="flex-shrink-0 badge badge-center rounded-pill bg-primary w-px-20 h-px-20">
                          <script>document.write(localStorage.getItem('request'));</script>
                        </span>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-calendar"></i>
                  <div data-i18n="Layouts">Eventos</div>
                </a>
  
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{url('/admin/eventos')}}" class="menu-link">
                      <div data-i18n="Without menu">Ver eventos</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{url('/admin/crear/eventos')}}" class="menu-link">
                      <div data-i18n="Without navbar">Añadir un evento</div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Guia de estilo</span>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-layout"></i>
                  <div data-i18n="Layouts">Zona publica</div>
                </a>
  
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{url('/admin/Zona-publica/pagina')}}" class="menu-link">
                      <div data-i18n="Without navbar">Pagina</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{url('/admin/Zona-publica/colores')}}" class="menu-link">
                      <div data-i18n="Without navbar">Colores</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{url('/admin/Zona-publica/fuentes')}}" class="menu-link">
                      <div data-i18n="Without navbar">Fuente</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{url('/admin/Zona-publica/botones')}}" class="menu-link">
                      <div data-i18n="Without navbar">Botones</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{url('/admin/Zona-publica/multimedia')}}" class="menu-link">
                      <div data-i18n="Without navbar">Multimedia</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{url('/admin/Zona-publica/disposicion')}}" class="menu-link">
                      <div data-i18n="Without navbar">Disposicion</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{url('/admin/Zona-publica/iconos')}}" class="menu-link">
                      <div data-i18n="Without navbar">Iconos</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{url('/admin/Zona-publica/mapa')}}" class="menu-link">
                      <div data-i18n="Without navbar">Mapa del sitio</div>
                    </a>
                  </li>
                </ul>
              </li>
              
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-layout"></i>
                  <div data-i18n="Layouts">Zona privada</div>
                </a>
  
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{url('/admin/Zona-privada/pagina')}}" class="menu-link">
                      <div data-i18n="Without navbar">Pagina</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{url('/admin/Zona-privada/colores')}}" class="menu-link">
                      <div data-i18n="Without navbar">Colores</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{url('/admin/Zona-privada/fuentes')}}" class="menu-link">
                      <div data-i18n="Without navbar">Fuente</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{url('/admin/Zona-privada/botones')}}" class="menu-link">
                      <div data-i18n="Without navbar">Botones</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{url('/admin/Zona-privada/iconos')}}" class="menu-link">
                      <div data-i18n="Without navbar">Iconos</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{url('/admin/Zona-privada/mapa')}}" class="menu-link">
                      <div data-i18n="Without navbar">Mapa del sitio</div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </aside>