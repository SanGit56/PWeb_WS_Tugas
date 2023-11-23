<?php
  $db_server="localhost";
	$db_username="kulp3765_5025211166";
	$db_password="sozs211166";
	$db_database="kulp3765_5025211166";

  $id_ada = isset($_GET['id']) ? $_GET['id']: "";

  if ($id_ada)
  {
    $conn=mysqli_connect($db_server, $db_username, $db_password, $db_database);

    if (!$conn) {
      die("koneksi error");
    }

    $sql = "SELECT id, judul, gambar, konten FROM pweb_artikel WHERE id = " . $id_ada;
    $hasil = mysqli_query($conn, $sql);

    if (mysqli_num_rows($hasil) > 0) {
      $baris = mysqli_fetch_assoc($hasil);
      $judul = $baris["judul"];
      $gambar = $baris["gambar"];
      $konten = $baris["konten"];
    }
  }
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="../assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.118.2">
  <title><?= isset($judul) ? $judul: ""; ?></title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      width: 100%;
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
      --bd-violet-bg: #712cf9;
      --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

      --bs-btn-font-weight: 600;
      --bs-btn-color: var(--bs-white);
      --bs-btn-bg: var(--bd-violet-bg);
      --bs-btn-border-color: var(--bd-violet-bg);
      --bs-btn-hover-color: var(--bs-white);
      --bs-btn-hover-bg: #6528e0;
      --bs-btn-hover-border-color: #6528e0;
      --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
      --bs-btn-active-color: var(--bs-btn-hover-color);
      --bs-btn-active-bg: #5a23c8;
      --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
      z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
      display: block !important;
    }

    a {
      text-decoration: none;
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../style.css" rel="stylesheet">
</head>

<body>
  <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="check2" viewBox="0 0 16 16">
      <path
        d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
    </symbol>
    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
      <path
        d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
      <path
        d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
    </symbol>
    <symbol id="sun-fill" viewBox="0 0 16 16">
      <path
        d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
    </symbol>
  </svg>

  <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
    <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
      aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
      <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
        <use href="#circle-half"></use>
      </svg>
      <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
    </button>
    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
          aria-pressed="false">
          <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
            <use href="#sun-fill"></use>
          </svg>
          Light
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
          aria-pressed="false">
          <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
            <use href="#moon-stars-fill"></use>
          </svg>
          Dark
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto"
          aria-pressed="true">
          <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
            <use href="#circle-half"></use>
          </svg>
          Auto
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
    </ul>
  </div>

  <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="chevron-right" viewBox="0 0 16 16">
      <path fill-rule="evenodd"
        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
    </symbol>
  </svg>

  <div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary rounded mb-3" aria-label="Thirteenth navbar example">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11"
          aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
          <a class="navbar-brand col-lg-3 me-0" href="#">Sejarah Epik</a>
          <ul class="navbar-nav col-lg-6 justify-content-lg-center">
            <li class="nav-item">
              <a class="nav-link" href="../starting/">Starting</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../css/">CSS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../bootstrap/">Bootstrap</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../berita/">Berita</a>
            </li>
          </ul>
          <form role="search">
            <input class="form-control" type="search" placeholder="Cari" aria-label="Search">
          </form>
        </div>
      </div>
    </nav>
  </div>

  <main class="container">
    <div class="row g-5">
      <div class="col-md-8">
        <img src="<?= isset($gambar) ? $gambar: ""; ?>" width="100%" class="img-fluid">

        <h1 class="pb-4 my-3 fst-italic border-bottom">
          <?= isset($judul) ? $judul: ""; ?>
        </h1>

        <?= isset($konten) ? $konten: ""; ?>

        <a href="index.html">Kembali</a>
      </div>

      <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">
          <div class="p-4 mb-3 bg-body-tertiary rounded">
            <h4 class="fst-italic">Topik Teratas</h4>
            <ul class="list-group">
              <a href="#" class="list-group-item">#panglima</a>
              <a href="#" class="list-group-item">#perjuangan</a>
              <a href="#" class="list-group-item">#heroik</a>
              <a href="#" class="list-group-item">#epik</a>
              <a href="#" class="list-group-item">#pertempuran</a>
            </ul>
          </div>

          <div>
            <h4 class="fst-italic">Artikel Teratas</h4>
            <ul class="list-unstyled">
              <li>
                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="artikel.php?id=13">
                  <img src="../gambar/m.jpg" alt="" width="100" height="100">
                  <div class="col-lg-8">
                    <h6 class="mb-0">Tuanku Imam Bonjol</h6>
                    <small class="text-body-secondary">Kamis, 12 Oktober 2023 - 09:04 WIB</small>
                  </div>
                </a>
              </li>
              <li>
                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="artikel.php?id=14">
                  <img src="../gambar/n.jpg" alt="" width="100" height="100">
                  <div class="col-lg-8">
                    <h6 class="mb-0">Pangeran Diponegoro</h6>
                    <small class="text-body-secondary">Rabu, 11 Oktober 2023 - 23:10 WIB</small>
                  </div>
                </a>
              </li>
              <li>
                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="artikel.php?id=15">
                  <img src="../gambar/o.jpeg" alt="" width="100" height="100">
                  <div class="col-lg-8">
                    <h6 class="mb-0">Jenderal Soedirman</h6>
                    <small class="text-body-secondary">Kamis, 12 Oktober 2023 - 00:24 WIB</small>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </main>

  <footer class="container-fluid bg-dark text-light py-3 pt-4">
    <div class="row">
      <div class="col-md-4 text-center">
        <h4>Hubungi Kami</h4>
        <p>
          Alamat: Tower 2<br>
          Kota: Los Sukolilo<br>
          Surel: tower2@sukolilo.los<br>
          Telepon: 0312205501110
        </p>
      </div>
      <div class="col-md-8">
        <nav class="navbar navbar-expand-lg navbar-dark">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Politik</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Ekonomi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Hiburan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Teknologi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Olahraga</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Gaya Hidup</a>
            </li>
          </ul>
        </nav>

        <p>Tugas Pemrograman Web Jurusan Teknik Informatika ITS 2023</p>
        <p>5025211166, Radhiyan Muhammad Hisan.  dosen: Imam Kuswardayan, S.Kom, M.T</p>
      </div>
    </div>
  </footer>

  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>