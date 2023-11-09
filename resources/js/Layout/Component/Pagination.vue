<template>
    <div class="flex gap-1">
      <Link
        v-for="(link, index) in links" 
        :key="index" class="py-2 px-3 rounded-md text-xs" 
        :href="link.url" 
        :class="{'bg-green-500 dark:bg-slate-800 text-gray-300': link.active}"
        v-html="link.label"
      />
    </div>
  </template>
  
  <script setup>
  import {Link} from '@inertiajs/vue3'
  defineProps({links: Array})
  </script>