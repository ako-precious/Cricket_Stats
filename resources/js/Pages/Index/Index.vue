<template>
    <MainLayout>
        <!-- row 1 -->
        <div>
            <CardPTwo class="text-center font-extrabold text-xl">
                Best Wicket Taking Bolwer in Men's Matches
            </CardPTwo>
            <div class="flex flex-wrap -mx-3">
                <!-- card1 -->
                <CardContainer>
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-2">
                            <div>
                                <CardPOne> Test </CardPOne>
                                <CardPTwo>
                                    {{ highest_wicket_test.wickets }}
                                </CardPTwo>
                            </div>
                        </div>
                        <CardImage>
                            <img
                                :src="
                                    highest_wicket_test.player
                                        .headshot_image_url
                                "
                                :alt="highest_wicket_test.player.long_name"
                                class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-full w-full rounded-xl"
                            />
                        </CardImage>
                    </div>
                    <CardPThree>
                        {{ highest_wicket_test.player.long_name }}
                    </CardPThree>
                </CardContainer>

                <!-- card2 -->

                <CardContainer>
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-2">
                            <div>
                                <CardPOne> ODI </CardPOne>
                                <CardPTwo>
                                    {{ highest_wicket_ODI.wickets }}
                                </CardPTwo>
                            </div>
                        </div>
                        <CardImage>
                            <img
                                :src="
                                    highest_wicket_ODI.player.headshot_image_url
                                "
                                :alt="highest_wicket_ODI.player.long_name"
                                class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-full w-full rounded-xl"
                            />
                        </CardImage>
                    </div>
                    <CardPThree>
                        {{ highest_wicket_ODI.player.long_name }}
                    </CardPThree>
                </CardContainer>

                <!-- card3 -->
                <CardContainer>
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-2">
                            <div>
                                <CardPOne> T20I </CardPOne>
                                <CardPTwo>
                                    {{ highest_wicket_T20I.wickets }}
                                </CardPTwo>
                            </div>
                        </div>
                        <CardImage>
                            <img
                                :src="
                                    highest_wicket_T20I.player
                                        .headshot_image_url
                                "
                                :alt="highest_wicket_T20I.player.long_name"
                                class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-full w-full rounded-xl"
                            />
                        </CardImage>
                    </div>
                    <CardPThree>
                        {{ highest_wicket_T20I.player.long_name }}
                    </CardPThree>
                </CardContainer>

                <!-- card4 -->
                <CardContainer>
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-2">
                            <div>
                                <CardPOne> First Class </CardPOne>
                                <CardPTwo>
                                    {{ highest_wicket_First_Class.wickets }}
                                </CardPTwo>
                            </div>
                        </div>
                        <CardImage>
                            <img
                                :src="
                                    highest_wicket_First_Class.player
                                        .headshot_image_url
                                "
                                :alt="
                                    highest_wicket_First_Class.player.long_name
                                "
                                class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-full w-full rounded-xl"
                            />
                        </CardImage>
                    </div>
                    <CardPThree>
                        {{ highest_wicket_First_Class.player.long_name }}
                    </CardPThree>
                </CardContainer>
            </div>
        </div>
        <!-- row 2 -->
        <div>
            <CardPTwo class="text-center font-extrabold text-xl mt-4">
                Best Runners In Men's Matches
            </CardPTwo>
            <div class="flex flex-wrap -mx-3">
                <!-- card1 -->

                <CardContainer>
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-2">
                            <div>
                                <CardPOne> Test </CardPOne>
                                <CardPTwo>
                                    {{ highestrunner.runs }}
                                </CardPTwo>
                            </div>
                        </div>
                        <CardImage>
                            <img
                                :src="highestrunner.player.headshot_image_url"
                                :alt="highestrunner.player.long_name"
                                class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-full w-full rounded-xl"
                            />
                        </CardImage>
                    </div>
                    <CardPThree>
                        {{ highestrunner.player.long_name }}
                    </CardPThree>
                </CardContainer>

                <!-- card2 -->

                <CardContainer>
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-2">
                            <div>
                                <CardPOne> ODI </CardPOne>
                                <CardPTwo>
                                    {{ highest_runner_ODI.runs }}
                                </CardPTwo>
                            </div>
                        </div>
                        <CardImage>
                            <img
                                :src="
                                    highest_runner_ODI.player.headshot_image_url
                                "
                                :alt="highest_runner_ODI.player.long_name"
                                class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-full w-full rounded-xl"
                            />
                        </CardImage>
                    </div>
                    <CardPThree>
                        {{ highest_runner_ODI.player.long_name }}
                    </CardPThree>
                </CardContainer>

                <!-- <CardContainer>
                    <div class="flex-none w-2/3 max-w-full px-2">
                        <div>
                            <CardPOne>
                                Best Wicket Bolwer in Men's Test Matches
                            </CardPOne>
                            <CardPTwo>
                                {{ highest_wicket_test.wickets }}
                            </CardPTwo>
                            <CardPThree>
                                {{ highest_wicket_test.player.long_name }}
                            </CardPThree>
                        </div>
                    </div>
                    <CardImage>
                        <img
                            :src="highest_wicket_test.player.headshot_image_url"
                            :alt="highest_wicket_test.player.long_name"
                            class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-full w-full rounded-xl"
                        />
                    </CardImage>
                </CardContainer> -->

                <!-- card3 -->
                <CardContainer>
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-2">
                            <div>
                                <CardPOne> T20I </CardPOne>
                                <CardPTwo>
                                    {{ highest_runner_T20I.runs }}
                                </CardPTwo>
                            </div>
                        </div>
                        <CardImage>
                            <img
                                :src="
                                    highest_runner_T20I.player
                                        .headshot_image_url
                                "
                                :alt="highest_runner_T20I.player.long_name"
                                class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-full w-full rounded-xl"
                            />
                        </CardImage>
                    </div>
                    <CardPThree>
                        {{ highest_runner_T20I.player.long_name }}
                    </CardPThree>
                </CardContainer>

                <!-- card4 -->
                <CardContainer>
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-2">
                            <div>
                                <CardPOne class="text-ellipsis">
                                    First-Class
                                </CardPOne>
                                <CardPTwo>
                                    {{ highest_runner_First_class.runs }}
                                </CardPTwo>
                            </div>
                        </div>
                        <CardImage>
                            <img
                                :src="
                                    highest_runner_First_class.player
                                        .headshot_image_url
                                "
                                :alt="
                                    highest_runner_First_class.player.long_name
                                "
                                class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-full w-full rounded-xl"
                            />
                        </CardImage>
                    </div>
                    <CardPThree>
                        {{ highest_runner_First_class.player.long_name }}
                    </CardPThree>
                </CardContainer>
            </div>
        </div>

        <!-- cards row 3 -->
        <div class="flex flex-wrap mt-6 -mx-3">
            <div class="flex flex-col lg:w-8/12">
                <div class="w-full max-w-full px-3 mt-0 lg:flex-none">
                    <div
                        style="backdrop-filter: blur(20px)"
                        class="border-black/12.5 dark:shadow-dark-xl shadow-3xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-clip-border dark:bg-slate-850"
                    >
                        <div
                            class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid p-6 pt-4 pb-0"
                        >
                            <p
                                class="mb-0 text-sm leading-normal dark:text-white dark:opacity-60"
                            ></p>
                        </div>
                        <div class="flex-auto p-4">
                            <div>
                                <BarChart />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- cards row 3 -->

                <div class="flex flex-wrap mt-6 w-full justify-between">
                    <div
                        class="w-full px-3 mt-0 mb-6 lg:mb-0 md:w-6/12 lg:flex-none"
                    >
                        <div
                            style="backdrop-filter: blur(20px)"
                            class="relative flex flex-col min-w-0 break-words border-0 border-solid shadow-3xl dark:bg-slate-850 dark:shadow-dark-xl dark:bg-gray-950 border-black-125 rounded-2xl bg-clip-border"
                        >
                            <div class="p-4 pb-0 mb-0 rounded-t-4">
                                <div class="flex justify-between">
                                    <h6 class="mb-2 dark:text-white">
                                        Sales by Country
                                    </h6>
                                </div>
                            </div>
                            <div class="overflow-x-auto">
                                <table
                                    class="items-center w-full mb-4 align-top border-collapse border-gray-200 dark:border-white/40"
                                >
                                    <tbody>
                                        <tr>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40"
                                            >
                                                <div
                                                    class="flex items-center px-2 py-1"
                                                >
                                                    <div>
                                                        <!-- <img src="../assets/img/icons/flags/US.png" alt="Country flag" /> -->
                                                    </div>
                                                    <div class="ml-6">
                                                        <p
                                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60"
                                                        >
                                                            Country:
                                                        </p>
                                                        <h6
                                                            class="mb-0 text-sm leading-normal dark:text-white"
                                                        >
                                                            United States
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>

                                            <td
                                                class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40"
                                            >
                                                <div class="text-center">
                                                    <p
                                                        class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60"
                                                    >
                                                        Value:
                                                    </p>
                                                    <h6
                                                        class="mb-0 text-sm leading-normal dark:text-white"
                                                    >
                                                        $230,900
                                                    </h6>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40"
                                            >
                                                <div class="flex-1 text-center">
                                                    <p
                                                        class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60"
                                                    >
                                                        Bounce:
                                                    </p>
                                                    <h6
                                                        class="mb-0 text-sm leading-normal dark:text-white"
                                                    >
                                                        29.9%
                                                    </h6>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40"
                                            >
                                                <div
                                                    class="flex items-center px-2 py-1"
                                                >
                                                    <div>
                                                        <!-- <img src="../assets/img/icons/flags/DE.png" alt="Country flag" /> -->
                                                    </div>
                                                    <div class="ml-6">
                                                        <p
                                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60"
                                                        >
                                                            Country:
                                                        </p>
                                                        <h6
                                                            class="mb-0 text-sm leading-normal dark:text-white"
                                                        >
                                                            Germany
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40"
                                            >
                                                <div class="text-center">
                                                    <p
                                                        class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60"
                                                    >
                                                        Sales:
                                                    </p>
                                                    <h6
                                                        class="mb-0 text-sm leading-normal dark:text-white"
                                                    >
                                                        3.900
                                                    </h6>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40"
                                            >
                                                <div class="text-center">
                                                    <p
                                                        class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60"
                                                    >
                                                        Value:
                                                    </p>
                                                    <h6
                                                        class="mb-0 text-sm leading-normal dark:text-white"
                                                    >
                                                        $440,000
                                                    </h6>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40"
                                            >
                                                <div class="flex-1 text-center">
                                                    <p
                                                        class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60"
                                                    >
                                                        Bounce:
                                                    </p>
                                                    <h6
                                                        class="mb-0 text-sm leading-normal dark:text-white"
                                                    >
                                                        40.22%
                                                    </h6>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40"
                                            >
                                                <div
                                                    class="flex items-center px-2 py-1"
                                                >
                                                    <div>
                                                        <!-- <img src="../assets/img/icons/flags/GB.png" alt="Country flag" /> -->
                                                    </div>
                                                    <div class="ml-6">
                                                        <p
                                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60"
                                                        >
                                                            Country:
                                                        </p>
                                                        <h6
                                                            class="mb-0 text-sm leading-normal dark:text-white"
                                                        >
                                                            Great Britain
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40"
                                            >
                                                <div class="text-center">
                                                    <p
                                                        class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60"
                                                    >
                                                        Sales:
                                                    </p>
                                                    <h6
                                                        class="mb-0 text-sm leading-normal dark:text-white"
                                                    >
                                                        1.400
                                                    </h6>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40"
                                            >
                                                <div class="text-center">
                                                    <p
                                                        class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60"
                                                    >
                                                        Value:
                                                    </p>
                                                    <h6
                                                        class="mb-0 text-sm leading-normal dark:text-white"
                                                    >
                                                        $190,700
                                                    </h6>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-2 align-middle bg-transparent border-0 w-3/10 whitespace-nowrap"
                                            >
                                                <div
                                                    class="flex items-center px-2 py-1"
                                                >
                                                    <div>
                                                        <!-- <img src="../assets/img/icons/flags/BR.png" alt="Country flag" /> -->
                                                    </div>
                                                    <div class="ml-6">
                                                        <p
                                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60"
                                                        >
                                                            Country:
                                                        </p>
                                                        <h6
                                                            class="mb-0 text-sm leading-normal dark:text-white"
                                                        >
                                                            Brasil
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-0 whitespace-nowrap"
                                            >
                                                <div class="text-center">
                                                    <p
                                                        class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60"
                                                    >
                                                        Sales:
                                                    </p>
                                                    <h6
                                                        class="mb-0 text-sm leading-normal dark:text-white"
                                                    >
                                                        562
                                                    </h6>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-0 whitespace-nowrap"
                                            >
                                                <div class="text-center">
                                                    <p
                                                        class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60"
                                                    >
                                                        Value:
                                                    </p>
                                                    <h6
                                                        class="mb-0 text-sm leading-normal dark:text-white"
                                                    >
                                                        $143,960
                                                    </h6>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 text-sm leading-normal align-middle bg-transparent border-0 whitespace-nowrap"
                                            >
                                                <div class="flex-1 text-center">
                                                    <p
                                                        class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60"
                                                    >
                                                        Bounce:
                                                    </p>
                                                    <h6
                                                        class="mb-0 text-sm leading-normal dark:text-white"
                                                    >
                                                        32.14%
                                                    </h6>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full px-3 mt-0 mb-6 md:mb-0 md:w-6/12 lg:flex-none"
                    >
                        <div
                            style="backdrop-filter: blur(20px)"
                            class="border-black/12.5 shadow-3xl dark:shadow-dark-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-clip-border dark:bg-slate-850"
                        >
                            <div class="p-4 pb-0 rounded-t-4">
                                <h6 class="mb-0 dark:text-white">Categories</h6>
                            </div>
                            <div class="flex-auto p-4 overflow-x-auto">
                                <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                                    <li
                                        class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-t-lg rounded-xl text-inherit"
                                    >
                                        <div class="flex items-center">
                                            <div
                                                class="inline-block w-8 h-8 mr-4 text-center text-black bg-center shadow-sm fill-current stroke-none bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 rounded-xl"
                                            >
                                                <i
                                                    class="text-white ni ni-mobile-button relative top-0.75 text-xxs"
                                                ></i>
                                            </div>
                                            <div class="flex flex-col">
                                                <h6
                                                    class="mb-1 text-sm leading-normal text-slate-700 dark:text-white"
                                                >
                                                    Devices
                                                </h6>
                                                <span
                                                    class="text-xs leading-tight dark:text-white/80"
                                                    >250 in stock,
                                                    <span class="font-semibold"
                                                        >346+ sold</span
                                                    ></span
                                                >
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <button
                                                class="group ease-in leading-pro text-xs rounded-3.5xl p-1.2 h-6.5 w-6.5 mx-0 my-auto inline-block cursor-pointer border-0 bg-transparent text-center align-middle font-bold text-slate-700 shadow-none transition-all dark:text-white"
                                            >
                                                <i
                                                    class="ni ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                                    aria-hidden="true"
                                                ></i>
                                            </button>
                                        </div>
                                    </li>
                                    <li
                                        class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-xl text-inherit"
                                    >
                                        <div class="flex items-center">
                                            <div
                                                class="inline-block w-8 h-8 mr-4 text-center text-black bg-center shadow-sm fill-current stroke-none bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 rounded-xl"
                                            >
                                                <i
                                                    class="text-white ni ni-tag relative top-0.75 text-xxs"
                                                ></i>
                                            </div>
                                            <div class="flex flex-col">
                                                <h6
                                                    class="mb-1 text-sm leading-normal text-slate-700 dark:text-white"
                                                >
                                                    Tickets
                                                </h6>
                                                <span
                                                    class="text-xs leading-tight dark:text-white/80"
                                                    >123 closed,
                                                    <span class="font-semibold"
                                                        >15 open</span
                                                    ></span
                                                >
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <button
                                                class="group ease-in leading-pro text-xs rounded-3.5xl p-1.2 h-6.5 w-6.5 mx-0 my-auto inline-block cursor-pointer border-0 bg-transparent text-center align-middle font-bold text-slate-700 shadow-none transition-all dark:text-white"
                                            >
                                                <i
                                                    class="ni ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                                    aria-hidden="true"
                                                ></i>
                                            </button>
                                        </div>
                                    </li>
                                    <li
                                        class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-b-lg rounded-xl text-inherit"
                                    >
                                        <div class="flex items-center">
                                            <div
                                                class="inline-block w-8 h-8 mr-4 text-center text-black bg-center shadow-sm fill-current stroke-none bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 rounded-xl"
                                            >
                                                <i
                                                    class="text-white ni ni-box-2 relative top-0.75 text-xxs"
                                                ></i>
                                            </div>
                                            <div class="flex flex-col">
                                                <h6
                                                    class="mb-1 text-sm leading-normal text-slate-700 dark:text-white"
                                                >
                                                    Error logs
                                                </h6>
                                                <span
                                                    class="text-xs leading-tight dark:text-white/80"
                                                    >1 is active,
                                                    <span class="font-semibold"
                                                        >40 closed</span
                                                    ></span
                                                >
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <button
                                                class="group ease-in leading-pro text-xs rounded-3.5xl p-1.2 h-6.5 w-6.5 mx-0 my-auto inline-block cursor-pointer border-0 bg-transparent text-center align-middle font-bold text-slate-700 shadow-none transition-all dark:text-white"
                                            >
                                                <i
                                                    class="ni ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                                    aria-hidden="true"
                                                ></i>
                                            </button>
                                        </div>
                                    </li>
                                    <li
                                        class="relative flex justify-between py-2 pr-4 border-0 rounded-b-lg rounded-xl text-inherit"
                                    >
                                        <div class="flex items-center">
                                            <div
                                                class="inline-block w-8 h-8 mr-4 text-center text-black bg-center shadow-sm fill-current stroke-none bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 rounded-xl"
                                            >
                                                <i
                                                    class="text-white ni ni-satisfied relative top-0.75 text-xxs"
                                                ></i>
                                            </div>
                                            <div class="flex flex-col">
                                                <h6
                                                    class="mb-1 text-sm leading-normal text-slate-700 dark:text-white"
                                                >
                                                    Happy users
                                                </h6>
                                                <span
                                                    class="text-xs leading-tight dark:text-white/80"
                                                    ><span class="font-semibold"
                                                        >+ 430
                                                    </span></span
                                                >
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <button
                                                class="group ease-in leading-pro text-xs rounded-3.5xl p-1.2 h-6.5 w-6.5 mx-0 my-auto inline-block cursor-pointer border-0 bg-transparent text-center align-middle font-bold text-slate-700 shadow-none transition-all dark:text-white"
                                            >
                                                <i
                                                    class="ni ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                                    aria-hidden="true"
                                                ></i>
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                style="backdrop-filter: blur(20px)"
                class="w-full max-w-full px-3 lg:w-4/12 lg:flex-none shadow-3xl dark:bg-slate-850"
            >
                <div
                    slider
                    class="relative w-full h-full overflow-hidden rounded-2xl"
                >
                    <!-- slide 1 -->
                    <div
                        slide
                        class="absolute w-full h-full transition-all duration-500"
                    >
                        <!-- <img class="object-cover h-full" src="../assets/img/carousel-1.jpg" alt="carousel image" /> -->
                        <div
                            class="block text-start ml-12 left-0 bottom-0 absolute right-[15%] pt-5 pb-5 text-white"
                        >
                            <div
                                class="inline-block w-8 h-8 mb-4 text-center text-black bg-white bg-center rounded-lg fill-current stroke-none"
                            >
                                <i
                                    class="top-0.75 text-xxs relative text-slate-700 ni ni-camera-compact"
                                ></i>
                            </div>
                            <h5 class="mb-1 text-white"></h5>
                            <p class="dark:opacity-80">
                                There’s nothing I really wanted to do in life
                                that I wasn’t able to get good at.
                            </p>
                        </div>
                    </div>

                    <!-- Control buttons -->
                    <button
                        btn-next
                        class="absolute z-10 w-10 h-10 p-2 text-lg text-white border-none opacity-50 cursor-pointer hover:opacity-100 far fa-chevron-right active:scale-110 top-6 right-4"
                    ></button>
                    <button
                        btn-prev
                        class="absolute z-10 w-10 h-10 p-2 text-lg text-white border-none opacity-50 cursor-pointer hover:opacity-100 far fa-chevron-left active:scale-110 top-6 right-16"
                    ></button>
                </div>
            </div>
        </div>
    </MainLayout>
</template>
<script setup>
// import { Link } from "@inertiajs/vue3";
import BarChart from '@/Pages/Index/BarChart.vue'
import MainLayout from "@/Layout/MainLayout.vue";
import CardContainer from "@/Layout/Component/StatCard/CardContainer.vue";
import CardImage from "@/Layout/Component/StatCard/CardImage.vue";
import CardPOne from "@/Layout/Component/StatCard/CardPOne.vue";
import CardPTwo from "@/Layout/Component/StatCard/CardPTwo.vue";
import CardPThree from "@/Layout/Component/StatCard/CardPThree.vue";
</script>
<script>
export default {
    name: 'App',
    components: { BarChart },

    props: [
        "highestrunner",
        "highest_wicket_test",
        "highest_runner_ODI",
        "highest_runner_T20I",
        "highest_runner_First_class",
        "highest_wicket_ODI",
        "highest_wicket_T20I",
        "highest_wicket_First_Class"
    ],
    // Other Vue component logic
};
</script>
