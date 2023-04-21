<nav class="navbar navbar-expand-lg bg-light container-fluid">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('shoes.index') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
      </ul>
      <div class="col-9 d-flex justify-content-end">
        <a type="button" href="{{ route('shoes.create') }}" class="btn btn-primary">
          Create new item
        </a>
      </div>
    </div>
  </div>
</nav>