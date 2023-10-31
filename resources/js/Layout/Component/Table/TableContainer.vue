<template>
   
        <div class="w-full p-6 mx-auto">
            <div class="justify-between sm:flex">
                <div>
                    <a
                        href="javascript:;"
                        class="inline-block px-5 py-2.5 mb-4 text-sm font-bold leading-normal text-center text-white align-middle transition-all ease-in border-solid border border-white/75 rounded-lg shadow-md cursor-pointer hover:-translate-y-px active:opacity-85 hover:shadow-xs bg-white/10 hover:bg-transparent tracking-tight-rem bg-150 bg-x-25"
                        >New order</a
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
                        <ul
                            dropdown-menu=""
                            class="z-100 min-w-44 text-sm shadow-3xl duration-250 transform-dropdown before:duration-350 before:font-awesome before:ease before:text-5.5 dark:bg-slate-850 pointer-events-none absolute top-1.5 right-2 left-auto m-0 mt-2 block origin-top cursor-pointer list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all will-change-transform before:absolute before:top-0 before:right-5 before:left-auto before:z-40 before:text-white before:transition-all before:content-['\f0d8'] sm:-mr-6"
                        >
                            <li class="relative">
                                <a
                                    class="py-1.2 lg:ease clear-both block w-full whitespace-nowrap rounded-lg px-4 font-normal text-slate-500 transition-colors hover:bg-gray-200 hover:text-slate-700 focus:bg-gray-200 focus:text-slate-700 dark:text-white dark:hover:bg-gray-200/80 dark:hover:text-slate-700 lg:duration-300"
                                    href="javascript:;"
                                    >Status: Paid</a
                                >
                            </li>
                            <li class="relative">
                                <a
                                    class="py-1.2 lg:ease clear-both block w-full whitespace-nowrap rounded-lg px-4 font-normal text-slate-500 transition-colors hover:bg-gray-200 hover:text-slate-700 focus:bg-gray-200 focus:text-slate-700 dark:text-white dark:hover:bg-gray-200/80 dark:hover:text-slate-700 lg:duration-300"
                                    href="javascript:;"
                                    >Status: Refunded</a
                                >
                            </li>
                            <li class="relative">
                                <a
                                    class="py-1.2 lg:ease clear-both block w-full whitespace-nowrap rounded-lg px-4 font-normal text-slate-500 transition-colors hover:bg-gray-200 hover:text-slate-700 focus:bg-gray-200 focus:text-slate-700 dark:text-white dark:hover:bg-gray-200/80 dark:hover:text-slate-700 lg:duration-300"
                                    href="javascript:;"
                                    >Status: Canceled</a
                                >
                            </li>
                            <li class="relative">
                                <hr
                                    class="h-px my-2 bg-gradient-to-r from-transparent via-black/40 to-transparent"
                                />
                            </li>
                            <li class="relative">
                                <a
                                    class="py-1.2 text-danger lg:ease clear-both block w-full whitespace-nowrap rounded-lg px-4 font-normal text-red-600 transition-colors hover:bg-gray-200 focus:bg-gray-200 dark:hover:bg-gray-200/80 lg:duration-300"
                                    href="javascript:;"
                                    >Remove Filter</a
                                >
                            </li>
                        </ul>
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
