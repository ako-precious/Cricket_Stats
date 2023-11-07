<template>
    <MainLayout>
        <!-- component -->
        <!-- This is an example component -->
        <div class="flex justify-center items-center">
            <div class="max-w-4xl mx-auto">
                <div
                    class="rounded-lg max-w-sm dark:dark:bg-slate-900 flex flex-col justify-between"
                >
                    <div
                        style="
                            background-image: url('../../../assets/img/cricket.jpg');
                        "
                        class="rounded-lg w-full h-50 bg-[url('../../../assets/img/cricket.jpg')]"
                    >
                        <img
                            class="rounded-lg w-full h-full"
                            src="https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1049&q=80"
                            alt=""
                        />
                    </div>
                    <div
                        style="backdrop-filter: blur(20px)"
                        class="relative mt-3 bg-white rounded-lg shadow-md rounded-tl-none dark:dark:bg-slate-850"
                    >
                        <div
                            class="h-20 w-42 p-2 rounded-r-lg bg-white bg-green absolute -top-20 border-t-[#33B87E] border-r-[#40BD82] dark:border-t-slate-900 border-t-[12px] dark:border-r-slate-900 border-r-[12px] dark:dark:bg-slate-850"
                        >
                            <div class="flex justify-center items-center">
                                <h5
                                    class="text-gray-900 font-bold text-sm tracking-tight mb-2 dark:text-white"
                                >
                                    {{ player.long_name }}
                                </h5>
                                <div class="flex flex-col">
                                    <img
                                        class="rounded-full w-9 h-9"
                                        src="https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1049&q=80"
                                        alt=""
                                    />
                                    <p
                                        class="text-gray-900 font-bold text-sm tracking-tight mb-2 dark:text-white"
                                    >
                                        
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="p-5">
                            <a href="#">
                                <h5
                                    class="text-gray-900 font-bold text-2xl tracking-tight mb-2 dark:text-white"
                                > {{ player }}
                                    Noteworthy technology acquisitions 2021
                                </h5>
                            </a>
                            <p
                                class="font-normal text-gray-700 mb-3 dark:text-gray-400"
                            >
                                Here are the biggest enterprise technology
                                acquisitions of 2021 so far, in reverse
                                chronological order.
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


</script>

<script>
export default {
    props: [
        "player",
        
    ],
   
    // Other Vue component logic
};

</script>