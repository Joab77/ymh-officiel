<template>
  <Header />
  <slot />
  <Footer v-if="$route.name !== 'front-contact'" />
</template>

<script setup>

import '/public/assets/front/js/jquery.min.js'
import '/public/assets/front/vendor/bootstrap/js/bootstrap.bundle.min.js'


import Header from '@/layouts/components/front/Header.vue'
import Footer from '@/layouts/components/front/Footer.vue'
</script>

<style>
@import "/public/assets/front/vendor/animate/animate.css";
@import "/public/assets/front/css/style.css";

</style>
