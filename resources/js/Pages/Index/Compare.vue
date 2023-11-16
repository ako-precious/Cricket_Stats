<template>
    <MainLayout>
        <TableContainer>
            <Filters :filters="filters" />
            
            <div
                style="backdrop-filter: blur(20px)"
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border"
            >
                <div
                    class="p-2 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent"
                ></div>
                <div
                    class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent"
                >
                    <h6 class="dark:text-white">Batting Stats</h6>
                </div>

                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto ps">
                        <table
                            class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500"
                        >
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                    >
                                        Player's Details
                                    </th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                    >
                                        Stats
                                    </th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                    >
                                        Player's Details
                                    </th>

                                    <th
                                        class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                    ></th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="px-2">
                                    <TdLayout> 10 </TdLayout>

                                    <TdLayout class="flex justify-center">
                                        <div
                                            class="flex items-center border-2 py-1 px-1.5 rounded-lg w-28 mr-1"
                                        >
                                            <!-- v-model="filterForm.matchFormat" -->
                                            <select
                                                class="outline-none border-none bg-transparent text-black dark:text-white text-xs w-full p-2"
                                            >
                                                <option
                                                    class="bg-green-400 p-2 dark:bg-slate-850"
                                                    :value="null"
                                                >
                                                    Match Format
                                                </option>
                                                <!-- <option class="bg-green-400 p-2 dark:bg-slate-850" :value="null">
                            Match Format
                        </option> -->
                                                <option
                                                    class="bg-green-400 p-2 dark:bg-slate-850"
                                                    value="T20I"
                                                >
                                                    T20I
                                                </option>
                                                <option
                                                    class="bg-green-400 p-2 dark:bg-slate-850"
                                                    value="Tests"
                                                >
                                                    Tests
                                                </option>
                                                <option
                                                    class="bg-green-400 p-2 dark:bg-slate-850"
                                                    value="List A"
                                                >
                                                    List A
                                                </option>
                                                <option
                                                    class="bg-green-400 p-2 dark:bg-slate-850"
                                                    value="T20"
                                                >
                                                    T20
                                                </option>
                                                <option
                                                    class="bg-green-400 p-2 dark:bg-slate-850"
                                                    value="First-Class"
                                                >
                                                    First-Class
                                                </option>
                                                <option
                                                    class="bg-green-400 p-2 dark:bg-slate-850"
                                                    value="ODI"
                                                >
                                                    ODI
                                                </option>
                                                <option
                                                    class="bg-green-400 p-2 dark:bg-slate-850"
                                                    value="Women's T20I"
                                                >
                                                    Women's T20I
                                                </option>
                                                <option
                                                    class="bg-green-400 p-2 dark:bg-slate-850"
                                                    value="Women's ODI"
                                                >
                                                    Women's ODI
                                                </option>
                                                <option
                                                    class="bg-green-400 p-2 dark:bg-slate-850"
                                                    value="Women's Tests"
                                                >
                                                    Women's Tests
                                                </option>
                                            </select>
                                        </div>
                                    </TdLayout>

                                    <TdLayout>
                                        <div
                                            class="flex flex-nowrap items-center"
                                        >
                                            <div
                                                class="flex items-center border-2 py-1 px-1.5 rounded-lg"
                                            >
                                                <input
                                                    class="pl-1.5 outline-none border-none bg-transparent text-white text-sm"
                                                    type="text"
                                                    name=""
                                                    id=""
                                                    placeholder="Name"
                                                />
                                            </div>
                                        </div>
                                    </TdLayout>

                                    <TdLayout>
                                        <!-- <button
                                            type="submit"
                                            class="btn-normal text-sm dark:bg-slate-800 dark:hover:bg-slate-850 shadow-md"
                                        >
                                            Filter
                                        </button> -->
                                    </TdLayout>
                                </tr>
                            </tbody>
                        </table>
                        <!-- <div
                          v-if="battings.data.length"
                          class="w-full flex justify-center mt-8 mb-8"
                      >
                          <Pagination :links="battings.links" />
                      </div> -->
                    </div>
                </div>
            </div>
        </TableContainer>
    </MainLayout>
</template>
<script setup>
import { Link } from "@inertiajs/vue3";
import MainLayout from "@/Layout/MainLayout.vue";

import Filters from "@/Pages/Index/Filter.vue";
import TdLayout from "@/Layout/Component/Table/TdLayout.vue";
import TableContainer from "@/Layout/Component/Table/TableContainer.vue";

defineProps({
    // battings: Object,
    // filters: Object,
});
</script>
<script></script>
