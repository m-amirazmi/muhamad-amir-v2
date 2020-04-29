<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Muhamad Amir Azmi | Portfolio</title>
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500;700&family=Lato:wght@400;700;900&family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="/css/app.css">
        <script src="https://kit.fontawesome.com/ce9a652be3.js" crossorigin="anonymous"></script>
    </head>
    <body>
      <nav class="topnav" id="side-nav">
        <a href="javascript:void(0);" class="icon-bar" onclick="myFunction()"><i class="fa fa-bars"></i>
        </a>
          <div class="side-nav-title">
              <h1><a href="/" class="side-nav-title-item">Muhamad Amir</a></h1>
          </div>
          <div class="side-nav-img">
              <img src="/img/profile1.jpg" alt="profile pic" class="side-nav-img-item">
          </div>
          <div class="side-nav-about">
              <p>Hi, my name is Muhamad Amir bin Azmi and I'm a self taught web developer. Welcome to my personal website.</p>
          </div>
          <div class="side-nav-socmed">
            <a href="https://www.linkedin.com/in/m-amirazmi/"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://github.com/m-amirazmi"><i class="fab fa-github-alt"></i></a>
            <a href="https://www.facebook.com/merkp12"><i class="fab fa-facebook-f"></i></a>
            <a href="www.wasap.my/601119821105"><i class="fab fa-whatsapp"></i></a>
            <hr>
          </div>
          <div class="side-nav-contact">
            <p><span><i class="fas fa-mobile-alt"></i></span> +60-11-1982-1105</p>
            <p><span><i class="fas fa-envelope"></i></span> m.amirazmi@hotmail.com</p>
            <hr>
        </div>
          <div class="side-nav-links">
              <ul class="navi-links">
                  <li><a href="#about-me"><i class="fas fa-user"></i>  About Me</a></li>
                  <li><a href="#skills"><i class="fas fa-brain"></i>  Skills</a></li>
                  <li><a href="#projects"><i class="fas fa-laptop-code"></i>  Projects</a></li>
              </ul>
          </div>
        
      </nav>
      <main>
          @yield('content')
      </main>
      <script>
        function myFunction() {
          var x = document.getElementById("side-nav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }
        </script>
    </body>
</html>
