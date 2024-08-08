<template>
  <Header />
  <slot />
  <Footer />
  <div class="scroltop-progress scroltop-primary">
    <svg width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
  </div>
</template>

<script setup>

// import '/public/assets/front/js/jquery.min.js'
// import '/public/assets/front/vendor/bootstrap/js/bootstrap.bundle.min.js'
// import '/public/assets/front/vendor/bootstrap-select/js/bootstrap-select.min.js'
// import '/public/assets/front/vendor/magnific-popup/magnific-popup.min.css'
// import '/public/assets/front/vendor/masonry/masonry-4.2.2.js'
// import '/public/assets/front/vendor/wow/wow.js'
// import '/public/assets/front/vendor/masonry/isotope.pkgd.min.js'
// import '/public/assets/front/vendor/imagesloaded/imagesloaded.js'
// import '/public/assets/front/vendor/counter/waypoints-min.js'
// import '/public/assets/front/vendor/perfect-scrollbar/js/perfect-scrollbar.min.js'
// import '/public/assets/front/vendor/countdown/jquery.countdown.js'
// import '/public/assets/front/vendor/counter/counterup.min.js'
// import '/public/assets/front/vendor/swiper/swiper-bundle.min.css'
// import '/public/assets/front/vendor/particles/particles.js'
// import '/public/assets/front/vendor/particles/particles-app.js'
// import '/public/assets/front/js/dz.carousel.js'
// import '/public/assets/front/js/dz.ajax.js'
// import '/public/assets/front/js/custom.js'
// import '/public/assets/front/js/dznav-init.js'
// import '/public/assets/front/vendor/rangeslider/rangeslider.js'
// import '/public/assets/front/vendor/switcher/switcher.js'

// @import "/public/assets/front/vendor/bootstrap-select/css/bootstrap-select.min.css";

// @import "/public/assets/front/vendor/magnific-popup/magnific-popup.min.css";
// @import "/public/assets/front/vendor/swiper/swiper-bundle.min.css";
//
// @import "/public/assets/front/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css";
//
// @import "/public/assets/front/vendor/rangeslider/rangeslider.css";
// @import "/public/assets/front/vendor/switcher/switcher.css";

import Header from '@/layouts/components/front/Header.vue'
import Footer from '@/layouts/components/front/Footer.vue'
import Hero from '@/layouts/components/front/Hero.vue'
</script>

<style>
@import "/public/assets/front/vendor/animate/animate.css";
@import "/public/assets/front/css/style.css";

</style>
