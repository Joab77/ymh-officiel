<template>
  <header class="site-header mo-left header header-transparent header-text-white style-1 border-white">
    <!-- Main Header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
      <div class="main-bar clearfix">
        <div class="container-fluid clearfix d-lg-flex d-block">
          <!-- Website Logo -->
          <div class="logo-header mostion">
            <a href="#" class="logo-dark">
              <h5> YHM-OFFICIEL </h5>
<!--              <img src="/images/logo.png" alt="/">-->
            </a>

            <a href="#" class="logo-white">
              <h5 class='text-white'> YMH-OFFICIEL </h5>
<!--              <img src="/images/logo-white.png" alt="/">-->
            </a>
          </div>

          <!-- Nav Toggle Button -->
          <button
            class="navbar-toggler collapsed navicon justify-content-end"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
          </button>


          <!-- Main Nav -->
          <div class="header-nav navbar-collapse collapse justify-content-center" id="navbarNavDropdown">
            <div class="logo-header">
              <a href="#" class="logo-dark"><img src="/images/logo.png" alt="/"></a>
            </div>
            <ul class="nav navbar-nav dark-nav">
              <li>
                <router-link :to="{name: 'front-home'}">
                  <span>Accueil</span>
                </router-link>
              </li>
              <li>
                <router-link :to="{name: 'front-about'}"><span>A propos</span></router-link>
              </li>
              <li>
                <router-link :to="{name: 'front-contact'}"><span>Contact</span></router-link>
              </li>
            </ul>
            <div class="dz-social-icon">
              <ul>
                <li><a target="_blank" href="https://www.facebook.com/dexignzone"><i class="fab fa-facebook-f"></i></a></li>
                <li><a target="_blank" href="https://twitter.com/dexignzones"><i class="fab fa-twitter"></i></a></li>
                <li><a target="_blank" href="https://www.linkedin.com/showcase/3686700/admin/"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a target="_blank" href="https://www.instagram.com/dexignzone/"><i class="fab fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>

          <!-- EXTRA NAV -->
          <div class="extra-nav">
            <div class="extra-cell">
              <ul class="header-right">
                <li class="nav-item search-link">
                  <a class="nav-link" href="/auth/login" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                    <i class="fa-solid fa-user-alt"></i>
                  </a>
                </li>
                <li class="nav-item menu-btn">
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Main Header End -->
  </header>
</template>

<script setup>

import { onMounted } from 'vue'
function fixedHeader() {
  var handleScreenLock = function(){
    $('.navbar-toggler').on('click',function(){
      $('body').toggleClass('screen-lock');
      $('.styleswitcher, .DZ-theme-btn, .demo-btn-bx').toggleClass('	');
    });
  }
  window.addEventListener('scroll', function() {
    var menu = document.querySelector('.sticky-header');
    if (menu) {
      if (window.scrollY > menu.offsetTop) {
        menu.classList.add('is-fixed');
      } else {
        menu.classList.remove('is-fixed');
      }
    }
  });
}

onMounted(() => {
  fixedHeader()
})

</script>

<style scoped lang='scss'>

</style>
