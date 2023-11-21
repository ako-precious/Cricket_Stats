<template>
   
        <div class="w-full p-6 mx-auto">
            <div class="justify-between sm:flex transition-all duration-200 ease-in-out">
                <div>
                    <Link  :href="`/compare`">
                        <p 
                           
                            class="inline-block px-5 py-2.5 mb-4 text-sm font-bold leading-normal text-center text-white align-middle transition-all ease-in border-solid border border-white/75 rounded-lg shadow-md cursor-pointer hover:-translate-y-px active:opacity-85 hover:shadow-xs bg-white/10 hover:bg-transparent tracking-tight-rem bg-150 bg-x-25"
                            >Compare Stats </p
                        >
                    </Link>
                </div>
                <div class="flex">
                   
                    <button
                        data-type="csv"
                        type="button"
                        export-button-list=""
                        class="inline-block px-5 py-2.5 mb-4 ml-2 text-sm font-bold leading-normal text-center align-middle transition-all ease-in bg-white/10 border border-solid border-white/75 rounded-lg shadow-none cursor-pointer hover:-translate-y-px tracking-tight-rem active:opacity-85 active:shadow-xs text-white hover:bg-transparent hover:opacity-75"
                    >
                        <span>
                            <i class="leading-none ni ni-archive-2"></i>
                        </span>
                        <span>Export CSV</span>
                    </button>
                </div>
            </div>
          
            <div class="flex flex-wrap -mx-3 transition-all duration-200 ease-in-out" >
                <div class="flex-none w-full max-w-full px-3">
                    <slot>Default</slot>
                </div>
            </div>
        </div>
  
</template>
<script setup>
import { Link } from "@inertiajs/vue3";
// import TableLayout from "../Layout/TableLayout.vue";
defineProps({
    teams: Array,
});
</script>
