<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Aliret</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link href="{{ asset('assets/css/justified-nav.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/forms.css') }}" rel="stylesheet">
  </head>

  <body>
    <div class="container">
      <div class="masthead">
        <h3 class="text-muted">Aliret</h3>
        <nav class="navbar navbar-light bg-faded rounded mb-3">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-toggleable-md" id="navbarCollapse">
            <ul class="nav text-md-center justify-content-md-between">
              <!-- Authentication Links -->
              @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
              @else
                <li class="nav-item active">
                  <a class="nav-link" href="inheritance-calculator">Calculator<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="verses">Verses of inheritance</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="forum" target="_blank">Forum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                                    Logout
                    </a>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
              @endguest
            </ul>
          </div>
        </nav>
      </div>

      @yield('content')

      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; Aliret 2017</p>
      </footer>
    </div>

    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  </body>
</html>