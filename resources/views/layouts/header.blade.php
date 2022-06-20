  <!-- Header Section Begin -->
  <header class="header-section">
      <div class="inner-header">
          <div class="logo">
              <a href="{{route('home')}}"><img src="{{asset ('assets/img/ico.ico') }}" height="90px;" width="190px;"
                      alt="logo"></a>
          </div>
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 col-xl-12">
                      <nav class="main-menu mobile-menu">
                          <ul style="margin-top: 20px;">
                              <li>
                                  <a href="{{route('home')}}">Accueil</a>
                              </li>
                              <li>
                                  <a href="{{ route('listhotels') }}">Hotels disponibles</a>
                              </li>
                              <li><a href="{{ route('listroom') }}">Chambres</a></li>
                              <li><a href="#">Facilities</a>
                                  <ul class="drop-menu">
                                      <li><a href="{{ route('listroom') }}">Junior Suit</a></li>
                                      <li><a href="{{ '#' }}">Double Room</a></li>
                                      <li><a href="#">Senior Suit</a></li>
                                      <li><a href="#">Single Room</a></li>
                                  </ul>
                              </li>
                              <li>
                                  <a href="{{route('service.create')}}">Services</a>
                              </li>
                              <li>
                                  <a class="nav-link" href="{{ route('HOTEL') }}">{{ 'S\'enregistrer' }}</a>
                              </li>
                              <li>
                                  <a class="nav-link" href="{{route('login')}}">Se Connecter</a>
                              </li>
                          </ul>
                      </nav>
                  </div>
              </div>
              <div id="mobile-menu-wrap"></div>
          </div>
      </div>
  </header>
  <!-- Header End -->