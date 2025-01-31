<!-- Navbar -->
<nav class="main-header navbar navbar-expand layout-fixed navbar-fixed navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav" style="color:black">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ url('/') }}" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ url('profile') }}" class="nav-link">Profile</a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">


        <div class="waktu mt-2 mr-2" style="color: white">
            <!-- /*Menampilakan Hari*/ -->
            <?php
            $hari = date('l');
            /*$new = date('l, F d, Y', strtotime($Today));*/
            if ($hari == 'Sunday') {
                echo 'Minggu';
            } elseif ($hari == 'Monday') {
                echo 'Senin';
            } elseif ($hari == 'Tuesday') {
                echo 'Selasa';
            } elseif ($hari == 'Wednesday') {
                echo 'Rabu';
            } elseif ($hari == 'Thursday') {
                echo 'Kamis';
            } elseif ($hari == 'Friday') {
                echo "Jum'at";
            } elseif ($hari == 'Saturday') {
                echo 'Sabtu';
            }
            ?>,
            <!-- /*Selesai Menampilkan Hari*/ -->

            <!-- /*Menampilkan Tanggal*/ -->
            <?php
            $tgl = date('d');
            echo $tgl;
            $bulan = date('F');
            if ($bulan == 'January') {
                echo ' Januari ';
            } elseif ($bulan == 'February') {
                echo ' Februari ';
            } elseif ($bulan == 'March') {
                echo ' Maret ';
            } elseif ($bulan == 'April') {
                echo ' April ';
            } elseif ($bulan == 'May') {
                echo ' Mei ';
            } elseif ($bulan == 'June') {
                echo ' Juni ';
            } elseif ($bulan == 'July') {
                echo ' Juli ';
            } elseif ($bulan == 'August') {
                echo ' Agustus ';
            } elseif ($bulan == 'September') {
                echo ' September ';
            } elseif ($bulan == 'October') {
                echo ' Oktober ';
            } elseif ($bulan == 'November') {
                echo ' November ';
            } elseif ($bulan == 'December') {
                echo ' Desember ';
            }
            $tahun = date('Y');
            echo $tahun;
            ?>
            <!-- /*Selesai Menampilkan Tanggal*/ -->
            <script type="text/javascript">
                function tampilkanwaktu() { //fungsi ini akan dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik    
                    var waktu = new Date(); //membuat object date berdasarkan waktu saat 
                    var sh = waktu.getHours() +
                        ""; //memunculkan nilai jam, //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length    //ambil nilai menit
                    var sm = waktu.getMinutes() + ""; //memunculkan nilai detik    
                    var ss = waktu.getSeconds() +
                        ""; //memunculkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
                    document.getElementById("clock").innerHTML = (sh.length == 1 ? "0" + sh : sh) + ":" + (sm.length == 1 ? "0" +
                        sm : sm) + ":" + (ss.length == 1 ? "0" + ss : ss);
                }
            </script>
            <!-- /*Menampilkan Waktu*/ -->

            <body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">
                <span id="clock"></span>
        </div>
        <!-- Selesai Menampilkan WaktuMessages Dropdown Menu -->
        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link"
                onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                <i class="fas fa-power-off"></i>
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
        {{-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> --}}
    </ul>
</nav>
<!-- /.navbar -->
