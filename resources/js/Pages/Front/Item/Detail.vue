<template>
    <DefaultLayout>
        <div class="page-content bg-white">
            <PageBanner>
                <template #customContent>
                    <div class="container">
                        <div class="row align-items-center mt-10">
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                <div class="dz-bnr-inr-entry">
                                    <h3 class="title">Nom de l'album - Titre principal</h3>
                                    <div v-if='false' class="dz-player style-2 m-b30" >
                                        <h5 class="title">Écouter un extrait</h5>
<!--                                        <AudioPlayer file='audio/song1.mp3' />-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class="dvd-box" style="background-image: url(/assets/images/about.jpg);">
                                    <img src="/assets/images/dvd.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </PageBanner>
            <!-- about section -->
            <section class="content-inner">
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-lg-6 col-md-12 col-sm-12 m-b30">
                            <div class="dz-album-detail style-1">
                                <div class="dz-content">
                                    <h4 class="title m-b30"><a href="#">Nom de l'album</a></h4>
                                    <h4 class="sm-title m-b30">Tracklist</h4>
                                    <ul class="tracklist">
                                        <li>
                                            <span><a href="#">1. Track 1</a></span>
                                            <span><a href="#">03.40</a></span>
                                        </li>
                                        <li>
                                            <span><a href="#">2. Track 2</a></span>
                                            <span><a href="#">03.40</a></span>
                                        </li>
                                        <li>
                                            <span><a href="#">3. Track 3</a></span>
                                            <span><a href="#">03.40</a></span>
                                        </li>
                                        <li>
                                            <span><a href="#">4. Track 4</a></span>
                                            <span><a href="#">03.40</a></span>
                                        </li>
                                        <li>
                                            <span><a href="#">5. Track 5</a></span>
                                            <span><a href="#">03.40</a></span>
                                        </li>
                                        <li>
                                            <span><a href="#">6. Track 6</a></span>
                                            <span><a href="#">03.40</a></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 m-b30">
                            <div class="dz-album-detail style-2">
                                <div class="dz-content">
                                    <div class="dz-info">
                                        <span class="subtitle text-secondary">Description</span>
                                        <p class="text">There are many variations of passages of Lorem Ipsum the majority have suffered alteration in some form, by humour, or randomised a  words which don't.</p>
                                        <ul>
                                            <li>
                                                <strong>Label:</strong>
                                                <span> Music</span>
                                            </li>
                                            <li>
                                                <strong>Artist:</strong>
                                                <span>YHM</span>
                                            </li>
                                            <li>
                                                <strong>Release Date:</strong>
                                                <span>2024</span>
                                            </li>
                                            <li>
                                                <strong>Genres:</strong>
                                                <span> --- </span>
                                            </li>
                                            <li>
                                                <strong>People:</strong>
                                                <span>John Doe,</span>
                                                <span>Jane Doe...,</span>
                                            </li>
                                        </ul>
                                        <div>
                                            <h6 class="price">€40.60</h6>
                                        </div>
                                        <div class="btn btn-secondary meta-icon dz-carticon px-3 py-2">
                                            <i class="flaticon flaticon-shopping-cart me-1"></i>
                                            Ajouter au panier
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about section -->
        </div>
    </DefaultLayout>
</template>

<script setup>

import PageBanner from '@/Components/PageBanner.vue'
// import AudioPlayer from '@/components/AudioPlayer.vue'
import DefaultLayout from '@/Layouts/DefaultLayout.vue'
</script>

<style scoped lang='scss'>

</style>
