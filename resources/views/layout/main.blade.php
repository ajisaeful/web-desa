<!doctype html>
<html lang="ar" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">

    <title>HOME</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="{{asset('image/logo.png')}}" alt="" width="35" height="35">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Profile</a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/sejarah">Sejarah Desa</a></li>
            <li><a class="dropdown-item" href="/Visimisi">Visi Misi</a></li>
            <li><a class="dropdown-item" href="/aparatur">Aparature</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Lembaga</a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/pkk">PKK</a></li>
            <li><a class="dropdown-item" href="/karangtaruna">Karang Taruna</a></li>
            <li><a class="dropdown-item" href="#">dll</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/datapenduduk">Data penduduk</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Informasi Publik </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/pengumuman">Pengumuman</a></li>
            <li><a class="dropdown-item" href="/agenda">Agenda Kegiatan</a></li>
            <li><a class="dropdown-item" href="/surat">Surat</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link" href="/kontak">kontak</a>
        </li>
      </ul>
    </div>
    <li class="nav-item dropdown">
      <a class="nav-link" href="/login">Login</a>
      </li>
  </div>
</nav>



    <div class="container-fluid" mt-4>
      @yield('home')
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    
  </body>
</html>