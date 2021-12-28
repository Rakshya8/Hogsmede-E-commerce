require('./bootstrap');
import 'slick-carousel/slick/slick';
document.getElementById('menu-open').addEventListener('click',() => 
{
    
    document.getElementById('menu-items').classList.toggle("hidden");
    document.getElementById('menu-close').classList.toggle("hidden");
    document.getElementById('menu-open').classList.toggle("hidden");


})

document.getElementById('menu-close').addEventListener('click',() => 
{
    
    document.getElementById('menu-items').classList.toggle("hidden");
    document.getElementById('menu-close').classList.toggle("hidden");
    document.getElementById('menu-open').classList.toggle("hidden");


})
  $('.responsive').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });



  