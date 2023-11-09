<template>
    <MainLayout>
        <!-- component -->
        <!-- This is an example component -->
        <div class="flex justify-center items-center">
            <div class="max-w-4xl mx-auto">
                <div
                    class="rounded-lg max-w-sm lg:max-w-lg dark:dark:bg-slate-900 flex flex-col justify-between"
                >
                    <div
                        class="relative rounded-lg w-full h-52 bg-white flex justify-center dark:dark:bg-slate-850 py-2"
                    >
                        <img
                            src="../../../assets/img/cricket.jpg"
                            class="absolute top-0 bottom-0 h-full w-full transition-all duration-200 ease-in-out"
                            alt="main_logo"
                        />
                        <img
                            class="rounded-lg h-full z-20"
                            :src="player.image_url"
                            :alt="player.long_name"
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
                                    <div>
                                                <img
                                                    :src="player.team.flag_url"
                                                    :alt="player.team.long_name"
                                                    class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-9 w-9 rounded-xl"
                                                />
                                            </div>
                                            <div
                                                class="flex flex-col justify-center"
                                            >
                                                <h6
                                                    class="mb-0 text-sm leading-normal dark:text-white"
                                                >
                                                    {{ player.team.abbr }}
                                                </h6>
                                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3">
                            <!-- batting -->
                            <div
                                style="backdrop-filter: blur(20px)"
                                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border"
                            >
                                <div
                                    class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent"
                                >
                                    <h6 class="dark:text-white uppercase">
                                        bowling Stats
                                    </h6>
                                </div>
                                <div class="flex-auto px-0 pt-0 pb-2">
                                    <div class="p-0 overflow-x-auto ps">
                                        <table
                                            class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500"
                                        >
                                            <thead class="align-bottom">
                                                <tr>
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
                                                        Innings
                                                    </th>
                                                    <th
                                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                                    >
                                                        Balls
                                                    </th>
                                                    <th
                                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                                    >
                                                        Runs
                                                    </th>
                                                    <th
                                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                                    >
                                                        Wickets
                                                    </th>
                                                    <th
                                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                                    >
                                                        Average
                                                    </th>
                                                    <th
                                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                                    >
                                                        Economy
                                                    </th>
                                                    <th
                                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                                    >
                                                        Strike Rate
                                                    </th>
                                                    <th
                                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                                    >
                                                        Four Wicket Hauls
                                                    </th>
                                                    <th
                                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                                    >
                                                        Five Wicket Hauls
                                                    </th>
                                                    <th
                                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                                    >
                                                        Ten Wicket Hauls
                                                    </th>

                                                    <th
                                                        class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                                    ></th>
                                                </tr>
                                            </thead>
                                            <tbody v-for="bowling in bowlings">
                                                <tr class="px-2">
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent"
                                                    >
                                                        <p
                                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80"
                                                        >
                                                            {{
                                                                bowling.match_format
                                                            }}
                                                        </p>
                                                    </td>

                                                    <TdLayout>
                                                        <span
                                                            class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400"
                                                        >
                                                            {{
                                                                bowling.matches
                                                            }}
                                                        </span>
                                                    </TdLayout>
                                                    <TdLayout>
                                                        <p
                                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80"
                                                        >
                                                            {{
                                                                bowling.innings
                                                            }}
                                                        </p>
                                                    </TdLayout>
                                                    <TdLayout>
                                                        <p
                                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80"
                                                        >
                                                            {{
                                                                bowling.balls
                                                            }}
                                                        </p>
                                                    </TdLayout>
                                                    <TdLayout>
                                                        <p
                                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80"
                                                        >
                                                            {{
                                                                bowling.runs
                                                            }}
                                                        </p>
                                                    </TdLayout>
                                                    <TdLayout>
                                                        <p
                                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80"
                                                        >
                                                            {{
                                                                bowling.wickets
                                                            }}
                                                        </p>
                                                    </TdLayout>
                                                    <TdLayout>
                                                        <p
                                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80"
                                                        >
                                                            {{
                                                                bowling.average
                                                            }}
                                                        </p>
                                                    </TdLayout>
                                                    <TdLayout>
                                                        <p
                                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80"
                                                        >
                                                            {{
                                                                bowling.economy
                                                            }}
                                                        </p>
                                                    </TdLayout>
                                                    <TdLayout>
                                                        <p
                                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80"
                                                        >
                                                            {{
                                                                bowling.strike_rate
                                                            }}
                                                        </p>
                                                    </TdLayout>

                                                    <TdLayout>
                                                        <p
                                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80"
                                                        >
                                                            {{
                                                                bowling.four_wicket_hauls
                                                            }}
                                                        </p>
                                                    </TdLayout>
                                                    <TdLayout>
                                                        <p
                                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80"
                                                        >
                                                            {{
                                                                bowling.five_wicket_hauls
                                                            }}
                                                        </p>
                                                    </TdLayout>
                                                    <TdLayout>
                                                        <p
                                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80"
                                                        >
                                                            {{
                                                                bowling.ten_wicket_hauls
                                                            }}
                                                        </p>
                                                    </TdLayout>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- bowling -->
                            <div
                                style="backdrop-filter: blur(20px)"
                                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border"
                            >
                                <div
                                    class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent"
                                >
                                    <h6 class="dark:text-white">
                                        Batting Stats
                                    </h6>
                                </div>
                                <div class="flex-auto px-0 pt-0 pb-2">
                                    <div class="p-0 overflow-x-auto ps">
                                        <table
                                            class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500"
                                        >
                                            <thead class="align-bottom">
                                                <tr>
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
                                                        Innings
                                                    </th>
                                                    <th
                                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                                    >
                                                        notouts
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
                                                        Balls Faced
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
                                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                                    >
                                                        Fifties
                                                    </th>
                                                    <th
                                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                                    >
                                                        Fours
                                                    </th>
                                                    <th
                                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                                    >
                                                        Sixes
                                                    </th>
                                                    <th
                                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                                    >
                                                        Catches
                                                    </th>
                                                    <th
                                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                                    >
                                                        Stumps
                                                    </th>
                                                    <th
                                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                                    >
                                                        Batsman Out
                                                    </th>
                                                    <th
                                                        class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                                    ></th>
                                                </tr>
                                            </thead>
                                            <tbody v-for="batting in battings">
                                                <tr class="px-2">
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent"
                                                    >
                                                        <p
                                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80"
                                                        >
                                                            {{
                                                                batting.match_format
                                                            }}
                                                        </p>
                                                    </td>

                                                    <TdLayout
                                                        ><span
                                                            class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400"
                                                        >
                                                            {{
                                                                batting.matches
                                                            }}</span
                                                        ></TdLayout
                                                    >

                                                    <TdLayout>
                                                        <p
                                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80"
                                                        >
                                                            {{ batting.innings }}
                                                        </p>
                                                    </TdLayout>
                                                    <TdLayout>
                                                        <p
                                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80"
                                                        >
                                                            {{ batting.notouts }}
                                                        </p>
                                                    </TdLayout>
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
                                                            {{
                                                                batting.average
                                                            }}
                                                        </p>
                                                    </TdLayout>
                                                    <TdLayout>
                                                        <p
                                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80"
                                                        >
                                                            {{
                                                                batting.balls_faced
                                                            }}
                                                        </p>
                                                    </TdLayout>
                                                    <TdLayout>
                                                        <p
                                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80"
                                                        >
                                                            {{
                                                                batting.strike_rate
                                                            }}
                                                        </p>
                                                    </TdLayout>
                                                    <TdLayout>
                                                        <p
                                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80"
                                                        >
                                                            {{
                                                                batting.hundreds
                                                            }}
                                                        </p>
                                                    </TdLayout>
                                                    <TdLayout>
                                                        <p
                                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80"
                                                        >
                                                            {{
                                                                batting.fifties
                                                            }}
                                                        </p>
                                                    </TdLayout>
                                                    <TdLayout>
                                                        <p
                                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80"
                                                        >
                                                            {{
                                                                batting.fours
                                                            }}
                                                        </p>
                                                    </TdLayout>
                                                    <TdLayout>
                                                        <p
                                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80"
                                                        >
                                                            {{
                                                                batting.sixes
                                                            }}
                                                        </p>
                                                    </TdLayout>
                                                    <TdLayout>
                                                        <p
                                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80"
                                                        >
                                                            {{
                                                                batting.catches
                                                            }}
                                                        </p>
                                                    </TdLayout>
                                                    <TdLayout>
                                                        <p
                                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80"
                                                        >
                                                            {{
                                                                batting.stumps
                                                            }}
                                                        </p>
                                                    </TdLayout>
                                                    <TdLayout>
                                                        <p
                                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80"
                                                        >
                                                            {{
                                                                batting.batsman_out
                                                            }}
                                                        </p>
                                                    </TdLayout>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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
    player: Object, 
   
});
</script>

<script>
export default {
    props: [  "battings", "bowlings"],

    // Other Vue component logic
};
</script>
