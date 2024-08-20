<script setup>

import { Head } from '@inertiajs/vue3'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <h1> Item list </h1>
    </AuthenticatedLayout>
</template>

<style scoped lang='scss'>

</style>
