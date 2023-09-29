<template>
    <!-- <div class="absolute w-full bg-emerald-600 dark:hidden min-h-75"></div> -->
    <!-- sidenav  -->
    <!-- <aside
        class="fixed inset-y-0 left-0 flex-wrap items-center justify-between block w-full p-0 my-4 transition-all duration-200 ease-in-out -translate-x-full bg-white border-0 shadow-xl dark:shadow-none xl:ml-6 dark:bg-slate-850 z-990 rounded-2xl xl:translate-x-0 ps ps--active-y max-w-24 overflow-hidden"
       
    > -->
   
    <aside style="backdrop-filter: blur(20px);"
        mini="false"
        class="fixed inset-y-0 left-0 flex-wrap items-center  justify-between block w-full p-0 my-4 transition-all duration-200 ease-in-out -translate-x-full bg-white border-0 shadow-xl dark:shadow-none xl:ml-6 dark:bg-slate-850 z-990 rounded-2xl xl:translate-x-0 ps ps--active-y max-w-64 overflow-y-auto"
        id="sidenav-main"
    >
        <div  class="h-20 " >
            <i
                class="sticky  top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 dark:text-white xl:hidden"
                aria-hidden="true"
                sidenav-close-btn=""
            ></i>
            <a
                class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700 dark:text-white"
                href=" https://demos.creative-tim.com/argon-dashboard-pro-tailwind/pages/dashboards/default.html "
                target="_blank"
            >
                <img
                    src="../../assets/img/cricket_logo.png"
                    class="inline-block h-full max-w-full transition-all duration-200 ease-in-out max-h-8 dark:hidden"
                    alt="main_logo"
                />
                <img
                    src="../../assets/img/cricket_logo.png"
                    class="hidden h-full max-w-full transition-all duration-200 ease-in-out max-h-8 dark:inline-block"
                    alt="main_logo"
                />
                <span
                    class="ml-2 font-bold transition-all duration-200 ease-in-out opacity-100 text-xl uppercase"
                    > Cricket Stat </span
                >
            </a>
        </div>

        <hr
            class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent"
        />
        <div
            class="items-center block w-full h-auto grow basis-full"
            id="sidenav-collapse-main"
        >
            <ul class="flex flex-col pl-0 mb-0 list-none">
                <li class="mt-0.5 w-full">
                    <a
                        active_primary=""
                        collapse_trigger="primary"
                        href="javascript:;"
                        class="after:ease-in-out after:font-awesome-5-free ease-in-out text-sm leading-default py-2.7 my-0 mx-2 flex items-center whitespace-nowrap rounded-lg bg-blue-500/30 px-4 font-semibold text-slate-700 transition-all after:ml-auto after:inline-block after:font-bold dark:after:text-white after:antialiased after:transition-all after:duration-200 dark:text-white dark:opacity-80 after:text-slate-800/50 after:content-['\f107']"
                        aria-expanded="false"
                    >
                        <div
                            class="stroke-none flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current p-2.5 text-center text-black"
                        >
                        <font-awesome-icon icon="fa-solid fa-house" style="color: #2a744a;" />
                        </div>

                        <span
                            class="ml-1 duration-300 pointer-events-none ease dark:text-white text-slate-700 opacity-100"
                            >Dashboards</span
                        >
                    </a>
                    <div
                        class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                        id="dashboardsExamples"
                    >
                        <ul
                            class="flex flex-wrap mb-0 list-none transition-all duration-200 ease-in-out pl-4 ml-6"
                        >
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/dashboards/landing.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        L
                                    </span>

                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Landing
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/dashboards/default.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        D
                                    </span>

                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Default
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    active_page=""
                                    active_secondary=""
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap rounded-lg bg-transparent pr-4 font-semibold text-slate-800 shadow-none transition-colors dark:text-white dark:opacity-100 before:content-[''] ml-5.4"
                                    href="../../pages/dashboards/automotive.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        A
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Automotive
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/dashboards/smart-home.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        S
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Smart Home
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    collapse_trigger="secondary"
                                    class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:after:text-white/50 dark:after:text-white before:content-[''] ml-5.4"
                                    aria-expanded="false"
                                    href="javascript:;"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        V
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Virtual Reality <b class="caret"></b
                                    ></span>
                                </a>
                                <div
                                    class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                    id="vrExamples"
                                >
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out"
                                    >
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/dashboards/vr/vr-default.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    V
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    VR Default
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/dashboards/vr/vr-info.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    V
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    VR Info
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/dashboards/crm.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        C
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        CRM
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
              
                <li class="mt-0.5 w-full">
                    <a
                        collapse_trigger="primary"
                        href="javascript:;"
                        class="ease-in-out text-sm leading-default py-2.7 active after:ease-in-out after:font-awesome-5-free my-0 mx-2 flex items-center whitespace-nowrap px-4 font-medium text-slate-500 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 dark:text-white dark:opacity-80 dark:after:text-white/50 dark:after:text-white after:content-['\f107']"
                        aria-controls="pagesExamples"
                        role="button"
                        aria-expanded="false"
                    >
                        <div
                            class="stroke-none flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current p-2.5 text-center text-black"
                        >
                            <i
                                class="text-sm leading-normal text-orange-500 ni ni-ungroup"
                            ></i>
                        </div>
                        <span
                            class="ml-1 duration-300 pointer-events-none ease opacity-100"
                            >Pages</span
                        >
                    </a>
                    <div
                        class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                        id="pagesExamples"
                    >
                        <ul
                            class="flex flex-wrap mb-0 list-none transition-all duration-200 ease-in-out pl-4 ml-6"
                        >
                            <li class="w-full">
                                <a
                                    collapse_trigger="secondary"
                                    class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:after:text-white/50 dark:after:text-white before:content-[''] ml-5.4"
                                    aria-expanded="false"
                                    href="javascript:;"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        P
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Profile <b class="caret"></b
                                    ></span>
                                </a>
                                <div
                                    class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                    id="profileExample"
                                >
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out"
                                    >
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/pages/profile/overview.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    P
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Profile Overview
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/pages/profile/teams.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    T
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Teams
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/pages/profile/projects.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    A
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    All Projects
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="w-full">
                                <a
                                    collapse_trigger="secondary"
                                    class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:after:text-white/50 dark:after:text-white before:content-[''] ml-5.4"
                                    aria-expanded="false"
                                    href="javascript:;"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        U
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Users <b class="caret"></b
                                    ></span>
                                </a>
                                <div
                                    class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                    id="usersExample"
                                >
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out"
                                    >
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/pages/users/reports.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    R
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Reports
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/pages/users/new-user.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    N
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    New User
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="w-full">
                                <a
                                    collapse_trigger="secondary"
                                    class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:after:text-white/50 dark:after:text-white before:content-[''] ml-5.4"
                                    aria-expanded="false"
                                    href="javascript:;"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        A
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Account <b class="caret"></b
                                    ></span>
                                </a>
                                <div
                                    class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                    id="accountExample"
                                >
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out"
                                    >
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/pages/account/settings.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    S
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Settings
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/pages/account/billing.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    B
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Billing
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/pages/account/invoice.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    I
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Invoice
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/pages/account/security.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    S
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Security
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="w-full">
                                <a
                                    collapse_trigger="secondary"
                                    class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:after:text-white/50 dark:after:text-white before:content-[''] ml-5.4"
                                    aria-expanded="false"
                                    href="javascript:;"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        P
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Projects <b class="caret"></b
                                    ></span>
                                </a>
                                <div
                                    class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                    id="projectsExample"
                                >
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out"
                                    >
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/pages/projects/general.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    G
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    General
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/pages/projects/timeline.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    T
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Timeline
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/pages/projects/new-project.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    N
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    New Project
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/pages/pricing-page.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        P
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Pricing Page
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/pages/chat.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        C
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Chat
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/pages/rtl-page.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        R
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        RTL
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/pages/widgets.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        W
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Widgets
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/pages/charts.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        C
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Charts
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/pages/sweet-alerts.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        S
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Sweet Alerts
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/pages/notifications.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        N
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Notifications
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="mt-0.5 w-full">
                    <a
                        collapse_trigger="primary"
                        href="javascript:;"
                        class="ease-in-out text-sm leading-default py-2.7 active after:ease-in-out after:font-awesome-5-free my-0 mx-2 flex items-center whitespace-nowrap px-4 font-medium text-slate-500 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 dark:text-white dark:opacity-80 dark:after:text-white/50 dark:after:text-white after:content-['\f107']"
                        aria-controls="applicationsExamples"
                        role="button"
                        aria-expanded="false"
                    >
                        <div
                            class="stroke-none flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current p-2.5 text-center text-black"
                        >
                            <i
                                class="text-sm leading-normal ni ni-ui-04 text-cyan-500"
                            ></i>
                        </div>
                        <span
                            class="ml-1 duration-300 pointer-events-none ease opacity-100"
                            >Applications</span
                        >
                    </a>
                    <div
                        class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                        id="applicationsExamples"
                    >
                        <ul
                            class="flex flex-wrap mb-0 list-none transition-all duration-200 ease-in-out pl-4 ml-6"
                        >
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/applications/kanban.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        K
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Kanban
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/applications/wizard.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        W
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Wizard
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/applications/datatables.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        D
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        DataTables
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/applications/calendar.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        C
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Calendar
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/applications/analytics.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        A
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Analytics
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="mt-0.5 w-full">
                    <a
                        collapse_trigger="primary"
                        href="javascript:;"
                        class="ease-in-out text-sm leading-default py-2.7 active after:ease-in-out after:font-awesome-5-free my-0 mx-2 flex items-center whitespace-nowrap px-4 font-medium text-slate-500 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 dark:text-white dark:opacity-80 dark:after:text-white/50 dark:after:text-white after:content-['\f107']"
                        aria-controls="ecommerceExamples"
                        role="button"
                        aria-expanded="false"
                    >
                        <div
                            class="stroke-none flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current p-2.5 text-center text-black"
                        >
                            <i
                                class="text-sm leading-normal ni ni-archive-2 text-emerald-500"
                            ></i>
                        </div>
                        <span
                            class="ml-1 duration-300 pointer-events-none ease opacity-100"
                            >Ecommerce</span
                        >
                    </a>
                    <div
                        class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                        id="ecommerceExamples"
                    >
                        <ul
                            class="flex flex-wrap mb-0 list-none transition-all duration-200 ease-in-out pl-4 ml-6"
                        >
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/ecommerce/overview.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        O
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Overview
                                    </span>
                                </a>
                            </li>
                            <li class="w-full">
                                <a
                                    collapse_trigger="secondary"
                                    class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:after:text-white/50 dark:after:text-white before:content-[''] ml-5.4"
                                    aria-expanded="false"
                                    href="javascript:;"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        P
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Products <b class="caret"></b
                                    ></span>
                                </a>
                                <div
                                    class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                    id="productsExample"
                                >
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out"
                                    >
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/ecommerce/products/new-product.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    N
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    New Product
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/ecommerce/products/edit-product.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    E
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Edit Product
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/ecommerce/products/product-page.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    P
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Product Page
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/ecommerce/products/products-list.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    P
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Products List
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="w-full">
                                <a
                                    collapse_trigger="secondary"
                                    class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:after:text-white/50 dark:after:text-white before:content-[''] ml-5.4"
                                    aria-expanded="false"
                                    href="javascript:;"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        O
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Orders <b class="caret"></b
                                    ></span>
                                </a>
                                <div
                                    class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                    id="ordersExample"
                                >
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out"
                                    >
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/ecommerce/orders/list.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    O
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Order List
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/ecommerce/orders/details.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    O
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Order Details
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="w-full">
                                <a
                                    class="ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                    href="../../pages/ecommerce/referral.html"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        R
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Referral
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mt-0.5 w-full">
                    <a
                        collapse_trigger="primary"
                        href="javascript:;"
                        class="ease-in-out text-sm leading-default py-2.7 active after:ease-in-out after:font-awesome-5-free my-0 mx-2 flex items-center whitespace-nowrap px-4 font-medium text-slate-500 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 dark:text-white dark:opacity-80 dark:after:text-white/50 dark:after:text-white after:content-['\f107']"
                        aria-controls="authExamples"
                        role="button"
                        aria-expanded="false"
                    >
                        <div
                            class="stroke-none flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current p-2.5 text-center text-black"
                        >
                            <i
                                class="text-sm leading-normal text-red-600 ni ni-single-copy-04"
                            ></i>
                        </div>
                        <span
                            class="ml-1 duration-300 pointer-events-none ease opacity-100"
                            >Authentication</span
                        >
                    </a>
                    <div
                        class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                        id="authExamples"
                    >
                        <ul
                            class="flex flex-wrap mb-0 list-none transition-all duration-200 ease-in-out pl-4 ml-6"
                        >
                            <li class="w-full">
                                <a
                                    collapse_trigger="secondary"
                                    class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:after:text-white/50 dark:after:text-white before:content-[''] ml-5.4"
                                    aria-expanded="false"
                                    href="javascript:;"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        S
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Sign In <b class="caret"></b
                                    ></span>
                                </a>
                                <div
                                    class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                    id="signinExample"
                                >
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out"
                                    >
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/signin/basic.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    B
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Basic
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/signin/cover.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    C
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Cover
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/signin/illustration.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    I
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Illustration
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="w-full">
                                <a
                                    collapse_trigger="secondary"
                                    class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:after:text-white/50 dark:after:text-white before:content-[''] ml-5.4"
                                    aria-expanded="false"
                                    href="javascript:;"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        S
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Sign Up <b class="caret"></b
                                    ></span>
                                </a>
                                <div
                                    class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                    id="signupExample"
                                >
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out"
                                    >
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/signup/basic.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    B
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Basic
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/signup/cover.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    C
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Cover
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/signup/illustration.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    I
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Illustration
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="w-full">
                                <a
                                    collapse_trigger="secondary"
                                    class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:after:text-white/50 dark:after:text-white before:content-[''] ml-5.4"
                                    aria-expanded="false"
                                    href="javascript:;"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        R
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Reset Password <b class="caret"></b
                                    ></span>
                                </a>
                                <div
                                    class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                    id="resetExample"
                                >
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out"
                                    >
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/reset/basic.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    B
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Basic
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/reset/cover.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    C
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Cover
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/reset/illustration.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    I
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Illustration
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="w-full">
                                <a
                                    collapse_trigger="secondary"
                                    class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:after:text-white/50 dark:after:text-white before:content-[''] ml-5.4"
                                    aria-expanded="false"
                                    href="javascript:;"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        L
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Lock <b class="caret"></b
                                    ></span>
                                </a>
                                <div
                                    class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                    id="lockExample"
                                >
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out"
                                    >
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/lock/basic.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    B
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Basic
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/lock/cover.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    C
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Cover
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/lock/illustration.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    I
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Illustration
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="w-full">
                                <a
                                    collapse_trigger="secondary"
                                    class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:after:text-white/50 dark:after:text-white before:content-[''] ml-5.4"
                                    aria-expanded="false"
                                    href="javascript:;"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        2
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        2-Step Verification <b class="caret"></b
                                    ></span>
                                </a>
                                <div
                                    class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                    id="StepExample"
                                >
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out"
                                    >
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/verification/basic.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    B
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Basic
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/verification/cover.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    C
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Cover
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/verification/illustration.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    I
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Illustration
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="w-full">
                                <a
                                    collapse_trigger="secondary"
                                    class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60 dark:after:text-white/50 dark:after:text-white before:content-[''] ml-5.4"
                                    aria-expanded="false"
                                    href="javascript:;"
                                >
                                    <span
                                        class="w-0 text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                    >
                                        E
                                    </span>
                                    <span
                                        class="transition-all duration-100 pointer-events-none ease opacity-100"
                                    >
                                        Error <b class="caret"></b
                                    ></span>
                                </a>
                                <div
                                    class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                    id="errorExample"
                                >
                                    <ul
                                        class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out"
                                    >
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/error/404.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    E
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Error 404
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-full">
                                            <a
                                                class="ease-in-out py-2.7 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60 before:content-[''] ml-5.4"
                                                href="../../pages/authentication/error/500.html"
                                            >
                                                <span
                                                    class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out pointer-events-none opacity-0"
                                                >
                                                    E
                                                </span>
                                                <span
                                                    class="transition-all duration-100 pointer-events-none ease opacity-100"
                                                >
                                                    Error 500
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            
             
            </ul>
        </div>
        
    </aside> 
</template>
<script setup>
import { Link } from "@inertiajs/vue3";
</script>
<script></script>
