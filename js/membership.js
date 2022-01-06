var isMobile = {
    Android: function () {
      return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function () {
      return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function () {
      return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function () {
      return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function () {
      return navigator.userAgent.match(/IEMobile/i);
    },
    any: function () {
      return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
  };
  function magic(selected) {
    if (!isMobile.any()) {
      var cards = document.getElementsByClassName("flip-card");
      /*console.log(selected)
      console.log(cards.length);*/
      for (let i = 0; i < cards.length; i++) {
        if (selected == cards.length)
          cards[i].style.transform = 'translateX(-150px)';
        else {
          if (i < selected) {
            cards[i].style.transform = 'translateX(-150px)';
          } else {
            cards[i].style.transform = 'translateX(150px)';
          }
        }
      }
      cards[selected].style.transform = 'translateX(0px)';
    }
  }

  function magicReverse(selected) {
    if (!isMobile.any()) {
      var cards = document.getElementsByClassName("flip-card");
      for (let i = 0; i < cards.length; i++) {
        cards[i].style.transform = 'translateX(0px)';
      }
    }
  }
  function flipCard(selected) {
    var cards = document.getElementsByClassName("flip-card-inner");
    var seemore = document.getElementsByClassName("see_more");
    for (let index = 0; index < cards.length; index++) {
      cards[index].classList.remove('transform');
      seemore[index].style.display = "flex";
    }
    cards[selected].classList.add('transform');
    seemore[selected].style.display = "none";
  }