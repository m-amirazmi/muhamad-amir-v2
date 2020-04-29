@extends('layouts/main')
@section('content')
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-1">
          <div class="about-title">
            <h2>Muhamad Amir Azmi</h2>
            <h4>Web Developer</h4>
          </div>
          <div class="about-content">
            <p>I'm a self-taught developer and have experience in programming since 2012 in C language and Assembly. Now, I'm specialised in web development in frontend and aim to become full-stack with PHP language as the backend to build a complete web apps. I write about my journey in web development in my <a href="https://www.linkedin.com/in/m-amirazmi/">LinkedIn</a> account. Want to know how I may help your project? Check out my <a href="#projects">project</a> below.</p>
          </div>
          <div class="about-buttons">
            <a href="#projects">View Projects</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="about-img">
            <img src="/img/profile2.jpg" alt="portfolio img">
          </div>
        </div>
      </div>
    </div>
  </section>    
  <section id="skills">
    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="row">
            <div class="col-md-12">
              <div class="skills-title">
                <h3>What Tech I Use</h3>
              </div>
              <div class="skills-desc">
                <p>I have experience in building websites for the front end using HTML and CSS. However, lately I build them directly in Laravel framework for better views and route management and future expandibility on the backend. Below are quick overview of my main technical skills sets and technologies I use. Find out more about my experience through my <a href="#projects">projects</a>.</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="skills-icon">
                <i class="fab fa-html5 fa-2x"></i>
                <i class="fab fa-css3-alt fa-2x"></i>
                <i class="fab fa-js fa-2x"></i>
              </div>
              <div class="skills-title">
                <h5>HTML, CSS & JS</h5>
              </div>
              <div class="skills-desc">
                <p>HTML, CSS and Javascript are the basic in front end technology and I used these skills for all my web apps.However, I use other tools that helps me improve my development such as Sass, Firefox Dev Tools and Live Server extension.</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="skills-icon">
                <i class="fab fa-php fa-2x"></i>
                <i class="fab fa-laravel fa-2x"></i>
                <i class="fas fa-database fa-2x"></i>
              </div>
              <div class="skills-title">
                <h5>PHP & Laravel</h5>
              </div>
              <div class="skills-desc">
                <p>These backend skills are important to make website dynamic and better routing to pages. So, I used these technologies for better management of my web apps.</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="skills-icon">
                <i class="fab fa-npm fa-2x"></i>
                <i class="fab fa-github fa-2x"></i>
              </div>
              <div class="skills-title">
                <h5>GitHub & NPM</h5>
              </div>
              <div class="skills-desc">
                <p>These are build tools that I used in my development. I used GitHub as my remote repositories to keep my code safe. NPM is the package manager comes with NodeJS to install the dependencies needed by Laravel</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="skills-icon">
                <i class="fas fa-server fa-2x"></i>
              </div>
              <div class="skills-title">
                <h5>Heroku & Netlify</h5>
              </div>
              <div class="skills-desc">
                <p>The free deployment services are my choice to deploy all my web apps. Since all the projects I created just a prototype, free hosting should be enough. But, I would love to explore the paid hosting services if needed.</p>
              </div>
            </div>
            <hr>
          </div>
        </div>
      </div>
    </div>
    
  </section>
  <section id="projects">
    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="row">
            <div class="col-md-12">
              <div class="projects-title">
                <h3>My Projects</h3>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card project-card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="/img/project1.PNG" class="card-img" alt="the restro">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">The Restro</h5>
                      <p class="card-text">The restaurant web apps complete with admin view. Just add <strong>/admin</strong> to the url to access the admin view. This is ongoing project and will include database and backend services.</p>
                      <a href="https://enigmatic-plains-06191.herokuapp.com/" class="btn btn-primary"><i class="fas fa-laptop-code"></i>  Live</a>
                      <a href="https://github.com/m-amirazmi/the-restro" class="btn btn-primary"><i class="fab fa-github"></i>  GitHub</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card project-card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="/img/project2.PNG" class="card-img img-project" alt="lets cook">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Let's Cook</h5>
                      <p class="card-text">A recipe web apps using PHP Laravel. This project on hold since I want to focus on the The Restro web apps.So, this web apps only have the front end part only and do not have dynamic route yet.</p>
                      <a href="https://young-retreat-50913.herokuapp.com/" class="btn btn-primary"><i class="fas fa-laptop-code"></i>  Live</a>
                      <a href="https://github.com/m-amirazmi/letscook" class="btn btn-primary"><i class="fab fa-github"></i>  GitHub</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card project-card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="/img/project3.PNG" class="card-img img-project" alt="bazaar on">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Bazaar On</h5>
                      <p class="card-text">I create this website due to the rise trend in creating bazaar online for Muslim in Ramadhan. So, I just want to follow the trend and practice my skills in NodeJS to create this website.</p>
                      <a href="https://bazaar-online-muhamad-amir.herokuapp.com/" class="btn btn-primary"><i class="fas fa-laptop-code"></i>  Live</a>
                      <a href="https://bit.ly/github-bazaar" class="btn btn-primary"><i class="fab fa-github"></i>  GitHub</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card project-card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="/img/project4.PNG" class="card-img img-project" alt="sedapnya">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Sedapnya.my</h5>
                      <p class="card-text">The recipe apps which plan to create for mobile first user. This web apps also create using NodeJS. However, the view on desktop not really great so I create a new one which is the Let's Cook app.</p>
                      <a href="https://bit.ly/sedapnya-my" class="btn btn-primary"><i class="fas fa-laptop-code"></i>  Live</a>
                      <a href="https://bit.ly/github-sedapnya" class="btn btn-primary"><i class="fab fa-github"></i>  GitHub</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <p>Copyright&copy; 2020 by Muhamad Amir Azmi</p>
  </footer>
@endsection