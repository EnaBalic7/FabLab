  function toggleNav() {
    if (document.getElementsByClassName("nav-content")[0].style.display == "flex"){
		document.getElementsByClassName("nav-content")[0].style.display = "none";
		document.getElementsByClassName("socialMob")[0].style.display = "none";
		document.getElementsByTagName("body")[0].style.overflow='initial';
		document.getElementsByTagName("body")[0].style.height='unset';
	}
        
    else{
       document.getElementsByClassName("nav-content")[0].style.display = "flex";
		document.getElementsByClassName("socialMob")[0].style.display = "flex";
		document.getElementsByTagName("body")[0].style.overflow='hidden';
		document.getElementsByTagName("body")[0].style.height='100vh';  
	}
}
  document.onreadystatechange = function () {
     if (document.readyState == "complete") {
		 		//console.log( "ready!" );

         document.querySelectorAll('.navLogo').forEach(item => {
  			item.addEventListener('click', event => {
	  		window.location = "?page=pages/en/index";
 	 	})
		});
   		}
 	}



