<header class="bg-dark">
  <div class="container">
    <nav class="navbar navbar-dark navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="{{url('/')}}">{{env('APP_NAME')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link @if(Route::is('home')) active @endif"href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if(Route::is('trains.index')) active @endif"href="{{route('trains.index')}}">Trains</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if(Route::is('trains.today')) active @endif"href="{{route('trains.today')}}">Today options</a>
            </li>
          </ul>
        </div>
    </nav>
  </div>
</header>
      