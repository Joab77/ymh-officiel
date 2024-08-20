<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import { Link } from '@inertiajs/vue3';

const sidebarOpen = ref(false);
</script>

<template>
    <div class="flex min-h-screen bg-gray-100">
        <!-- Sidebar -->
        <aside
            :class="{
                'translate-x-0 ease-out z-10': sidebarOpen,
                '-translate-x-full ease-in': !sidebarOpen,
            }"
            class="fixed inset-y-0 left-0 w-56 bg-white border-r border-gray-200 transform transition duration-200 ease-in-out lg:translate-x-0 lg:static lg:inset-0"
        >
            <div class="flex items-center justify-center h-16 border-b border-gray-100">
                <Link :href="route('dashboard')">
                    <ApplicationLogo class="block h-9 w-auto fill-current text-gray-800" />
                </Link>
            </div>

            <!-- Navigation Links -->
            <nav class="mt-4 flex flex-col space-y-2">
                <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                    Dashboard
                </NavLink>
                <NavLink :href="route('items.index')" :active="route().current('items.index')">
                    Produits
                </NavLink>
                <NavLink :href="route('categories.index')" :active="route().current('categories.index')">
                    Categories
                </NavLink>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="bg-white shadow flex items-center justify-between px-6 py-4 lg:px-8">
                <div class="flex items-center space-x-4">
                    <!-- Hamburger Button for Mobile -->
                    <button
                        @click="sidebarOpen = !sidebarOpen"
                        class="lg:hidden text-gray-500 hover:text-gray-700 focus:outline-none"
                    >
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>

                    <!-- Avatar -->
                    <img
                        src="https://via.placeholder.com/40"
                        alt="User Avatar"
                        class="h-10 w-10 rounded-full"
                    />
                    <span class="text-gray-800 font-medium">
                        {{ $page.props.auth.user.name }}
                    </span>
                </div>

                <!-- Additional Navigation (optional) -->
                <nav class="flex items-center space-x-6">
                    <NavLink :href="route('home')" >
                        Go back to site
                    </NavLink>
                    <Dropdown align="right" width="48">
                        <template #trigger>
                            <button
                                type="button"
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"
                            >
                                {{ $page.props.auth.user.name }}
                                <svg
                                    class="ms-2 -me-0.5 h-4 w-4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                            </button>
                        </template>

                        <template #content>
                            <DropdownLink :href="route('profile.edit')"> Profile </DropdownLink>
                            <DropdownLink :href="route('logout')" method="post" as="button">
                                Log Out
                            </DropdownLink>
                        </template>
                    </Dropdown>
                </nav>
            </header>

            <!-- Page Content -->
            <main class="flex-1 p-6">
                <slot />
            </main>
        </div>

        <!-- Backdrop for mobile sidebar -->
        <div
            v-if="sidebarOpen"
            @click="sidebarOpen = false"
            class="fixed inset-0 bg-black bg-opacity-50 lg:hidden"
        ></div>
    </div>
</template>
