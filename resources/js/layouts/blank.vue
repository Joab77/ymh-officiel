<template>
  <VApp>
    <div class="layout-wrapper layout-blank">
      <div v-if='false' class='absolute inset-x-0 top-0 text-center'>
        <img
          :src="authV1Tree2"
          :width="150"
          alt='bottom_decoration_right'
        />
      </div>
      <RouterView />
    </div>
  </VApp>
</template>

<style>
.layout-wrapper.layout-blank {
  flex-direction: column;
}
</style>
<script setup>
import authV1Tree2 from '@images/pages/auth-v1-tree-2.png'
</script>
