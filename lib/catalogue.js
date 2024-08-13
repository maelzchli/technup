$(document).ready(function () {

  $('#all').click(function(){
    $('.1').show();
    $('.2').show();
    $('.3').show();
    $('#all').addClass("actif");
    $('#eclairage').removeClass("actif");
    $('#sonorisation').removeClass("actif");
    $('#video').removeClass("actif");
  });

  $('#eclairage').click(function(){
    $('.1').show();
    $('.2').hide();
    $('.3').hide();
    $('#all').removeClass("actif");
    $('#eclairage').addClass("actif");
    $('#sonorisation').removeClass("actif");
    $('#video').removeClass("actif");
  });

  $('#sonorisation').click(function(){
    $('.1').hide();
    $('.2').show();
    $('.3').hide();
    $('#all').removeClass("actif");
    $('#eclairage').removeClass("actif");
    $('#sonorisation').addClass("actif");
    $('#video').removeClass("actif");
  });

  $('#video').click(function(){
    $('.1').hide();
    $('.2').hide();
    $('.3').show();
    $('#all').removeClass("actif");
    $('#eclairage').removeClass("actif");
    $('#sonorisation').removeClass("actif");
    $('#video').addClass("actif");
  });

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
