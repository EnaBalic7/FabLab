document.querySelectorAll('.homeeEdu').forEach(item => {
    item.addEventListener('click', event => {
      console.log("test");
      window.location = "?page=pages/bhs/index";
  })
  })
  
  
  $( document ).ready(function() {
      fillWithData();
      
      $(".btnE").click(function () {
          $(".btnE").removeClass("activeE");
          $(".planBtn").removeClass("activeE");
          $(".btnC").removeClass("activeE");
          $(this).addClass("activeE"); 
      });
  
      $(".planBtn").click(function () {
          $(".planBtn").removeClass("activeE");
          $(this).addClass("activeE"); 
      });
  
      $(".btnC").click(function () {
          $(".btnC").removeClass("activeE");
          $(this).addClass("activeE"); 
      });
  
  });
  
  class Course {
      constructor(name, description, link, price, date, category, level, paid, slika,drugiUrl) {
          this.name = name;
          this.description = description;
          this.link = link;
          this.price = price;
          this.date = date;
          this.category = category;
          this.level = level;
          this.paid = paid;
          this.slika = slika;
          this.drugiUrl=drugiUrl;
      }
  }
  
  let courses = [
      new Course("3D Printing", "Praktično i neophodno znanje o 3D printanju i njegovim primjenama u različitim industrijama.", "?page=pages/bhs/3Dprintanje", 'BESPLATNO', "1-NOV-21", "3D", "Expert", false, "3dEdu.png",""),
      new Course("IP za početnike", "Osnovno razumijevanje IP sistema, vrste IP prava i putevi zaštite.", "?page=pages/bhs/IPPocetnik",'BESPLATNO', "1-NOV-21", "IP", "Basic", false, "ipforBegin.png",""),
      new Course("IP demistifikacija", "Prilagođeno za akademske krugove i individualne pronalazače da nauče kako upravljati i koristiti proizvode svog rada.", "?page=pages/bhs/IPDemistifikacija", 100+'KM', "20-NOV-21", "IP", "Advanced", true, "IPDemyst.png",""),
      new Course("IP za kompanije", "Naučite kako prepoznati i upravljati svojim IP potencijalom.", "?page=pages/bhs/IPzakompanije", 200+'KM', "1-DEC-21", "IP", "Expert", true, "IPforBlz.png",""),
      new Course("Osnove Linuxa", "Osnove GNU/Linux OS-a.", "https://n00bs.fablab.ba/?page=stranice/ba/le", 100+'KM', "1-OCT-21", "Linux", "Basic", true, "essentials.jpg","https://n00bs.fablab.ba/?page=stranice/ba/le"),
      new Course("GNU/LPIC1", "Namijenjeno administratorima GNU/Linux OS-a.", "https://n00bs.fablab.ba/?page=stranice/ba/lpic1", 250+'KM', "1-OCT-21", "Linux", "Advanced", true, "lpic-1.jpg","https://n00bs.fablab.ba/?page=stranice/ba/lpic1"),
      new Course("GNU/LPIC2", "Namijenjeno za administratore GNU/Linux OS-a i aplikacija.", "https://n00bs.fablab.ba/?page=stranice/ba/lpic2", 250+'KM', "1-OCT-21", "Linux", "Advanced", true, "lpic-2.jpg","https://n00bs.fablab.ba/?page=stranice/ba/lpic2"),
      new Course("FreeBsd Specialist", "Namijenjeno za administratore FreeBSD OS-a i aplikacija.", "https://n00bs.fablab.ba/?page=stranice/ba/freebsd", 250+'KM', "1-OCT-21", "Linux", "Basic", true, "bsdspec.jpg","https://n00bs.fablab.ba/?page=stranice/ba/freebsd"),
  ];
  
  var category = '';
  var price = -1;
  var level = '';
  function ShowAll(){
      category = '';
      price = -1;
      level = ''
      fillWithData();
  }
  function categoryFilter(filter){
      if(category != filter)
          price = -1;
      category = filter;
      fillWithData();
  }
  
  function priceFilter(filter){
      price = filter;
      fillWithData();
  }
  
  function levelFilter(filter){
      level = filter;
      fillWithData();
  }
  
  function fillWithData(){
      const wrapper = $(".coursesWrapper");
      wrapper.html('');
      var filterArray = courses;
      if(category){
          filterArray = courses.filter(x=>{
              return x.category == category;
          });
      }
      if(price == 1){
          filterArray = filterArray.filter(x=>{
              return x.paid == true
          });
      }else if(price == 0){
          filterArray = filterArray.filter(x=>{
              return x.paid == false
          });
      }
      if(level){
          filterArray = filterArray.filter(x=>{
              return x.level == level
          });
      }
      
      filterArray.forEach(c => {
          if(c.drugiUrl)
          wrapper.append('<div class="cardEdu"><div class="cardEdu-header"><a href="'+c.link+'" target="_blank"><img src="../../slike/'+c.slika+'" alt=" " /></a></div><h1>'+c.name+'</h1><p>'+c.description+'<span style="color: #69AAD6;cursor: pointer;"><a href="'+c.link+'" target="_blank"><br>Detaljnije...</a></span></p><div style="flex-wrap: wrap; display: flex; justify-content:space-between; width: 100%;"><div style="color:green;">'+c.price+'</div><div style="color:#525252;" style="color:#525252;">'+c.date+'</div><div class="tagEdu tag-tealEdu"><a href="'+c.drugiUrl+'" target="_blank"> UPIŠI SE</a></div></div></div></div>');
          else 
          wrapper.append('<div class="cardEdu"><div class="cardEdu-header"><a href="'+c.link+'" target="_blank"><img src="../../slike/'+c.slika+'" alt=" " /></a></div><h1>'+c.name+'</h1><p>'+c.description+'<span style="color: #69AAD6;cursor: pointer;"><a href="'+c.link+'" target="_blank"><br>Detaljnije...</a></span></p><div style="flex-wrap: wrap; display: flex; justify-content:space-between; width: 100%;"><div style="color:green;">'+c.price+'</div><div style="color:#525252;" style="color:#525252;">'+c.date+'</div><div class="tagEdu tag-tealEdu" onclick="openModal(\''+c.name+'\')">UPIŠI SE</div></div></div></div>');
      });
  }
  
  function openModal(nazivKursa) {
      document.getElementById("forma").style.display = "block";
      document.getElementById("courseNameForm").innerHTML = nazivKursa;
      document.getElementById("classroom").value = nazivKursa;
  
  }
  
  