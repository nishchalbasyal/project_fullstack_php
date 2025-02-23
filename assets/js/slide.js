 
  const slides = document.querySelectorAll(".img_slider");
  const circles = document.querySelectorAll(".slider_circle");

  let currentSlide = 0;

  function showSlide(slideIndex) {
    slides.forEach((slide) => {
      slide.style.display = "none";
    });

    circles.forEach((circle) => {
      circle.querySelectorAll(".round_box").forEach((box) => {
        box.classList.remove("active");
      });
    });

    slides[slideIndex].style.display = "flex";

    const activeCircle = circles[slideIndex].querySelector(
      `.circ-${slideIndex + 1}`
    );
    if (activeCircle) {
      activeCircle.classList.add("active");
    }
  }

  function nextSlide() {
    currentSlide++;

    if (currentSlide >= slides.length) {
      currentSlide = 0;
    }

    showSlide(currentSlide);
  }

  showSlide(currentSlide);

  setInterval(nextSlide, 5000);
 
