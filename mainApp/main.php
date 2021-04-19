<!DOCTYPE html>
<html>
<head>
  <title>Aplikasi Pencarian Hadist</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>

<body>
  <div id='divApps'>
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper  green darken-1">
          <a href="#!" class="brand-logo">
            <marquee><small id="judulApps">Aplikasi Pencarian Hadist Shahih, Hasan, Dha'if, dan Maudhu'</small></marquee>
          </a>
          <a href="#!" data-activates="menu-mobile" class="button-collapse">
            <i class="material-icons">menu</i>
          </a>
          <ul class="right hide-on-small-only">
            <li><a href="#!">Home</a></li>
            <li><a href="#!">Profile</a></li>
            <li><a href="#!">LogOut</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <ul id="menu-mobile" class="side-nav">
      <li>
        <div class="user-view">
          <div class="background blue">
          </div>
          <a href="#!"><img class="circle" src="../ladun/login/images/logo_uin.png"></a>
          <a href="#!"><span class="white-text name">{{developer}}</span></a>
          <a href="#!"><span class="white-text email">Administrator</span></a>
        </div>
      </li>
      <li><a href="#!" @click="beranda" id="homeSideNav" class="hoverable"><i class="material-icons">home</i>Beranda</a></li>
      <li><a href="#!" @click="daftarKitab" class="hoverable"><i class="material-icons">healing</i>Daftar Kitab</a></li>
      <li><a href="#!" @click="cariHadisKata" class="hoverable"><i class="material-icons">healing</i>Cari Hadis (Kata)</a>
      <li><a href="#!" @click="cariHadisStatus" class="hoverable"><i class="material-icons">healing</i>Cari Hadis (Status)</a></li>
      </li>
      <!-- <li><a href="#!" class="hoverable"><i class="material-icons">history</i>History Pengujian</a></li> -->
      <li><a href="../index.html" class="hoverable"><i class="material-icons">undo</i>Log Out</a></li>
      <li>
        <footer class="page-footer white">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="grey-text">Aplikasi Klasifikasi Penyakit</h5>
                <small class="grey-text">Rizka Junainah - Ilmu Komputer Uinsu</small>
              </div>
            </div>
          </div>
        </footer>
      </li>
    </ul>

    <div id="loading"></div>

    <div class="container" id="divUtama">

      <!-- end container -->
    </div>

  </div>
  <script src="../js/jquery.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
  <script type="text/javascript" src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="../js/resamble.js"></script>
  <script type="text/javascript" src="../js/beranda.js"></script>
</body>

</html>