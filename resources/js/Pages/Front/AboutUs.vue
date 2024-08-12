<template>
    <DefaultLayout>
        <div class="page-content bg-white">
            <PageBanner title="A propos" bg-image='/assets/images/main-slider/slider3/shap.jpg' />
            <section class="content-inner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12 col-sm-12 m-b30 m-lg-b100">
                            <div class="dz-media split-box wow fadeInUp" data-wow-delay="0.2s">
                                <img src="/assets/images/about.jpg" alt="/">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 m-b30 m-lg-b40">
                            <div class="about-box style-3 wow fadeInUp" data-wow-delay="0.4s">
                                <h5 class="title">
                                    Lorem ipsum dolor sit amet
                                </h5>
                                <p class="text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae eaque ipsum iste maxime nemo perspiciatis provident, reprehenderit soluta suscipit? Amet, animi consequatur doloremque ipsa .
                                </p>
                                <div class="dz-social-icon style-1 dz-hover-move dark m-b30">
                                    <ul>
                                        <li style="transform: translate(0px, 0px) scale(1);">
                                            <a target="_blank" href="#">
                                                <i class="flaticon flaticon-dribble"></i>
                                            </a>
                                        </li>
                                        <li style="transform: translate(-0.1px, 0px) scale(1);">
                                            <a target="_blank" href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li style="transform: translate(-0.1px, 0px) scale(1);">
                                            <a target="_blank" href="#">
                                                <i class="flaticon flaticon-spotify"></i>
                                            </a>
                                        </li>
                                        <li style="transform: translate(0px, -0.1px) scale(1);">
                                            <a target="_blank" href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </DefaultLayout>
</template>

<script setup>

import PageBanner from '@/components/PageBanner.vue'
import DefaultLayout from '@/Layouts/DefaultLayout.vue'
</script>

<style scoped lang='scss'>

</style>
