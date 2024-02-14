  var nav = document.querySelector("header");
window.addEventListener("scroll",function(event){
    if(this.window.scrollY >=200){
     
        nav.style.transition ='all';
        nav.style.transitionDuration = '0.7s';
        nav.style.transformStyle ='ease-in';
        nav.style.position ='fixed';
         nav.style.boxShadow='0px 10px 10px -17px #111';

        
    }
    else{
        
          nav.style.transition ='all';
        nav.style.transitionDuration = '0.7s';
        nav.style.transformStyle ='ease-in';
        nav.style.position ='relative';
         nav.style.boxShadow='none';
       
         
        
    }
});

// m menu
const btn = document.querySelector("button.mobile-menu-button");
const menu = document.querySelector(".mobile-menu");
const menuIcon = document.getElementById('menu-icon');
const navLinks = document.querySelectorAll('.nav-link');

btn.addEventListener("click", () => {
	menu.classList.toggle('menu-open');

	
	if (menu.classList.contains('menu-open')) {
      menuIcon.classList.remove('bi-list');
      menuIcon.classList.add('bi-x');
      menuIcon.style.color = 'white';
      menuIcon.style.transition = 'all';
      menuIcon.style.transitionDuration = '0.7s';
      menuIcon.style.transformStyle = 'ease-in-out';
      menu.classList.add("-translate-x-0");
    } else {
      menuIcon.classList.remove('bi-x');
      menuIcon.classList.add('bi-list');
      menuIcon.style.color = 'black';
      menuIcon.style.transition = 'all';
      menuIcon.style.transitionDuration = '0.7s';
      menuIcon.style.transformStyle = 'ease-in-out';
      menu.classList.remove("-translate-x-0");
    }
});