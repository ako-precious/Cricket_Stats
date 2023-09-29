<template>
 
          <div
              id="fixed-plugin-card"
              class="z-sticky backdrop-blur-2xl backdrop-saturate-200 dark:bg-slate-850/80 shadow-3xl w-90 ease -right-90 fixed top-0 left-auto flex h-full min-w-0 flex-col break-words rounded-none border-0 bg-white/80 bg-clip-border px-2.5 duration-200"
          >
          <slot></slot>
          </div>
     
  </template>
  <script setup>
  import { Link } from "@inertiajs/vue3";
  
  
  defineProps(["message"]);
  </script>
  
  <!-- <script>
  
  export default {
    name: 'componentA',
    components: {
      MyModal
    },
    methods: {
      openModal: function () {
          fixedPluginCard.classList.toggle("-right-90");
            fixedPluginCard.classList.toggle("right-0");
      },
      // otherMethods:...
    }
  }
  </script> -->
  