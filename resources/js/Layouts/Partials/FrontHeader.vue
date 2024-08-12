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
                        </a>

                        <a href="#" class="logo-white">
                            <h5 class='text-white'> YMH-OFFICIEL </h5>
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
                    <div class="header-nav navbar-collapse justify-content-center" id="navbarNavDropdown">
                        <div class="logo-header">
                            <a href="#" class="logo-dark">
                                YMH-Officiel
                            </a>
                        </div>
                        <ul class="nav navbar-nav dark-nav">
                            <li>
                                <Link :href="route('home')">
                                    <span>Accueil</span>
                                </Link>
                            </li>
                            <li>
                                <Link :href="route('about-us')"><span>A propos</span></Link>
                            </li>
                            <li>
                                <Link :href="route('contact-us')"><span>Contact</span></Link>
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
                                <li class="nav-item search-link p-3 bg-amber-300">
                                    <Link class="nav-link" :href="route('login')">
                                        <i class="fa-solid fa-user-alt"></i>
                                    </Link>
                                </li>
                                <li class="nav-item p-3 mx-2 bg-amber-600">
                                    <Link>
                                        <span>
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </span>
                                    </Link>
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

import { Link } from '@inertiajs/vue3';
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
