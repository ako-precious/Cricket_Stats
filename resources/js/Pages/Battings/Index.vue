<template>
    <MainLayout>
        <TableContainer>
            <div
                style="backdrop-filter: blur(20px)"
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border"
            >
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
                                        Players Name
                                    </th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                    >
                                        Match Format
                                    </th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                    >
                                        Matches
                                    </th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                    >
                                        Runs
                                    </th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                    >
                                        High Score
                                    </th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                    >
                                        Average
                                    </th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                    >
                                        Strike Rate
                                    </th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                    >
                                       Hundreds
                                    </th>
                                    <th
                                        class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                    ></th>
                                </tr>
                            </thead>
                            <tbody v-for="batting in battings.data">
                                <tr class="px-2">
                                    <TdLayout>
                                        <div class="flex px-2 py-1">
                                            <div>
                                                <img
                                                    :src="
                                                        batting.player.headshot_image_url
                                                    "
                                                    :alt="batting.player.long_name"
                                                    class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-9 w-9 rounded-xl"
                                                />
                                            </div>
                                            <div
                                                class="flex flex-col justify-center"
                                            >
                                                <h6
                                                    class="mb-0 text-sm leading-normal dark:text-white"
                                                >
                                                    {{ batting.player.long_name }}
                                                </h6>
                                            </div>
                                        </div>
                                    </TdLayout>

                                    <td
                                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent"
                                    >
                                        <p
                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80"
                                        >
                                            {{ batting.match_format }}
                                        </p>
                                    </td>

                                    <TdLayout
                                        ><span
                                            class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400"
                                        >
                                            {{ batting.matches }}</span
                                        ></TdLayout
                                    >

                                    <TdLayout>
                                        <p
                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80"
                                        >
                                            {{ batting.runs }}
                                        </p>
                                    </TdLayout>
                                    <TdLayout>
                                        <p
                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80"
                                        >
                                            {{ batting.high_score }}
                                        </p>
                                    </TdLayout>
                                    <TdLayout>
                                        <p
                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80"
                                        >
                                            {{ batting.average }}
                                        </p>
                                    </TdLayout>
                                    <TdLayout>
                                        <p
                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80"
                                        >
                                            {{ batting.strike_rate }}
                                        </p>
                                    </TdLayout>
                                     <TdLayout>
                                        <p
                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80"
                                        >
                                            {{ batting.hundreds }}
                                        </p>
                                    </TdLayout>                            
                                  
                                    <TdLayout>
                                        <Link
                                            :href="`/battings/${batting.id}`"
                                            title="view"
                                            class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400"
                                        >
                                            <font-awesome-icon
                                                icon="fa-solid fa-eye"
                                            />
                                        </Link>
                                    </TdLayout>
                                </tr>
                            </tbody>
                        </table>
                        <div
                            v-if="battings.data.length"
                            class="w-full flex justify-center mt-8 mb-8"
                        >
                            <Pagination :links="battings.links" />
                        </div>
                    </div>
                </div>
            </div>
        </TableContainer>
    </MainLayout>
</template>
<script setup>
import { Link } from "@inertiajs/vue3";
import MainLayout from "@/Layout/MainLayout.vue";
import Pagination from "@/Layout/Component/Pagination.vue";
import TdLayout from "@/Layout/Component/Table/TdLayout.vue";
import TableContainer from "@/Layout/Component/Table/TableContainer.vue";

defineProps({
    battings: Object,
});
</script>
<script>

</script>
