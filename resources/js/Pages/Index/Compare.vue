<template>
    <MainLayout>
        <TableContainer>
            <Filters :filters="filters" />

            <div
                v-show="!isHidden"
                style="backdrop-filter: blur(20px)"
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border transition-all duration-200 ease-in-out"
            >
                <div
                    class="p-2 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent"
                ></div>
                <div
                    class="flex justify-between p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent"
                >
                    <h6
                        class="text-green-600 hover:text-green-800 dark:text-green-300 dark:hover:text-green-200"
                    >
                        Batting Stats
                    </h6>
                    <h6
                        v-on:click="toggleDivs"
                        class="text-emerald-600 hover:text-emerald-800 dark:text-emerald-300 dark:hover:text-emerald-200 cursor-pointer"
                    >
                        Bowling Stats
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
                                                        firstPlayerBatting
                                                            .player.image_url
                                                    "
                                                    :alt="
                                                        firstPlayerBatting
                                                            .player.long_name
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
                                                        secondPlayerBatting
                                                            .player.image_url
                                                    "
                                                    :alt="
                                                        secondPlayerBatting
                                                            .player.long_name
                                                    "
                                                />
                                            </div>
                                        </div>
                                    </TdLayout>
                                </tr>
                                <tr>
                                    <TdLayout class="py-6">
                                        <div class="relative">
                                            <h6
                                                class="uppercase mb-0 leading-normal dark:text-white"
                                            >
                                                {{
                                                    firstPlayerBatting.player
                                                        .long_name
                                                }}
                                            </h6>
                                        </div></TdLayout
                                    >

                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-900 dark:text-green-200"
                                        >
                                            Name
                                        </h6>
                                    </TdLayout>

                                    <TdLayout class="py-6">
                                        <div class="relative">
                                            <h6
                                                class="uppercase mb-0 leading-normal dark:text-white"
                                            >
                                                {{
                                                    secondPlayerBatting.player
                                                        .long_name
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>
                                <tr>
                                    <!-- First Player Batting Matches -->
                                    <TdLayout
                                        
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBatting.matches >
                                                secondPlayerBatting.matches,
                                            'text-red-600':
                                                firstPlayerBatting.matches <
                                                secondPlayerBatting.matches,
                                            'text-gray-500':
                                                firstPlayerBatting.matches ===
                                                secondPlayerBatting.matches,
                                        }"
                                                class="uppercase mb-0 leading-normal"
                                            >
                                                {{ firstPlayerBatting.matches }}
                                            </h6>
                                        </div>
                                    </TdLayout>

                                    <!-- Matches label -->
                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-900 dark:text-green-200"
                                        >
                                            Matches
                                        </h6>
                                    </TdLayout>

                                    <!-- Second Player Bowling Matches -->
                                    <TdLayout
                                       
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBatting.matches <
                                                secondPlayerBatting.matches,
                                            'text-red-600':
                                                firstPlayerBatting.matches >
                                                secondPlayerBatting.matches,
                                            'text-gray-500':
                                                firstPlayerBatting.matches ===
                                                secondPlayerBatting.matches,
                                        }"
                                                class="uppercase mb-0 leading-normal "
                                            >
                                                {{
                                                    secondPlayerBatting.matches
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>

                                <tr>
                                    <!-- First Player Batting innings -->
                                    <TdLayout
                                        
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBatting.innings >
                                                secondPlayerBatting.innings,
                                            'text-red-600':
                                                firstPlayerBatting.innings <
                                                secondPlayerBatting.innings,
                                            'text-gray-500':
                                                firstPlayerBatting.innings ===
                                                secondPlayerBatting.innings,
                                        }"
                                                class="uppercase mb-0 leading-normal"
                                            >
                                                {{ firstPlayerBatting.innings }}
                                            </h6>
                                        </div>
                                    </TdLayout>

                                    <!-- innings label -->
                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-900 dark:text-green-200"
                                        >
                                            innings
                                        </h6>
                                    </TdLayout>

                                    <!-- Second Player Bowling innings -->
                                    <TdLayout
                                       
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBatting.innings <
                                                secondPlayerBatting.innings,
                                            'text-red-600':
                                                firstPlayerBatting.innings >
                                                secondPlayerBatting.innings,
                                            'text-gray-500':
                                                firstPlayerBatting.innings ===
                                                secondPlayerBatting.innings,
                                        }"
                                                class="uppercase mb-0 leading-normal "
                                            >
                                                {{
                                                    secondPlayerBatting.innings
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>

                                <tr>
                                    <!-- First Player Batting notouts -->
                                    <TdLayout
                                        
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBatting.notouts >
                                                secondPlayerBatting.notouts,
                                            'text-red-600':
                                                firstPlayerBatting.notouts <
                                                secondPlayerBatting.notouts,
                                            'text-gray-500':
                                                firstPlayerBatting.notouts ===
                                                secondPlayerBatting.notouts,
                                        }"
                                                class="uppercase mb-0 leading-normal"
                                            >
                                                {{ firstPlayerBatting.notouts }}
                                            </h6>
                                        </div>
                                    </TdLayout>

                                    <!-- notouts label -->
                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-900 dark:text-green-200"
                                        >
                                            notouts
                                        </h6>
                                    </TdLayout>

                                    <!-- Second Player Bowling notouts -->
                                    <TdLayout
                                       
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBatting.notouts <
                                                secondPlayerBatting.notouts,
                                            'text-red-600':
                                                firstPlayerBatting.notouts >
                                                secondPlayerBatting.notouts,
                                            'text-gray-500':
                                                firstPlayerBatting.notouts ===
                                                secondPlayerBatting.notouts,
                                        }"
                                                class="uppercase mb-0 leading-normal "
                                            >
                                                {{
                                                    secondPlayerBatting.notouts
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>

                                <tr>
                                    <!-- First Player Batting runs -->
                                    <TdLayout
                                        
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBatting.runs >
                                                secondPlayerBatting.runs,
                                            'text-red-600':
                                                firstPlayerBatting.runs <
                                                secondPlayerBatting.runs,
                                            'text-gray-500':
                                                firstPlayerBatting.runs ===
                                                secondPlayerBatting.runs,
                                        }"
                                                class="uppercase mb-0 leading-normal"
                                            >
                                                {{ firstPlayerBatting.runs }}
                                            </h6>
                                        </div>
                                    </TdLayout>

                                    <!-- runs label -->
                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-900 dark:text-green-200"
                                        >
                                            runs
                                        </h6>
                                    </TdLayout>

                                    <!-- Second Player Bowling runs -->
                                    <TdLayout
                                       
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBatting.runs <
                                                secondPlayerBatting.runs,
                                            'text-red-600':
                                                firstPlayerBatting.runs >
                                                secondPlayerBatting.runs,
                                            'text-gray-500':
                                                firstPlayerBatting.runs ===
                                                secondPlayerBatting.runs,
                                        }"
                                                class="uppercase mb-0 leading-normal "
                                            >
                                                {{
                                                    secondPlayerBatting.runs
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>

                               <tr>
                                    <!-- First Player Batting high_score -->
                                    <TdLayout
                                        
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBatting.high_score >
                                                secondPlayerBatting.high_score,
                                            'text-red-600':
                                                firstPlayerBatting.high_score <
                                                secondPlayerBatting.high_score,
                                            'text-gray-500':
                                                firstPlayerBatting.high_score ===
                                                secondPlayerBatting.high_score,
                                        }"
                                                class="uppercase mb-0 leading-normal"
                                            >
                                                {{ firstPlayerBatting.high_score }}
                                            </h6>
                                        </div>
                                    </TdLayout>

                                    <!-- high_score label -->
                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-900 dark:text-green-200"
                                        >
                                            high score
                                        </h6>
                                    </TdLayout>

                                    <!-- Second Player Bowling high_score -->
                                    <TdLayout
                                       
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBatting.high_score <
                                                secondPlayerBatting.high_score,
                                            'text-red-600':
                                                firstPlayerBatting.high_score >
                                                secondPlayerBatting.high_score,
                                            'text-gray-500':
                                                firstPlayerBatting.high_score ===
                                                secondPlayerBatting.high_score,
                                        }"
                                                class="uppercase mb-0 leading-normal "
                                            >
                                                {{
                                                    secondPlayerBatting.high_score
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>

                                <tr>
                                    <!-- First Player Batting average -->
                                    <TdLayout
                                        
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBatting.average >
                                                secondPlayerBatting.average,
                                            'text-red-600':
                                                firstPlayerBatting.average <
                                                secondPlayerBatting.average,
                                            'text-gray-500':
                                                firstPlayerBatting.average ===
                                                secondPlayerBatting.average,
                                        }"
                                                class="uppercase mb-0 leading-normal"
                                            >
                                                {{ firstPlayerBatting.average }}
                                            </h6>
                                        </div>
                                    </TdLayout>

                                    <!-- average label -->
                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-900 dark:text-green-200"
                                        >
                                            Average
                                        </h6>
                                    </TdLayout>

                                    <!-- Second Player Bowling average -->
                                    <TdLayout
                                       
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBatting.average <
                                                secondPlayerBatting.average,
                                            'text-red-600':
                                                firstPlayerBatting.average >
                                                secondPlayerBatting.average,
                                            'text-gray-500':
                                                firstPlayerBatting.average ===
                                                secondPlayerBatting.average,
                                        }"
                                                class="uppercase mb-0 leading-normal "
                                            >
                                                {{
                                                    secondPlayerBatting.average
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>

                                 <tr>
                                    <!-- First Player Batting balls_faced -->
                                    <TdLayout
                                        
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBatting.balls_faced >
                                                secondPlayerBatting.balls_faced,
                                            'text-red-600':
                                                firstPlayerBatting.balls_faced <
                                                secondPlayerBatting.balls_faced,
                                            'text-gray-500':
                                                firstPlayerBatting.balls_faced ===
                                                secondPlayerBatting.balls_faced,
                                        }"
                                                class="uppercase mb-0 leading-normal"
                                            >
                                                {{ firstPlayerBatting.balls_faced }}
                                            </h6>
                                        </div>
                                    </TdLayout>

                                    <!-- balls_faced label -->
                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-900 dark:text-green-200"
                                        >
                                            balls faced
                                        </h6>
                                    </TdLayout>

                                    <!-- Second Player Bowling balls_faced -->
                                    <TdLayout
                                       
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBatting.balls_faced <
                                                secondPlayerBatting.balls_faced,
                                            'text-red-600':
                                                firstPlayerBatting.balls_faced >
                                                secondPlayerBatting.balls_faced,
                                            'text-gray-500':
                                                firstPlayerBatting.balls_faced ===
                                                secondPlayerBatting.balls_faced,
                                        }"
                                                class="uppercase mb-0 leading-normal "
                                            >
                                                {{
                                                    secondPlayerBatting.balls_faced
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>

                                <tr>
                                    <!-- First Player Batting strike_rate -->
                                    <TdLayout
                                        
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBatting.strike_rate >
                                                secondPlayerBatting.strike_rate,
                                            'text-red-600':
                                                firstPlayerBatting.strike_rate <
                                                secondPlayerBatting.strike_rate,
                                            'text-gray-500':
                                                firstPlayerBatting.strike_rate ===
                                                secondPlayerBatting.strike_rate,
                                        }"
                                                class="uppercase mb-0 leading-normal"
                                            >
                                                {{ firstPlayerBatting.strike_rate }}
                                            </h6>
                                        </div>
                                    </TdLayout>

                                    <!-- strike_rate label -->
                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-900 dark:text-green-200"
                                        >
                                            Strike Rate
                                        </h6>
                                    </TdLayout>

                                    <!-- Second Player Bowling strike_rate -->
                                    <TdLayout
                                       
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBatting.strike_rate <
                                                secondPlayerBatting.strike_rate,
                                            'text-red-600':
                                                firstPlayerBatting.strike_rate >
                                                secondPlayerBatting.strike_rate,
                                            'text-gray-500':
                                                firstPlayerBatting.strike_rate ===
                                                secondPlayerBatting.strike_rate,
                                        }"
                                                class="uppercase mb-0 leading-normal "
                                            >
                                                {{
                                                    secondPlayerBatting.strike_rate
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>

                                   <tr>
                                    <!-- First Player Batting hundreds -->
                                    <TdLayout
                                        
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBatting.hundreds >
                                                secondPlayerBatting.hundreds,
                                            'text-red-600':
                                                firstPlayerBatting.hundreds <
                                                secondPlayerBatting.hundreds,
                                            'text-gray-500':
                                                firstPlayerBatting.hundreds ===
                                                secondPlayerBatting.hundreds,
                                        }"
                                                class="uppercase mb-0 leading-normal"
                                            >
                                                {{ firstPlayerBatting.hundreds }}
                                            </h6>
                                        </div>
                                    </TdLayout>

                                    <!-- hundreds label -->
                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-900 dark:text-green-200"
                                        >
                                        hundreds
                                        </h6>
                                    </TdLayout>

                                    <!-- Second Player Bowling hundreds -->
                                    <TdLayout
                                       
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBatting.hundreds <
                                                secondPlayerBatting.hundreds,
                                            'text-red-600':
                                                firstPlayerBatting.hundreds >
                                                secondPlayerBatting.hundreds,
                                            'text-gray-500':
                                                firstPlayerBatting.hundreds ===
                                                secondPlayerBatting.hundreds,
                                        }"
                                                class="uppercase mb-0 leading-normal "
                                            >
                                                {{
                                                    secondPlayerBatting.hundreds
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>

                                <tr>
                                    <!-- First Player Batting fifties -->
                                    <TdLayout
                                        
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBatting.fifties >
                                                secondPlayerBatting.fifties,
                                            'text-red-600':
                                                firstPlayerBatting.fifties <
                                                secondPlayerBatting.fifties,
                                            'text-gray-500':
                                                firstPlayerBatting.fifties ===
                                                secondPlayerBatting.fifties,
                                        }"
                                                class="uppercase mb-0 leading-normal"
                                            >
                                                {{ firstPlayerBatting.fifties }}
                                            </h6>
                                        </div>
                                    </TdLayout>

                                    <!-- fifties label -->
                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-900 dark:text-green-200"
                                        >
                                        fifties
                                        </h6>
                                    </TdLayout>

                                    <!-- Second Player Bowling fifties -->
                                    <TdLayout
                                       
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBatting.fifties <
                                                secondPlayerBatting.fifties,
                                            'text-red-600':
                                                firstPlayerBatting.fifties >
                                                secondPlayerBatting.fifties,
                                            'text-gray-500':
                                                firstPlayerBatting.fifties ===
                                                secondPlayerBatting.fifties,
                                        }"
                                                class="uppercase mb-0 leading-normal "
                                            >
                                                {{
                                                    secondPlayerBatting.fifties
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>

                                <tr>
                                    <!-- First Player Batting fours -->
                                    <TdLayout
                                        
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBatting.fours >
                                                secondPlayerBatting.fours,
                                            'text-red-600':
                                                firstPlayerBatting.fours <
                                                secondPlayerBatting.fours,
                                            'text-gray-500':
                                                firstPlayerBatting.fours ===
                                                secondPlayerBatting.fours,
                                        }"
                                                class="uppercase mb-0 leading-normal"
                                            >
                                                {{ firstPlayerBatting.fours }}
                                            </h6>
                                        </div>
                                    </TdLayout>

                                    <!-- fours label -->
                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-900 dark:text-green-200"
                                        >
                                        fours
                                        </h6>
                                    </TdLayout>

                                    <!-- Second Player Bowling fours -->
                                    <TdLayout
                                       
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBatting.fours <
                                                secondPlayerBatting.fours,
                                            'text-red-600':
                                                firstPlayerBatting.fours >
                                                secondPlayerBatting.fours,
                                            'text-gray-500':
                                                firstPlayerBatting.fours ===
                                                secondPlayerBatting.fours,
                                        }"
                                                class="uppercase mb-0 leading-normal "
                                            >
                                                {{
                                                    secondPlayerBatting.fours
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>

                                   <tr>
                                    <!-- First Player Batting sixes -->
                                    <TdLayout
                                        
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBatting.sixes >
                                                secondPlayerBatting.sixes,
                                            'text-red-600':
                                                firstPlayerBatting.sixes <
                                                secondPlayerBatting.sixes,
                                            'text-gray-500':
                                                firstPlayerBatting.sixes ===
                                                secondPlayerBatting.sixes,
                                        }"
                                                class="uppercase mb-0 leading-normal"
                                            >
                                                {{ firstPlayerBatting.sixes }}
                                            </h6>
                                        </div>
                                    </TdLayout>

                                    <!-- sixes label -->
                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-900 dark:text-green-200"
                                        >
                                        sixes
                                        </h6>
                                    </TdLayout>

                                    <!-- Second Player Bowling sixes -->
                                    <TdLayout
                                       
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBatting.sixes <
                                                secondPlayerBatting.sixes,
                                            'text-red-600':
                                                firstPlayerBatting.sixes >
                                                secondPlayerBatting.sixes,
                                            'text-gray-500':
                                                firstPlayerBatting.sixes ===
                                                secondPlayerBatting.sixes,
                                        }"
                                                class="uppercase mb-0 leading-normal "
                                            >
                                                {{
                                                    secondPlayerBatting.sixes
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>
                                <tr>
                                    <!-- First Player Batting catches -->
                                    <TdLayout
                                        
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBatting.catches >
                                                secondPlayerBatting.catches,
                                            'text-red-600':
                                                firstPlayerBatting.catches <
                                                secondPlayerBatting.catches,
                                            'text-gray-500':
                                                firstPlayerBatting.catches ===
                                                secondPlayerBatting.catches,
                                        }"
                                                class="uppercase mb-0 leading-normal"
                                            >
                                                {{ firstPlayerBatting.catches }}
                                            </h6>
                                        </div>
                                    </TdLayout>

                                    <!-- catches label -->
                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-900 dark:text-green-200"
                                        >
                                        catches
                                        </h6>
                                    </TdLayout>

                                    <!-- Second Player Bowling catches -->
                                    <TdLayout
                                       
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBatting.catches <
                                                secondPlayerBatting.catches,
                                            'text-red-600':
                                                firstPlayerBatting.catches >
                                                secondPlayerBatting.catches,
                                            'text-gray-500':
                                                firstPlayerBatting.catches ===
                                                secondPlayerBatting.catches,
                                        }"
                                                class="uppercase mb-0 leading-normal "
                                            >
                                                {{
                                                    secondPlayerBatting.catches
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>
                                <tr>
                                    <!-- First Player Batting stumps -->
                                    <TdLayout
                                        
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBatting.stumps >
                                                secondPlayerBatting.stumps,
                                            'text-red-600':
                                                firstPlayerBatting.stumps <
                                                secondPlayerBatting.stumps,
                                            'text-gray-500':
                                                firstPlayerBatting.stumps ===
                                                secondPlayerBatting.stumps,
                                        }"
                                                class="uppercase mb-0 leading-normal"
                                            >
                                                {{ firstPlayerBatting.stumps }}
                                            </h6>
                                        </div>
                                    </TdLayout>

                                    <!-- stumps label -->
                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-900 dark:text-green-200"
                                        >
                                        stumps
                                        </h6>
                                    </TdLayout>

                                    <!-- Second Player Bowling stumps -->
                                    <TdLayout
                                       
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBatting.stumps <
                                                secondPlayerBatting.stumps,
                                            'text-red-600':
                                                firstPlayerBatting.stumps >
                                                secondPlayerBatting.stumps,
                                            'text-gray-500':
                                                firstPlayerBatting.stumps ===
                                                secondPlayerBatting.stumps,
                                        }"
                                                class="uppercase mb-0 leading-normal "
                                            >
                                                {{
                                                    secondPlayerBatting.stumps
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

            <div
                v-show="isHidden"
                style="backdrop-filter: blur(20px)"
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border transition-all duration-200 ease-in-out"
            >
                <div
                    class="p-2 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent"
                ></div>
                <div
                    class="flex justify-between p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent"
                >
                    <h6
                        class="text-emerald-600 hover:text-emerald-800 dark:text-emerald-300 dark:hover:text-emerald-200"
                    >
                        Bowling Stats
                    </h6>
                    <h6
                        v-on:click="toggleDivs"
                        class="text-green-600 hover:text-green-800 dark:text-green-300 dark:hover:text-green-200 cursor-pointer"
                    >
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
                                        class="text-emerald-600 px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap opacity-70"
                                    >
                                        <!-- class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70" -->
                                        Player's Details
                                    </th>
                                    <th
                                        class="text-emerald-600 px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap opacity-70"
                                    >
                                        Stats
                                    </th>
                                    <th
                                        class="text-emerald-600 px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap opacity-70"
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
                                                        firstPlayerBowling
                                                            .player.image_url
                                                    "
                                                    :alt="
                                                        firstPlayerBowling
                                                            .player.long_name
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
                                <tr>
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
                                            class="uppercase mb-0 text-sm leading-normal text-green-900 dark:text-green-200"
                                        >
                                            Name
                                        </h6>
                                    </TdLayout>

                                    <TdLayout class="py-6">
                                        <div class="relative">
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
                                
                                <tr>
                                    <!-- First Player Bowling Matches -->
                                    <TdLayout
                                        
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBowling.matches >
                                                secondPlayerBowling.matches,
                                            'text-red-600':
                                                firstPlayerBowling.matches <
                                                secondPlayerBowling.matches,
                                            'text-gray-500':
                                                firstPlayerBowling.matches ===
                                                secondPlayerBowling.matches,
                                        }"
                                                class="uppercase mb-0 leading-normal"
                                            >
                                                {{ firstPlayerBowling.matches }}
                                            </h6>
                                        </div>
                                    </TdLayout>

                                    <!-- Matches label -->
                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-900 dark:text-green-200"
                                        >
                                            Matches
                                        </h6>
                                    </TdLayout>

                                    <!-- Second Player Bowling Matches -->
                                    <TdLayout
                                       
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBowling.matches <
                                                secondPlayerBowling.matches,
                                            'text-red-600':
                                                firstPlayerBowling.matches >
                                                secondPlayerBowling.matches,
                                            'text-gray-500':
                                                firstPlayerBowling.matches ===
                                                secondPlayerBowling.matches,
                                        }"
                                                class="uppercase mb-0 leading-normal "
                                            >
                                                {{
                                                    secondPlayerBowling.matches
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>

                                <tr>
                                    <!-- First Player Bowling innings -->
                                    <TdLayout
                                        
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBowling.innings >
                                                secondPlayerBowling.innings,
                                            'text-red-600':
                                                firstPlayerBowling.innings <
                                                secondPlayerBowling.innings,
                                            'text-gray-500':
                                                firstPlayerBowling.innings ===
                                                secondPlayerBowling.innings,
                                        }"
                                                class="uppercase mb-0 leading-normal"
                                            >
                                                {{ firstPlayerBowling.innings }}
                                            </h6>
                                        </div>
                                    </TdLayout>

                                    <!-- innings label -->
                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-900 dark:text-green-200"
                                        >
                                            innings
                                        </h6>
                                    </TdLayout>

                                    <!-- Second Player Bowling innings -->
                                    <TdLayout
                                       
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBowling.innings <
                                                secondPlayerBowling.innings,
                                            'text-red-600':
                                                firstPlayerBowling.innings >
                                                secondPlayerBowling.innings,
                                            'text-gray-500':
                                                firstPlayerBowling.innings ===
                                                secondPlayerBowling.innings,
                                        }"
                                                class="uppercase mb-0 leading-normal "
                                            >
                                                {{
                                                    secondPlayerBowling.innings
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>
                                <tr>
                                    <!-- First Player Bowling balls -->
                                    <TdLayout
                                        
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBowling.balls >
                                                secondPlayerBowling.balls,
                                            'text-red-600':
                                                firstPlayerBowling.balls <
                                                secondPlayerBowling.balls,
                                            'text-gray-500':
                                                firstPlayerBowling.balls ===
                                                secondPlayerBowling.balls,
                                        }"
                                                class="uppercase mb-0 leading-normal"
                                            >
                                                {{ firstPlayerBowling.balls }}
                                            </h6>
                                        </div>
                                    </TdLayout>

                                    <!-- balls label -->
                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-900 dark:text-green-200"
                                        >
                                            balls
                                        </h6>
                                    </TdLayout>

                                    <!-- Second Player Bowling balls -->
                                    <TdLayout
                                       
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBowling.balls <
                                                secondPlayerBowling.balls,
                                            'text-red-600':
                                                firstPlayerBowling.balls >
                                                secondPlayerBowling.balls,
                                            'text-gray-500':
                                                firstPlayerBowling.balls ===
                                                secondPlayerBowling.balls,
                                        }"
                                                class="uppercase mb-0 leading-normal "
                                            >
                                                {{
                                                    secondPlayerBowling.balls
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>
                                <tr>
                                    <!-- First Player Bowling runs -->
                                    <TdLayout
                                        
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBowling.runs >
                                                secondPlayerBowling.runs,
                                            'text-red-600':
                                                firstPlayerBowling.runs <
                                                secondPlayerBowling.runs,
                                            'text-gray-500':
                                                firstPlayerBowling.runs ===
                                                secondPlayerBowling.runs,
                                        }"
                                                class="uppercase mb-0 leading-normal"
                                            >
                                                {{ firstPlayerBowling.runs }}
                                            </h6>
                                        </div>
                                    </TdLayout>

                                    <!-- runs label -->
                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-900 dark:text-green-200"
                                        >
                                            runs
                                        </h6>
                                    </TdLayout>

                                    <!-- Second Player Bowling runs -->
                                    <TdLayout
                                       
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBowling.runs <
                                                secondPlayerBowling.runs,
                                            'text-red-600':
                                                firstPlayerBowling.runs >
                                                secondPlayerBowling.runs,
                                            'text-gray-500':
                                                firstPlayerBowling.runs ===
                                                secondPlayerBowling.runs,
                                        }"
                                                class="uppercase mb-0 leading-normal "
                                            >
                                                {{
                                                    secondPlayerBowling.runs
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>
                                <tr>
                                    <!-- First Player Bowling wickets -->
                                    <TdLayout
                                        
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBowling.wickets >
                                                secondPlayerBowling.wickets,
                                            'text-red-600':
                                                firstPlayerBowling.wickets <
                                                secondPlayerBowling.wickets,
                                            'text-gray-500':
                                                firstPlayerBowling.wickets ===
                                                secondPlayerBowling.wickets,
                                        }"
                                                class="uppercase mb-0 leading-normal"
                                            >
                                                {{ firstPlayerBowling.wickets }}
                                            </h6>
                                        </div>
                                    </TdLayout>

                                    <!-- wickets label -->
                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-900 dark:text-green-200"
                                        >
                                            wickets
                                        </h6>
                                    </TdLayout>

                                    <!-- Second Player Bowling wickets -->
                                    <TdLayout
                                       
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBowling.wickets <
                                                secondPlayerBowling.wickets,
                                            'text-red-600':
                                                firstPlayerBowling.wickets >
                                                secondPlayerBowling.wickets,
                                            'text-gray-500':
                                                firstPlayerBowling.wickets ===
                                                secondPlayerBowling.wickets,
                                        }"
                                                class="uppercase mb-0 leading-normal "
                                            >
                                                {{
                                                    secondPlayerBowling.wickets
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>
                                <tr>
                                    <!-- First Player Bowling average -->
                                    <TdLayout
                                        
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBowling.average >
                                                secondPlayerBowling.average,
                                            'text-red-600':
                                                firstPlayerBowling.average <
                                                secondPlayerBowling.average,
                                            'text-gray-500':
                                                firstPlayerBowling.average ===
                                                secondPlayerBowling.average,
                                        }"
                                                class="uppercase mb-0 leading-normal"
                                            >
                                                {{ firstPlayerBowling.average }}
                                            </h6>
                                        </div>
                                    </TdLayout>

                                    <!-- average label -->
                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-900 dark:text-green-200"
                                        >
                                            average
                                        </h6>
                                    </TdLayout>

                                    <!-- Second Player Bowling average -->
                                    <TdLayout
                                       
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBowling.average <
                                                secondPlayerBowling.average,
                                            'text-red-600':
                                                firstPlayerBowling.average >
                                                secondPlayerBowling.average,
                                            'text-gray-500':
                                                firstPlayerBowling.average ===
                                                secondPlayerBowling.average,
                                        }"
                                                class="uppercase mb-0 leading-normal "
                                            >
                                                {{
                                                    secondPlayerBowling.average
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>
                                <tr>
                                    <!-- First Player Bowling economy -->
                                    <TdLayout
                                        
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBowling.economy >
                                                secondPlayerBowling.economy,
                                            'text-red-600':
                                                firstPlayerBowling.economy <
                                                secondPlayerBowling.economy,
                                            'text-gray-500':
                                                firstPlayerBowling.economy ===
                                                secondPlayerBowling.economy,
                                        }"
                                                class="uppercase mb-0 leading-normal"
                                            >
                                                {{ firstPlayerBowling.economy }}
                                            </h6>
                                        </div>
                                    </TdLayout>

                                    <!-- economy label -->
                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-900 dark:text-green-200"
                                        >
                                            economy
                                        </h6>
                                    </TdLayout>

                                    <!-- Second Player Bowling economy -->
                                    <TdLayout
                                       
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBowling.economy <
                                                secondPlayerBowling.economy,
                                            'text-red-600':
                                                firstPlayerBowling.economy >
                                                secondPlayerBowling.economy,
                                            'text-gray-500':
                                                firstPlayerBowling.economy ===
                                                secondPlayerBowling.economy,
                                        }"
                                                class="uppercase mb-0 leading-normal "
                                            >
                                                {{
                                                    secondPlayerBowling.economy
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>
                                <tr>
                                    <!-- First Player Bowling strike_rate -->
                                    <TdLayout
                                        
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBowling.strike_rate >
                                                secondPlayerBowling.strike_rate,
                                            'text-red-600':
                                                firstPlayerBowling.strike_rate <
                                                secondPlayerBowling.strike_rate,
                                            'text-gray-500':
                                                firstPlayerBowling.strike_rate ===
                                                secondPlayerBowling.strike_rate,
                                        }"
                                                class="uppercase mb-0 leading-normal"
                                            >
                                                {{ firstPlayerBowling.strike_rate }}
                                            </h6>
                                        </div>
                                    </TdLayout>

                                    <!-- strike_rate label -->
                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-900 dark:text-green-200"
                                        >
                                            strike rate
                                        </h6>
                                    </TdLayout>

                                    <!-- Second Player Bowling strike_rate -->
                                    <TdLayout
                                       
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBowling.strike_rate <
                                                secondPlayerBowling.strike_rate,
                                            'text-red-600':
                                                firstPlayerBowling.strike_rate >
                                                secondPlayerBowling.strike_rate,
                                            'text-gray-500':
                                                firstPlayerBowling.strike_rate ===
                                                secondPlayerBowling.strike_rate,
                                        }"
                                                class="uppercase mb-0 leading-normal "
                                            >
                                                {{
                                                    secondPlayerBowling.strike_rate
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>
                                <tr>
                                    <!-- First Player Bowling four_wicket_hauls -->
                                    <TdLayout
                                        
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBowling.four_wicket_hauls >
                                                secondPlayerBowling.four_wicket_hauls,
                                            'text-red-600':
                                                firstPlayerBowling.four_wicket_hauls <
                                                secondPlayerBowling.four_wicket_hauls,
                                            'text-gray-500':
                                                firstPlayerBowling.four_wicket_hauls ===
                                                secondPlayerBowling.four_wicket_hauls,
                                        }"
                                                class="uppercase mb-0 leading-normal"
                                            >
                                                {{ firstPlayerBowling.four_wicket_hauls }}
                                            </h6>
                                        </div>
                                    </TdLayout>

                                    <!-- four_wicket_hauls label -->
                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-900 dark:text-green-200"
                                        >
                                        four wicket hauls
                                        </h6>
                                    </TdLayout>

                                    <!-- Second Player Bowling four_wicket_hauls -->
                                    <TdLayout
                                       
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBowling.four_wicket_hauls <
                                                secondPlayerBowling.four_wicket_hauls,
                                            'text-red-600':
                                                firstPlayerBowling.four_wicket_hauls >
                                                secondPlayerBowling.four_wicket_hauls,
                                            'text-gray-500':
                                                firstPlayerBowling.four_wicket_hauls ===
                                                secondPlayerBowling.four_wicket_hauls,
                                        }"
                                                class="uppercase mb-0 leading-normal "
                                            >
                                                {{
                                                    secondPlayerBowling.four_wicket_hauls
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>
                                <tr>
                                    <!-- First Player Bowling five_wicket_hauls -->
                                    <TdLayout
                                        
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBowling.five_wicket_hauls >
                                                secondPlayerBowling.five_wicket_hauls,
                                            'text-red-600':
                                                firstPlayerBowling.five_wicket_hauls <
                                                secondPlayerBowling.five_wicket_hauls,
                                            'text-gray-500':
                                                firstPlayerBowling.five_wicket_hauls ===
                                                secondPlayerBowling.five_wicket_hauls,
                                        }"
                                                class="uppercase mb-0 leading-normal"
                                            >
                                                {{ firstPlayerBowling.five_wicket_hauls }}
                                            </h6>
                                        </div>
                                    </TdLayout>

                                    <!-- five_wicket_hauls label -->
                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-900 dark:text-green-200"
                                        >
                                        five wicket hauls
                                        </h6>
                                    </TdLayout>

                                    <!-- Second Player Bowling five_wicket_hauls -->
                                    <TdLayout
                                       
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBowling.five_wicket_hauls <
                                                secondPlayerBowling.five_wicket_hauls,
                                            'text-red-600':
                                                firstPlayerBowling.five_wicket_hauls >
                                                secondPlayerBowling.five_wicket_hauls,
                                            'text-gray-500':
                                                firstPlayerBowling.five_wicket_hauls ===
                                                secondPlayerBowling.five_wicket_hauls,
                                        }"
                                                class="uppercase mb-0 leading-normal "
                                            >
                                                {{
                                                    secondPlayerBowling.five_wicket_hauls
                                                }}
                                            </h6>
                                        </div>
                                    </TdLayout>
                                </tr>
                                <tr>
                                    <!-- First Player Bowling ten_wicket_hauls -->
                                    <TdLayout
                                        
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBowling.ten_wicket_hauls >
                                                secondPlayerBowling.ten_wicket_hauls,
                                            'text-red-600':
                                                firstPlayerBowling.ten_wicket_hauls <
                                                secondPlayerBowling.ten_wicket_hauls,
                                            'text-gray-500':
                                                firstPlayerBowling.ten_wicket_hauls ===
                                                secondPlayerBowling.ten_wicket_hauls,
                                        }"
                                                class="uppercase mb-0 leading-normal"
                                            >
                                                {{ firstPlayerBowling.ten_wicket_hauls }}
                                            </h6>
                                        </div>
                                    </TdLayout>

                                    <!-- ten_wicket_hauls label -->
                                    <TdLayout class="flex justify-center py-6">
                                        <h6
                                            class="uppercase mb-0 text-sm leading-normal text-green-900 dark:text-green-200"
                                        >
                                        Ten wicket hauls
                                        </h6>
                                    </TdLayout>

                                    <!-- Second Player Bowling ten_wicket_hauls -->
                                    <TdLayout
                                       
                                    >
                                        <div class="relative">
                                            <h6 :class="{
                                            'text-green-600':
                                                firstPlayerBowling.ten_wicket_hauls <
                                                secondPlayerBowling.ten_wicket_hauls,
                                            'text-red-600':
                                                firstPlayerBowling.ten_wicket_hauls >
                                                secondPlayerBowling.ten_wicket_hauls,
                                            'text-gray-500':
                                                firstPlayerBowling.ten_wicket_hauls ===
                                                secondPlayerBowling.ten_wicket_hauls,
                                        }"
                                                class="uppercase mb-0 leading-normal "
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
    filters: Object,
    firstPlayerBatting: Object,
    secondPlayerBatting: Object,
    firstPlayerBowling: Object,
    secondPlayerBowling: Object,
});
</script>
<script>
export default {
    data() {
        return {
            isHidden: false,
        };
    },
    methods: {
        toggleDivs() {
            this.isHidden = !this.isHidden;
        },
    },
};
</script>
