<template>
    <!--Footer-->
    <footer class="site-footer style-2 bg-dark" id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 d-flex align-items-center">
                        <div v-if='false' class="footer-logo">
                            <a href="#" class="logo-white"><img src="/assets/images/logo-white.png" alt="/"></a>
                        </div>
                        <h2 class="footer-title"> YMH-OFFICIEL </h2>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <h6 class="footer-subtitle">Liens</h6>
                        <p class="text"> Nous suivre sur nos réseaux </p>
                        <div class="dz-social-icon style-1 dz-hover-move white m-b30">
                            <ul>
                                <li style="transform: translate(0px, 0px) scale(1);">
                                    <a target="_blank" href="https://www.facebook.com/ymh-officiel/">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li style="transform: translate(-0.1px, 0px) scale(1);">
                                    <a target="_blank" href="https://twitter.com/ymh-officiel">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li style="transform: translate(0px, 0px) scale(1);">
                                    <a target="_blank" href="https://www.instagram.com/ymh-officiel/">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li style="transform: translate(0px, 0px) scale(1);">
                                    <a target="_blank" href="#">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom Part -->
        <div class="container">
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-xl-8 col-lg-7 col-md-12">
                        <div class="footer-menu">
                            <ul class="">
                                <li class="active">
                                    <Link :href="route('home')" >
                                        Accueil
                                    </Link>
                                </li>
                                <li>
                                    <Link :href="route('about-us')" >
                                        A propos
                                    </Link>
                                </li>
                                <li>
                                    <Link :href="route('contact-us')" >
                                        Contact
                                    </Link>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-12 text-lg-end">
            <span class="copyright-text">
              <a href="#" target="_blank">
                YMH-OFFICIEL</a> © <span class="current-year">2024</span>
              . Tous droits réservés.
            </span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer -->
</template>

<script setup>
import { Link } from "@inertiajs/vue3"
</script>


<style scoped lang='scss'>

</style>
