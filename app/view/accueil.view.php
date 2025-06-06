<link rel="stylesheet" href="public/css/carousel.css">


<body>

  <head>
  </head>
  <main>
    <h2 class="hero glitch layers" data-text="EXAMPLE">
      <span>Bienvenue sur le site officiel de Cyb3r Heaven !</span>
    </h2>


  
    <div class="presentation">
  <p>Plongez dans un monde où le rétro-futurisme rencontre la douceur d’un moment suspendu.</p>
  <p>Cyb3r Heaven, c’est bien plus qu’une simple bière : c’est une expérience sensorielle, une échappée virtuelle vers un paradis paisible et scintillant.</p>
  <p>Imaginée par une équipe étudiante passionnée, Cyb3r Heaven est née de l’envie de créer une marque à la croisée des styles — entre esthétique cyberpunk et inspirations 80’s.</p>
  <p>Avec son design vibrant, futuriste et lumineux, chaque bouteille vous ouvre une porte vers un ailleurs bienveillant, où tout semble plus lent, presque hors du temps.</p>
  <p>Dès la première gorgée, on s’y sent bien… comme si le monde s’effaçait doucement pour laisser place à un rêve onirique, nostalgique et coloré.</p>
</div>
    <div class="video-container">
     <iframe class="video" width="660" height="515" src="https://www.youtube.com/embed/ZmcT-9czHdo?si=Rs_xw6T6NvWWyMb9" 
  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
</iframe>
    </div>

    <div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
</body>
</main>
















<h1>// NOS CYBEERS //</h1>
<h2>UNE GAMME R3TRO-FUTURISTE</h2>

<div id="carousel">
  <button class="nav-btn prev">&#x25C0;</button>
  <div class="slider">



     <div class="slide">
      <img src="public/images/big/blanche.png" alt="Slide 1">
      <h3>JELLY</h3>
      <h4>ØRIGIN4L [BIERE BLANCHE]</h4>
      <p class="description">CYB3R F4CT : Cette bière a été brassée à Night City en 2077.</p>
    </div>


     <div class="slide">
      <img src="public/images/big/brune.png" alt="Slide 2">
      <h3>BLUE-GHØST</h3>
      <h4>BIERE BRUNE</h4>
      <p class="description">CYB3R F4CT : La bière blue screen de Windows.</p>
    </div>


    <div class="slide">
      <img src="public/images/big/blonde.png" alt="Slide 3">
      <h3>512 MØ</h3>
      <h4>BIERE BLONDE</h4>
      <p class="description">CYB3R F4CT : La bière qui "ramme" depuis Windows XP.</p>
    </div>
   

     <div class="slide">
      <img src="public/images/big/rousse.png" alt="Slide 4">
      <h3>J-ELEKTRIK</h3>
      <h4>LIMIT3D EDITIØN [BIERE ROUSSE]</h4>
      <p class="description">CYB3R F4CT : La recette de cette bière a été retrouvée dans un disque dur.</p>
    </div>



    <div class="slide">
      <img src="public/images/big/stout.png" alt="Slide 5">
      <h3>Cyb3r Hell</h3>
      <h4>STØUT [LIMIT3D EDITIØN]</h4>
      <p class="description">CYB3R F4CT : La Cyb3r Hell est la bière la plus dangereuse du darkweb.</p>
    </div>


    
  </div>




  <button class="nav-btn next">&#x25B6;</button>
</div>

<script>
  const slides = document.querySelectorAll('.slide');
  const prevBtn = document.querySelector('.prev');
  const nextBtn = document.querySelector('.next');
  let index = 0;

  function updateSlider() {
    slides.forEach((slide, i) => {
      slide.classList.remove('active');
      if (i === index) slide.classList.add('active');
    });
    document.querySelector('.slider').style.transform = `translateX(-${index * 360}px)`;
  }

  prevBtn.addEventListener('click', () => {
    index = (index - 1 + slides.length) % slides.length;
    updateSlider();
  });

  nextBtn.addEventListener('click', () => {
    index = (index + 1) % slides.length;
    updateSlider();
  });

  function autoSlide() {
    index = (index + 1) % slides.length;
    updateSlider();
  }

  setInterval(autoSlide, 4000);

  updateSlider();
</script>






<a href="index.php?route=produit" class="buy-button">Acheter maintenant</a>