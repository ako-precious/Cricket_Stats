<template>
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
                    <h6 class="dark:text-white">Bowling Stats</h6>
                </div>

                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto ps">
                        <table
                            class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500"
                        >
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                                    >
                                        <!-- class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70" -->
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
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="items-center">
                                    <TdLayout>
                                        <div class="relative">
                                            <div
                                                class="w-30 h-30 bg-green-100 mx-auto rounded-full shadow-2xl flex items-center justify-center text-indigo-500"
                                            >
                                                <img
                                                    class="rounded-full h-full w-full z-20"
                                                    :src="
                                                        firstPlayerBowling.player.image_url
                                                    "
                                                    :alt="
                                                        firstPlayerBowling.player.long_name
                                                    "
                                                />
                                            </div></div
                                    ></TdLayout>

                                    <TdLayout class="flex justify-center">
                                        <div
                                            class="flex items-center py-1 px-1.5 h-48 m"
                                        ></div>
                                    </TdLayout>

                                    <TdLayout>
                                        <div class="relative">
                                            <div
                                                class="w-30 h-30 bg-green-100 mx-auto rounded-full shadow-2xl flex items-center justify-center text-indigo-500"
                                            >
                                                <img
                                                    class="rounded-full h-full w-full z-20"
                                                    :src="
                                                        secondPlayerBowling
                                                            .player.image_url
                                                    "
                                                    :alt="
                                                        secondPlayerBowling
                                                            .player.long_name
                                                    "
                                                />
                                            </div>
                                        </div>
                                    </TdLayout>
                                </tr>
                                <tr >
                                    <TdLayout class="py-6">
                                        <div class="relative">
                                            <h6
                                                class="uppercase mb-0 leading-normal dark:text-white"
                                            >
                                                {{
                                                    firstPlayerBowling.player
                                                        .long_name
                                                }}
                                            </h6>
                                        </div></TdLayout
                                    >

                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-600  dark:text-green-200"
                                        >
                                            Name
                                        </h6>
                                    </TdLayout>

                                    <TdLayout class="py-6">
                                        <div class="relative ">
                                            <h6
                                                class="uppercase mb-0 leading-normal dark:text-white"
                                            >
                                                {{
                                                    secondPlayerBowling.player
                                                        .long_name
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>
                                <tr >
                                    <TdLayout class="py-6">
                                        <div class="relative">
                                            <h6
                                                class="uppercase mb-0 leading-normal dark:text-white"
                                            >
                                                {{
                                                    firstPlayerBowling.matches
                                                }}
                                            </h6>
                                        </div></TdLayout
                                    >

                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-600  dark:text-green-200"
                                        >
                                            Matches
                                        </h6>
                                    </TdLayout>

                                    <TdLayout class="py-6">
                                        <div class="relative ">
                                            <h6
                                                class="uppercase mb-0 leading-normal dark:text-white"
                                            >
                                                {{
                                                    secondPlayerBowling.matches
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>
                                
                                <tr >
                                    <TdLayout class="py-6">
                                        <div class="relative">
                                            <h6
                                                class="uppercase mb-0 leading-normal dark:text-white"
                                            >
                                                {{
                                                    firstPlayerBowling.innings
                                                }}
                                            </h6>
                                        </div></TdLayout
                                    >

                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-600  dark:text-green-200"
                                        >
                                            innings
                                        </h6>
                                    </TdLayout>

                                    <TdLayout class="py-6">
                                        <div class="relative ">
                                            <h6
                                                class="uppercase mb-0 leading-normal dark:text-white"
                                            >
                                                {{
                                                    secondPlayerBowling.innings
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>
                                <tr >
                                    <TdLayout class="py-6">
                                        <div class="relative">
                                            <h6
                                                class="uppercase mb-0 leading-normal dark:text-white"
                                            >
                                                {{
                                                    firstPlayerBowling.balls
                                                }}
                                            </h6>
                                        </div></TdLayout
                                    >

                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-600  dark:text-green-200"
                                        >
                                        balls
                                        </h6>
                                    </TdLayout>

                                    <TdLayout class="py-6">
                                        <div class="relative ">
                                            <h6
                                                class="uppercase mb-0 leading-normal dark:text-white"
                                            >
                                                {{
                                                    secondPlayerBowling.balls
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>
                                <tr >
                                    <TdLayout class="py-6">
                                        <div class="relative">
                                            <h6
                                                class="uppercase mb-0 leading-normal dark:text-white"
                                            >
                                                {{
                                                    firstPlayerBowling.runs
                                                }}
                                            </h6>
                                        </div></TdLayout
                                    >

                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-600  dark:text-green-200"
                                        >
                                        runs
                                        </h6>
                                    </TdLayout>

                                    <TdLayout class="py-6">
                                        <div class="relative ">
                                            <h6
                                                class="uppercase mb-0 leading-normal dark:text-white"
                                            >
                                                {{
                                                    secondPlayerBowling.runs
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>
                                <tr >
                                    <TdLayout class="py-6">
                                        <div class="relative">
                                            <h6
                                                class="uppercase mb-0 leading-normal dark:text-white"
                                            >
                                                {{
                                                    firstPlayerBowling.wickets
                                                }}
                                            </h6>
                                        </div></TdLayout
                                    >

                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-600  dark:text-green-200"
                                        >
                                        wickets
                                        </h6>
                                    </TdLayout>

                                    <TdLayout class="py-6">
                                        <div class="relative ">
                                            <h6
                                                class="uppercase mb-0 leading-normal dark:text-white"
                                            >
                                                {{
                                                    secondPlayerBowling.wickets
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>
                                <tr >
                                    <TdLayout class="py-6">
                                        <div class="relative">
                                            <h6
                                                class="uppercase mb-0 leading-normal dark:text-white"
                                            >
                                                {{
                                                    firstPlayerBowling.average
                                                }}
                                            </h6>
                                        </div></TdLayout
                                    >

                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-600  dark:text-green-200"
                                        >average
                                        </h6>
                                    </TdLayout>

                                    <TdLayout class="py-6">
                                        <div class="relative ">
                                            <h6
                                                class="uppercase mb-0 leading-normal dark:text-white"
                                            >
                                                {{
                                                    secondPlayerBowling.average
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>
                                <tr >
                                    <TdLayout class="py-6">
                                        <div class="relative">
                                            <h6
                                                class="uppercase mb-0 leading-normal dark:text-white"
                                            >
                                                {{
                                                    firstPlayerBowling.economy
                                                }}
                                            </h6>
                                        </div></TdLayout
                                    >

                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-600  dark:text-green-200"
                                        >economy
                                        </h6>
                                    </TdLayout>

                                    <TdLayout class="py-6">
                                        <div class="relative ">
                                            <h6
                                                class="uppercase mb-0 leading-normal dark:text-white"
                                            >
                                                {{
                                                    secondPlayerBowling.economy
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>
                                <tr >
                                    <TdLayout class="py-6">
                                        <div class="relative">
                                            <h6
                                                class="uppercase mb-0 leading-normal dark:text-white"
                                            >
                                                {{
                                                    firstPlayerBowling.strike_rate
                                                }}
                                            </h6>
                                        </div></TdLayout
                                    >

                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-600  dark:text-green-200"
                                        >strike rate
                                        </h6>
                                    </TdLayout>

                                    <TdLayout class="py-6">
                                        <div class="relative ">
                                            <h6
                                                class="uppercase mb-0 leading-normal dark:text-white"
                                            >
                                                {{
                                                    secondPlayerBowling.strike_rate
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>
                                <tr >
                                    <TdLayout class="py-6">
                                        <div class="relative">
                                            <h6
                                                class="uppercase mb-0 leading-normal dark:text-white"
                                            >
                                                {{
                                                    firstPlayerBowling.four_wicket_hauls
                                                }}
                                            </h6>
                                        </div></TdLayout
                                    >

                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-600  dark:text-green-200"
                                        >four wicket hauls
                                        </h6>
                                    </TdLayout>

                                    <TdLayout class="py-6">
                                        <div class="relative ">
                                            <h6
                                                class="uppercase mb-0 leading-normal dark:text-white"
                                            >
                                                {{
                                                    secondPlayerBowling.four_wicket_hauls
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>
                                <tr >
                                    <TdLayout class="py-6">
                                        <div class="relative">
                                            <h6
                                                class="uppercase mb-0 leading-normal dark:text-white"
                                            >
                                                {{
                                                    firstPlayerBowling.five_wicket_hauls
                                                }}
                                            </h6>
                                        </div></TdLayout
                                    >

                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-600  dark:text-green-200"
                                        >five wicket hauls
                                        </h6>
                                    </TdLayout>

                                    <TdLayout class="py-6">
                                        <div class="relative ">
                                            <h6
                                                class="uppercase mb-0 leading-normal dark:text-white"
                                            >
                                                {{
                                                    secondPlayerBowling.five_wicket_hauls
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>
                                <tr >
                                    <TdLayout class="py-6">
                                        <div class="relative">
                                            <h6
                                                class="uppercase mb-0 leading-normal dark:text-white"
                                            >
                                                {{
                                                    firstPlayerBowling.ten_wicket_hauls
                                                }}
                                            </h6>
                                        </div></TdLayout
                                    >

                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-600  dark:text-green-200"
                                        >ten_wicket_hauls
                                        </h6>
                                    </TdLayout>

                                    <TdLayout class="py-6">
                                        <div class="relative ">
                                            <h6
                                                class="uppercase mb-0 leading-normal dark:text-white"
                                            >
                                                {{
                                                    secondPlayerBowling.ten_wicket_hauls
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>
                                
                          
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>  
</template>
<script setup>
// import { Link } from "@inertiajs/vue3";

// defineProps(["message"]);
</script>
<script></script>
