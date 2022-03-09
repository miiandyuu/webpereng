<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        Home Page | UNSCare
    </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Style -->
    <link href="{{asset('css/homepage.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/homepage-resp.css') }}">
    <link href="{{asset('https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css')}}" rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('https://unpkg.com/aos@next/dist/aos.css') }}"/>
  
    
</head>
<body>
    <header>
        <div></div>
        <div class="toggle"></div>
    </header>

    <section class="home" id="home">
        <video src="{{ asset('videos/vid_home_back.mp4') }}" muted loop autoplay></video>
        <div class="overlay"></div>
        <div class="home-text">
            <span>Welcome To</span>
            <h1>Desa Pereng</h1>
            <h2>Mojogedang, Karanganyar, Jawa Tengah</h2>
            <a href="{{ url('#explain') }}" class="btn">Explore Now</a>
        </div>
    </section>

    <section class="explain" id="explain">
        <div class="heading">
            <h3>Sambutan Kepala Desa Pereng</h3>
        </div>
        <div class="container">
            <div class="explain-text">
                <p><i>Assalaamu'alaikum wr. wb.</i>
                </p><br>
                <p>Website Desa Pereng ini memberikan informasi kepada seluruh pengunjung website tentang Desa Pereng, Mojogedan, Karanganyar, Jawa Tengah.
                    Website ini digunakan sebagai media penyebaran informasi seputar Desa Perng. Dengan website ini diharapkan pengunjung website dapat memperoleh mengenai Desa Pereng, Mojogedang.
                    Kami berharap Website ini dapat berguna bagi kita semua. Semoga Allah SWT selalu meridhoi niat baik dan usaha kita bersama. Amin.
                </p><br>
                <p><i>Wassalaamu'alaikum wr. wb.</i></p>
                <br>
                <p><b>Sriyanto S. Pd.</b></p>
                <p>(Kepala Desa Pereng, Mojogedang)</p>
            </div>
            <div class="explain-img">
                <img src="{{ asset('images/lurah.png') }}">
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="heading">
            <h3>Video Profil</h3>
        </div>
        <div class="container ">
            <div class="about-text">
                <div class="video-profil">
                    <iframe src="https://www.youtube.com/embed/watch?v=_BlBZdNf9T0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    {{-- <video autoplay playsinline loop>
                        <source src="{{ ('https://youtu.be/_BlBZdNf9T0') }}" type="video/mp4" width="450" height="450">
                    </video> --}}
                </div>
                <span>Jika video tidak bisa diputar, langsung nonton di <a href="{{ url('https://www.youtube.com/watch?v=_BlBZdNf9T0') }}" target="_blank" rel="noopener noreferrer">Youtube Desa Pereng!</a></span>
            </div>
        </div>
    </section>

    <section class="activities" id="activities">
        <div class="heading">
            <h3>Kegiatan-Kegiatan Masyarakat</h3>
        </div>
        <div class="container-activities">
            <div class="activities-box grid-col-span-2 img1">
                <div class="activities-content">
                    <h2><i>Batik Eco-print</i></h2>
                    <p>Batik Eco-Print merupakan bentuk kerajinan kain batik dengan menjiplak dedaunan pada kain sehingga menghasilkan motif yang indah.</p>
                    {{-- <a href="#" class="btn">Get App</a> --}}
                </div>
            </div>
            <div class="activities-box img2">
                <div class="activities-content">
                    <h2><i>Belalang</i></h2>
                    <p>Belajar Bareng dan Dolan Bareng Bocah, kegiatan belajar dan berbagi ilmu bersama</p>
                </div>
            </div>
            <div class="activities-box img3">
                <div class="activities-content">
                    <h2>Sosialisasi Dan Pengecekan Kesehatan</h2>
                    <p>Puskesmas Mojogedang & KKN UNS 2022 melakukan sosialisasi kepada masyarakat Desa Oereng dan melakukan pengecekan jentik disekitar rumah</p>
                </div>
            </div>
            <div class="activities-box grid-col-span-2 img4">
                <div class="activities-content">
                    <h2><i>Workshop Pembuatan Ecobrick</i></h2>
                    <p>Ecobrick merupakan alternatif bata konvensional yang ramah lingkungan dengan memanfaatkan botol dan sampah plastik</p>
                </div>
            </div>
            <div class="activities-box .grid-row-span-2 img5">
                <div class="activities-content">
                    <h2><i>Senam Sehat Desa Pereng</i></h2>
                    <p>Acara Senam Sehat, Vaksin Booster, Donor Darah, dan Pengecekan Gula Darah di Balai Desa Pereng</p>
                </div>
            </div>
        </div>
        <div class="content-btn">
            <a href="{{ url('home') }}" class="btn-mid">More</a>
        </div>
    </section>

    <section class="orgz" id="orgz">
        <div class="heading">
            <h3>Organisasi - Organisasi</h3>
        </div>
            <div class="container orgz-card">
                <div class="orgz-card-left">
                </div>
                <div class="orgz-card-right">
                    <h2>RUKUN TANI MAKARYO</h2>
                    <span>Ketua: H. Suratno</span>
                    <p>UNSCare merupakan Sistem Informasi Kesehatan yang dibuat dengan tujuan untuk menjadi solusi dalam sistem pemantauan.
                        Lorem ipsum dolor sit amet.
                    </p>
                </div>
            </div>
        <a href="{{ url('orgz') }}" class="content-btn btn-blck">Learn More</a>
    </section>

    <section class="about" id="about">
        <div class="heading">
            <h3>Lokasi Desa</h3>
        </div>
        <div class="container ">
            <div class="about-img wdth-100">
                <img src="{{ asset('images/peta.png') }}" alt="peta_pereng">
            </div>
        </div>
        <a href="{{ url('https://www.google.com/maps/place/Pereng,+Mojogedang,+Karanganyar+Regency,+Central+Java/@-7.5330784,111.007947,14z/data=!4m2!3m1!1s0x2e7a1eb0d2155c41:0x3a4d038880e35118') }}" class="content-btn btn-blck" target="_blank" rel="noopener noreferrer">Open Map</a>
    </section>

    <section class="contact" id="contact">      
        <div class="links">
            <div class="bye">
                <h1>DESA PERENG</h1>
                <p>Kami selalu siap menerima Anda!</p>
            </div>
            <div class="email-box">
                <p>Email us at</p>
                <p class="fw-400">pereng@gmail.com</p>
            </div>
        </div>
        <div class="links">
            <div class="visit">
                <span>Visit Us!</span>
                <p>Our official website</p>
                <a href="{{ url('http://pereng.sideka.id/') }}" target="_blank" rel="noopener noreferrer">pereng.sideka.id
                </a>
            </div>
            <div class="social">
                <a href="{{ url('https://www.facebook.com/profile.php?id=100078504614850') }}" target="_blank" rel="noopener noreferrer"><i class="bx bxl-facebook"></i></a>
                <a href="{{ url('https://www.youtube.com/channel/UC-OP4Hh7RgSLLmvYyXsUsRg') }}" target="_blank" rel="noopener noreferrer"><i class="bx bxl-youtube"></i></a>
                <a href="{{ url('http://instagram.com/desapereng_kra') }}" target="_blank" rel="noopener noreferrer"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>
    </section>

    <script src="CostumStyle\js\HomePage\homepage.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        const menuToggle = document.querySelector('.toggle');
        const home = document.querySelector('.home');

        menuToggle.addEventListener('click', () => {
            menuToggle.classList.toggle('active');
            home.classList.toggle('active');
        })        
    </script>
</body>
</html>