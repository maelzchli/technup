<nav class="navbar" role="navigation">
  <div class="navbar__logo">
    <a href="./index.php"><img src="img/logo.webp" alt="Logo de Techn'up"></a>
  </div>
  <ul class="navbar__links">
    <li class="navbar__link first"><a  id="first" href="./index.php" >Accueil</a></li>
    <li class="navbar__link second"><a id="second" href="./catalogue.php">Catalogue</a></li>
    <li class="navbar__link third"><a id="third" href="./realisation.php">Réalisations</a></li>
    <li class="navbar__link fourth"><a id="fourth" href="./contact.php">Contact</a></li>
  </ul>
  <div class="burger">
    <span class="bar"></span>  
  </div>  
  <div class="navbar__socials">
    <a href="https://www.facebook.com/technup/" target="_blank" class="navbar__social">
      <img src="./img/facebook.webp" alt="Logo de Facebook">
    </a>
    <a href="https://www.linkedin.com/company/techn-up/" target="_blank" class="navbar__social">
      <img src="./img/linkedin.webp" alt="Logo de Linkedin">
    </a>
    <a href="https://www.instagram.com/technup/" target="_blank" class="navbar__social">
      <img src="./img/instagram.webp" alt="Logo d'Instagram'">
    </a>
  </div>
  <div class="network">
    <div class="socialnet">
      <img src="./img/network.webp"> 
    </div>   
  </button>  
</nav>

<style>
  .navbar > ul {
    list-style:none;
  }

  .navbar {
    display:flex;
    align-items:center; 
    justify-content:space-between;   
    padding: 2%;
    height: 10vh;
    width: 100vw;
    font-size:16px;
    color: white;
    box-sizing: border-box;
    background-color: #232323;
    font-family: 'Roboto', sans-serif;
    font-weight: bold;
    z-index: 80;
  }

  .navbar__links { 
    display:flex;
  }

  .navbar__link { 
    padding:0 20px;
  }

  .navbar__socials {
    display: flex;
    padding-right: 20px;
  }

  .navbar__socials > a > img {
    width: 25px;
    padding: 10px;
  }

  .navbar__link > a { 
    color: #fff;
    text-decoration:none;
  }

  .navbar__logo > a > img {
    padding-left: 20px;
    width: 50px;
  }

  .burger {
    display: none;
  }

  .network {
    display: none;
  }


  /* Medias queries nav */

  @media screen and (max-width:800px) {

    .navbar__socials { 
      z-index: 51;
      overflow:hidden;
      display:flex;
      justify-content: center;
      flex-direction:column;
      width:0;
      height:100vh;  
      position:absolute;
      top:0;
      right:0;     
      background: #232323;     
      transform: translateX(110%);
      transition: all .2s ease;
      padding: 0;
      margin: 0;
      overflow-x: hidden;
    }

    .navbar__links { 
      z-index: 50;
      overflow:hidden;
      display:flex;
      justify-content: center;
      flex-direction:column;
      width:0;
      height:100vh;  
      position:absolute;
      top:0;
      right:0;     
      background: #232323;     
      transform: translateX(110%);
      transition: all .2s ease;
      padding: 0;
      margin: 0;
      overflow-x: hidden;
    }

    .show-nav1 .navbar__links { 
      width:100vw;    
      transform: translateX(0);
    } 

    .show-nav2 .navbar__socials { 
      width:100vw;    
      transform: translateX(0);
    }

    .navbar__link .navbar__social {    
      transform: translateX(101%);
      transition: all .2s ease;
      justify-content: center;
      align-items: center;
      align-self:center ;
    }
    
    .show-nav1 .navbar__link  {        
      transform: translateX(0);    
    } 

    .show-nav2 .navbar__social  {        
      transform: translateX(0);    
    } 


    .navbar__link > a {
      justify-content: center;
      display:flex;
      padding:2rem;
      font-size:1.6rem;

      color: #fff;  
      transition: all .2s ease;
    }

    .navbar__social {
      justify-content: center;
      display:flex;
      padding:2rem;
      font-size:1.6rem;

      color: #fff;  
      transition: all .2s ease;
    }
    
    /* Menu burger */
    .burger {
      display:flex;
      align-items: center;
      position:relative;
      padding:0;
      width:45px;
      height: 45px;
      border:none;
      background:transparent;
      cursor:pointer;
      z-index: 100;  
    }

    .network {
      display: flex;
      align-items: center;
      position:relative;
      padding:0;
      width:45px;
      height:45px;
      border:none;
      background:transparent;
      cursor:pointer;
      z-index: 101;  
    }

    .socialnet {
      padding-right: 10px;
      text-align: center;
    }

    .navbar__logo {
      z-index: 102;
    }


    .bar {
      display:block;   
      width:45px;
      height:2px;  
      border-radius:3px;
      background: #fff; 
      transition: all .2s ease; 
      z-index: 10;
    }

    .bar::before, .bar::after {
      content:"";
      width:45px;
      height:2px;
      position:absolute; 
      left:0;  
      background:#fff; 
      border-radius:3px;    
      transition: all .2s ease;
      z-index: 10;  
    }
    .bar::before {
      transform:translateY(-12px);
    }
    .bar::after {
      transform:translateY(12px);
    }
    .show-nav1 .bar {
      width:0;
      background:transparent;    
    }
    .show-nav1 .bar::before {
      transform:rotate(45deg);
    }
    .show-nav1 .bar::after {
      transform:rotate(-45deg);
    }
    
    /* Animations */
    .show-nav1 .first {      
      transition: all 1s ease-out;
    } 
    .show-nav1 .second {      
      transition: all 1.1s ease-out;
    } 
    .show-nav1 .third {      
      transition: all 1.2s ease-out;
    } 
    .show-nav1 .four {      
      transition: all 1.3s ease-out;
    } 
    .show-nav1 .fifth {      
      transition: all 1.4s ease-out;
    }
  }

  /*Médias quéries */

  @media screen and (min-width:800px) {
    .navbar__link > a::after {
      display:block;
      content:"";
      width:0;
      height:3px;
      background:#DF2A16;
      transition:width .2s;
    }

    .navbar__link:hover > a::after {
      width:100%;
    }
  }

</style>