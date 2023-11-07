<nav class="navbar navbar-expand-lg p-3">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Amazon PH</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class=" collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item text-white">
            <a class="nav-link mx-2  text-white" aria-current="page" href="/dashboard">Home</a>
          </li>
          <li class="nav-item  text-white">
            <a class="nav-link mx-2  text-white"  href="/product">Product</a>
          </li>
          <li class="nav-item  text-white">
            <a class="nav-link mx-2  text-white" href="/logs">Logs</a>
          </li>
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="nav-link btn btn-link mx-2  text-white">Logout</button>
            </form>
        </li>

        </ul>.
      </div>
    </div>
  </nav>

  <style>
    .navbar {
      background-color: #0077b6;
    }
    
  #nav-link {
    color: white;

  }
  </style>
