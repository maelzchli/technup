

function toggleMenu () { 
  const body = document.querySelector('body');
  const navbar = document.querySelector('.navbar');
  const burger = document.querySelector('.burger');
  const network = document.querySelector('.network');
  burger.addEventListener('click', (e) => {    
    navbar.classList.toggle('show-nav1');
    navbar.classList.remove('show-nav2');
  }); 
  network.addEventListener('click', (e) => {
    navbar.classList.toggle('show-nav2');
    navbar.classList.remove('show-nav1');
  });
}

toggleMenu();

function toggleMenuRemove () {  
  const first = document.querySelector('#first');
  const second = document.querySelector('#second');
  const third = document.querySelector('#third');
  const fourth = document.querySelector('#fourth');
  const navbar = document.querySelector('.navbar');
  const burger = document.querySelector('.burger');
  first.addEventListener('click', (e) => {    
    navbar.classList.remove('show-nav1');
  })
  second.addEventListener('click', (e) => {    
    navbar.classList.remove('show-nav1');
  })
  third.addEventListener('click', (e) => {    
    navbar.classList.remove('show-nav1');

  })
  fourth.addEventListener('click', (e) => {    
    navbar.classList.remove('show-nav1');
  }); 
}

toggleMenuRemove();






