$(document).ready(function() {

  $('#custom-carousel').carousel({
    interval: 4000,
    pause: "hover"
  });

  function randomFloat(min, max) {
    return Math.random() * (max - min) + min;
  }

  function animateFloatingElements() {
    $('.floating, .floating1').each(function() {
      let x = randomFloat(-10, 10);
      let y = randomFloat(-10, 10);
      $(this).css({
        transform: `translate(${x}px, ${y}px)`,
        transition: 'transform 2s ease-in-out'
      });
    });
  }

  setInterval(animateFloatingElements, 2000);

  document.querySelectorAll('.navbar-nav .dropdown > a').forEach(link => {
    link.addEventListener('click', function(e) {
      const href = this.getAttribute('href');
      if (href && href !== '#') {
        window.location.href = href;
      }
    });
  });

  if (window.location.pathname.endsWith("index.php") || window.location.pathname === "/") {
    setTimeout(function() {
      const popup = document.getElementById("popup-poster");
      if (popup) popup.style.display = "flex";
    }, 1000);

    const closeBtn = document.getElementById("close-btn");
    if (closeBtn) {
      closeBtn.addEventListener("click", function() {
        document.getElementById("popup-poster").style.display = "none";
      });
    }

    window.addEventListener("click", function(event) {
      const popup = document.getElementById("popup-poster");
      if (event.target === popup) {
        popup.style.display = "none";
      }
    });
  }

  const popup = document.getElementById('imagePopup');
  const popupImg = document.getElementById('popupImg');
  const closeBtn = document.querySelector('.close');
  const images = document.querySelectorAll('.zoomable');

  images.forEach(image => {
    image.addEventListener('click', () => {
      popup.style.display = 'flex';
      popupImg.src = image.src;
    });
  });

  closeBtn.onclick = () => {
    popup.style.display = 'none';
  };

  popup.onclick = (event) => {
    if (event.target === popup) {
      popup.style.display = 'none';
    }
  };
});
