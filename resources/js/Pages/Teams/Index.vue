<template>
    <MainLayout>
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
            <div
                class="relative flex flex-col w-full min-w-0 mb-0 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border"
            >
                <div class="p-6 pb-0 mb-0 bg-white rounded-t-2xl">
                    <h6>Authors table</h6>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table
                            class="items-center w-full mb-0 align-top border-gray-200 text-slate-500"
                        >
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                    >
                                        Country Name
                                    </th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                    >
                                        Slug
                                    </th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                    >
                                       Abbreviation
                                    </th>
                                   
                                    <th
                                        class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                    ></th>
                                </tr>
                            </thead>
                            <tbody v-for="team in teams">

                                <tr>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent"
                                    >
                                        <div class="flex px-2 py-1">
                                            <div>
                                             
                                                <img :src="team.flag_url" class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-in-out text-sm h-9 w-9 rounded-xl" :alt="team.long_name" />
                                            </div>
                                            <div
                                                class="flex flex-col justify-center"
                                            >
                                                <h6
                                                    class="mb-0 leading-normal text-sm"
                                                >
                                                    {{ team.long_name }}
                                                </h6>
                                               
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent"
                                    >
                                        <p
                                            class="mb-0 font-semibold leading-tight text-xs"
                                        >
                                           {{ team.slug }}
                                        </p>
                                        
                                    </td>
                                    <!-- <td
                                        class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent"
                                    >
                                        <span
                                            class="bg-gradient-to-tl from-emerald-500 to-teal-400 px-3.6 text-xs rounded-1.8 py-2.2 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white"
                                            >Online</span
                                        >
                                    </td> -->
                                    <td
                                        class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent"
                                    >
                                        <span
                                            class="font-semibold leading-tight text-xs text-slate-400"
                                            >{{team.abbr}}</span
                                        >
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent"
                                    >
                                        <Link :href="`/teams/${team.id}`"
                                            class="font-semibold leading-tight text-xs text-slate-400"
                                        >
                                        <font-awesome-icon icon="fa-solid fa-eye" />
                                        </Link>
                                    </td>
                                </tr>
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </MainLayout>
</template>
<script setup>
import { Link } from "@inertiajs/vue3";
import MainLayout from "@/Layout/MainLayout.vue";
// import TableLayout from "../Layout/TableLayout.vue";
defineProps({
    teams: Array,
});
</script>
