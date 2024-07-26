<template>
  <div>
    <h1> Account profile </h1>
  </div>
</template>
<script setup>
import { useRoute } from 'vue-router'

const route = useRoute()
const activeTab = ref(route.params.tab)

// tabs
const tabs = [
  {
    title: 'Account',
    icon: 'ri-group-line',
    tab: 'account',
  },
  {
    title: 'Security',
    icon: 'ri-lock-line',
    tab: 'security',
  },
  {
    title: 'Notifications',
    icon: 'ri-notification-3-line',
    tab: 'notification',
  },
]
</script>

