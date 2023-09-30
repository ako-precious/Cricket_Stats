<template>
    <div
        class="absolute h-screen w-full bg-[linear-gradient(to_right_bottom,rgba(5,150,105,1),rgba(74,223,128,0.8))] dark:hidden min-h-75"
    ></div>
    <!-- sidenav  -->
    <SideNav />
    <!-- sidenav  -->
    <!-- rgb(110 231 183 / var(--tw-bg-opacity)); -->

    <main
        class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl"
    >
        <!-- Navbar -->
        <NavBar :class="classChanged" ></NavBar>
        <!-- end Navbar -->

        <!-- cards -->
        <div class="w-full px-6 py-6 mx-auto">
            <slot>Default</slot>

            <!-- footer -->
            <Footer  />
            <!-- end footer -->
        </div>
        <!-- end cards -->
    </main>
    <!-- fixed plugin  -->
    <FixLayout @click="toggleNavClass()"  />
    <!-- end fixed plugin  -->
</template>
<script setup>
// import { Link } from "@inertiajs/vue3";
import Footer from "@/Layout/FooterLayout.vue";
import NavBar from "@/Layout/NavBar.vue";
import SideNav from "@/Layout/SideNav.vue";
import FixLayout from "@/Layout/FixLayout.vue";

defineProps(["message"]);
</script>
<script>

export default {
    
    data() {
    return {
      
      classChanged: 'notfixeddiv',
    };
  },
  methods: {
   
    toggleNavClass() {
      // Toggle the value when the button is clicked
    
      this.classChanged = this.classChanged === 'notfixeddiv' ? 'fixeddiv' : 'notfixeddiv';
    }
  
  },
}
</script>

