<template>
    <MainLayout>
        <!-- component -->
        <!-- This is an example component -->
        <div class="flex justify-center items-center">

            <div class="max-w-4xl mx-auto ">
                <div
                    class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm dark:bg-gray-800 dark:border-gray-700 flex flex-col justify-between  "
                >
                <div class="shadow-md rounded-lg ">
                    
                    <!-- <a href="#">
                        <img 
                        class="rounded-lg w-full "
                        src="https://flowbite.com/docs/images/blog/image-1.jpg"
                        alt=""
                        />
                    </a> -->
                </div>
                    <div style="backdrop-filter: blur(20px)" class="relative mt-3 bg-green-400 rounded-lg shadow-md rounded-tl-none   ">
                        <div class="h-20 w-40 rounded-r-lg  bg-green-400 absolute -top-20 border-t-white border-t-[12px] border-r-white border-r-[12px]" >

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
