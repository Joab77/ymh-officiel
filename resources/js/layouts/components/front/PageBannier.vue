<template>
  <!-- Banner  -->
  <div class="dz-bnr-inr style-1 dz-bnr-inr-sm" :style="{ backgroundImage: 'url(' + bgImage + ')' }">
    <div class="container">
      <div class="dz-bnr-inr-entry">
        <h1>{{ title }}</h1>
        <!-- Breadcrumb Row -->
        <nav aria-label="breadcrumb" class="breadcrumb-row">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ breadcrumb }}</li>
          </ul>
        </nav>
        <!-- Breadcrumb Row End -->
      </div>
    </div>
  </div>
  <!-- Banner End -->
</template>


<script setup>

import { defineProps } from 'vue'

defineProps({
  bgImage: String
})

</script>

<style scoped lang='scss'>

</style>
