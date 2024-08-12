<template>
    <DefaultLayout>
        <div class="page-content bg-white">
            <Hero />
            <section class="content-inner bg-white">
                <div class="container">
                    <div class="row justify-content-between align-items-end border-bottom m-lg-b50 m-b10">
                        <div class="text-center text-xl-start col-xl-6 p-lg-0">
                            <div class="section-head  style-1 m-0">
                                <h5 class="sub-title wow flipInX" data-wow-delay="0.2s">Dernières publications</h5>
                                <h2 class="title wow flipInX" data-wow-delay="0.4s">Dernières publications</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <ul id="masonry" class="row">
                                <li class="card-container col-lg-3 col-md-6 col-sm-6 m-b30 All drink krautrock beat">
                                    <div class="album-box style-3">
                                        <div class="dz-media">
                                            <Link :href="route('item-detail')">
                                            <img src="/assets/images/album-release.jpg" alt="/">
                                            </Link>
                                        </div>
                                        <div class="dz-info">
                                            <h5 class="dz-title">
                                                <Link :href="route('item-detail')">Bad Guy (Original Mix)</Link>
                                            </h5>
                                            <h6 class="dz-subtitle">
                                                <Link :href="route('item-detail')">
                                                    Billie Eilish
                                                </Link>
                                            </h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="card-container col-lg-3 col-md-6 col-sm-6 m-b30 All krautrock trap">
                                    <div class="album-box style-3">
                                        <div class="dz-media">
                                            <Link :href="route('item-detail')">
                                                <img src="/assets/images/album-release.jpg" alt="/">
                                            </Link>
                                        </div>
                                        <div class="dz-info">
                                            <h5 class="dz-title">
                                                <Link :href="route('item-detail')">Bad Guy (Original Mix)</Link>
                                            </h5>
                                            <h6 class="dz-subtitle">
                                                <Link :href="route('item-detail')">
                                                    Billie Eilish
                                                </Link>
                                            </h6>2
                                        </div>
                                    </div>
                                </li>
                                <li class="card-container col-lg-3 col-md-6 col-sm-6 m-b30 All minimal spicy beat">
                                    <div class="album-box style-3">
                                        <div class="dz-media">
                                            <Link :href="route('item-detail')">
                                                <img src="/assets/images/album-release.jpg" alt="/">
                                            </Link>
                                        </div>
                                        <div class="dz-info">
                                            <h5 class="dz-title">
                                                <Link :href="route('item-detail')">Bad Guy (Original Mix)</Link>
                                            </h5>
                                            <h6 class="dz-subtitle">
                                                <Link :href="route('item-detail')">
                                                    Billie Eilish
                                                </Link>
                                            </h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="card-container col-lg-3 col-md-6 col-sm-6 m-b30 All drink trap">
                                    <div class="album-box style-3">
                                        <div class="dz-media">
                                            <Link :href="route('item-detail')">
                                                <img src="/assets/images/album-release.jpg" alt="/">
                                            </Link>
                                        </div>
                                        <div class="dz-info">
                                            <h5 class="dz-title">
                                                <Link :href="route('item-detail')">Bad Guy (Original Mix)</Link>
                                            </h5>
                                            <h6 class="dz-subtitle">
                                                <Link :href="route('item-detail')">
                                                    Billie Eilish
                                                </Link>
                                            </h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </DefaultLayout>
</template>


<script setup>
import { Link } from '@inertiajs/vue3';
import Hero from '@/Components/Hero.vue'
import DefaultLayout from '@/Layouts/DefaultLayout.vue'

</script>

<style scoped lang='scss'>

</style>
