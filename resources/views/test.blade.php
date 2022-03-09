<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href=" {{ asset('css/test.css') }}">
  
    <section class="showcase">
        <header>
            <div></div>
            <div class="toggle"></div>
        </header>
        <video src="{{ asset('videos/vid_home_back.mp4') }}" muted loop autoplay></video>
        <div class="overlay"></div>
        <div class="text">
            <h2>Never Stop To </h2> 
            <h3>Exploring The World</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.</p>
            <a href="#">Explore</a>
        </div>
        <ul class="social">
            <li><a href="#"><img src="https://i.ibb.co/x7P24fL/facebook.png"></a></li>
            <li><a href="#"><img src="https://i.ibb.co/Wnxq2Nq/twitter.png"></a></li>
            <li><a href="#"><img src="https://i.ibb.co/ySwtH4B/instagram.png"></a></li>
        </ul>
    </section>

    <section class="app" id="app">
        <div class="heading" data-aos="fade-down">
          <h3>Download App</h3>
        </div>
        <div class="container">
          <div class="app-text" data-aos="fade-down-right">
            <h2>GET OUR SERVICES</h2>
            <p>Download our free app, and you can have access to care anytime on your smartphone, from anywhere!</p>
            <a href="#" class="btn">Get App</a>
          </div>
          <div class="app-img" data-aos="fade-down-left">
            <img src="{{ asset('images/ayam.svg') }}" alt="">
          </div>
        </div>
    </section>

    <section>
        <div class="menu">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Destination</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        </div>
    </section>

  <script>
      const menuToggle = document.querySelector('.toggle');
      const showcase = document.querySelector('.showcase');

      menuToggle.addEventListener('click', () => {
        menuToggle.classList.toggle('active');
        showcase.classList.toggle('active');
      })
  </script>
</body>
</html>