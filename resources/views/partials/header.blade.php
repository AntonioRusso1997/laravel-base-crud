<header class="bg-dark">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand h-100" href="{{ route('home-page') }}"><img class="h-100" src="https://i.ibb.co/NSzsR6q/boolean-comics.png" alt="Logo boolean.comics"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link text-uppercase fw-bold" href="{{ route('home-page') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-uppercase fw-bold" href="{{ route('comics.index') }}">Comics List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-uppercase fw-bold" href="{{ route('comics.create') }}">Insert a New Comic</a>
            </li>
          </ul>
        </div>
    </nav>    
  </div>
</header>
