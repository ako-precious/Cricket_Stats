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
                        class="after:content-['\f107'] after:text-white after:ease-in-out after:font-awesome-5-free after:ml-auto after:inline-block after:rotate-180 after:font-bold after:ml-1 after:antialiased after:transition-all after:duration-200 inline-block px-5 py-2.5 mb-4 text-sm font-bold leading-normal text-center align-middle transition-all ease-in bg-white/10 hover:bg-transparent border border-solid rounded-lg shadow-none cursor-pointer select-auto hover:-translate-y-px tracking-tight-rem active:opacity-85 active:shadow-xs border-white/75 text-white hover:opacity-75"
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
        <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 flex-0">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border"
                >
                    <div class="overflow-x-auto ps">
                        <div
                            class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns"
                        >
                            <div class="m-6">
                                <div class="dataTable-search">
                                    <input
                                        class="dataTable-input focus:shadow-primary-outline dark:text-white/80 ease focus:outline-none focus:transition-shadow"
                                        placeholder="Search..."
                                        type="text"
                                    />
                                </div>
                            </div>
                            <div class="dataTable-container">
                                <table
                                    class="table"
                                    datatable=""
                                    id="datatable-search-list"
                                >
                                    <thead class="thead-light">
                                        <tr>
                                            <th
                                                data-sortable=""
                                                style="width: 10.893%"
                                            >
                                                <a
                                                    href="#"
                                                    class="dataTable-sorter"
                                                    >Id</a
                                                >
                                            </th>
                                            <th
                                                data-sortable=""
                                                style="width: 20.5387%"
                                            >
                                                <a
                                                    href="#"
                                                    class="dataTable-sorter"
                                                    >Country Name</a
                                                >
                                            </th>
                                            <th
                                                data-sortable=""
                                                style="width: 20.045%"
                                            >
                                                <a
                                                    href="#"
                                                    class="dataTable-sorter"
                                                    >Slug</a
                                                >
                                            </th>
                                            <th
                                                data-sortable=""
                                                style="width: 10.9122%"
                                            >
                                                <a
                                                    href="#"
                                                    class="dataTable-sorter"
                                                    >Abbr</a
                                                >
                                            </th>
                                            <th
                                                data-sortable=""
                                                style="width: 11.6402%"
                                            >
                                                <a
                                                    href="#"
                                                    class="dataTable-sorter"
                                                    >Flag
                                                </a>
                                            </th>
                                            <th
                                                data-sortable=""
                                                style="width: 10.9435%"
                                            >
                                                <a
                                                    href="#"
                                                    class="dataTable-sorter"
                                                    >Avenue</a
                                                >
                                            </th>
                                        </tr>
                                    </thead>
                                    <div v-for="team in teams" > {{ team.id }} </div>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="flex items-center">
                                                    <div
                                                        class="min-h-6 pl-7 mb-0.5 block"
                                                    >
                                                        <input
                                                            class="w-5 h-5 ease -ml-7 rounded-1.4 checked:bg-gradient-to-tl checked:from-blue-500 checked:to-violet-500 after:text-xxs after:font-awesome after:duration-250 after:ease-in-out duration-250 relative float-left mt-1 cursor-pointer appearance-none border border-solid border-slate-150 bg-white bg-contain bg-center bg-no-repeat align-top transition-all after:absolute after:flex after:h-full after:w-full after:items-center after:justify-center after:text-white after:opacity-0 after:transition-all after:content-['\f00c'] checked:border-0 checked:border-transparent checked:bg-transparent checked:after:opacity-100"
                                                            type="checkbox"
                                                            id="customCheck10"
                                                        />
                                                    </div>
                                                    <p
                                                        class="mb-0 ml-2 text-xs font-semibold leading-tight"
                                                    >
                                                        # {{ team.id }}
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="font-semibold">
                                                <span
                                                    class="my-2 text-xs leading-tight"
                                                    >2 Nov, 12:56 PM</span
                                                >
                                            </td>
                                            <td
                                                class="text-xs font-semibold leading-tight"
                                            >
                                                <div class="flex items-center">
                                                    <button
                                                        class="active:shadow-xs active:opacity-85 ease-in leading-pro text-xs bg-150 bg-x-25 rounded-3.5xl p-1.2 h-6 w-6 cursor-pointer items-center border border-solid border-slate-700 bg-transparent text-center align-middle font-bold text-slate-700 shadow-none transition-all hover:bg-transparent hover:text-slate-700 hover:opacity-75 hover:shadow-none active:bg-slate-700 active:text-white hover:active:bg-transparent hover:active:text-slate-700 hover:active:opacity-75 hover:active:shadow-none mb-0 mr-2 flex align-center justify-center"
                                                    >
                                                        <i
                                                            class="fas fa-undo text-3xs"
                                                            aria-hidden="true"
                                                        ></i>
                                                    </button>
                                                    <span>Refunded</span>
                                                </div>
                                            </td>
                                            <td
                                                class="text-xs font-semibold leading-tight"
                                            >
                                                <div class="flex items-center">
                                                    <div
                                                        class="flex items-center"
                                                    >
                                                        <!-- <img
                                                                src="../../../assets/img/ivana-squares.jpg"
                                                                class="inline-flex items-center justify-center w-6 h-6 mr-2 text-xs text-white transition-all duration-200 ease-in-out rounded-xl"
                                                                alt="user image"
                                                            /> -->
                                                        <span>Anna Landa</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="text-xs font-semibold leading-tight"
                                            >
                                                <span
                                                    class="my-2 text-xs leading-tight"
                                                >
                                                    Watter Bottle India
                                                    <span
                                                        class="text-secondary ms-2"
                                                    >
                                                        x 3
                                                    </span>
                                                </span>
                                            </td>
                                            <td
                                                class="text-xs font-semibold leading-tight"
                                            >
                                                <span
                                                    class="my-2 text-xs leading-tight"
                                                    >$25,00</span
                                                >
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="dataTable-bottom">
                                <div class="dataTable-info">
                                    Showing 1 to 10 of 12 entries
                                </div>
                                <nav class="dataTable-pagination">
                                    <ul class="dataTable-pagination-list">
                                        <li class="pager">
                                            <a href="#" data-page="1">‹</a>
                                        </li>
                                        <li class="active">
                                            <a href="#" data-page="1">1</a>
                                        </li>
                                        <li class="">
                                            <a href="#" data-page="2">2</a>
                                        </li>
                                        <li class="pager">
                                            <a href="#" data-page="2">›</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px">
                            <div
                                class="ps__thumb-x"
                                tabindex="0"
                                style="left: 0px; width: 0px"
                            ></div>
                        </div>
                        <div class="ps__rail-y" style="top: 0px; right: 0px">
                            <div
                                class="ps__thumb-y"
                                tabindex="0"
                                style="top: 0px; height: 0px"
                            ></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </MainLayout>
</template>
<script setup>
// import { Link } from "@inertiajs/vue3";
import MainLayout from "@/Layout/MainLayout.vue";
// import TableLayout from "../Layout/TableLayout.vue";
defineProps({
  Teams: Array,
});
</script>
<script></script>
