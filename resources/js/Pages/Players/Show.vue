<template>
    <MainLayout>
        <!-- component -->
        <!-- This is an example component -->
        <div class="flex justify-center items-center">

            <div class="max-w-4xl mx-auto ">
                <div
                    class="  rounded-lg max-w-sm dark:dark:bg-slate-850  flex flex-col justify-between  "
                >
                <div style="background-image: url('../../../cricket.jpg');" class="shadow-md rounded-lg w-full h-50 ">
                    
                    <a href="#">
                        <img 
                        class="rounded-lg w-full h-full "
                        src=""
                        alt=""
                        />
                    </a>
                </div>
                    <div style="backdrop-filter: blur(20px)" class="relative mt-3 bg-white rounded-lg shadow-md rounded-tl-none dark:dark:bg-slate-850  ">
                        <div style="border-color: #40BD82;" class="h-20 w-40 rounded-r-lg bg-white bg-green absolute -top-20 dark:border-t-slate-850 border-t-[12px] dark:border-r-slate-850 border-r-[12px] " >
                            <h5
                                    class="text-gray-900 font-bold text-xl tracking-tight mb-2 dark:text-white"
                                >
                                    Noteworthy technology 
                                </h5>
                        </div>
                        <div class="p-5">

                            <a href="#">
                                <h5
                                    class="text-gray-900 font-bold text-2xl tracking-tight mb-2 dark:text-white"
                                >
                                    Noteworthy technology acquisitions 2021
                                </h5>
                            </a>
                            <p
                                class="font-normal text-gray-700 mb-3 dark:text-gray-400 "
                            >
                                Here are the biggest enterprise technology acquisitions
                                of 2021 so far, in reverse chronological order.
                            </p>
                        </div>
                      
                    </div>
                </div>
    
            </div>
        </div>
    </MainLayout>
</template>
<script setup>
import { Link } from "@inertiajs/vue3";
import MainLayout from "@/Layout/MainLayout.vue";
import TdLayout from "@/Layout/Component/Table/TdLayout.vue";
import Pagination from "@/Layout/Component/Pagination.vue";
import TableContainer from "@/Layout/Component/Table/TableContainer.vue";
// import TableLayout from "../Layout/TableLayout.vue";
defineProps({
    players: Object,
});
</script>
