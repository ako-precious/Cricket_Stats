<template>
    <div class="absolute w-full bg-emerald-600 dark:hidden min-h-75"></div>
    <!-- sidenav  -->
         <SideNav/>
    <!-- sidenav  -->
 
    <MainLayout>

    </MainLayout>
    <!-- fixed plugin  -->

    <!-- end fixed plugin  -->
</template>
<script setup>
// import { Link } from "@inertiajs/vue3";
import MainLayout from "@/Layout/MainLayout.vue";
import SideNav from "@/Layout/SideNav.vue";
defineProps(["message"]);
</script>
<script></script>
