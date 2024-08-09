<template>
  <!-- Banner  -->
  <div class="dz-bnr-inr" :class="$slots.customContent ?  'style-2' :  'style-1'" :style="{ backgroundImage: 'url(' + displayBg + ')' }">
    <div v-if='!$slots.customContent' class="container">
      <div class="dz-bnr-inr-entry">
        <h1>{{ title }}</h1>
      </div>
    </div>
    <slot name="customContent" />
  </div>
  <!-- Banner End -->
</template>


<script setup>

import { defineProps } from 'vue'

const props = defineProps({
  bgImage: { type: String, default: '/images/bannier.jpg' },
  title: { type: String }
})

const displayBg = computed(() => props.bgImage ? props.bgImage : '/images/bannier.jpg')

</script>

<style scoped lang='scss'>

</style>
