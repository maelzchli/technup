<nav class="navbar" role="navigation">
  <div class="navbar__logo">
    <a href="./index.php"><img src="./img/logo.webp" alt=""></a>
  </div>
  <ul class="navbar__links">
    <li class="navbar__link first"><a  id="first" href="./espaceadmin.php">Retour au menu</a></li>
    <li class="navbar__link second"><a id="second" href="./index.php">Site</a></li>
    <li class="navbar__link second"><a id="second" href="./logout.php">Deconnexion</a></li>

  </ul>
  <button class="burger">
    <span class="bar"></span>  
  </button>   
</nav>

<script src="./lib/nav.js"></script>


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
    font-size:16px;
    color: white;
    box-sizing: border-box;
    background-color: #232323;
    font-family: 'Roboto', sans-serif;
    font-weight: bold;
  }

  .navbar__links { 
    display:flex;
  }

  .navbar__link { 
    padding:0 20px;
  }

  .navbar__social {
    display: flex;
    padding-right: 20px;
  }

  .navbar__social > a > img {
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


  /* Medias queries nav */

  @media screen and (max-width:800px) {

    .navbar__links { 
      z-index: 5;
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
    .show-nav .navbar__links { 
      width:100vw;    
      transform: translateX(0);
    } 

    .navbar__link {    
      transform: translateX(101%);
      transition: all .2s ease;
      justify-content: center;
      align-items: center;
      align-self:center ;
    }
    
    .show-nav .navbar__link  {        
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
    .navbar__link > a:hover {
      font-size:2.5rem ;
    }
    
    /* Menu burger */
    .burger {
      display:block;
      position:relative;
      padding:0;
      width:45px;
      height:45px;
      border:none;
      background:transparent;
      cursor:pointer;
      z-index: 10;  
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
    .show-nav .bar {
      width:0;
      background:transparent;    
    }
    .show-nav .bar::before {
      transform:rotate(45deg);
    }
    .show-nav .bar::after {
      transform:rotate(-45deg);
    }
    
    /* Animations */
    .show-nav .first {      
      transition: all 1s ease-out;
    } 
    .show-nav .second {      
      transition: all 1.1s ease-out;
    } 
    .show-nav .third {      
      transition: all 1.2s ease-out;
    } 
    .show-nav .four {      
      transition: all 1.3s ease-out;
    } 
    .show-nav .fifth {      
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
      transition:width .4s;
    }

    .navbar__link:hover > a::after {
      width:100%;
    }
  }


</style>