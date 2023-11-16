<template>
   
        <div class="w-full p-6 mx-auto">
            <div class="justify-between sm:flex">
                <div>
                    <a
                        href="javascript:;"
                        class="inline-block px-5 py-2.5 mb-4 text-sm font-bold leading-normal text-center text-white align-middle transition-all ease-in border-solid border border-white/75 rounded-lg shadow-md cursor-pointer hover:-translate-y-px active:opacity-85 hover:shadow-xs bg-white/10 hover:bg-transparent tracking-tight-rem bg-150 bg-x-25"
                        >Compare Stats</a
                    >
                </div>
                <div class="flex">
                    <div class="relative inline">
                        <a
                            href="javascript:;"
                            dropdown-trigger=""
                            class="after:content-['\f107'] after:text-white after:ease-in-out after:font-awesome-5-free after:ml-auto after:inline-block after:rotate-180 after:font-bold after:antialiased after:transition-all after:duration-200 inline-block px-5 py-2.5 mb-4 text-sm font-bold leading-normal text-center align-middle transition-all ease-in bg-white/10 hover:bg-transparent border border-solid rounded-lg shadow-none cursor-pointer select-auto hover:-translate-y-px tracking-tight-rem active:opacity-85 active:shadow-xs border-white/75 text-white hover:opacity-75"
                            aria-expanded="false"
                        >
                            Filters
                        </a>
                        
                    </div>
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
          
            <div class="flex flex-wrap -mx-3" >
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
