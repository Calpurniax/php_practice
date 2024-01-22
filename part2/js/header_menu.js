const burguer = document.querySelector('.hamburguer_container');
const closeIcon = document.querySelector('.x_icon_container');
const nav =document.querySelector('.header_nav');

function toggleMenu(){
   if(nav.classList.contains('hidden')){
    closeIcon.classList.remove('hidden')
    burguer.classList.add('hidden')
    nav.classList.remove('hidden')
   }else{
    burguer.classList.remove('hidden')
    closeIcon.classList.add('hidden')
    nav.classList.add('hidden')
   }
}

burguer.addEventListener("click", toggleMenu);
closeIcon.addEventListener('click', toggleMenu);