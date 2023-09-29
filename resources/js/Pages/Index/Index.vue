<template>
    <!-- <div class="bg-emerald-600"> -->
        <div class="absolute h-screen w-full bg-[linear-gradient(to_bottom,rgba(5,150,105,1),rgba(110,231,183,0.8))] dark:hidden min-h-75"></div>
        <!-- sidenav  -->
             <SideNav/>
        <!-- sidenav  -->
        <!-- rgb(110 231 183 / var(--tw-bg-opacity)); -->

        <MainLayout>
    
        </MainLayout>
        <!-- fixed plugin  -->
    <FixLayout />
        <!-- end fixed plugin  -->
    <!-- </div> -->
</template>
<script setup>
// import { Link } from "@inertiajs/vue3";
import MainLayout from "@/Layout/MainLayout.vue";
import SideNav from "@/Layout/SideNav.vue";
import FixLayout from "@/Layout/FixLayout.vue";
defineProps(["message"]);
</script>
<script></script>
