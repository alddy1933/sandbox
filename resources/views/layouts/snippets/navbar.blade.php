<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Myapp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?= $title == 'Beranda' ? 'active' : '' ?>" aria-current="page" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $title == 'Post' ? 'active' : '' ?>" aria-current="page" href="/posts">Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $title == 'Data Siswa' ? 'active' : '' ?>" aria-current="page" href="/students">Siswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $title == 'Jurusan' ? 'active' : '' ?>" aria-current="page" href="/majors">Jurusan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $title == 'Tentang' ? 'active' : '' ?>" aria-current="page" href="/about">Tentang</a>
        </li>
        <li class="nav-item">
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Login
          </button>
        </li>
      </ul>
    </div>
  </div>
</nav>