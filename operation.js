function menu_open(){
    //alert('ok');
    var header_top = document.getElementsByClassName('header_top')[0];
    header_top.style.height = '300px';
    header_top.style.transition = 'all 0.5s';

    var home = document.getElementsByClassName('home')[0];
    var about = document.getElementById('about');
    var services = document.getElementById('services');
    var contact = document.getElementById('contact');
    
   
    //home.style.opacity=1;

    home.style.display = 'block';
	home.style.transition = 'opacity .5s ease-in-out';
    
    about.style.display = 'block';

    
    services.style.display = 'block';

    
    contact.style.display = 'block';

    
    home.style.opacity= 1;

    var logo_menu = document.getElementsByClassName('logo_menu')[0];
    logo_menu.setAttribute('onclick', 'menu_close()');

    
 

}

function menu_close(){
    //alert('close');

    var header_top = document.getElementsByClassName('header_top')[0];
    header_top.style.height = '50px';
    header_top.style.transition = 'all 1s';

    var home = document.getElementsByClassName('home')[0];
    var about = document.getElementById('about');
    var services = document.getElementById('services');
    var contact = document.getElementById('contact');
    
   
    //home.style.opacity=1;
    home.style.display = 'none';
    
    about.style.display = 'none';

    
    services.style.display = 'none';

    
    contact.style.display = 'none';

    
    home.style.opacity= 1;

    var logo_menu = document.getElementsByClassName('logo_menu')[0];
    logo_menu.setAttribute('onclick', 'menu_open()');
}