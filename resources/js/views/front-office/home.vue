<template>
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
                    <router-link :to="{name: 'front-item-detail', params: {id: 1}}">
                      <img src="/images/album-release.jpg" alt="/">
                    </router-link>
                  </div>
                  <div class="dz-info">
                    <h5 class="dz-title">
                      <router-link :to="{name: 'front-item-detail', params: {id: 1}}">Bad Guy (Original Mix)</router-link>
                    </h5>
                    <h6 class="dz-subtitle">
                      <router-link :to="{name: 'front-item-detail', params: {id: 1}}">
                        Billie Eilish
                      </router-link>
                    </h6>
                  </div>
                </div>
              </li>
              <li class="card-container col-lg-3 col-md-6 col-sm-6 m-b30 All krautrock trap">
                <div class="album-box style-3">
                  <div class="dz-media">
                    <router-link :to="{name: 'front-item-detail', params: {id: 2}}">
                      <img src="/images/album-release.jpg" alt="/">
                    </router-link>
                  </div>
                  <div class="dz-info">
                    <h5 class="dz-title">
                      <router-link :to="{name: 'front-item-detail', params: {id: 2}}">Bad Guy (Original Mix)</router-link>
                    </h5>
                    <h6 class="dz-subtitle">
                      <router-link :to="{name: 'front-item-detail', params: {id: 2}}">
                        Billie Eilish
                      </router-link>
                    </h6>2
                  </div>
                </div>
              </li>
              <li class="card-container col-lg-3 col-md-6 col-sm-6 m-b30 All minimal spicy beat">
                <div class="album-box style-3">
                  <div class="dz-media">
                    <router-link :to="{name: 'front-item-detail', params: {id: 3}}">
                      <img src="/images/album-release.jpg" alt="/">
                    </router-link>
                  </div>
                  <div class="dz-info">
                    <h5 class="dz-title">
                      <router-link :to="{name: 'front-item-detail', params: {id: 3}}">Bad Guy (Original Mix)</router-link>
                    </h5>
                    <h6 class="dz-subtitle">
                      <router-link :to="{name: 'front-item-detail', params: {id: 3}}">
                        Billie Eilish
                      </router-link>
                    </h6>
                  </div>
                </div>
              </li>
              <li class="card-container col-lg-3 col-md-6 col-sm-6 m-b30 All drink trap">
                <div class="album-box style-3">
                  <div class="dz-media">
                    <router-link :to="{name: 'front-item-detail', params: {id: 4}}">
                      <img src="/images/album-release.jpg" alt="/">
                    </router-link>
                  </div>
                  <div class="dz-info">
                    <h5 class="dz-title">
                      <router-link :to="{name: 'front-item-detail', params: {id: 4}}">Bad Guy (Original Mix)</router-link>
                    </h5>
                    <h6 class="dz-subtitle">
                      <router-link :to="{name: 'front-item-detail', params: {id: 4}}">
                        Billie Eilish
                      </router-link>
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
</template>

<script setup>

import Hero from '@/layouts/components/front/Hero.vue'
</script>

<style scoped lang='scss'>

</style>
