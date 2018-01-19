
(function(){

  function navBackground (setColor) {
    if (setColor) {
      document.body.classList.add('out-top')
    } else {
      document.body.classList.remove('out-top')
    }
  }

  window.onscroll = function (event) {
    navBackground(window.scrollY > (window.innerHeight / 2));
  };

  navBackground(window.scrollY > (window.innerHeight / 2));
})()