<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>LandingPage</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
   <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
   <header id="boton" onclick="divLogin()" class="header">

         <img src="img/logo.png" alt="">

      <nav class="nav" id="caja">
         <div class="boton_mostrar"> Menú</div>
         <ul class="menu">
            <li><a href="">Inicio</a></li>
            <li><a href="">Nosotros</a></li> 
            <li><a href="">Servicios</a></li>
            <li><a href="">Proyectos</a></li>
            <li class="mr"><a href="">Contact</a></li>
         </ul>
      </nav>
   </header>
   <div >

   <section class="banner">
      <div class="childBanner">
         <div class="text">
            <h3>HELLO</h3><br>
            <h1>Lorem ipsum dolor sit</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate, maiores.</p>
         </div>
         <div class="socialBanner">
            <li><a href=""><i class="fab fa-facebook-square"></i></a></li>
            <li><a href=""><i class="fab fa-twitter-square"></i></a></li>
            <li><a href=""><i class="fab fa-linkedin"></i></a></li>
            <li><a href=""><i class="fab fa-instagram"></i></a></li>
            <li><a href=""><i class="fab fa-youtube-square"></i></a></li>
         </div>
         <div class="socials"></div>
      </div>

      <div class="childBanner">
         <img src="assets/img/banner.png" alt="">
      </div>

   </section>

   <section class="about">
      <div class="childAbout">
         <img src="assets/img/about.png" alt="">
      </div>
      <div class="childAbout">
         <h3>About Me</h3><br>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum eveniet alias quod, atque praesentium iusto autem magni. Neque consectetur tempore vitae quas ducimus? Assumenda similique doloremque expedita, veritatis sunt corrupti?</p>
         <div class="ctnTextAbout">
            <div class="textAbout">
               <p><b>Name:</b></p>
               <p><b>Age:</b></p>
               <p><b>Address:</b></p>
               <p><b>Phone Number:</b></p>
               <p><b>Email:</b></p>
            </div>
            <div class="textAbout">
               <p>Juan Carlos</p>
               <p>25</p>
               <p>Los Pinos</p>
               <p>9743532</p>
               <p>juan@mail.com</p>
            </div>
         </div>
         <a href="">Download CV</a>
      </div>
   </section>

   <section class="services" onclick="alertNavegador()">
      <div class="wedo"><p>Lo que hacemos</p></div>
      <h2>My Services</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta adipisci ab voluptate placeat vel esse, tempore perferendis, hic quas aut sed eius officia cumque quam odit quisquam ducimus, iusto ad!</p>
      <hr>

      <main class="secService">
         <article class="childServices">
            <i class="fas fa-tv"></i>
            <h3>Web Development</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores fuga est et odit. Debitis, sunt.</p>
         </article>
         <article class="childServices">
         <i class="fas fa-bullhorn"></i>
            <h3>Digital Marketing</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores fuga est et odit. Debitis, sunt.</p>
         </article>
         <article class="childServices">
            <i class="fas fa-tv"></i>
            <h3>Web Development</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores fuga est et odit. Debitis, sunt.</p>
         </article>
         <article class="childServices">
            <i class="fas fa-tv"></i>
            <h3>Web Development</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores fuga est et odit. Debitis, sunt.</p>
         </article>
         <article class="childServices">
            <i class="fas fa-tv"></i>
            <h3>Web Development</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores fuga est et odit. Debitis, sunt.</p>
         </article>
         <article class="childServices">
            <i class="fas fa-tv"></i>
            <h3>Web Development</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores fuga est et odit. Debitis, sunt.</p>
         </article>
      </main>

   </section>
   <section class="parallax1">
      <div class="prallax1">
         <h3>I Am Available For Freelancer!</h3>
         <a href="">Contactarme</a>
      </div>
   </section>

   <section class="work">
      <div class="childWork">
         <h5>WORKS</h5>
         <H2>My Works</H2>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta vitae necessitatibus quidem distinctio placeat magni autem explicabo eos nemo voluptatum corrupti </p>
            <hr>
            <div class="btnWork">
               <a href="#">All</a>
               <a href="#">Desing</a>
               <a href="#">Marketing</a>
               <a href="#">Photogrsphy</a>
            </div>
         <div class="boxWork">
            <div class="boxWork">
               <div class="imgWork"><img src="assets/img/portafolio1.jpg" alt=""></div>
               <div class="imgWork"><img src="assets/img/portafolio2.jpg" alt=""></div>
               <div class="imgWork"><img src="assets/img/portafolio3.jpg" alt=""></div>
               <div class="imgWork"><img src="assets/img/portafolio4.jpg" alt=""></div>
               <div class="imgWork"><img src="assets/img/portafolio5.jpg" alt=""></div>
               <div class="imgWork"><img src="assets/img/portafolio6.jpg" alt=""></div>
            </div>
         </div>
      </div>
      
   </section>

   <footer class="footer">
      <p>Todos los derechos reservados &copy <?php echo date('Y'); ?></p>
   </footer>
   <script src="assets/js/main.js"></script>
   
</body>
</html>