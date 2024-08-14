$('.caroussel').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    responsive: [
    {
      breakpoint: 1400,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 2
      }
    },
    {
      breakpoint: 992,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      } 
    }
    ]
  });


  const buttonsTwo = document.querySelectorAll('.button');
  const buttons = document.querySelectorAll('button');
  const menuBurger = document.querySelector('.burger');
  const navBar = document.querySelector('.navbar');
  const socialNetwork = document.querySelector('.socialnet');

  buttonsTwo.forEach( (button) => {
    button.addEventListener('mouseover', () => {
      button.style.transform = 'scale(0.96)'
    })
    button.addEventListener('mouseout', () => {
      button.style.transform = 'scale(1)'
    })
  })

  buttons.forEach( (button) => {
    button.addEventListener('mouseover', () => {
      button.style.transform = 'scale(0.96)'
    })
    button.addEventListener('mouseout', () => {
      button.style.transform = 'scale(1)'
    })
  })

  menuBurger.addEventListener('click', () => {
    navBar.classList.toggle('navbar-clicked');
  })

  socialNetwork.addEventListener('click', () => {
    navBar.classList.toggle('navbar-clicked');
  })

