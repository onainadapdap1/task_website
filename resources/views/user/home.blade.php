<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercedes Benz</title>
    <link rel="icon" type="image/x-icon" href="user/img/merse.jpg">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">

    <!-- feather icons -->
    {{-- <script src="https://unpkg.com/feather-icons"></script> --}}

    {{-- css bootstrap --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    {{-- end css bootstrap --}}

    <!-- my style -->
    <link rel="stylesheet" href="user/css/style.css">
    <style>
        .hidden-ul {
            list-style-type: none;
            display: flex
        }

        .nav-link {
            margin-top: 1rem;
            display: inline-block;
            padding: 5px;
            color: #fff;
            background-color: var(--primary);
            border-radius: 0.5rem;
            box-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
        }
    </style>
</head>
<body>
    <!-- navbar start -->
    <!-- navbar start -->
<nav class="navbar">
    <a href="#" class="navbar-logo">Mercedes<span>Benz</span>.</a>
    <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">About us</a>
        <a href="#menu">produk kami</a>
        <a href="#client">daftar klien</a>
        <a href="#galeri">Gallery photo</a>
        <a href="#contact">Kontak Kami</a>
    </div>


    <!-- Hero Section start -->
    {{-- <section class="hero" id="home">
        <div class="mask-container">
        <main class="content">
            <h1>Mari Nikmati Secangkir <span>produk</span></h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, enim.</p>
            <a href="#" class="cta">Beli Sekarang</a>
        </main>
        </div>
    </section> --}}



    <!-- Hero Section end -->
    <!-- Authentication Links -->
    <ul class="navbar-nav ms-auto hidden-ul">
        @guest
            @if (Route::has('login'))
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest

    </ul>
</nav>
<!-- navbar end -->

    <!-- navbar end -->

    <!-- Hero Section start -->
    <section class="hero" id="home">
        <div class="mask-container">
        <main class="content">
            <h1>Mercedes<span><i>Benz</i></span></h1>
            <h2><i>"The best or nothing"</i></h2>
            {{-- <a href="#" class="cta">Beli Sekarang</a> --}}
        </main>
        </div>
    </section>
    <!-- Hero Section end -->

    <!-- About Section start -->
    <section id="about" class="about">
        <h2>Tentang<span> Mercedes Benz</span></h2>

        <div class="row">

            <div class="content">
                <h3>Kenapa memilih perusahaan kami?</h3>
                {{-- <p>Mercedes-Benz, commonly referred to as Mercedes and sometimes as Benz, is a German luxury and commercial vehicle automotive brand established in 1926.</p> --}}
                <p>Mercedes-Benz adalah produsen mobil mewah dan kendaraan komersial asal Jerman yang merupakan bagian dari perusahaan induk Daimler AG. Merek ini dikenal karena kualitas, teknologi inovatif, dan warisan prestise dalam industri otomotif.</p>
                {{-- <p> Mercedes-Benz AG is headquartered in Stuttgart, Baden-Württemberg, Germany</p> --}}
            </div>
            <div class="about-img">
                <img src="{{ asset("user/img/tentang-mer.jpg") }}" width="600px" height="600px" alt="Tentang Kami">
            </div>
        </div>
    </section>
    <!-- About Section end -->

    <!-- Menu produk Section start -->
    <section id="menu" class="menu">
        <h2><span>Produk</span> Kami</h2>

        <p>
            Mercedes-Benz menawarkan beragam produk kendaraan yang mencakup berbagai segmen pasar, mulai dari mobil mewah hingga kendaraan komersial. Berikut adalah gambaran singkat tentang beberapa produk utama Mercedes-Benz
        </p>

        <div class="row">
            <div class="menu-card">
                <img src="{{ asset("user/img/menu/satu.jpeg") }}" alt="Espresso" class="menu-card-img">
                <h3 class="menu-card-title">- Mobil A -</h3>
                <p class="menu-card-price">IDR 15K</p>
            </div>
            <div class="menu-card">
                <img src="{{ asset("user/img/menu/dua.jpeg") }}" alt="Espresso" class="menu-card-img">
                <h3 class="menu-card-title">- Mobil B -</h3>
                <p class="menu-card-price">USD $25K</p>
            </div>
            <div class="menu-card">
                <img src="{{ asset("user/img/menu/tiga.jpeg") }}" alt="Espresso" class="menu-card-img">
                <h3 class="menu-card-title">- Mobil C -</h3>
                <p class="menu-card-price">USD $20K</p>
            </div>
            <div class="menu-card">
                <img src="{{ asset("user/img/menu/empat.jpeg") }}" alt="Espresso" class="menu-card-img">
                <h3 class="menu-card-title">- Mobil D -</h3>
                <p class="menu-card-price">USD $15K</p>
            </div>
            <div class="menu-card">
                <img src="{{ asset("user/img/menu/lima.jpeg") }}" alt="Espresso" class="menu-card-img">
                <h3 class="menu-card-title">- Mobil E -</h3>
                <p class="menu-card-price">USD $15K</p>
            </div>
            <div class="menu-card">
                <img src="{{ asset("user/img/menu/enam.jpeg") }}" alt="Espresso" class="menu-card-img">
                <h3 class="menu-card-title">- Mobil E -</h3>
                <p class="menu-card-price">USD $15K</p>
            </div>
            <div class="menu-card">
                <img src="{{ asset("user/img/menu/enam.jpeg") }}" alt="Espresso" class="menu-card-img">
                <h3 class="menu-card-title">- Mobil E -</h3>
                <p class="menu-card-price">USD $15K</p>
            </div>
            <div class="menu-card">
                <img src="{{ asset("user/img/menu/enam.jpeg") }}" alt="Espresso" class="menu-card-img">
                <h3 class="menu-card-title">- Mobil E -</h3>
                <p class="menu-card-price">USD $15K</p>
            </div>
        </div>
    </section>
    <!-- Menu produk Section end -->

    <!-- Menu daftar klien Section start -->
    <section id="client" class="client">
        <h2><span>Daftar</span> Klien</h2>
        <p >
            Berikut merupakan perusahaan yang percaya dengan produk kami
        </p>
        <div class="row">
            <div class="client-card">
                <img src="{{ asset("user/img/menu/google.png") }}" alt="company" class="menu-card-img">
                <h3 class="client-card-title">- Google -</h3>
            </div>
            <div class="client-card">
                <img src="{{ asset("user/img/menu/meta.png") }}" alt="company" class="menu-card-img">
                <h3 class="client-card-title">- Meta -</h3>
            </div>
            <div class="client-card">
                <img src="{{ asset("user/img/menu/microsoft.png") }}" alt="company" class="menu-card-img">
                <h3 class="client-card-title">- Microsoft -</h3>
            </div>
            <div class="client-card">
                <img src="{{ asset("user/img/menu/apple.png") }}" alt="company" class="menu-card-img">
                <h3 class="client-card-title">- Apple -</h3>
            </div>

            </div>

    </section>
    <!-- Menu daftar klien Section end -->

    <!-- Menu galeri Section start -->
    <section id="galeri" class="galeri">
        <h2><span>Galeri</span> photo</h2>
        <p >
            Berikut merupakan perusahaan yang percaya dengan produk kami
        </p>
        <div class="row">
            <div class="galeri-card">
                <img src="{{ asset("user/img/menu/galeri1.jpeg") }}" alt="Espresso" class="menu-card-img">
                {{-- <h3 class="galeri-card-title">- Perusahaan A -</h3> --}}
            </div>
            <div class="galeri-card">
                <img src="{{ asset("user/img/menu/galeri2.jpeg") }}" alt="Espresso" class="menu-card-img">
                {{-- <h3 class="galeri-card-title">- Perusahaan B -</h3> --}}
            </div>
            <div class="galeri-card">
                <img src="{{ asset("user/img/menu/galeri3.jpeg") }}" alt="Espresso" class="menu-card-img">
                {{-- <h3 class="galeri-card-title">- Perusahaan C -</h3> --}}
            </div>
            <div class="galeri-card">
                <img src="{{ asset("user/img/menu/galeri4.jpeg") }}" alt="Espresso" class="menu-card-img">
                {{-- <h3 class="galeri-card-title">- Perusahaan C -</h3> --}}
            </div>
            <div class="galeri-card">
                <img src="{{ asset("user/img/menu/galeri5.jpeg") }}" alt="Espresso" class="menu-card-img">
                {{-- <h3 class="galeri-card-title">- Perusahaan C -</h3> --}}
            </div>
            <div class="galeri-card">
                <img src="{{ asset("user/img/menu/galeri6.jpeg") }}" alt="Espresso" class="menu-card-img">
                {{-- <h3 class="galeri-card-title">- Perusahaan C -</h3> --}}
            </div>
            <div class="galeri-card">
                <img src="{{ asset("user/img/menu/galeri7.jpeg") }}" alt="Espresso" class="menu-card-img">
                {{-- <h3 class="galeri-card-title">- Perusahaan C -</h3> --}}
            </div>
            <div class="galeri-card">
                <img src="{{ asset("user/img/menu/galeri8.jpeg") }}" alt="Espresso" class="menu-card-img">
                {{-- <h3 class="galeri-card-title">- Perusahaan C -</h3> --}}
            </div>
    </section>
    <!-- Menu galeri Section end -->

    <!-- Menu visi dan misi Section start -->
    <section id="visi_misi" class="visi_misi">
        <h2>Visi dan Misi<span> Mercedes Benz</span></h2>

        <div class="row">
            <div class="visi">
                <h3>Visi</h3>
                <p>Menjadi pemimpin dunia dalam inovasi dan teknologi otomotif yang memberikan pengalaman berkendara luar biasa kepada pelanggan kami.</p>
            </div>
            <div class="misi">
                <h3>Misi</h3>
                <p>1. Memberikan produk berkualitas tinggi yang menggabungkan desain elegan, kinerja luar biasa, dan teknologi canggih.</p>
                <p>2. Mengembangkan kemitraan yang kuat dengan pelanggan, pemasok, dan komunitas lokal untuk menciptakan nilai jangka panjang.</p>
                <p>3. Berkomitmen untuk keberlanjutan lingkungan dengan mengurangi jejak karbon dan memperkenalkan solusi ramah lingkungan.</p>
                <p>4. Menempatkan kepuasan pelanggan sebagai prioritas utama melalui pelayanan yang luar biasa dan pengalaman pelanggan yang unggul.</p>
            </div>
        </div>
    </section>

    <!-- Menu visi dan misi Section end -->

     <!-- artikel Section start -->
     <section id="artikel" class="artikel">
        <h2>Artikel<span> Mercedes Benz</span></h2>

        <div class="row">
            <div class="artikel-img">
                <img src="{{ asset("user/img/menu/hamilton.jpeg") }}" width="600px" height="600px" alt="Tentang Kami">
            </div>
            <div class="content">
                <h3>Kejutan! Lewis Hamilton Akan Tinggalkan Mercedes dan Gabung Ferrari pada F1 2025</h3>
                <p>Jika Lewis Hamilton benar-benar akan meninggalkan Mercedes dan bergabung dengan Ferrari pada musim Formula 1 2025, itu pasti akan menjadi kejutan besar dalam dunia balap. Ini akan menjadi peristiwa yang akan menarik perhatian banyak penggemar balap, karena Hamilton adalah salah satu pembalap terkemuka dalam sejarah Formula 1 dan telah memiliki koneksi yang kuat dengan Mercedes selama beberapa tahun terakhir.</p>
                {{-- <p> Mercedes-Benz AG is headquartered in Stuttgart, Baden-Württemberg, Germany</p> --}}
            </div>

        </div>
    </section>
    <!-- artikel Section end -->

    <!-- Contact Section start -->
    <section id="contact" class="contact">
        <h2><span>Kontak</span> Kami</h2>
        <p>Let's Connect
        </p>

        <div class="row">
            <div class="contact-info">
                <p><strong>Alamat:</strong> Jl. Mercedes-Benz No. 123, Kota Mercedes, Germany</p>
                <p><strong>No Telepon:</strong> +62 1234 5678</p>
                <p><strong>Fax:</strong> +62 1234 5679</p>
                <p><strong>Email:</strong> mercedes@benz.com</p>
            </div>

        </div>
    </section>

    <!-- feather icons -->
    <script>
        feather.replace();
    </script>

    {{-- <!-- my javascript -->
    <script src="js/script.js"></script> --}}

    {{-- js bootstrap --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
    {{-- end js bootstrap --}}
</body>
</html>
